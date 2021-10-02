<script>
// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
var left = 0;
if(target.offsetParent) {
while(1) {
left += target.offsetLeft;
if(!target.offsetParent) {
break;
}
target = target.offsetParent;
}
} else if(target.x) {
left += target.x;
}
return left;
}

// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
var top = 0;
if(target.offsetParent) {
while(1) {
top += target.offsetTop;
if(!target.offsetParent) {
break;
}
target = target.offsetParent;
}
} else if(target.y) {
top += target.y;
}
return top;
}

// preload the arrow //
if(document.images) {
arrow = new Image(7,80);
arrow.src = "images/msg_arrow.gif";
}
</script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- Yandex.Metrika counter -->
<!--<script>
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter22689064 = new Ya.Metrika({id:22689064,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22689064" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!-- /Yandex.Metrika counter -->
<!--<script>
    $(document).ready(function(){

    });
    $('#yami_iframe_container').ready(function () {
        $('.terms_link').text('');
    });
</script>
<script src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit'></script>
<script>
    var recaptchaCallback = function() {
        mysitekey = '6Lf0_A8UAAAAAFLmY14_F_LbjF_qHKBoUq6PNcwp';
        grecaptcha.render('g-recaptcha', {
            'sitekey' : mysitekey
        });
        if($('#g-recaptcha2').length>0)
            grecaptcha.render('g-recaptcha2', {
                'sitekey' : mysitekey,
            });

    };
</script>-->
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105989951-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());
    gtag('config', 'UA-105989951-1');

    function reachGoal(goal) {
        yaCounter22689064.reachGoal(goal)
        gtag('event','click',{'event_category': 'button','event_label': goal});
    }
</script>-->
