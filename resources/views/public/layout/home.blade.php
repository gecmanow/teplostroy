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
    <a class="sticky-btn-link" href="tel:+79135396539">
        <span>Связаться с нами</span>
    </a>
</div>
@include('public.inc.scripts')
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=d879a45c4408933937baf5a10afe2bc6" charset="UTF-8" async></script>
</body>
</html>
