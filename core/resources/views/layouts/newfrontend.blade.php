<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $site_title }} | {{ $page_title }}</title>
    <meta property="og:title" content="{{ $site_title }}" />
    <meta property="og:description" content="Best Investment Platform for making assets." />
    <meta property="og:image" content="https://revolutionaryretrieve.com/assets/images/logo/icon.png" />

    <!--Favicon add-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo/icon.png') }}">
    <!--bootstrap Css-->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="{{ asset('assets/front/css/lightcase.css') }}" rel="stylesheet">
    <!--WOW Css-->
     <link href="{{ asset('assets/front/css/animate.min.css') }}" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="{{ asset('assets/front/css/slick.css') }}" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="{{ asset('assets/front/css/slicknav.min.css') }}" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="{{ asset('assets/front/css/swiper.min.css') }}" rel="stylesheet">
    <!--Style Css-->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="{{ asset('assets/css/color.php?color='.$basic->color) }}" rel="stylesheet">
    <!--Responsive Css-->
    <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
    @yield('style')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/front/2/css/style.css')}}">
    
    <script src="{{ asset('assets/front/2/js/modernizr.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

            
            <!-- REVOLUTION STYLE SHEETS -->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs6.css') }}">
            <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mystyle.css') }}">

</head>

<body  data-spy="scroll">
<!-- Start Pre-Loader-->

<div id="preloader">
    <div data-loader="circle-side"></div>

</div>
<!-- End Preload -->
<div class="animation-element">
<!-- End Pre-Loader -->
<!--support bar  top start-->
<div class="support-bar-top wow hidden " data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <a href="mailto:{{$basic->email}}"> <i class="fa fa-envelope email" aria-hidden="true"></i> {{$basic->email}}</a>
                    <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> {{ $basic->phone }} </a>
                </div>
            </div>
            <div class="col-md-6 text-right bounceIn">
                <div class="contact-admin">
                    <a href="{{url('login')}}"><i class="fa fa-user"></i> LOGIN </a>
                    <a href="{{url('register')}}"><i class="fa fa-user-plus"></i> REGISTER</a>
                    <div class="support-bar-social-links">
                        @foreach($social as $s)
                            <a href="{{ $s->link }}">{!!  $s->code  !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--support bar  top end-->
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="#19abfa" locale="en"></coingecko-coin-price-marquee-widget>
<!--main menu section start-->
<nav class="main-menu wow " data-wow-duration="2s">
    <div class="container" style="max-width:100%;height:auto;">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" style=""></a>
                </div>
            </div>
            <?php $cu = Request::url()  ?>
            <div class="col-md-9 text-right">
                <ul id="header-menu" class="header-navigation">
                    <li><a class="<?php if($cu == "http://localhost/ags") echo 'apply'; ?>" href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    @foreach($menu as $m)
                        <li><a href="{{ url('menu') }}/{{ $m->id }}/{{ urldecode(strtolower(str_slug($m->name))) }}">{{ $m->name }}</a></li>
                    @endforeach
                    <li><a href="{{ route('faqs') }}">Faq</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    @if(Auth::check())
                        <li>
                            <a href="#">Hi. {{ Auth::user()->name }} <i class="fa fa-caret-down"></i></a>
                             <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1"><a href="{{ route('user-dashboard') }}">Dashboard</a>
                               
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="">Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                           
                        </li>
                    @else
                        <li><a class="page-scroll" href="#">Account <i class="fa fa-angle-down""></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{ route('login') }}">Login</a>
                                    <a class="page-scroll" href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--main menu section end-->

@yield('content')

<!-- Online Section End -->

<div class="clearfix"></div>


<div class="clearfix"></div>

<script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
<coingecko-coin-price-chart-widget  coin-id="bitcoin" currency="usd" height="300" locale="en"></coingecko-coin-price-chart-widget>

<!--payment method section start-->
<section class="client-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header wow " data-wow-duration="2s">
                    <h2><span>PAYMENT METHOD </span> WE ACCEPT</h2>
                    <p><img src="{{asset('assets/images/logo/icon.png') }}" alt="icon"></p>
                </div><!-- section-heading -->
                <div class="section-wrapper">
                    <div class="client-list">
                        <!-- Swiper -->
                        <div class="swiper-container client-container">
                            <div class="swiper-wrapper">
                                @foreach($pay as $key => $p)
                                   <div class="swiper-slide"><div class="our-client wow " data-wow-duration="2s"><a href="#"><img class="img-responsive" src="{{ asset('assets/images') }}/{{ $p->image }}" alt="client"></a></div></div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </div>
                        </div><!-- client container -->
                    </div><!-- client list-->
                </div><!-- swiper wrapper -->
            </div>

        </div><!-- row -->
    </div><!-- container -->
</section>
<!--end payment method section start-->
<!--footer area start-->
<footer id="contact" class="footer-area">
    <!--footer area start-->
    <div class="footer-bottom">
        <div class="footer-support-bar">
            <!-- Footer Support List Start -->
            <div class="footer-support-list">
                <ul>
                    <li class="wow " data-wow-duration="1s" data-wow-delay="1s">
                        <div class="footer-thumb"><i class="fa fa-headphones"></i></div>
                        <div class="footer-content">
                            <p>24/7 Customer Support</p>
                        </div>
                    </li>
                    <li class="wow " data-wow-duration="1s" data-wow-delay="2s">
                        <div class="footer-thumb"><i class="fa fa-envelope"></i></div>
                        <div class="footer-content">
                            <p><a href="{{route('contact')}}">{{$basic->email}}</a></p>
                        </div>
                    </li>
                    <li class="wow " data-wow-duration="1s" data-wow-delay="3s">
                        <div class="footer-thumb"><i class="fa fa-comments-o"></i></div>
                        <div class="footer-content">
                            <p>Friendly Support Ticket</p>
                        </div>
                    </li>
                    <li class="wow " data-wow-duration="1s" data-wow-delay="4s">
                        <div class="footer-thumb"><i class="fa fa-phone"></i></div>
                        <div class="footer-content">
                            <p>{{ $basic->phone }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Footer Support End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 wow " data-wow-duration="3s">
                    <p class="copyright-text">
                       
                    </p>
                </div>
                <div class="col-md-4 col-sm-9 wow " data-wow-duration="3s">
                    <p class="copyright-text">
                        {!! $basic->copy_text !!}
                        <p style="color:#2c3e50">Powered by: <a  style="color:#2c3e50" href="https://wilcode.com/" target="_blank">WilCode</a> </p>
                    </p>
                </div>
                <div class="col-md-4 col-sm-3 wow " data-wow-duration="3s">
                    
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" class="scroll-top back-to-top" data-original-title="" title="" >
        <i class="fa fa-angle-up"></i>
    </div>
</footer>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--jquery script load-->
<script src="{{ asset('assets/front/js/jquery.js') }}"></script> 

<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<!-- Gmap Load Here -->
<script src="{{ asset('assets/front/js/gmaps.js') }}"></script>
<!-- Map Js File Load -->
<script src="{{ asset('assets/front/js/map-script.php?color='.$basic->color) }}"></script>
<!-- Highlight script load-->
<script src="{{ asset('assets/front/js/highlight.min.js') }}"></script>
<!--Jquery Ui Slider script load-->
<script src="{{ asset('assets/front/js/jquery-ui-slider.min.js') }}"></script>
<!--Circleful Js File Load-->
<script src="{{ asset('assets/front/js/jquery.circliful.js') }}"></script>
<!--CounterUp script load-->
<script src="{{ asset('assets/front/js/jquery.counterup.min.js') }}"></script>
<!-- Ripples  script load-->
<script src="{{ asset('assets/front/js/jquery.ripples-min.js') }}"></script>
<!--Slick Nav Js File Load-->
<script src="{{ asset('assets/front/js/jquery.slicknav.min.js') }}"></script>
<!--Lightcase Js File Load-->
<script src="{{ asset('assets/front/js/lightcase.js') }}"></script>
<!--particle Js File Load-->
<script src="{{ asset('assets/front/js/particles.min.js') }}"></script>
<!--particle custom Js File Load-->
<script src="{{ asset('assets/front/js/particles-custom.js') }}"></script>
<!--RainDrops script load-->
<script src="{{ asset('assets/front/js/raindrops.js') }}"></script>
<!--Easing script load-->
<script src="{{ asset('assets/front/js/easing-min.js') }}"></script>
<!--Slick Slider Js File Load-->
<script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
<!--Swiper script load-->
<script src="{{ asset('assets/front/js/swiper.min.js') }}"></script>
<!--WOW script load-->
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<!--WayPoints script load-->
<script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>
    @yield('script')
<!--Main js file load-->
<script src="{{ asset('assets/front/js/main.js') }}"></script>

<script src="{{ asset('assets/front/2/js/main.js') }}"></script>
<!-- <script src="{{ asset('assets/js/main.js') }}"></script> -->



                        <!-- REVOLUTION JS FILES -->
            <script type="text/javascript" src="{{ asset('assets/js/rbtools.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/rs6.min.js') }}"></script>
            
            <script type="text/javascript">function setREVStartSize(e){
            //window.requestAnimationFrame(function() {              
                window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;    
                window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;   
                try {                               
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                        newh;
                    pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
                    e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);        
                    if(e.layout==="fullscreen" || e.l==="fullscreen")                       
                        newh = Math.max(e.mh,window.RSIH);                  
                    else{                   
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];                    
                        e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                                            
                        var nl = new Array(e.rl.length),
                            ix = 0,                     
                            sl;                 
                        e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;                  
                        for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                        sl = nl[0];                                 
                        for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}                                                         
                        var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);                    
                        newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                    }               
                    if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));                 
                    document.getElementById(e.c).height = newh+"px";
                    window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";              
                } catch(e){
                    console.log("Failure at Presize of Slider:" + e)
                }                      
            //});
          };</script>


                <script type="text/javascript">
                    
                    var revapi4,
                        tpj;
                    function revinit_revslider41() {
                    jQuery(function() {
                        tpj = jQuery;
                        revapi4 = tpj("#rev_slider_4_1");
                        if(revapi4==undefined || revapi4.revolution == undefined){
                            revslider_showDoubleJqueryError("rev_slider_4_1");
                        }else{
                            revapi4.revolution({
                                sliderType:"hero",
                                sliderLayout:"fullwidth",
                                visibilityLevels:"1240,1240,1240,480",
                                gridwidth:"1400,1400,1400,480",
                                gridheight:"400,400,400,550",
                                spinner:"spinner0",
                                perspective:600,
                                perspectiveType:"local",
                                editorheight:"400,768,960,550",
                                responsiveLevels:"1240,1240,1240,480",
                                progressBar:{disableProgressBar:true},
                                navigation: {
                                    onHoverStop:false
                                },
                                fallbacks: {
                                    allowHTML5AutoPlayOnAndroid:true
                                },
                            });
                        }
                        
                    });
                    } // End of RevInitScript
                var once_revslider41 = false;
                if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider41 ) { once_revslider41 = true; revinit_revslider41();}});} else {once_revslider41 = true; revinit_revslider41();}
                </script>



</body>

</html>