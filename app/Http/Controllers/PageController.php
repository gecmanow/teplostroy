<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

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
        $rules = [
            'orderOneStepName' => 'required|max:30',
            'orderOneStepEmail' => 'required',
            'orderOneStepPhone' => 'required',
            'orderOneStepComment' => 'nullable',
        ];

        $messages = [
            'orderOneStepName.required' => 'Поле :attribute обязательно для заполнения.',
            'orderOneStepEmail.required' => 'Поле :attribute обязательно для заполнения.',
            'orderOneStepPhone.required' => 'Поле :attribute обязательно для заполнения.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'orderOneStepName' => 'Имя',
            'orderOneStepEmail' => 'Email',
            'orderOneStepPhone' => 'Телефон',
            'orderOneStepComment' => 'Комментарий'
        ])->validateWithBag('orderOneStepForm');

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

        return redirect()->route('thanks');
    }

    public function insulationForm(Request $request)
    {
        $rules = [
            'orderInstallInsulationName' => 'required|max:30',
            'orderInstallInsulationPhone' => 'required'
        ];

        $messages = [
            'orderInstallInsulationName.required' => 'Поле :attribute обязательно для заполнения.',
            'orderInstallInsulationPhone.required' => 'Поле :attribute обязательно для заполнения.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'orderInstallInsulationName' => 'Имя',
            'orderInstallInsulationPhone' => 'Телефон'
        ])->validateWithBag('orderInstallInsulationForm');

        $name = $request->input('orderInstallInsulationName');
        $phone = $request->input('orderInstallInsulationPhone');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone);
        Mail::send('public.email.order-install-insulation', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        $request->session()->flush();

        return redirect()->route('thanks');
    }

    public function boilerForm(Request $request)
    {
        $rules = [
            'orderBoilerRepairName' => 'required|max:30',
            'orderBoilerRepairPhone' => 'required'
        ];

        $messages = [
            'orderBoilerRepairName.required' => 'Поле :attribute обязательно для заполнения.',
            'orderBoilerRepairPhone.required' => 'Поле :attribute обязательно для заполнения.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'orderBoilerRepairName' => 'Имя',
            'orderBoilerRepairPhone' => 'Телефон'
        ])->validateWithBag('orderBoilerRepairForm');

        $name = $request->input('orderBoilerRepairName');
        $phone = $request->input('orderBoilerRepairPhone');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone);
        Mail::send('public.email.order-boiler-repair', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        $request->session()->flush();

        return redirect()->route('thanks');
    }

    public function shellForm(Request $request)
    {
        $rules = [
            'orderShellPpuName' => 'required|max:30',
            'orderShellPpuPhone' => 'required'
        ];

        $messages = [
            'orderShellPpuName.required' => 'Поле :attribute обязательно для заполнения.',
            'orderShellPpuPhone.required' => 'Поле :attribute обязательно для заполнения.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'orderShellPpuName' => 'Имя',
            'orderShellPpuPhone' => 'Телефон'
        ])->validateWithBag('orderShellPpuForm');

        $name = $request->input('orderShellPpuName');
        $phone = $request->input('orderShellPpuPhone');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone);
        Mail::send('public.email.order-shell-ppu', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        $request->session()->flush();

        return redirect()->route('thanks');
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
