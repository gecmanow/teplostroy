@extends('admin.layout.admin', ['title' => 'Просмотр услуги'])

@section('content')
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('admin/services') }}">Услуги</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('admin/services') }}">Просмотреть все услуги</a></li>
            <li><a href="{{ URL::to('admin/services/create') }}">Создать услугу</a>
        </ul>
    </nav>

    <h1>Просмотр {{ $service->service_name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $service->service_name }}</h2>
        <p>
            <strong>URL:</strong> {{ $service->service_url }}<br>
            <strong>Категория:</strong> {{ $service->category_id }}<br>
            <strong>Краткое описание:</strong> {{ $service->short_description }}<br>
            <strong>Описание:</strong> {{ $service->description }}<br>
            <strong>Ключевые слова:</strong> {{ $service->keywords }}<br>
            <strong>Контент:</strong> {{ $service->content }}<br>
        </p>
    </div>

</div>
@endsection
