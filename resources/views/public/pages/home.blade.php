@extends('public.layout.home')

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
    <h1>Монтаж и ремонт тепловой изоляции в Красноярске</h1>
        @foreach($categories as $category)
        <div class="list-group">
            <a class="list-group-item active" href="tovary-i-uslugi/{{ $category->category_url }}">
                <h4 class="list-group-item-heading">{{ mb_strtoupper($category->category_name) }}</h4>
            </a>
            <a class="list-group-item" href="tovary-i-uslugi/{{ $category->category_url }}">
                <div class="row">
                    <div class="col-sm-9 col-xs-8">
                        <p class="text-justify">{{ $category->description }}</p>
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <img class="img-thumbnail" src="{{ $category->category_img }}" alt=""><br><br>
                        <div class="btn btn-warning pull-right">Далее</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
@endsection()
