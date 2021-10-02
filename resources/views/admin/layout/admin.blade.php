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
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.js') }}"></script>
</head>
<body>
<div class="container">
    @auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <!-- Логотип и кнопка «Гамбургер» -->
        <a class="navbar-brand" href="/">Блог</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbar-blog" aria-controls="navbar-blog"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Основная часть меню (может содержать ссылки, формы и прочее) -->
        <div class="collapse navbar-collapse" id="navbar-blog">
            <!-- Этот блок расположен слева -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Теги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>
            </ul>
            <!-- Этот блок расположен посередине -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search"
                       placeholder="Поиск по блогу" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0"
                        type="submit">Искать</button>
            </form>
            <!-- Этот блок расположен справа -->
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.login') }}">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.register') }}">Регистрация</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.admin') }}">Личный кабинет</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.logout') }}">Выйти</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    @else
        <h1>Вход в личный кабинет</h1>
        <form method="post" action="{{ route('admin.auth') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Адрес почты"
                       required maxlength="255" value="{{ old('email') ?? '' }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Ваш пароль"
                       required maxlength="255" value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info text-white">Войти</button>
            </div>
        </form>
        <a href="{{ route('admin.forgot-form') }}" class="btn btn-info text-white">Восстановить пароль</a>
    @endauth
    @auth
    <div class="row">
        <div class="col-md-3">
            <h4>Категории блога</h4>
            <p>Здесь будут категории блога</p>
            <h4>Популярные теги</h4>
            <p>Здесь будут популярные теги</p>
        </div>
        <div class="col-md-9">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible mt-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $message }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible mt-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </div>
    @endauth
</div>
</body>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
</body>
</html>
