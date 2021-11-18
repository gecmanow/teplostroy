@extends('public.layout.home')

@section('title', $service->service_name)
@section('description', $service->description)
@section('keywords', $service->keywords)

@section('left_sidebar')
    <div class='col-sm-2'>
        <ul class='nav nav-pills nav-stacked'>
            <li>
                <p class='text-center' style='background-color:#ef8c10; color:white;'>ТОВАРЫ И УСЛУГИ</p>
            </li>
            <li>
            @foreach($categories as $category)
                <li style='border-top:1px solid #ddd;'>
                    <a class='left-menu' style='text-decoration: none;' href="/tovary-i-uslugi/{{ $category['category_url'] }}">{{ $category['category_name'] }}</a>
                </li>
                @if(array_key_exists('services', $category))
                    @foreach($category['services'] as $services)
                        @if(Request::path() == 'tovary-i-uslugi/'.$category['category_url'].'/'.$services['service_url'])
                            <li style='background-color:#428bca; color:white;'>
                                <a style='text-decoration: none; color:white;' href="/tovary-i-uslugi/{{ $category['category_url'] }}/{{ $services['service_url'] }}"><h6>{{ $services['service_name'] }}</h6></a>
                            </li>
                        @else
                            <li>
                                <a style='text-decoration: none; color:black;' href="/tovary-i-uslugi/{{ $category['category_url'] }}/{{ $services['service_url'] }}"><h6>{{ $services['service_name'] }}</h6></a>
                            </li>
                        @endif
                    @endforeach
                @endif
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
    <h1 class="news-header">{{ $service->service_name }}</h1>
    <div class="container-fluid offer-block">
        <div class="row">
            <div class="col-md-8 offer">
                <h2 class="offer_heading">Скорлупа и отводы ППУ от производителя с экономией до 40%</h2>
                <p class="offer_text">Низкая теплопроводность (не более 0,026 ВТ/м) позволит уменьшить толщину изоляции до 30-40мм и сэкономить на материалах</p>
                <ul class="offer_list">
                    <li class="offer_list-item">доступные конкурентные цены</li>
                    <li class="offer_list-item">широкий ассортимент продукции</li>
                    <li class="offer_list-item">оперативная помощь квалифицированных консультантов</li>
                    <li class="offer_list-item">экономия трудозатрат при монтаже до 70%</li>
                    <li class="offer_list-item">надежность теплоизоляции до 25 лет</li>
                    <li class="offer_list-item">полный набор комплектующих</li>
                    <li class="offer_list-item">доставка по всей России</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="offer_subheading">Оставьте заявку сейчас и получите расчёт стоимости</h3>
                <div id="timer"></div>
                <form name="orderShellPpuForm" id="orderShellPpuForm" class="form validateform offer_form" method="post" action="{{ route('shellForm') }}">
                    {{ csrf_field() }}
                    @if ($errors->orderShellPpuForm->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->orderShellPpuForm->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input class='input-xlarge offer_form-input' type='text' name='orderShellPpuName' id='orderShellPpuName' value="{{ old('orderShellPpuName') }}" placeholder="Имя" required>
                    <input class='input-xlarge offer_form-input' type='text' name='orderShellPpuPhone' id='orderShellPpuPhone' value="{{ old('orderShellPpuPhone') }}" placeholder="Номер телефона" required>
                    <input type='submit' class='btn btn-primary offer_form-btn' value='Получить расчёт стоимости'>
                </form>
            </div>
        </div>
    </div>

    {!! $service->content !!}
    <div>
        @include('public.inc.bottom')
    </div>
@endsection
