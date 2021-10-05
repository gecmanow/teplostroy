<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('public.pages.articles', ['articles' => $articles]);
    }

    public function show(string $article_url)
    {
        $article = DB::table('articles')
            ->where('article_url', '=', $article_url)
            ->first();
        return view('public.pages.article', ['article' => $article]);
    }
}
