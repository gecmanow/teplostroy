@extends('admin.layout.admin', ['title' => 'Создать услугу'])

@section('content')
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('admin/services') }}">Услуги</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('admin/services') }}">Посмотреть все услуги</a></li>
            <li><a href="{{ URL::to('admin/services/create') }}">Создать услугу</a>
        </ul>
    </nav>

    <h1>Создать услугу</h1>

    <!-- if there are creation errors, they will show here -->
    {{ Html::ul($errors->all()) }}

    {{ Form::open(array('url' => 'admin/services')) }}

    <div class="form-group">
        {{ Form::label('service_name', 'Название услуги') }}
        {{ Form::text('service_name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('service_url', 'URL') }}
        {{ Form::text('service_url', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'Категория') }}
        {{ Form::select('category_id', $categories, null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('short_description', 'Краткое описание') }}
        {{ Form::textarea('short_description', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Описание') }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('keywords', 'Ключевые слова') }}
        {{ Form::text('keywords', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Контент') }}
        {{ Form::textarea('content', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Создать услугу', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
@endsection
