<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="@yield('meta_desc')比迷你倉更便利的個人倉庫來囉!ALL IN精品倉儲的懶人倉是台北出租倉庫或倉儲的最佳選擇，無論是個人租櫃或公司租櫃均出租中，無論是需要大倉庫空間或小倉庫空間，迷你倉或個人倉儲均有出租，您可以輕易擁有個人專屬的迷你倉儲空間，現在租櫃就享折扣!"/>
    <meta name="keywords" content="@yield('meta_keywords')倉儲,倉庫出租,個人倉庫,租櫃,空間出租,租倉庫,個人倉儲,租小倉庫,出租倉庫,迷你倉"/>
    <meta name="author" content=""/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title> {{ getSetting('SITE_TITLE') }} | @yield('title') </title>
    <!-- Bootstrap 3.3.5 -->
{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
<!-- Font Awesome -->
    {!! Html::style('assets/dist/css/font-awesome.min.css') !!}

    {!! Html::style('assets/dist/css/animate.css') !!}

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

    {!! Html::style('assets/dist/css/theme.css') !!}

    {!! Html::style('assets/dist/css/testimonial-slider.css') !!}



	{!! Html::style('assets/dist/css/formstyle.css') !!}

	{!! Html::style('assets/dist/css/custom-navbar.css') !!}

        @yield('css')


        <style>
            #topbar .table {
                margin-bottom: 0;
                padding: 3px 0;
            }

            #topbar .table span {

                padding: 5px;
                text-align: center;
            }
        </style>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" href="/favicon.ico">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7FTTH4"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M7FTTH4');</script>
<!-- End Google Tag Manager -->
<!-- start preloader -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-rotating-plane"></div>
</div>
<!-- end preloader -->

@include('layouts.frontend.includes.header2')

@yield('content')

<!-- ============= Contact Section Starts Here =============================-->
<span class="anchor" id="nav_contact" ></span>
<section id="contact" >
    <div class="container">
        <div class="row">
            <div class="col-md-3"><h3><a href="/contact-us">請聯絡我們</a></h3></div>
            <div class="col-md-5 text-right"><h3><img src="/assets/dist/img/icon_email.png"><a href="mailto:{{ getSetting('INFO_EMAIL') }}">{{ getSetting('INFO_EMAIL') }}</a></h3></div>
            <div class="col-md-3 text-right"><h3><img src="/assets/dist/img/icon_phone.png">{{ getSetting('SUPPORT_PHONE') }}</h3></div>
        </div><!--/* Container*/-->
</section>
<!-- ============= Contact Section Ends Here =============================-->

<!-- CONTENT-WRAPPER SECTION END-->
@include('layouts.frontend.includes.footer2')
<!-- jQuery 2.1.4 -->
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js') !!}

{!! Html::script('assets/plugins/jQueryUI/jquery-ui.min.js') !!}
{!! Html::script('/assets/dist/js/jquery.blockUI.js') !!}

<!-- Bootstrap 3.3.5 -->
{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}

{!! Html::script('assets/dist/js/wow.js') !!}

{!! Html::script('/assets/dist/js/jquery-migrate-1.2.1.min.js') !!}
{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBOsiOjjoOiFBmXLU0adNjsnCKLpcDfRyI') !!}



{!! Html::script('/assets/dist/js/jquery.easing.min.js') !!}
{!! Html::script('/assets/dist/js/appear.js') !!}

{!! Html::script('/assets/dist/js/viewportchecker.js') !!}




<script>
    jQuery(document).ready(function($){
        $("form").submit(function(){
            $.blockUI({ css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            } });

            setTimeout($.unblockUI, 15000);
        });
        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });

        //window.history.forward(1);

    });





</script>
<script>
    /*----------------------------------------------------
     /*  Small Logo Upon Scroll
     /* ------------------------------------------------- */
    jQuery(document).ready(function($) {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 40) {
                jQuery('.s5_logo').addClass('small-logo');
                jQuery('.blackbar').slideUp();
            } else {
                jQuery('.s5_logo').removeClass('small-logo');
                jQuery('.blackbar').slideDown();
            }
        });
    });
</script>
<script>
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.preloader').fadeOut(1000); // set duration in brackets

        $('*:not(nav)').click(function(){
            if($(this).hasClass('collapsed')) return;
            if($(document).width() > 768) return;
            if($('.navbar-collapse').css('display') !== 'none')
                $('.navbar-collapse').collapse('toggle');
        });

        $('.panel-title a').click(function(event){
            event.preventDefault();
            $('.collapse.in').collapse('hide');
            $('#'+$(this).attr('aria-controls')+'').collapse('show');
        });
    })
</script>



<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();



</script>
<script>
    /* $('.carousel').carousel({
     interval: 6000
     })*/
</script>



<script>
    jQuery(document).ready(function() {
        jQuery('.post').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated bounceInUp', // Class to add to the elements when they are visible
            offset: 1
        });
    });
    jQuery(document).ready(function() {
        jQuery('.post1').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated flipInX', // Class to add to the elements when they are visible
            offset: 1
        });
    });

    // hing side menu
    function showSideMenu(){
        //jQuery("div#ct-parallaxtop").css({"margin-right": jQuery("div#sideMenu").width() - 30});
        if(jQuery(this).width()<768){
            jQuery("div.boxful-header-promo").css({"right": jQuery("div#sideMenu").width() - 10});
        }else{
            jQuery("div#ct-parallaxtop").css({"margin-right": jQuery("div#sideMenu").width() - 30});
        }
        jQuery("div#sideMenu").show("slide", { direction: "left" }, 150);
        jQuery("div#blackLayer").show();
    }

    function hideSideMenu(){
        jQuery("div.boxful-header-promo").css({"left": "0px"});
        jQuery("div#ct-parallaxtop").css({"margin-left": "0px"});
        jQuery("div#sideMenu").hide("slide", { direction: "left" }, 150);
        jQuery("div#blackLayer").hide();
    }
    // end

    //hing 17/06
    jQuery("a#sidebarAction").click(function(event){
        event.preventDefault();
        if(!jQuery("div#sideMenu").is(":visible")){
            showSideMenu();
        }else{
            hideSideMenu();
        }
    });

    jQuery("div#blackLayer").click(function(event){
        if(jQuery("div#sideMenu").is(":visible")){
            hideSideMenu();
        }
    });

    jQuery('div:not("div#sideMenu")').click(function(){
        hideSideMenu();
    })


    jQuery("a#closeSidemenu").click(function(event){
        event.preventDefault();
        if(jQuery("div#sideMenu").is(":visible")){
            hideSideMenu();
        }
    });




    // end
    //hideSideMenu();//Asif
</script>

@yield('js')
@include('layouts.frontend.includes.ga')

</body>
</html>
