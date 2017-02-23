@extends('master')

@section('main')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1>套餐价格</h1>
                    <div class="page_nav">
                        <span>你在这里:</span> <a href="index.html">主页</a>
                        <span><i class="fa fa-angle-double-right"></i>价格</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Pricings-->
    <section class="padding" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center"><h2 class="heading heading_space">套餐列表<span class="divider-center"></span></h2></div>
                    <div class="pricing three padding-bottom">
                        <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
                            <h3>标准</h3>
                            <div class="pricing_price"><span class="pricing_currency">￥</span>2999/月</div>
                            <p class="pricing_sentence">适合月询盘量50以上的外贸网站，有效询盘成本低至￥40</p>
                            <ul class="pricing_list">
                                <li class="pricing_feature">75个有效询盘</li>
                                <li class="pricing_feature">无限次接待</li>
                                <li class="pricing_feature">24×7 在线</li>
                                <li>1个域名</li>
                                <li>紧急服务电话</li>
                                <li>额外询盘每个￥40</li>
                            </ul>
                            <a class="btn_common text-center" href="#.">免费试用</a>
                        </div>
                        <div class="pricing_item active wow fadeInUp" data-wow-delay="500ms">
                            <h3>高级</h3>
                            <div class="pricing_price"><span class="pricing_currency">￥</span>6999/月</div>
                            <p class="pricing_sentence">适合月询盘量150以上的外贸网站，有效询盘成本低至￥35</p>
                            <ul class="pricing_list">
                                <li class="pricing_feature">200个有效询盘</li>
                                <li class="pricing_feature">无限次接待</li>
                                <li class="pricing_feature">24×7 在线</li>
                                <li>2个域名</li>
                                <li>紧急服务电话</li>
                                <li>额外询盘每个￥35</li>
                            </ul>
                            <a class="btn_common text-center" href="#.">咨询并开通</a>
                        </div>
                        <div class="pricing_item dark_gray wow fadeInUp" data-wow-delay="600ms">
                            <h3>专业</h3>
                            <div class="pricing_price"><span class="pricing_currency">￥</span>13999/月</div>
                            <p class="pricing_sentence">适合月询盘量500以上的外贸网站，有效询盘成本低至￥20</p>
                            <ul class="pricing_list">
                                <li class="pricing_feature">700个有效询盘</li>
                                <li class="pricing_feature">无限次接待</li>
                                <li class="pricing_feature">24×7 在线</li>
                                <li>3个域名</li>
                                <li>紧急服务电话</li>
                                <li>额外询盘每个￥20</li>
                            </ul>
                            <a class="btn_common text-center" href="#.">咨询并开通</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricings-->

@endsection