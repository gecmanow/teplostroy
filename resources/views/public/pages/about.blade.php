@extends('public.layout.home')

@section('title', 'О компании Теплострой Красноярск')
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
    <p style="line-height: 15.6pt;"><span style="line-height: 1.6em;">&nbsp; &nbsp; &nbsp; &nbsp; <span style="font-size:14px;">&nbsp; Общество с ограниченной ответственностью Специализированная Компания &laquo;ТеплоСтрой&raquo; (ООО СК &laquo;ТСТ&raquo;) была создана в 1998 году на фоне массовой&nbsp; оптимизации проблем теплоэнергетики.</span></span></p>
    <p><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Изначально деятельность ТеплоСтрой была направлена на комплексное технологическое решение проблем теплоснабжения жи<img alt="" src="{{ asset('images/img/truba-vert.jpg') }}" style="width: 199px; height: 150px; margin-left: 10px; margin-right: 10px; float: right;" />лищно-коммунального хозяйства&nbsp; и крупных промышленных и теплоэнергетических предприятий. &nbsp;ТеплоСтрой развивается как универсальный институт и представляет собой один из лучших примеров ведения высокотехнологического строительства и производства.</span></p>
    <p><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;В последнее время более остро встают вопросы удорожания тепловой энергии и, в целом, охраны окружающей среды, а соответственно нашей целью становится внедрение современных эффективных методов экономии и сохранения тепла.</span></p>
    <p><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;С момента образования Компания ТеплоСтрой вышла в лидеры теплового монтажа и динамично развивается по сей день, являясь одной из самых надежных компаний сегмента теплоэнергетики.</span></p>
    <p>&nbsp;</p>
    <p><span style="font-size:18px;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Основные направления деятельности:</strong></span></p>
    <p><span style="font-size:14px;">- Производство изделий из пенополиуретана: <strong>скорлупа ППУ</strong>, <strong>отводы ППУ</strong>, <strong>скорлупа ПИР</strong>,<strong> плиты ППУ</strong>, <strong>теплоизоляция для паропроводов;</strong></span></p>
    <p><span style="font-size:14px;"><em>- Проектирование</em>&nbsp; котельных и инженерных сетей;</span></p>
    <p><span style="font-size:14px;">- <em>Строительство</em> стационарных и модульных котельных;</span></p>
    <p><span style="font-size:14px;">- <em>Ремонт</em>, реконструкция и модернизация котельных и котельного оборудования;</span></p>
    <p><span style="font-size:14px;">- <em>М</em><span style="color: rgb(51, 51, 51);"><em>онтаж изоляции</em> любых трубопроводов, резервуаров и оборудования любыми теплоизоляционными материалами.</span></span></p>
    <p><span style="font-size:14px;">Территория деятельности ТеплоСтрой широка. &nbsp;Головной офис производственный участок по изготовлению скорлупы ППУ&nbsp;и отводов ППУ и производство котельного оборудования находятся в городе Красноярске, &nbsp;в Челябинске &nbsp;работает&nbsp;производственный участок, &nbsp;изготавливающий&nbsp;изделия&nbsp;из пенополиуретана: скорлупу ППУ, отводы ППУ.&nbsp;</span></p>
    <p><strong>Компанией получено <a href="/">свидетельство СРО</a></strong></p>
    <hr />
    <p>&nbsp;</p>
    <p style="text-align: right;">&nbsp;</p>
    <p style="text-align: right;">&nbsp;</p>
@endsection
