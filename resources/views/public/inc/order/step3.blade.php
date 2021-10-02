@if(($need_service == 1) && ($need_service_2 == 1)) <!--СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ -> Ремонтные работы по котлам и котельному оборудованию-->
<p>
    <b>СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ</b><br>
    <b>Ремонтные работы по котлам и котельному оборудованию</b><br>
</p>
<p>Введите дополнительную информацию об используемом оборудовании:</p>
<form method='post' action="{{ route('step3service1') }}" name='fmZakaz'>
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
    <table>
        <tr>
            <td>Марка котла</td>
            <td><input type='text' name='boiler' value="{{ old('boiler') }}"></td>
        </tr>
        <tr>
            <td>Вид топлива</td>
            <td><input type='text' name='fuel' value="{{ old('fuel') }}"></td>
        </tr>
        <tr>
            <td>Мощность</td>
            <td><input type='text' name='power' value="{{ old('power') }}"></td>
        </tr>
        <tr>
            <td>Описание работ &nbsp;</td>
            <td><textarea type='text' name='description' rows=10 cols=70></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><p></p><input type='submit' class='btn btn-primary' value='&nbsp; Далее... &nbsp;&nbsp;'></td>
        </tr>
    </table>
</form>
@endif

@if(($need_service == 1) && ($need_service_2 == 2)) <!--СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ -> Ремонтные работы по тепловым сетям-->
<p>
    <b>СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ</b> <br>
    <b>Ремонтные работы по тепловым сетям</b> <br>
</p>
<p>Введите дополнительную информацию об используемом оборудовании:</p>
<form method='post' action="{{ route('step3service2') }}" name='fmZakaz'>
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
    <table>
        <tr>
            <td>Диаметр</td>
            <td><input type='text' name='diameter'></td>
        </tr>
        <tr>
            <td>Протяженность</td>
            <td><input type='text' name='length'></td>
        </tr>
        <tr>
            <td>Температура носителя</td>
            <td><input type='text' name='temp'></td>
        </tr>
        <tr>
            <td>Описание работ &nbsp;</td>
            <td><textarea type='text' name='description' rows=10 cols=70></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><p></p><input type='submit' class='btn btn-primary' value='&nbsp; Далее... &nbsp;&nbsp;'></td>
        </tr>
    </table>
</form>
@endif

@if(($need_service == 1) && ($need_service_2 == 3)) <!--СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ -> Строительство-->
<p>
    <b>СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ</b><br>
    <b>Строительство</b><br>
</p>
<p>Введите дополнительную информацию:</p>
<form method='post' action="{{ route('step3service3') }}" name='fmZakaz'>
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
    <table>
        <tr>
            <td>Объект &nbsp;</td>
            <td><textarea type='text' name='object' rows=5 cols=70></textarea></td>
        </tr>
        <tr>
            <td>Местонахождения &nbsp;</td>
            <td><textarea type='text' name='location' rows=5 cols=70></textarea></td>
        </tr>
        <tr>
            <td>Описание работ &nbsp;</td>
            <td><textarea type='text' name='description' rows=10 cols=70></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><p></p><input type='submit' class='btn btn-primary' value='&nbsp; Далее... &nbsp;&nbsp;'></td>
        </tr>
    </table>
</form>
@endif
