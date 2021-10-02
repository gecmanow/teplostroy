<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function show(string $category_url, string $service_url)
    {
        $categories_with_services = Category::with('services')->get();

        foreach ($categories_with_services as $cKey => $cValue) {
            $data[$cKey] = [
                'category_name' => $cValue->category_name,
                'category_url' => $cValue->category_url
            ];

            if ($cValue->category_url == $category_url) {
                foreach ($cValue->services as $key => $value) {
                    $data[$cKey]['services'][$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $service = DB::table('services')
            ->where('service_url', '=', $service_url)
            ->leftJoin('categories', 'categories.id', '=', 'services.category_id')
            ->where('category_url', '=', $category_url)
            ->first();
        return view('public.pages.service', ['service' => $service, 'categories' => $data]);
    }

    public function projects()
    {
        return view('public.pages.projects');
    }

    public function vacancy()
    {
        return view('public.pages.vacancy');
    }
}
