<div class="span12 bottom--devider" style="background-image: url({{ asset('images/orange_line_bg.gif') }});">
    &nbsp;
</div>
<div class="menu text-uppercase text-center">
    <ul>
        <li><a href="{{ route('categories') }}">Товары и услуги</a></li>
        <li><a href="{{ route('news') }}">Новости</a></li>
        <li><a href="{{ route('order') }}">Онлайн-заказ</a></li>
        <li><a href="{{ route('buy') }}">Как купить</a></li>
        <li><a href="{{ route('reports') }}">Отзывы</a></li>
        <li><a href="{{ route('contacts') }}">Контакты</a></li>
    </ul>
</div>
<div class="row bottom--bg" style="background-image:url({{ asset('images/footer-bg-1180x182.png') }}); height:182px; color:white; margin:0 -11px -20px -11px;">
    <div class="col-sm-4" style="padding:10px 0 0 20px;">
        <small>
            <b>{{ $app->legal_form }}<br/>
                {{ $app->site_name }}</b><br/>
            {{ $app->city_code }}, г. {{ $app->city }}, ул. {{ $app->street }}, {{ $app->house }}<br/>
            тел.: {{ $app->phone1 }}, {{ $app->phone2 }}<br/>
        </small>
    </div>
    <div class="col-sm-5" style="padding:10px 0 0 20px;">
        <!-- BEGIN YAMICHAT CODE {literal} -->
        <script>
            (function(){ var widget_id = 'y5948e274055be';
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src =
                    '//code.yamichat.ru/script/'+widget_id; var ss = document.
                getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();
        </script>
        <!-- {/literal} END YAMICHAT CODE -->
        <!--LiveInternet counter-->
        <script>
            document.write("<a href='//www.liveinternet.ru/click' "+
                "target=_blank><img src='//counter.yadro.ru/hit?t44.6;r"+
                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                ";"+Math.random()+
                "' alt='' title='LiveInternet' "+
                "width='31' height='31'><\/a>")
        </script><!--/LiveInternet-->
        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=22689064&amp;from=informer"
           target="_blank" rel="nofollow" style="margin-left: 5px;"><img src="https://informer.yandex.ru/informer/22689064/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                               style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="22689064" data-lang="ru" /></a>
        <!-- /Yandex.Metrika informer -->
    </div>
</div>
