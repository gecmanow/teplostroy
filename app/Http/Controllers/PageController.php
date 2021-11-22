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

    public function orderSend(Request $request)
    {
        $rules = [
            'orderOneStepName' => 'required|max:30',
            'orderOneStepEmail' => 'required',
            'orderOneStepPhone' => 'required',
            'orderOneStepComment' => 'nullable',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'orderOneStepName.required' => 'Поле :attribute обязательно для заполнения.',
            'orderOneStepEmail.required' => 'Поле :attribute обязательно для заполнения.',
            'orderOneStepPhone.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Вы не заполнили :attribute.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'orderOneStepName' => 'Имя',
            'orderOneStepEmail' => 'Email',
            'orderOneStepPhone' => 'Телефон',
            'orderOneStepComment' => 'Комментарий',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('orderOneStepForm');

        $name = $request->input('orderOneStepName');
        $email = $request->input('orderOneStepEmail');
        $phone = $request->input('orderOneStepPhone');
        $comment = $request->input('orderOneStepComment');
        $token = env('TELEGRAM_TOKEN');
        $empty = 'Не заполнено';

        if ($comment == '') {
            $comment = $empty;
        }

        $subject = "Заявка с сайта ck-tct.ru (Страница onlain-zakaz, одношаговая форма)";
        $msg = "Тип заявки: ". $subject
            ."\nИмя: ". $name
            ."\nТелефон: ". $phone
            ."\nEmail: " . $email
            ."\nКомментарий: " . $comment;
        $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";

        $chatId = '-642242554';
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
        $token = env('TELEGRAM_TOKEN');

        $subject = "Заявка с сайта ck-tct.ru (монтаж теплоизоляции)";
        $msg = "Тип заявки: ". $subject
            ."\nИмя: ". $name
            ."\nТелефон: ". $phone;
        $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";

        $chatId = '-642242554';
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
        $token = env('TELEGRAM_TOKEN');

        $subject = "Заявка с сайта ck-tct.ru (ремонт котельных)";
        $msg = "Тип заявки: ". $subject
            ."\nИмя: ". $name
            ."\nТелефон: ". $phone;
        $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";

        $chatId = '-642242554';
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
        $token = env('TELEGRAM_TOKEN');

        $subject = "Заявка с сайта ck-tct.ru (скорлупа ППУ)";
        $msg = "Тип заявки: ". $subject
            ."\nИмя: ". $name
            ."\nТелефон: ". $phone;
        $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";

        $chatId = '-642242554';
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
