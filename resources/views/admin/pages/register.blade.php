@extends('admin.layout.admin', ['title' => 'Регистрация'])

@section('content')
    <h1>Регистрация</h1>
    <form method="post" action="{{ route('admin.register') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Имя"
                   required maxlength="255" value="{{ old('name') ?? '' }}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail"
                   required maxlength="255" value="{{ old('email') ?? '' }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="Пароль"
                   required maxlength="255" value="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="password_confirmation"
                   placeholder="Пароль еще раз" required maxlength="255" value="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info text-white">Регистрация</button>
        </div>
    </form>
@endsection
