@extends('public.layout.home')

@section('title', 'Онлайн-заказ')
@section('description', 'ООО СК ТеплоСтрой Красноярск, производство скорлупы ППУ, отводов ППУ.')
@section('keywords', 'теплострой красноярск, производитель скорлупы ппу, купить скорлупу ппу, скорлупа ппу, скорлупа пир, купить скорлупу ппу в красноярске ')

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
                <p style='background-image:url({{ asset('/images/elem_hor_shad_191x32.png') }});'>&nbsp;</p>
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
    @if($step == 1)
        @include('public.inc.order.oneStepForm')
    <hr>
    <p>Так же, можете заполнить подробную заявку:</p>
        @include('public.inc.order.step1')
    @endif

    @if($step == 2)
        @include('public.inc.order.step2')
    @endif

    @if($step == 3)
        @include('public.inc.order.step3')
    @endif

    @if($step == 4)
        @include('public.inc.order.step4')
    @endif

    @if($step == 5)
        @include('public.inc.order.step5')
    @endif
@endsection
