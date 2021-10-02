<p>Введите Ваши контактные данные:</p>
<div>
    <form name='form' id='form' class='form' action="{{ route('step4send') }}" method='post'>
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
                    <div id="g-recaptcha2" class="g-recaptcha2" data-sitekey="6Lf0_A8UAAAAAFLmY14_F_LbjF_qHKBoUq6PNcwp"></div>
                    <p></p>
                    <input type='submit' class='btn btn-primary submit' value='&nbsp; Далее... &nbsp;&nbsp;'>
                </td>
            </tr>
        </table>
    </form>
</div>
