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
                        <i class="icon icon-bubbles4 border_radius"></i>
                        <h4>客服QQ：</h4>
                        <p><a href="tencent://message/?uin=2837822473&Site=小蚁客服&Menu=yes">2837822473</a></p>
                    </div>
                    <div class="address">
                        <i class="icon icon-mail border_radius"></i>
                        <h4>客服邮箱：</h4>
                        <p><a href="mailto:Edua@info.com">Edua@info.com</a></p>
                    </div>
                    {{--<div class="address">--}}
                        {{--<i class="icon icon-phone border_radius"></i>--}}
                        {{--<h4>紧急联系电话：</h4>--}}
                        {{--<p>13105626214</p>--}}
                    {{--</div>--}}
                </div>
                <div class="col-md-8 wow fadeInRight" data-wow-delay="600ms">
                    <h2 class="heading heading_space">如何试用<span class="divider-left"></span></h2>
                    <p>
                        1.如果您网站月询盘数量在30以上，即可联系我们的<a href="tencent://message/?uin=2837822473&Site=小蚁客服&Menu=yes">客服QQ</a>或<a href="mailto:Edua@info.com">发送邮件</a>申请免费试用。<br><br>
                        2.客服将会马上联系您，获取了常见访客问题及答案后，帮你安装好聊天软件，试用开始。<br><br>
                        更多疑问请查看帮助： <a href="/faq">点击查看</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Deatils -->

@endsection