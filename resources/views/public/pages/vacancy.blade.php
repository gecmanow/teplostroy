@extends('public.layout.home')

@section('title', 'Вакансии компании')
@section('description', 'Официальное трудоустройство, социальный пакет, доставка на работу служебным транспортом, график работы с 8-17, зп 25 000 рублей.')
@section('keywords', 'вакансии, работа, работа в Красноярске')

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
    <p><span style="font-size:16px;"><span style="font-size:20px;"><strong>Слесарь по ремонту котельного оборудования, 60 000 руб.</strong></span></span></p>
    <p><span style="font-size:16px;">Средне-специальное образование, опыт от 1 года</span></p>
    <p><span style="font-size:16px;">Требуется слесарь по ремонту котельного оборудования.<br />
Сфера деятельности: ремонт котлов и котельного оборудования.</span></p>
    <p><span style="font-size:16px;">Место работы: ул. Маерчака, д.101/4.</span></p>
    <p><span style="font-size:16px;"><strong>ООО СК&nbsp;&laquo;ТеплоСтрой&raquo;</strong></span></p>
    <p><span style="font-size: 16px;">Ирина Михайловна</span></p>
    <p><span style="font-size:16px;">8 (902) 923-53-48</span></p>
    <p><span style="font-size:16px;"><a href="mailto:ppu8@ck-tct.ru">ppu8@ck-tct.ru</a></span></p>
    <p>&nbsp;</p>
    <p><span style="font-size:16px;"><span style="font-size:20px;"><strong>Обмуровщики/изолировщики, 60 000 руб.</strong></span></span></p>
    <p><span style="font-size:16px;">Средне-специальное образование, опыт от 1 года</span></p>
    <p><span style="font-size:16px;">Требуется обмуровщики/изолировщики.<br />
Сфера деятельности: ремонт котлов и котельного оборудования.</span></p>
    <p><span style="font-size:16px;">Место работы: ул. Маерчака, д.101/4.</span></p>
    <p><span style="font-size:16px;"><strong>ООО СК&nbsp;&laquo;ТеплоСтрой&raquo;</strong></span></p>
    <p><span style="font-size: 16px;">Ирина Михайловна</span></p>
    <p><span style="font-size:16px;">8 (902) 923-53-48</span></p>
    <p><span style="font-size:16px;"><a href="mailto:ppu8@ck-tct.ru">ppu8@ck-tct.ru</a></span></p>
    <p><span style="font-size:16px;"><a href="http://ck-tct.ru">http://ck-tct.ru</a></span></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><span style="font-size:16px;"><span style="font-size:20px;"><strong>Электрогазосварщики, 60 000 руб.</strong></span></span></p>
    <p><span style="font-size:16px;">Средне-специальное образование, опыт от 1 года</span></p>
    <p><span style="font-size:16px;">Требуется электрогазосварщики.<br />
Сфера деятельности: ремонт котлов и котельного оборудования.</span></p>
    <p><span style="font-size:16px;">Место работы: ул. Маерчака, д.101/4.</span></p>
    <p><span style="font-size:16px;"><strong>ООО СК&nbsp;&laquo;ТеплоСтрой&raquo;</strong></span></p>
    <p><span style="font-size: 16px;">Ирина Михайловна</span></p>
    <p><span style="font-size:16px;">8 (902) 923-53-48</span></p>
    <p><span style="font-size:16px;"><a href="mailto:ppu8@ck-tct.ru">ppu8@ck-tct.ru</a></span></p>
    <p><span style="font-size:16px;"><a href="http://ck-tct.ru">http://ck-tct.ru</a></span></p>
    <p>&nbsp;</p>
    <p><span style="font-size:16px;"><span style="font-size:20px;"><strong>Разнорабочие на ремонт котельного оборудования, 45 000 руб.</strong></span></span></p>
    <p><span style="font-size:16px;">Средне-специальное образование, опыт от 1 года</span></p>
    <p><span style="font-size:16px;">Требуется разнорабочие на ремонт котельного оборудования.<br />
Сфера деятельности: ремонт котлов и котельного оборудования.</span></p>
    <p><span style="font-size:16px;">Место работы: ул. Маерчака, д.101/4.</span></p>
    <p><span style="font-size:16px;"><strong>ООО СК&nbsp;&laquo;ТеплоСтрой&raquo;</strong></span></p>
    <p><span style="font-size: 16px;">Ирина Михайловна</span></p>
    <p><span style="font-size:16px;">8 (902) 923-53-48</span></p>
    <p><span style="font-size:16px;"><a href="mailto:ppu8@ck-tct.ru">ppu8@ck-tct.ru</a></span></p>
    <p><span style="font-size:16px;"><a href="http://ck-tct.ru">http://ck-tct.ru</a></span></p>
@endsection
