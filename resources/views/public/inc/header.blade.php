<div class="row">
    <div class="col-sm-6 col-xs-12">
        <a href="{{ route('home') }}" class="header--logo">
            <img src="{{ asset('images/logo_3.gif') }}" alt="/" />
        </a>
    </div>
    <div class="col-sm-6 col-xs-12 header--menu" style="text-align:right;">
        <a href="tel:+73912212708"> <h4><strong>тел: {{ $app->phone1 }}</strong></h4> </a>
        <a href="tel:+73912911313"> <h4><strong>тел: {{ $app->phone2 }}</strong></h4> </a>
        <a href="mailto:{{ $app->email }}"><h6><strong>email: {{ $app->email }}</strong></h6> </a>
        <a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal">Заказать звонок</a>
    </div>
</div>
@include('public.inc.modal')
<div class="row">
    <div class="col-sm-12">
        &nbsp;
    </div>
</div>
<div class="text-uppercase text-center">
    <a href="{{ route('about') }}" class="btn" role="button" style="text-decoration: underline;">О Компании</a>|
    <a href="{{ route('order') }}" class="btn" role="button" style="text-decoration: underline;">Онлайн-заказ</a>|
    <a href="{{ route('buy') }}" class="btn" role="button" style="text-decoration: underline;">Как купить</a>|
    <a href="{{ route('delivery') }}" class="btn" role="button" style="text-decoration: underline;">Доставка</a>|
    <a href="{{ route('reports') }}" class="btn" role="button" style="text-decoration: underline;">Отзывы</a>|
    <a href="{{ route('contacts') }}" class="btn" role="button" style="text-decoration: underline;">Контакты</a>
</div>
<div class="row-fluid">
    <div class="span12" style="background-image: url({{ asset('images/orange_line_bg.gif') }});">
        &nbsp;
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        &nbsp;
    </div>
</div>
