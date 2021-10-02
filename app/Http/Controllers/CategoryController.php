<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        return view('public.pages.categories');
    }

    public function show(string $category_url)
    {
        $title = DB::table('categories')
            ->select('category_name')
            ->where('category_url', $category_url)
            ->get();
        foreach ($title as $t) {
            $title = $t;
        }

        $services = DB::table('categories')
            ->leftJoin('services', 'services.category_id', '=', 'categories.id')
            ->where('category_url', '=', $category_url)
            ->get();
        return view('public.pages.category', ['services' => $services, 'title' => $title]);
    }
}
