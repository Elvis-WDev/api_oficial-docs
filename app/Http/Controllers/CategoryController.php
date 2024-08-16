<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function getUserCategories(): JsonResponse
    {
        $user = Auth::user();
        $categories = $user->categories;

        return response()->json($categories);
    }

    public function storeCategory(Request $request): JsonResponse
    {
        $request->validate([
            'user_id' => 'required|integer',
            'name' => 'required|string|unique:categories',
            'description' => 'required|string',
            'icon' => 'required|string',
        ]);

        Category::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return response()->json([
            'categories' => 'ok'
        ]);
    }

    public function editCategory(Request $request): JsonResponse
    {
        $request->validate([
            'id' => 'required|integer',
            'name' => ['required', 'string', Rule::unique('categories')->ignore($request->id)],
            'description' => 'required|string',
            'icon' => 'required|string',
        ]);

        $category = Category::findOrFail($request->id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->icon = $request->icon;

        $category->save();

        return response()->json([
            'categories' => 'ok'
        ]);
    }

    public function destroyCategory(Int $id): JsonResponse
    {

        try {
            // Buscar el artículo
            $category = Category::findOrFail($id);

            DB::table('category_article')->where('category_id', $id)->delete();

            $category->delete();

            return response()->json([
                'categories' => 'ok'
            ]);
        } catch (QueryException $e) {
            return response()->json(['categories' => 'No se puede eliminar el artículo.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['categories' => 'El artículo no fue encontrado.']);
        }
    }
}
