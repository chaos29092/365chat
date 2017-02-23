@extends('master')

@section('main')
<!--Slider-->
<section class="rev_slider_wrapper text-center">
    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
    <div id="rev_slider" class="rev_slider"  data-version="5.0">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade">
                <!-- MAIN IMAGE -->
                <img src="images/banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','on','on']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="800"><h1>最好的在线学习</h1>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['380','340','300','350']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','off','off']"
                     data-transform_idle="o:1;"
                     data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                     data-transform_out="opacity:0;s:1000;s:1000;"
                     data-start="1500"><p>Your chance to be a trending expert in IT industries and make a successful <br/> career after completion of our courses.</p>
                </div>
                <div class="tp-caption  tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['450','390','350','250']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','on','on']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                     data-start="2000">
                    <a href="#." class="border_radius btn_common white_border">our services</a>
                    <a href="#." class="border_radius btn_common blue">Get a quote</a>
                </div>
            </li>

            <li data-transition="fade">
                <img src="images/banner2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','on','on']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="800"><h1>Take The First Step</h1>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['380','340','300','350']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','off','off']"
                     data-transform_idle="o:1;"
                     data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                     data-transform_out="opacity:0;s:1000;s:1000;"
                     data-start="1500"><p>Your chance to be a trending expert in IT industries and make a successful <br/> career after completion of our courses.</p>
                </div>
                <div class="tp-caption  tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['450','390','350','250']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','on','on']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                     data-start="2000">
                    <a href="#." class="border_radius btn_common blue">Get a quote</a>
                </div>
            </li>
        </ul>
    </div><!-- END REVOLUTION SLIDER -->
</section>


<!--ABout US-->
<section id="about" class="padding">
    <div class="container">
        <div class="row">
            <div class="icon_wrap padding-bottom-half clearfix">
                <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="300ms">
                    <i class="icon-icons20"></i>
                    <h4 class="text-capitalize bottom20 margin10">永远在线</h4>
                    <p class="no_bottom">为您的网站访问者提供24×7的客服支持。不会再因为时差而错过任何一个客户。</p>
                </div>
                <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                    <i class="icon-layers"></i>
                    <h4 class="text-capitalize bottom20 margin10">海量询盘</h4>
                    <p class="no_bottom">立竿见影！使用我们的服务，高质量询盘数马上翻倍。</p>
                </div>
                <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-smile"></i>
                    <h4 class="text-capitalize bottom20 margin10">免费试用</h4>
                    <p class="no_bottom">我们提供长达七天的免费试用，先看效果再付费，来试试吧！</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin_top">
        <div class="row">
            <div class="col-md-7 col-sm-6 priorty wow fadeInLeft" data-wow-delay="300ms">
                <h2 class="heading bottom25">为什么外贸企业都在用小蚁客服？<span class="divider-left"></span></h2>
                <p class="half_space">
                    您专属的24×7英语客服，经过专业的训练，显著提高网站转化率，获得海量询盘。
                    <br><br>
                    我们可以帮您获得：由于无法立即获得实时帮助而放弃您的网站的成千上万的客户。
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/hands.png" alt="hands"></a>
                            <h4>效果拔群</h4>
                            <p>平均百分之二百的转化率提升</p>
                        </div>
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/awesome.png" alt="hands"></a>
                            <h4>免费试用</h4>
                            <p>7天免费试用，绝无强行推销</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/maintenance.png" alt="hands"></a>
                            <h4>节约成本</h4>
                            <p>成本远低于自建客服团队</p>
                        </div>
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/home.png" alt="hands"></a>
                            <h4>真人客服</h4>
                            <p>以英语为母语的专业客服，沟通顺畅</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 wow fadeInRight" data-wow-delay="300ms">
                <img src="images/about.jpg" alt="our priorties" class="img-responsive" style="width:100%;">
            </div>
        </div>
    </div>
</section>
<!--ABout US-->

<!--Paralax -->
<section id="parallax" class="parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow bounceIn">
                <h2>我们帮助您提高网站转化率并且降低运营成本</h2>
                <h1 class="margin10">200%</h1>
                <a href="#." class="border_radius btn_common white_border margin10">马上试用</a>
            </div>
        </div>
    </div>
</section>
<!--Paralax -->

@endsection