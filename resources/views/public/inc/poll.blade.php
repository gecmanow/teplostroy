<form name='form' action="{{ route('poll') }}" method='post'>
    {{ csrf_field() }}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class='radio'>
        <label>
            <input type='radio' name='poll' value='Строительной организации' checked>
            Строительной организации
        </label>
    </div>
    <div class='radio'>
        <label>
            <input type='radio' name='poll' value='Подрядной организации'>
            Подрядной организации
        </label>
    </div>
    <div class='radio'>
        <label>
            <input type='radio' name='poll' value='Проектной компании'>
            Проектной компании
        </label>
    </div>
    <div class='radio'>
        <label>
            <input type='radio' name='poll' value='Вы - частное лицо'>
            Вы - частное лицо
        </label>
    </div>
    <button type='submit' class='btn btn-warning'>Голосовать</button>
</form>
