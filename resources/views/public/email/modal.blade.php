<h2>Получена заявка с сайта ck-tct.ru:</h2>
@if(isset($name))
    <span>Имя: </span><strong>{{ $name }}</strong><br>
@endif
@if(isset($phone))
    <span>Телефон: </span><strong>{{ $phone }}</strong><br>
@endif
@if(isset($comment))
    <span>Дополнительная информация: </span><br>
    <p>{{ $comment }}</p>
@endif
