<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CategoryArticleController extends Controller
{
    public function getCategoriesAndArticlesByUser(): JsonResponse
    {
        $user = Auth::user();

        $categories = $user->categories()->with('articles')->get();

        $response = [
            'categories' => $categories->map(function ($category) {
                return [
                    'category_id' => $category->id,
                    'name' => $category->name,
                    'articles' => $category->articles->map(function ($article) {
                        return [
                            $article
                        ];
                    })
                ];
            })
        ];

        return response()->json($response);
    }
}
