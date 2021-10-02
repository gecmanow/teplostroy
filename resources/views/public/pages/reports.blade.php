@extends('public.layout.home')

@section('title', 'Отзывы')
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
    <p>
        <a href="/tovary-i-uslugi/teploizolyatsiya-iz-ppu/otzyvy">Отзывы по скорлупе ППУ</a><br />
        <a href="/tovary-i-uslugi/montazhnye-raboty-remont-kotelnyh/otzyvy">Отзывы по СМР</a>&nbsp;
    </p>
    <p>&nbsp;</p>
@endsection
