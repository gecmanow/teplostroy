<div class='col-sm-2'>
    <ul class='nav nav-pills nav-stacked'>
        <li>
            <p class='text-center' style='background-color:#ef8c10; color:white;'>ТОВАРЫ И УСЛУГИ</p>
        </li>
        <li>
        @foreach($categories as $category)
            <li style='border-top:1px solid #ddd;'>
                <a class='left-menu' style='text-decoration: none;' href="tovary-i-uslugi/{{ $category->category_url }}">{{ $category->category_name }}</a>
            </li>
            @if($category->services)
                @foreach($category->services as $service)
                    @if(Request::path() == 'tovary-i-uslugi/'.$category->category_url.'/'.$service->service_url)
                        <li style='background-color:#428bca; color:white;'>
                            <a style='text-decoration: none; color:white;' href="tovary-i-uslugi/{{ $category->category_url }}/{{ $service->service_url }}"><h6>{{ $service->service_name }}</h6></a>
                        </li>
                    @else
                        <li>
                            <a style='text-decoration: none; color:black;' href="tovary-i-uslugi/{{ $category->category_url }}/{{ $service->service_url }}"><h6>{{ $service->service_name }}</h6></a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        <li style="border-top:1px solid #ddd;">
            <a class='left-menu' style="text-decoration: none;" href="{{ route('projects') }}">Реализованные проекты</a>
        </li>
        <li style="border-top:1px solid #ddd;">
            <a class='left-menu' style="text-decoration: none;" href="{{ route('vacancy') }}">Вакансии компании</a>
        </li>
        <li>
            <p style='background-image:url(images/elem_hor_shad_191x32.png);'>&nbsp;</p>
        </li>
        <li>
            <a href="{{ route('order') }}" class='btn btn-danger'>Оформить заказ</a>
        </li>
        <li>
            <h6 style='margin-top:25px; color:orange;'>Примите участие в опросе!<br/></h6>
        </li>
        <li>
            <h6>Вы относитесь к:</h6>
        </li>
        <li>
            <form name='form' action="{{ route('poll') }}" method='post'>
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
                <div class='radio'>
                    <label>
                        <input type='radio' name='poll' value='Строительной организации'>
                        Строительной организации
                    </label>
                </div>
                <div class='radio'>
                    <label>
                        <input type='radio' name='poll' value='Подрядной организации'>
                        Подрядной организации
                    </label>
                </div>
                <div class='radio'>
                    <label>
                        <input type='radio' name='poll' value='Проектной компании'>
                        Проектной компании
                    </label>
                </div>
                <div class='radio'>
                    <label>
                        <input type='radio' name='poll' value='Вы - частное лицо'>
                        Вы - частное лицо
                    </label>
                </div>
                <button type='submit' class='btn btn-warning'>Голосовать</button>
            </form>
        </li>
    </ul>
</div>

