<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    public function getUserArticles(): JsonResponse
    {
        $user = Auth::user();
        $articles = $user->articles;

        return response()->json([
            'articles' => $articles
        ]);
    }

    public function getUserArticlesByCategories(Int $category_id): JsonResponse
    {
        $user = Auth::user();

        $category = $user->categories()->find($category_id);

        if (!$category) {
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }

        $category->articles;

        return response()->json($category);
    }


    public function storeArticles(Request $request): JsonResponse
    {
        $request->validate([
            'user_id' => 'required|integer',
            'title' => 'required|string|unique:articles',
            'description' => 'required|string',
            'content' => 'required|string',
            'id_category' => 'required|integer',
        ]);

        $article = Article::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        DB::table('category_article')->insert([
            'category_id' => $request->id_category,
            'article_id' => $article->id,
        ]);

        return response()->json([
            'articles' => 'ok'
        ]);
    }

    public function editArticles(Request $request): JsonResponse
    {
        $request->validate([
            'id' => 'required|integer',
            'title' => ['required', 'string', Rule::unique('articles')->ignore($request->id)],
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        $artcile = Article::findOrFail($request->id);

        $artcile->title = $request->title;
        $artcile->description = $request->description;
        $artcile->content = $request->content;

        $artcile->save();

        return response()->json([
            'articles' => 'ok'
        ]);
    }

    public function destroyArticle(Int $id): JsonResponse
    {
        try {
            // Buscar el artículo
            $article = Article::findOrFail($id);

            DB::table('category_article')->where('article_id', $id)->delete();

            $article->delete();

            return response()->json([
                'articles' => 'ok'
            ]);
        } catch (QueryException $e) {
            // Mensaje de error personalizado
            return response()->json(['articles' => 'No se puede eliminar el artículo.']);
        } catch (ModelNotFoundException $e) {
            // Mensaje si el artículo no existe
            return response()->json(['articles' => 'El artículo no fue encontrado.']);
        }
    }
}
