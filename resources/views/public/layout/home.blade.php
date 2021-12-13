<?php
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: no-referrer");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("X-Frame-Options:sameorigin");
header("X-Permitted-Cross-Domain-Policies: none");
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header("X-Content-Type-Options: nosniff");
header("Cache-Control: max-age=0, public");
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>@yield('title') | СК Теплострой</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta property="og:title" content="@yield('title') | СК Теплострой"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:site_name" content="СК Теплострой"/>
    <meta property="og:type" content="@yield('ogtype')"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:image" content="@yield('ogimage')"/>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="{{ asset('js/vendor/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(22689064, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/22689064" style="position:absolute; left:-9999px;" alt="" />
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->
<div class="container well" style="background-color:white; padding-left:10px; padding-right:10px;">
    @include('public.inc.header')
    <main>
        <div class="row main-row">
            @yield('left_sidebar')
            <div class="{{ url()->current() == url('/') ? 'col-sm-8' : 'col-sm-10' }}">
                @include('public.inc.breadcrumb')
                @yield('content')
            </div>
            @if(Request::url() === URL::to('/'))
                @include('public.inc.articles')
            @endif
        </div>
    </main>
    @include('public.inc.footer')
</div>
<div class="callback_multi-button" id="callback_multi-button">
    <div class="callback_back">
        <div class="callback_phone" id="callback_phone">
            <a href="tel:+79135396539" class="callback_dropdown-item_link" id="callback_dropdown-item_phone-link">
                <i class="fa fa-phone" id="callback_phone-icon"></i>
                <span id="callback_phone-text_back"><span class="callback_phone-text callback_stop" id="callback_phone-text">Позвонить</span></span>
            </a>
        </div>
        <div class="callback_dropdown callback_stop" id="callback_dropdown">
            <div class="callback_dropdown-item" id="callback_dropdown-item_telegram">
                <a class="callback_dropdown-item_link" href="https://t.me/Alekstct">
                    <i class="fab fa-telegram-plane" id="callback_telegram-icon"></i>
                    <span class="callback_dropdown-item_text" id="callback_telegram-text">Написать в Telegram</span>
                </a>
            </div>
            <div class="callback_dropdown-item" id="callback_dropdown-item_whatsapp">
                <a class="callback_dropdown-item_link" href="https://wa.me/79135396539">
                    <i class="fab fa-whatsapp" id="callback_whatsapp-icon"></i>
                    <span class="callback_dropdown-item_text" id="callback_whatsapp-text">Написать в WhatsApp</span>
                </a>
            </div>
            <div class="callback_dropdown-item callback_stop" id="callback_dropdown-item_phone">
                <a class="callback_dropdown-item_link" href="tel:+79135396539">
                    <i class="fa fa-phone" id="callback_phone-icon-mobile"></i>
                    <span class="callback_dropdown-item_text" id="callback_phone-text-mobile">Позвонить</span>
                </a>
            </div>
        </div>
    </div>
</div>
@include('public.inc.scripts')

<!--<a class="sticky-btn-link" href="tel:+79135396539">
    <span>Связаться с нами</span>
</a>-->

</body>
</html>
