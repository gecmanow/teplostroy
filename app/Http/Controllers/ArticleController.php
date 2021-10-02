<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    public function show(string $article_url)
    {
        $article = DB::table('articles')
            ->where('article_url', '=', $article_url)
            ->first();
        return view('public.pages.article', ['article' => $article]);
    }
}
