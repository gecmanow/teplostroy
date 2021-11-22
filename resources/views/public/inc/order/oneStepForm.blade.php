<form name="orderOneStepForm" id="orderOneStepForm" class="form validateform" method="post" action="{{ route('orderSend') }}">
    {{ csrf_field() }}
    @if ($errors->orderOneStepForm->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->orderOneStepForm->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <label for="orderOneStepName">Ваше имя: </label><br>
    <input class='input-xlarge' type='text' name='orderOneStepName' id='orderOneStepName' value="{{ old('orderOneStepName') }}" required><br>
    <label for="orderOneStepPhone">Контактный телефон с кодом города: </label><br>
    <input class='input-xlarge' type='text' name='orderOneStepPhone' id='orderOneStepPhone' value="{{ old('orderOneStepPhone') }}" required><br>
    <label for="orderOneStepEmail">E-mail: </label><br>
    <input class='input-xlarge' type='text' name='orderOneStepEmail' id='orderOneStepEmail' value="{{ old('orderOneStepEmail') }}" required><br>
    <label for="orderOneStepComment">Информация по заказу: </label><br>
    <textarea class='input-xxlarge' name='orderOneStepComment' rows='5' id='orderOneStepComment'></textarea><br>
    {!! app('captcha')->display() !!}
    {!! $errors->orderOneStepForm->first('g-recaptcha-response', '<p class="alert alert-danger">:message</p>') !!}
    <p></p>
    <input type='submit' class='btn btn-primary' onclick="reachGoal('online_zayavka');return true;" value='&nbsp; Отправить &nbsp;&nbsp;'><br>
</form>
