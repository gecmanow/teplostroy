@extends('public.layout.home')
@section('title', $title->category_name)

@section('left_sidebar')
    <div class='col-sm-2'>
        <ul class='nav nav-pills nav-stacked'>
            <li>
                <p class='text-center' style='background-color:#ef8c10; color:white;'>ТОВАРЫ И УСЛУГИ</p>
            </li>
            <li>
            @foreach($categories as $category)
                <li style='border-top:1px solid #ddd;'>
                    <a class='left-menu' style='text-decoration: none;' href="{{ $category->category_url }}">{{ $category->category_name }}</a>
                </li>
                @if(Request::path() == 'tovary-i-uslugi/'.$category->category_url)

                    @foreach($category->services as $service)
                        <li>
                            <a style='text-decoration: none; color:black;' href="{{ $category->category_url }}/{{ $service->service_url }}"><h6>{{ $service->service_name }}</h6></a>
                        </li>
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

    <h3>{{ $title->category_name }}</h3>

    @foreach($services as $service)
        <a href="{{ $service->category_url }}/{{ $service->service_url }}">{{ $service->service_name }}</a><br>
    @endforeach
@endsection
