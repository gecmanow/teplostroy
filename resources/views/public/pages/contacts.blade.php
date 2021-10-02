@extends('public.layout.home')

@section('title', 'Контакты ООО СК ТеплоСтрой')
@section('description', 'Контакты и реквизиты Теплострой Красноярск: скорлупа ППУ, отводы ППУ, термостойкая скорлупа ПИР')
@section('keywords', 'скорлупа ппу в красноярске, купить скорлупу ппу, производство теплоизоляционных изделий из ппу, производитель ппу, производство ппу скорлуп, производство ппу изоляции, изоляция для труб, термостойкость, скорлупа пир/пур.')

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
    <h4 style="text-align: center;"><span style="font-size:20px;">Общество с ограниченной ответственностью</span></h4>
    <h4 style="text-align: center;"><span style="font-size:20px;">Специализированная Компания &quot;ТеплоСтрой&quot; (ООО СК &quot;ТСТ&quot;)</span></h4>
    <p>&nbsp;</p>
    <table class="table-contacts">
        <tbody>
        <tr>
            <td style="width:161px;height:19px;">
                <p style="text-align: center;"><strong><u>Отдел продаж</u></strong></p>
            </td>
            <td style="width: 151px; height: 19px; text-align: center;">&nbsp;</td>
            <td style="width: 142px; height: 19px; text-align: center;">&nbsp;</td>
            <td style="width: 230px; height: 19px; text-align: center;">&nbsp;</td>
        </tr>
        <tr>
            <td style="width:161px;height:18px;">
                <p style="text-align: center;">Менеджер по работе с клиентами</p>
            </td>
            <td style="width:151px;height:18px;">
                <p style="text-align: center;"></p>
            </td>
            <td style="width:142px;height:18px;">
                <p style="text-align: center;">office@ck-tct.ru</p>
            </td>
            <td style="width:230px;height:18px;">
                <p style="text-align: center;">8 (391) 221-27-08,</p>
                <p style="text-align: center;"><strong>8 (391) 291-13-13&nbsp;доб. 221</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 161px; height: 19px; text-align: center;">
                <p>&nbsp;</p>
                <p>Специалист по тендерам</p>
                <p>&nbsp;</p>
            </td>
            <td style="width:151px;height:19px;">
                <p style="text-align: center;">Каштанова Наталья Викторовна</p>
            </td>
            <td style="width: 142px; height: 19px; text-align: center;"><p style="text-align: center;">office@ck-tct.ru</p><p style="text-align: center;">ppu4@ck-tct.ru</p></td>
            <td style="width: 230px; height: 19px; text-align: center;"><p style="text-align: center;">8 (391) 221-27-08,</p><p><strong>8 (391) 291-13-13&nbsp;доб. 217</strong></p></td>
        </tr>
        <tr>
            <td style="width:161px;height:19px;">
                <p style="text-align: center;">Инженер-сметчик ПТО</p>
            </td>
            <td style="width:151px;height:19px;">
                <p style="text-align: center;">Деева Ольга Владимировна</p>
            </td>
            <td style="width:142px;height:19px;">
                <p style="text-align: center;">pto@ck-tct.ru</p>
            </td>
            <td style="width:230px;height:19px;">
                <p style="text-align: center;">8 (391) 211-93-57,</p>
                <p style="text-align: center;"><strong>8 (391) 291-13-13</strong>&nbsp;<strong>доб. 215</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:161px;height:18px;">
                <p style="text-align: center;">&nbsp;</p>
            </td>
            <td style="width:151px;height:18px;">
                <p style="text-align: center;">&nbsp;</p>
            </td>
            <td style="width:142px;height:18px;">
                <p style="text-align: center;">&nbsp;</p>
            </td>
            <td style="width:230px;height:18px;">
                <p style="text-align: center;">&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style="width: 161px; height: 19px; text-align: center;"><span style="text-align: center;">Начальник ОК</span></td>
            <td style="width: 151px; height: 19px; text-align: center;"><span style="text-align: center;">Глухова Наталья Николаевна</span></td>
            <td style="width: 142px; height: 19px; text-align: center;"><span style="text-align: -webkit-center;">ppu8@ck-tct.ru</span></td>
            <td style="width:230px;height:19px;">
                <p style="text-align: center;"><strong>8 (902) 923-53-48</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 161px; height: 19px; text-align: center;">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Менеджер по строительно-монтажным работам</p>
                <p>&nbsp;</p>
            </td>
            <td style="width: 151px; height: 19px; text-align: center;">Каштанова Наталья Викторовна</td>
            <td style="width: 142px; height: 19px; text-align: center;"><span style="text-align: -webkit-center;">ppu3@ck-tct.ru</span></td>
            <td style="width: 230px; height: 19px; text-align: center;"><strong style="text-align: -webkit-center;">8 (902) 923-53-47</strong></td>
        </tr>
        <tr>
            <td style="width:161px;height:19px;">
                <p style="text-align: center;">&nbsp;</p>
                <p style="text-align: center;">Бухгалтерия</p>
                <p style="text-align: center;">&nbsp;</p>
            </td>
            <td style="width: 151px; height: 19px; text-align: center;"></td>
            <td style="width: 142px; height: 19px; text-align: center;">buh3@ck-tct.ru</td>
            <td style="width: 230px; height: 19px; text-align: center;"><strong>8 (391) 221-03-93</strong></td>
        </tr>
        <tr>
            <td style="width:161px;height:18px;">
                <p style="text-align: center;">&nbsp;</p>
            </td>
            <td style="width:151px;height:18px;">&nbsp;</td>
            <td style="width:142px;height:18px;">&nbsp;</td>
            <td style="width:230px;height:18px;">&nbsp;</td>
        </tr>
        </tbody>
    </table>
    <hr />
    <h4 style="text-align: center;"><span style="font-size:16px;"><strong>Схема проезда г. Красноярск:</strong></span></h4>
    <h4><span style="font-size:16px;"><strong>Головной офис Компании &quot;ТеплоСтрой&quot; в г.Красноярске&nbsp;</strong></span></h4>
    <p style="text-align: justify;"><img alt="" src="/images/img/map2013office.jpg" style="width: 830px; height: 397px;" /></p>
    <p style="text-align: justify;">&nbsp;</p>
    <h4 style="text-align: justify;"><span style="font-size:16px;"><strong>Производственный участок Компании &quot;ТеплоСтрой&quot; в г.Красноярске</strong></span></h4>
    <p style="text-align: justify;"><img alt="" src="/images/img/map2013work.jpg" style="width: 830px; height: 360px;" /></p>
    <p style="text-align: justify;">&nbsp;</p>
    <div style="font: 13px/normal Arial, sans-serif; margin: 2em 0px 0px; padding: 0px; border: currentColor; color: rgb(0, 0, 0); font-size-adjust: none; font-stretch: normal;">
        <h3 style="font: bold 13px/normal Arial, sans-serif; margin: 0pt; padding: 0pt; border: currentColor; text-align: left; font-size-adjust: none; font-stretch: normal;">&nbsp;</h3>
    </div>
    <p style="text-align: left;">&nbsp;</p>
@endsection
