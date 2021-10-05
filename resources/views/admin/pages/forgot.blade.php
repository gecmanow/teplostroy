@extends('admin.layout.admin', ['title' => 'Восстановление пароля'])

@section('content')
    <h1>Восстановление пароля</h1>
    <form method="post" action="{{ route('admin.forgot-mail') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Адрес почты"
                   required maxlength="255" value="{{ old('email') ?? '' }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info text-white">Восстановить</button>
        </div>
    </form>
@endsection
