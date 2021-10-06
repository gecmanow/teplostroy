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
    {!! $service->content !!}
    <div>
        @include('public.inc.bottom')
    </div>
@endsection
