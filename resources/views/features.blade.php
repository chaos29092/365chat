@extends('master')

@section('main')

    <!--Fun Facts-->
    <section id="counter" class="parallax padding">
        <div class="container">
            <h2 class="hidden">hidden</h2>
            <div class="row number-counters">
                <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="300ms">
                    <i class="icon-checkmark3"></i>
                    <strong>效果付费</strong>
                    <p>我们按合格询盘的数量来计费，所以您可以得到无限次的在线聊天服务，直到询盘达到目标</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="400ms">
                    <i class="icon-lock"></i>
                    <strong>安全性</strong>
                    <p>我们非常重视安全和隐私。所有聊天都通过SSL进行。我们保证不会与第三方共享任何数据。</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="500ms">
                    <i class=" icon-icons20"></i>
                    <strong>转化翻倍</strong>
                    <p>我们可以将您网站的转化率提高一倍，来用我们的免费试用看看差异，没有任何附加条件！</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="600ms">
                    <i class="icon-happy"></i>
                    <strong>专人服务</strong>
                    <p>我们为每位客户配备了服务专员，辅助您安装软件，并获得更好的效果。</p>
                </div>
            </div>
        </div>
    </section>
    <!--Fun Facts-->

    <!--ABout US-->
    <section id="about" class="padding">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center wow fadeInDown">
                    <h2 class="heading">全部服务列表<span class="divider-center"></span></h2>
                    <p class="heading_space margin10">为中小外贸企业量身打造</p>
                </div>

                <div class="icon_wrap padding-bottom-half clearfix">
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="300ms">
                        <i class="icon-database"></i>
                        <h4 class="text-capitalize bottom20 margin10">中心数据库</h4>
                        <p class="no_bottom">您的所有潜在客户和聊天记录都在一个集中且安全的数据库中，只有您自己可以使用。</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                        <i class="icon-clipboard"></i>
                        <h4 class="text-capitalize bottom20 margin10">CRM/ERP集成</h4>
                        <p class="no_bottom">您的所有网站潜在客户可以被我们自动添加到您的CRM或ERP系统。</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                        <i class="icon-spinner10"></i>
                        <h4 class="text-capitalize bottom20 margin10">软件灵活性</h4>
                        <p class="no_bottom">我们可以根据您的需求来使用多种主流的在线聊天软件。</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="600ms">
                        <i class="icon-user"></i>
                        <h4 class="text-capitalize bottom20 margin10">专业客服</h4>
                        <p class="no_bottom">我们的客服经过大量专业的培训，为您的客户提供卓越的支持。</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                        <i class="icon-grin"></i>
                        <h4 class="text-capitalize bottom20 margin10">专业&友好</h4>
                        <p class="no_bottom">我们保证您的所有网站访问者将被以友好和专业的方式对待。</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                        <i class="icon-clock"></i>
                        <h4 class="text-capitalize bottom20 margin10">24×7在线</h4>
                        <p class="no_bottom">由人工智能算法辅助的24×7在线真人客服，沟通流畅。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="teacher margin_top wow fadeIn" data-wow-delay="300ms">
                        <div class="image bottom25">
                            <img src="{{asset('images/Prefix_timewastersSuffix.jpg')}}" alt="Teachers" class=" border_radius">
                            <span class="post">还在浪费时间吗？</span>
                        </div>
                        <h3>垃圾信息过滤</h3>
                        <p class="bottom20 margin10">网站访客总是问你与产品无关的问题？我们处理他们，并过滤掉他们，只保留真正有意向的客户。不要再把你的时间浪费在过滤垃圾信息上。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="teacher margin_top wow fadeIn" data-wow-delay="400ms">
                        <div class="image bottom25">
                            <img src="{{asset('images/Prefix_freesoftwareSuffix.jpg')}}" alt="Teachers" class=" border_radius">
                            <span class="post">业界领先的聊天软件</span>
                        </div>
                        <h3>免费的聊天软件</h3>
                        <p class="bottom20 margin10">我们的服务套餐附带了聊天软件。我们使用业界领先的即时聊天软件。我们为您免费提供原价近300的软件。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="teacher margin_top wow fadeIn" data-wow-delay="500ms">
                        <div class="image bottom25">
                            <img src="{{asset('images/Prefix_slide2Suffix.jpg')}}" alt="Teachers" class=" border_radius">
                            <span class="post">推广您的品牌</span>
                        </div>
                        <h3>只显示您的品牌</h3>
                        <p class="bottom20 margin10">您的聊天窗口将完全按照您的网站设计并使用您的logo，不会有任何地方提到我们公司。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABout US-->

@endsection