@extends('master')

@section('main')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1>帮助</h1>
                    <div class="page_nav">
                        <span>你在这里:</span> <a href="/">主页</a> <span><i class="fa fa-angle-double-right"></i>帮助</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header-->


    <!--SERVICE SECTION-->
    <section id="faq" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading heading_space wow fadeInDown">常见问题<span class="divider-left"></span></h2>
                    <div class="faq_content wow fadeIn" data-wow-delay="400ms">
                        <ul class="items">
                            <li><a href="#.">免费试用结束后会发生什么？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>我们将在7天免费试用期间与您保持联系。一旦实验结束，您可以选择合适的套餐继续获取大量客户，也可以取消服务，绝不会向您收取任何费用。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">我的套餐配额用完后会发生什么？</a>
                                <ul class="sub-items">
                                    <li><p>如果您获得的询盘数量少量超过了套餐配额，我们不会打扰您。但是如果您获得的询盘数量超出了套餐配额很多，我们将提醒您并建议升级套餐，我们不会因为超出套餐配额而停止提供服务。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">如果网站访客突然问了一个非常规问题怎么办？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>如果问题是突然而又十分重要的，我们会立即联系您，以获得所需答案，并将其传递给客户。如果问题不是那么紧急，我们将取得客户的联系方式和问题细节并实时邮件给您，您可以回复客户并告知我们正确答案，我们把答案录入数据库。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">你们的客服中心在哪里？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>为保证最佳服务品质，我们的客服中心建立在迪拜和菲律宾。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">在我的网站上获得你们的客服服务需要多长时间？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>基于多年经验，我们可以在不到12小时内为大多数行业进行客服培训和设置，我们开发了一个独特的工作流程，可以支持大多数行业12小时内的培训和部署。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">你们的客服支持哪些语言？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>现阶段，我们仅支持英语。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">你们的客服支持哪些行业？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>我们支持15个主流行业：电子商务，外贸，房地产，创业，SAAS，汽车销售，旅游观光，健康，网络托管，医药，政府，IT服务，时尚与服装，就业教育。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">我可以亲自和我的网站访客聊天吗？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>是的，您还可以与我们的客服一起和您的网站访问者聊天。并查看我们客服的工作情况，这个功能仅存在于高级和专业套餐中。如果您希望在基本套餐中使用此功能，请与我们联系。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">你们的营业时间是？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>在线客服： 24×7
                                            <br><br>
                                            办公室：周一至周五，9：00到17：30
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">免费试用有什么限制吗？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>我们在免费试用期间为您提供全部功能。唯一的限制是天数（7天）和有效询盘或潜在客户的数量（200）。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">没有价值的客户聊天会收费吗？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>我们对有效询盘的评判标准是：该聊天记录是否会对您的业务产生价值。我们只对有效询盘计费，绝不会对没有价值的客户聊天计费。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">你能帮我在我的网站上安装聊天软件代码吗？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>当然，只要您的网站管理者同意，我们的团队会为你免费安装聊天软件代码。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">你们支持的网站数量是否有限制？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>您的套餐中包含的网站数列在我们的定价页面中：<a href="/prices">点击查看价格表</a>

                                        <br><br>
                                            然而，如果您有很多网站出售相同的产品或服务，我们可以为全部网站提供服务，并不收取额外费用。
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">如何更改聊天窗口的外观和插件？</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>在初始设置期间，我们的设计师将修改聊天窗口以与您的网站匹配。如果您不满意设计，您可以随时与我们联系，我们将根据您的要求更改。</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#.">我还有其他问题...</a>
                                <ul class="sub-items">
                                    <li>
                                        <p>欢迎随时与我们联系，我们将很乐意回答您的问题。
                                            <br><br>
                                            <a href="/contact">点击查看联系方式</a>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="clearfix"></div>

@endsection