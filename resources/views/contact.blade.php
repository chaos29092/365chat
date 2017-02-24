@extends('master')

@section('main')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1>联系我们</h1>

                    <div class="page_nav">
                        <span>你在这里:</span> <a href="/">主页</a> <span><i class="fa fa-angle-double-right"></i>联系我们</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Deatils -->
    <section id="contact" class="padding">
        <div class="container">
            <div class="row padding-bottom">
                <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="300ms">
                    <h2 class="heading heading_space">联系方式<span class="divider-left"></span></h2>
                    <p>国内支持</p>
                    <div class="address">
                        <i class="icon icon-bubble3 border_radius"></i>
                        <h4>客服QQ：</h4>
                        <p>23333333</p>
                    </div>
                    <div class="address">
                        <i class="icon icon-mail border_radius"></i>
                        <h4>客服邮箱：</h4>
                        <p><a href="mailto:Edua@info.com">Edua@info.com</a></p>
                    </div>
                    <div class="address">
                        <i class="icon icon-phone border_radius"></i>
                        <h4>紧急联系电话：</h4>
                        <p>13105626214</p>
                    </div>
                </div>
                <div class="col-md-8 wow fadeInRight" data-wow-delay="600ms">
                    <h2 class="heading heading_space">如何试用<span class="divider-left"></span></h2>
                    <ol>
                        <li>1.联系我们客服QQ或发送邮件申请试用，需要附带公司所在行业和当前网站月询盘情况。</li>
                        <li>2.客服将会马上联系您，收集一些您的网站访客最常问的问题的答案</li>
                        <li>3.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Deatils -->

@endsection