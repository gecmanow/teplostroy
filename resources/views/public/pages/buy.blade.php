@extends('public.layout.home')

@section('title', 'Как купить')
@section('description', 'Для приобретения товаров и услуг СК Теплострой оставьте заявку на сайте или свяжитесь с нами по указанным телефонам.')
@section('keywords', 'скорлупа ппу, купить скорлупу ппу, купить крошку ппу, заказать скорлупу ппу')

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
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;"><strong>1. Закажите продукцию.</strong> Заказать продукцию Вы можете следующими способами:</span></span></p>
    <ul>
        <li><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Оформить онлайн &ndash; заказ по <a href="{{ route('order') }}">ссылке&nbsp;</a></span></span></li>
        <li><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Заказать обратный звонок. Мы перезвоним Вам в течении 28 секунд и примем заявку</span></span></li>
        <li><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Написать нам во всплывающем окне диалога YamiChat</span></span></li>
        <li><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Отправить электронное письмо на почту <a href="mailto:ppu4@ck-tct.ru">ppu4@ck-tct.ru</a> с пометкой в теме письма &laquo;Заявка&raquo;</span></span></li>
        <li><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Позвонить по телефону 8 (391) 221-27-08</span></span></li>
    </ul>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">*Отправьте заявку с указанием необходимого количества, диаметра, покрытий скорлуп ППУ, а так же сроков и адреса поставки.</span></span></p>
    <p><strong><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">2. Получите счет</span></span></strong></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Наш приветливый персонал подготовит расчет полной стоимости с учетом доставки до вашего объекта.&nbsp;Счет на оплату, договор и спецификации мы отправим на адрес электронной почты, который вы укажите в заявке.</span></span></p>
    <p><strong><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">3. Оплатите счет</span></span></strong></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">Оплатите счет наличным или безналичным способом, более подробную информацию о способе платежа уточняйте у менеджера</span></span></p>
    <p><strong><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">4. Согласуйте дату получения</span></span></strong></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">К указанной дате мы отгрузим готовую продукцию со склада и доставим ее до объекта вместе с полным комплектом документов, паспортами качества и сертификатами соответствия.</span></span></p>
    <p><strong><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">5. Получите продукцию</span></span></strong></p>
    <p><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;">В назначенный день получите&nbsp;заказ&nbsp;и комплект документов&nbsp;на объекте. Проверьте количество и качество продукции.</span></span></p>
    <p style="text-align: center;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;"><img alt="" src="{{ asset('images/img/skorlupa-ppu.jpg') }}" style="height: 440px; width: 523px;" /></span></span></p>
    <p style="text-align: center;"><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;"><strong>Для постоянных клиентов и дилеров мы предоставляем скидки на нашу продукцию. Для крупных заказов мы готовы предоставить дополнительные скидки.</strong></span></span></p>
    <p style="text-align: center;"><strong><span style="font-size:18px;"><span style="font-family:times new roman,times,serif;"><span>ПРИЯТНЫХ ПОКУПОК!</span></span></span></strong></p>
    <p><br />&nbsp;</p>
@endsection
