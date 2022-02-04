<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
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

        $utm_source = session('utm_source', "");
        $utm_medium = session('utm_medium', "");
        $utm_campaign = session('utm_campaign', "");
        $utm_content = session('utm_content', "");
        $utm_term = session('utm_term', "");

        $token = env('TELEGRAM_TOKEN');

        $subject = "Результат опроса с сайта ck-tct.ru";
        $msg = "Тип заявки: " . $subject
            . "\nИмя: " . $name
            . "\nОтвет: " . $poll
            . "\nИсточник: " . $utm_source
            . "\nТип трафика: " . $utm_medium
            . "\nКампания: " . $utm_campaign
            . "\nМесто размещения: " . $utm_content
            . "\nИнтерес: " . $utm_term;
        $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";

        $chatId = env('TELEGRAM_CHAT_ID');
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage";
        $params = array(
            'chat_id' => $chatId,
            'text' => $msg,
            'disable_web_page_preview' => null,
            'reply_to_message_id' => null,
            'reply_markup' => null
        );

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_USERAGENT      => $userAgent,
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_SSL_VERIFYPEER => false
        );
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        curl_exec($ch);
        curl_close($ch);

        return redirect()->route('home');
    }

    public function modal(Request $request)
    {
        $rules = [
            'modalName' => 'required|max:30',
            'modalPhone' => 'required',
            'modalComment' => 'nullable',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'modalName.required' => 'Поле :attribute обязательно для заполнения.',
            'modalPhone.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Вы не заполнили :attribute.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'modalName' => 'Имя',
            'modalPhone' => 'Телефон',
            'modalComment' => 'Комментарий',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('orderModalForm');

        $name = $request->input('modalName');
        $phone = $request->input('modalPhone');
        $comment = $request->input('modalComment');
        $utm_source = session('utm_source', "");
        $utm_medium = session('utm_medium', "");
        $utm_campaign = session('utm_campaign', "");
        $utm_content = session('utm_content', "");
        $utm_term = session('utm_term', "");

        $token = env('TELEGRAM_TOKEN');
        $empty = 'Не заполнено';

        if ($comment == '') {
            $comment = $empty;
        }

        $subject = "Заявка с сайта ck-tct.ru (модальное окно)";
        $msg = "Тип заявки: ". $subject
            . "\nИмя: " . $name
            . "\nТелефон: " . $phone
            . "\nКомментарий: " . $comment
            . "\nИсточник: " . $utm_source
            . "\nТип трафика: " . $utm_medium
            . "\nКампания: " . $utm_campaign
            . "\nМесто размещения: " . $utm_content
            . "\nИнтерес: " . $utm_term;
        $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";

        $chatId = env('TELEGRAM_CHAT_ID');
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage";
        $params = array(
            'chat_id' => $chatId,
            'text' => $msg,
            'disable_web_page_preview' => null,
            'reply_to_message_id' => null,
            'reply_markup' => null
        );

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_USERAGENT      => $userAgent,
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_SSL_VERIFYPEER => false
        );
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        curl_exec($ch);
        curl_close($ch);

        return redirect()->route('thanks');
    }
}
