<form method='post' action="{{ route('step1send') }}" name='fmZakaz'>
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
    <input type='radio' name='need_service' value=4 checked> КОТЕЛЬНЫЕ И КОТЕЛЬНОЕ ОБОРУДОВАНИЕ<Br>
    <input type='radio' name='need_service' value=1> СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ<Br>
    <input type='radio' name='need_service' value=2> ТЕПЛОИЗЛЯЦИЯ ППУ (СКОРЛУПА)<Br>
    <input type='radio' name='need_service' value=3> ПРОЕКТИРОВАНИЕ<Br>
    <p></p>
    <input type='submit' class='btn btn-primary' value='&nbsp; Далее... &nbsp;&nbsp;'>
</form>
