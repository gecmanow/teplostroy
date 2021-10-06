<p>
    <a class='btn btn-warning' href="{{ route('order') }}">Оформить заказ</a>
</p>
<hr>
<h6>Дополнительные ссылки по теме: </h6>
@foreach($bottom as $service)
<p>
    <a href="{{ $service['service_url'] }}">{{ $service['service_name'] }}</a>
</p>
@endforeach
