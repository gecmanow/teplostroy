@if(url()->current() != url('/'))
    <ul class='breadcrumb'>
        <li>
            <a href='{{ route('home') }}'>Главная</a>
            <span class='divider'></span>
        </li>
        @if(isset($service))
        <li>
            <a href='/tovary-i-uslugi/{{ $service->category_url }}'>{{ $service->category_name }}</a>
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
    @if ($errors->orderModalForm->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->orderModalForm->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endif
