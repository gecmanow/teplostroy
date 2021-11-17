<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    public function index()
    {
        $articles = Article::all()->take(5);
        return view('public.pages.home', ['articles' => $articles]);
    }

    public function poll(Request $request)
    {
        $poll = $request->input('poll');

        $name = 'Пользователь';
        $data = array(
            'name' => $name,
            'poll' => $poll,
            );
        $admin_email = env('MAIL_ADMIN_EMAIL');

        Mail::send('public.email.poll', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Результат опроса');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('home');
    }

    public function modal(Request $request)
    {
        $rules = [
            'modalName' => 'required|max:30',
            'modalPhone' => 'required',
            'modalComment' => 'nullable'
        ];

        $messages = [
            'modalName.required' => 'Поле :attribute обязательно для заполнения.',
            'modalPhone.required' => 'Поле :attribute обязательно для заполнения.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'modalName' => 'Имя',
            'modalPhone' => 'Телефон'
        ])->validateWithBag('orderModalForm');

        $name = $request->input('modalName');
        $phone = $request->input('modalPhone');
        $comment = $request->input('modalComment');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone, 'comment' => $comment);
        Mail::send('public.email.modal', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('thanks');
    }
}
