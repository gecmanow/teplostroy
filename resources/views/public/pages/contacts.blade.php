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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="contacts_social-header">Свяжитесь с нами в мессенджерах:</h4>
                <div class="contacts_social-area">
                    <a class="contacts_social-link telegram" href="https://t.me/Alekstct" target="_blank">
                        <svg class="contacts_social-img telegram-img" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m.415 11.196 5.869 2.925c.227.112.495.104.712-.023l5.224-3.037-3.162 2.802c-.161.143-.253.347-.253.562v6.825c0 .72.919 1.023 1.35.451l2.537-3.373 6.274 3.573c.44.253 1.004-.001 1.106-.504l3.913-19.5c.117-.586-.466-1.064-1.008-.846l-22.5 8.775c-.604.236-.643 1.081-.062 1.37zm21.83-8.249-3.439 17.137-5.945-3.386c-.324-.185-.741-.103-.971.201l-1.585 2.107v-4.244l8.551-7.576c.677-.599-.101-1.664-.874-1.21l-11.39 6.622-3.992-1.989z"/>
                        </svg>
                    </a>
                    <a class="contacts_social-link whatsapp" href="https://wa.me/79135396539" target="_blank">
                        <svg class="contacts_social-img whatsapp-img" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m439.277344 72.722656c-46.898438-46.898437-109.238282-72.722656-175.566406-72.722656-.003907 0-.019532 0-.023438 0-32.804688.00390625-64.773438 6.355469-95.011719 18.882812-30.242187 12.527344-57.335937 30.640626-80.535156 53.839844-46.894531 46.894532-72.71875 109.246094-72.71875 175.566406 0 39.550782 9.542969 78.855469 27.625 113.875l-41.734375 119.226563c-2.941406 8.410156-.859375 17.550781 5.445312 23.851563 4.410157 4.414062 10.214844 6.757812 16.183594 6.757812 2.558594 0 5.144532-.429688 7.667969-1.3125l119.226563-41.730469c35.019531 18.082031 74.324218 27.625 113.875 27.625 66.320312 0 128.667968-25.828125 175.566406-72.722656 46.894531-46.894531 72.722656-109.246094 72.722656-175.566406 0-66.324219-25.824219-128.675781-72.722656-175.570313zm-21.234375 329.902344c-41.222657 41.226562-96.035157 63.925781-154.332031 63.925781-35.664063 0-71.09375-8.820312-102.460938-25.515625-5.6875-3.023437-12.410156-3.542968-18.445312-1.429687l-108.320313 37.910156 37.914063-108.320313c2.113281-6.042968 1.589843-12.765624-1.433594-18.449218-16.691406-31.359375-25.515625-66.789063-25.515625-102.457032 0-58.296874 22.703125-113.109374 63.925781-154.332031 41.21875-41.21875 96.023438-63.921875 154.316406-63.929687h.019532c58.300781 0 113.109374 22.703125 154.332031 63.929687 41.226562 41.222657 63.929687 96.03125 63.929687 154.332031 0 58.300782-22.703125 113.113282-63.929687 154.335938zm0 0"/><path d="m355.984375 270.46875c-11.421875-11.421875-30.007813-11.421875-41.429687 0l-12.492188 12.492188c-31.019531-16.902344-56.121094-42.003907-73.027344-73.023438l12.492188-12.492188c11.425781-11.421874 11.425781-30.007812 0-41.429687l-33.664063-33.664063c-11.421875-11.421874-30.007812-11.421874-41.429687 0l-26.929688 26.929688c-15.425781 15.425781-16.195312 41.945312-2.167968 74.675781 12.179687 28.417969 34.46875 59.652344 62.761718 87.945313 28.292969 28.292968 59.527344 50.582031 87.945313 62.761718 15.550781 6.664063 29.695312 9.988282 41.917969 9.988282 13.503906 0 24.660156-4.058594 32.757812-12.15625l26.929688-26.933594v.003906c5.535156-5.535156 8.582031-12.890625 8.582031-20.714844 0-7.828124-3.046875-15.183593-8.582031-20.714843zm-14.5 80.792969c-4.402344 4.402343-17.941406 5.945312-41.609375-4.195313-24.992188-10.710937-52.886719-30.742187-78.542969-56.398437s-45.683593-53.546875-56.394531-78.539063c-10.144531-23.667968-8.601562-37.210937-4.199219-41.613281l26.414063-26.414063 32.625 32.628907-15.636719 15.640625c-7.070313 7.070312-8.777344 17.792968-4.242187 26.683594 20.558593 40.3125 52.734374 72.488281 93.046874 93.046874 8.894532 4.535157 19.617188 2.832032 26.6875-4.242187l15.636719-15.636719 32.628907 32.628906zm0 0"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <h4 style="text-align: center;"><span style="font-size:16px;"><strong>Схема проезда г. Красноярск:</strong></span></h4>
    <h4><span style="font-size:16px;"><strong>Головной офис Компании &quot;ТеплоСтрой&quot; в г.Красноярске&nbsp;</strong></span></h4>
    <p style="text-align: justify;"><img alt="" src="{{ asset('images/img/map2013office.jpg') }}" style="width: 830px; height: 397px;" /></p>
    <p style="text-align: justify;">&nbsp;</p>
    <h4 style="text-align: justify;"><span style="font-size:16px;"><strong>Производственный участок Компании &quot;ТеплоСтрой&quot; в г.Красноярске</strong></span></h4>
    <p style="text-align: justify;"><img alt="" src="{{ asset('images/img/map2013work.jpg') }}" style="width: 830px; height: 360px;" /></p>
    <p style="text-align: justify;">&nbsp;</p>
    <div style="font: 13px/normal Arial, sans-serif; margin: 2em 0 0; padding: 0; border: currentColor; color: rgb(0, 0, 0); font-size-adjust: none; font-stretch: normal;">
        <h3 style="font: bold 13px/normal Arial, sans-serif; margin: 0; padding: 0; border: currentColor; text-align: left; font-size-adjust: none; font-stretch: normal;">&nbsp;</h3>
    </div>
    <p style="text-align: left;">&nbsp;</p>
@endsection
