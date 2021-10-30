<script src="{{ asset('js/main.js') }}"></script>
<script>
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
</script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105989951-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)}
    gtag('js', new Date());
    gtag('config', 'UA-105989951-1');

    function reachGoal(goal) {
        yaCounter22689064.reachGoal(goal)
        gtag('event','click',{'event_category': 'button','event_label': goal});
    }
</script>
