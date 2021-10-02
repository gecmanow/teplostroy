@if(url()->current() != url('/'))
    <ul class='breadcrumb'>
        <li>
            <a href='{{ route('home') }}'>Главная</a>
            <span class='divider'></span>
        </li>
        @if(isset($service))
        <li>
            <a href='{{ $service->category_url }}'>{{ $service->category_name }}</a>
            <span class='divider'></span>
        </li>
        @else
            <li class='active'>@yield('title')</li>
        @endif
        @if(isset($service))
        <li class='active'>{{ $service->service_name }}</li>
        @else
        <li class='active'>@yield('title')</li>
        @endif
    </ul>
@endif
