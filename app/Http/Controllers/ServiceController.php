<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $services = Category::with('services')->get();

        foreach ($services as $sKey => $sValue) {

            if ($sValue->category_url == $category_url) {
                foreach ($sValue->services as $key => $value) {
                    $bottom[$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $service = DB::table('categories')
            ->where('category_url', '=', $category_url)
            ->leftJoin('services', 'categories.id', '=', 'services.category_id')
            ->where('service_url', '=', $service_url)
            ->first();

        return view('public.pages.service', ['service' => $service, 'categories' => $data, 'bottom' => $bottom]);
    }

    public function installInsulation()
    {
        $categories_with_services = Category::with('services')->get();

        foreach ($categories_with_services as $cKey => $cValue) {
            $data[$cKey] = [
                'category_name' => $cValue->category_name,
                'category_url' => $cValue->category_url
            ];

            if ($cValue->category_url == 'teploizolyatsiya-iz-ppu') {
                foreach ($cValue->services as $key => $value) {
                    $data[$cKey]['services'][$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $services = Category::with('services')->get();

        foreach ($services as $sKey => $sValue) {

            if ($sValue->category_url == 'teploizolyatsiya-iz-ppu') {
                foreach ($sValue->services as $key => $value) {
                    $bottom[$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $service = DB::table('services')
            ->where('service_url', '=', 'montazh-teploizolyatsii-shef-montazh')
            ->leftJoin('categories', 'categories.id', '=', 'services.category_id')
            ->where('category_url', '=', 'teploizolyatsiya-iz-ppu')
            ->first();
        return view('public.pages.install_insulation', ['service' => $service, 'categories' => $data, 'bottom' => $bottom]);
    }

    public function shellPpu()
    {
        $categories_with_services = Category::with('services')->get();

        foreach ($categories_with_services as $cKey => $cValue) {
            $data[$cKey] = [
                'category_name' => $cValue->category_name,
                'category_url' => $cValue->category_url
            ];

            if ($cValue->category_url == 'teploizolyatsiya-iz-ppu') {
                foreach ($cValue->services as $key => $value) {
                    $data[$cKey]['services'][$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $services = Category::with('services')->get();

        foreach ($services as $sKey => $sValue) {

            if ($sValue->category_url == 'teploizolyatsiya-iz-ppu') {
                foreach ($sValue->services as $key => $value) {
                    $bottom[$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $service = DB::table('services')
            ->where('service_url', '=', 'scorlupa-ppu')
            ->leftJoin('categories', 'categories.id', '=', 'services.category_id')
            ->where('category_url', '=', 'teploizolyatsiya-iz-ppu')
            ->first();
        return view('public.pages.shell_ppu', ['service' => $service, 'categories' => $data, 'bottom' => $bottom]);
    }

    public function boilerRepair()
    {
        $categories_with_services = Category::with('services')->get();

        foreach ($categories_with_services as $cKey => $cValue) {
            $data[$cKey] = [
                'category_name' => $cValue->category_name,
                'category_url' => $cValue->category_url
            ];

            if ($cValue->category_url == 'montazhnye-raboty-remont-kotelnyh') {
                foreach ($cValue->services as $key => $value) {
                    $data[$cKey]['services'][$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $services = Category::with('services')->get();

        foreach ($services as $sKey => $sValue) {

            if ($sValue->category_url == 'montazhnye-raboty-remont-kotelnyh') {
                foreach ($sValue->services as $key => $value) {
                    $bottom[$key] = [
                        'service_name' => $value->service_name,
                        'service_url' =>$value->service_url
                    ];
                }
            }
        }

        $service = DB::table('services')
            ->where('service_url', '=', 'remont-kotelnyh-i-kotelnogo-oborudovaniya')
            ->leftJoin('categories', 'categories.id', '=', 'services.category_id')
            ->where('category_url', '=', 'montazhnye-raboty-remont-kotelnyh')
            ->first();
        return view('public.pages.boiler_repair', ['service' => $service, 'categories' => $data, 'bottom' => $bottom]);
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
