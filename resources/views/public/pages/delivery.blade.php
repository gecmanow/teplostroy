@extends('public.layout.home')

@section('title', 'Доставка скорлуп ППУ и ПИР, отводов ППУ')
@section('description', 'Доставляем Скорлупу ППУ по всей территории РФ')
@section('keywords', 'скорлупа ппу, купить скорлупу ппу, доставка скорлуп ппу, доставка отводов ппу, заказать отводы ппу, заказать скорлупу ппу')

@section('left_sidebar')
    <div class='col-sm-2'>
        <ul class='nav nav-pills nav-stacked'>
            <li>
                <p class='text-center' style='background-color:#ef8c10; color:white;'>ТОВАРЫ И УСЛУГИ</p>
            </li>
            <li>
            @foreach($categories as $category)
                <li style='border-top:1px solid #ddd;'>
                    <a class='left-menu' style='text-decoration: none;' href="tovary-i-uslugi/{{ $category->category_url }}">{{ $category->category_name }}</a>
                </li>
            @endforeach
            <li style="border-top:1px solid #ddd;">
                <a class='left-menu' style="text-decoration: none;" href="{{ route('projects') }}">Реализованные проекты</a>
            </li>
            <li style="border-top:1px solid #ddd;">
                <a class='left-menu' style="text-decoration: none;" href="{{ route('vacancy') }}">Вакансии компании</a>
            </li>
            <li>
                <p style='background-image:url(images/elem_hor_shad_191x32.png);'>&nbsp;</p>
            </li>
            <li>
                <a href="{{ route('order') }}" class='btn btn-danger'>Оформить заказ</a>
            </li>
            <li>
                <h6 style='margin-top:25px; color:orange;'>Примите участие в опросе!<br/></h6>
            </li>
            <li>
                <h6>Вы относитесь к:</h6>
            </li>
            <li>
                @include('public.inc.poll')
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <p>&nbsp;</p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Компания ООО СК &laquo;ТеплоСтрой&raquo; давно зарекомендовала себя как ответственный поставщик.</span></span></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Наши специалисты подберут для Вас оптимальный по стоимости: автомобиль, контейнер, полувагон, а так же проконтролируют соблюдение сроков и требования к перевозке груза.</span></span></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Производственные мощности расположены в городах Красноярск и Челябинск, что позволяет нам осуществлять быструю доставку по всей территории Российской Федерации.</span></span></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Мы доставляем продукцию с помощью:</span></span></p>
    <p style="margin-left:30pt;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Доставка по зимникам в северные районы.</span></span></p>
    <p style="margin-left:30pt;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Доставка с паромной переправой.</span></span></p>
    <p style="margin-left:30pt;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Согласуем схему погрузки железнодорожных вагонов.</span></span></p>
    <p style="margin-left:30pt;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Подача и погрузка 20 и 40-футовых контейнеров.</span></span></p>
    <p style="margin-left:30pt;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Доставка автотранспортом в отдаленные районы</span></span></p>
    <p style="margin-left:30pt;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Комбинированные схемы доставки.</span></span></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">География поставок постоянно расширяется, на сегодняшний день территория поставок охватывает большинство регионов Российской Федерации.&nbsp;</span></span></p>
    <p>&nbsp;</p>
    <p><span style="font-size:14px;"><img alt="" src="/images/img/geo.jpg" style="width: 750px; height: 510px;" /></span></p>
@endsection
