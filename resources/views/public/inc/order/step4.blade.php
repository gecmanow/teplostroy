<p>Введите Ваши контактные данные:</p>
<div>
    <form name='form' id='form' class='form' action="{{ route('step4send') }}" method='post'>
        {{ csrf_field() }}
        @if ($errors->orderStep4->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->orderStep4->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table>
            <tr>
                <td>Название организации</td>
                <td><input type='text' size=70 name='company_name' id='company_name'></td>
            </tr>
            <tr>
                <td>Ф.И.О. контактного лица</td>
                <td><input type='text' size=70 name='name' id='name'></td>
            </tr>
            <tr>
                <td>Должность контактного лица</td>
                <td><input type='text' size=70 name='post'></td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td><input type='text' size=70 name='phone' id='phone'></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type='text' size=70 name='email'></td>
            </tr>
            <tr>
                <td>Предпочтительный способ связи &nbsp;</td>
                <td><input type='text' size=70 name='communication_method'></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    {!!  app('captcha')->display() !!}
                    {!! $errors->orderStep4->first('g-recaptcha-response', '<p class="alert alert-danger">:message</p>')!!}
                    <p></p>
                    <input type='submit' class='btn btn-primary submit' value='&nbsp; Далее... &nbsp;&nbsp;'>
                </td>
            </tr>
        </table>
    </form>
</div>
