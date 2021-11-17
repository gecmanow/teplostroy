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
                <td><label for="company_name">Название организации</label></td>
                <td><input type='text' size=70 name='company_name' id='company_name' value="{{ old('company_name') }}"></td>
            </tr>
            <tr>
                <td><label for="name">Ф.И.О. контактного лица</label></td>
                <td><input type='text' size=70 name='name' id='name' value="{{ old('name') }}"></td>
            </tr>
            <tr>
                <td><label for="post">Должность контактного лица</label></td>
                <td><input type='text' size=70 name='post' id="post" value="{{ old('post') }}"></td>
            </tr>
            <tr>
                <td><label for="phone">Телефон</label></td>
                <td><input type='text' size=70 name='phone' id='phone' value="{{ old('phone') }}"></td>
            </tr>
            <tr>
                <td><label for="email">E-mail</label></td>
                <td><input type='text' size=70 name='email' id="email" value="{{ old('email') }}"></td>
            </tr>
            <tr>
                <td><label for="communication_method">Предпочтительный способ связи &nbsp;</label></td>
                <td><input type='text' size=70 name='communication_method' id="communication_method" value="{{ old('communication_method') }}"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <p></p>
                    <input type='submit' class='btn btn-primary submit' value='&nbsp; Далее... &nbsp;&nbsp;'>
                </td>
            </tr>
        </table>
    </form>
</div>
