<form name="orderOneStepForm" id="orderOneStepForm" class="form validateform" method="post" action="{{ route('orderSend') }}">
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
    <label for="orderOneStepName">Ваше имя: </label><br>
    <input class='input-xlarge' type='text' name='orderOneStepName' id='orderOneStepName' value="{{ old('orderOneStepName') }}"><br>
    <label for="orderOneStepPhone">Контактный телефон с кодом города: </label><br>
    <input class='input-xlarge' type='text' name='orderOneStepPhone' id='orderOneStepPhone' value="{{ old('orderOneStepPhone') }}"><br>
    <label for="orderOneStepEmail">E-mail: </label><br>
    <input class='input-xlarge' type='text' name='orderOneStepEmail' id='orderOneStepEmail' value="{{ old('orderOneStepEmail') }}"><br>
    <label for="orderOneStepComment">Информация по заказу: </label><br>
    <textarea class='input-xxlarge' name='orderOneStepComment' rows='5' id='orderOneStepComment'></textarea><br>
    <div id="g-recaptcha2" class="g-recaptcha2" data-sitekey="6Lf0_A8UAAAAAFLmY14_F_LbjF_qHKBoUq6PNcwp"></div>
    <p></p>
    <input type='submit' class='btn btn-primary' onclick="reachGoal('online_zayavka');return true;" value='&nbsp; Отправить &nbsp;&nbsp;'><br>
</form>
