<h2>Получены результаты опроса с сайта ck-tct.ru:</h2>
@if(isset($name))
    <span>Имя: </span><strong>{{ $name }}</strong><br>
@endif
@if(isset($poll))
    <span>Ответ: </span><strong>{{ $poll }}</strong><br>
@endif
