<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Edua</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/edua-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootsnav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loader.css')}}">

    <link rel="icon" href="images/favicon.png">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
    <div class="bouncybox">
        <div class="bouncy"></div>
    </div>
</div>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <span class="info"><a href="#."> 有任何问题?</a></span>
                    {{--<span class="info"><i class="icon-phone2"></i>(654) 332-112-222</span>--}}
                    <span class="info"><i class="icon-mail"></i>support@edua.com</span>
                </div>
                <ul class="social_top pull-right">
                    <li><a href="#."><i class="icon-mail"></i></a></li>
                    {{--<li><a href="#."><i class="icon-phone"></i></a></li>--}}
                    <li><a href="tencent://message/?uin=2837822473&Site=小蚁客服&Menu=yes"><i class="icon-bubbles4"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--Header-->
<header>
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><img src="{{asset('images/logo-white.png')}}" alt="logo" class="logo logo-display">
                    <img src="{{asset('images/logo.png')}}" class="logo logo-scrolled" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                    <li><a href="/">主页</a></li>
                    <li><a href="/features">功能</a></li>
                    <li><a href="/prices">价格</a></li>
                    <li><a href="/faq">帮助</a></li>
                    <li><a href="/contact">马上免费试用</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>



@yield('main')

<!--Paralax -->
<section id="parallax" class="parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow bounceIn">


                <h2 class="margin10">让你的客户爱上你</h2>

                <h3 class="margin10">试用七天，看看效果</h3>
                <a href="/contact" class="border_radius btn_common white_border margin10">马上免费试用</a>
            </div>
        </div>
    </div>
</section>
<!--Paralax -->

<!--FOOTER-->
<footer class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 footer_panel bottom5">
                <h3 class="heading bottom25">关于我们<span class="divider-left"></span></h3>
                <p>小蚁客服专注于服务中小外贸企业，提供专业的网站客服外包服务。提高网站转化率，获得海量询盘，降低企业运营成本。</p>
                <ul class="social_icon top25">
                    <li><a href="#." class="mail"><i class="icon-mail"></i></a></li>
                    {{--<li><a href="#." class="phone"><i class="icon-phone"></i></a></li>--}}
                    {{--<li><a href="#." class="bubble2"><i class="icon-bubble2"></i></a></li>--}}
                    <li><a href="tencent://message/?uin=2837822473&Site=小蚁客服&Menu=yes" class="QQ"><i class="icon-bubbles4"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 footer_panel bottom5">
                <h3 class="heading bottom25">快速导航<span class="divider-left"></span></h3>
                <ul class="links">
                    <li><a href="/features"><i class="icon-chevron-small-right"></i>功能</a></li>
                    <li><a href="/prices"><i class="icon-chevron-small-right"></i>价格</a></li>
                    <li><a href="/faq"><i class="icon-chevron-small-right"></i>帮助</a></li>
                    <li><a href="/contact"><i class="icon-chevron-small-right"></i>马上免费试用</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 footer_panel bottom5">
                <h3 class="heading bottom25">联系我们<span class="divider-left"></span></h3>

                <p class=" address"><i class="icon-bubbles4"></i>客服QQ：<a href="tencent://message/?uin=2837822473&Site=小蚁客服&Menu=yes">2837822473</a></p>
                <p class=" address"><i class="icon-mail"></i><a href="mailto:Edua@info.com">Edua@info.com</a></p>
                <img src="images/footer-map.png" alt="we are here" class="img-responsive">
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy; 2017 <a href="/">xiaoyi</a>. all rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<!--FOOTER ends-->



<script src="{{asset('js/jquery-2.2.3.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery-countTo.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>

</body>
</html>
