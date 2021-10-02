@extends('admin.layout.admin', ['title' => 'Создать услугу'])

@section('content')
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('admin/services') }}">Услуги</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('admin/services') }}">Все услуги</a></li>
            <li><a href="{{ URL::to('admin/services/create') }}">Создать услугу</a>
        </ul>
    </nav>

    <h1>Все услуги</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Поле</td>
            <td>Значение</td>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $key => $value)
            <tr>
                <td>ID</td>
                <td>{{ $value->id }}</td>
            </tr>
            <tr>
                <td>Название услуги</td>
                <td>{{ $value->service_name }}</td>
            </tr>
            <tr>
                <td>URL</td>
                <td>{{ $value->service_url }}</td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $value->category_id }}</td>
            </tr>
            <tr>
                <td>Краткое описание</td>
                <td>{{ $value->short_description }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $value->description }}</td>
            </tr>
            <tr>
                <td>Ключевые слова</td>
                <td>{{ $value->keywords }}</td>
            </tr>
            <tr>
                <td>Контент</td>
                <td>{{ $value->content }}</td>
            </tr>
            <tr>
                <!-- we will also add show, edit, and delete buttons -->
                <td>Действия</td>
                <td>
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('admin/services/' . $value->id) }}">Просмотр услуги</a>
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('admin/services/' . $value->id . '/edit') }}">Редактировать услугу</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection
