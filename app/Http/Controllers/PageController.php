<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class PageController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        View::share('categories', $categories);

    }

    public function about()
    {
        return view('public.pages.about');
    }

    public function order()
    {
        $step = 1;
        session(['step' => $step]);

        return view('public.pages.order', ['step' => $step]);
    }

    /**
    array:6 [
    "_token" => "8i1zhc8H3Elfbt6od246UVA0eTmIV3aH3hIkYkKn"
    "orderOneStepName" => "test"
    "orderOneStepEmail" => "89051234567"
    "orderOneStepPhone" => "test@test.ru"
    "orderOneStepComment" => "qweqweqweqwe"
    "g-recaptcha-response" => null
    ]
     */

    public function orderSend(Request $request)
    {
        $validated = $request->validate([
            'orderOneStepName' => 'required|max:30',
            'orderOneStepEmail' => 'required',
            'orderOneStepPhone' => 'required',
            'orderOneStepComment' => 'nullable'
        ]);

        $name = $request->input('orderOneStepName');
        $email = $request->input('orderOneStepEmail');
        $phone = $request->input('orderOneStepPhone');
        $comment = $request->input('orderOneStepComment');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'email' => $email, 'phone' => $phone, 'comment' => $comment);
        Mail::send('public.email.order', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        $request->session()->flush();
    }

    public function buy()
    {
        return view('public.pages.buy');
    }

    public function delivery()
    {
        return view('public.pages.delivery');
    }

    public function reports()
    {
        return view('public.pages.reports');
    }

    public function contacts()
    {
        return view('public.pages.contacts');
    }
}
