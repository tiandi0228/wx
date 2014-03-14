<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link rel="Shortcut Icon" title="" href="/favicon.ico" type="image/x-icon" />
<link href="/public/css/reset.css" rel="stylesheet" type="text/css" />
<link href="/public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/public/js/jquery-1.10.2.js"></script>
<script src="/public/js/jquery.validate.min.js?v=0.1"></script>
<script src="/public/js/jquery.validate.message_cn.js?v=0.1"></script>
<script src="/public/js/common.js?v=0.1"></script>
<script src="/public/js/jquery.qrcode.js?v=0.1"></script>
</head>
<body id="b0">
<!--header-->
<div class="header">
    <div class="w1000">
        <div class="logo"><a href="http://www.w-vi.com/"><?php echo ($sitename); ?></a></div>
        <div class="nav">
            <?php if($qq != ''): ?><div class="qq">
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($qq); ?>&site=<?php echo ($sitename); ?>&menu=yes"></a>
            </div><?php endif; ?>
            <?php if($sinawb != ''): ?><div class="sinawb">
                <a href="http://weibo.com/<?php echo ($sinawb); ?>" title="<?php echo ($sitename); ?>微博" target="_blank"></a>
            </div><?php endif; ?>
            <?php if($txwb != ''): ?><div class="txwb">
                <a href="http://t.qq.com/<?php echo ($txwb); ?>" title="<?php echo ($sitename); ?>微博" target="_blank"></a>
            </div><?php endif; ?>
            <div class="clear"></div>
            <div class="menu">
                <ul>
                    <li id="home" class="cur"><a href="javascript:;">Home 网站首页</a></li>
                    <li id="case"><a href="javascript:;">Works 移动案例</a></li>
                    <li id="contact"><a href="javascript:;">Contact 联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--header-->
<div class="clear"></div>
<!--Case-->
<div class="case w1000" id="b1">
    <div class="block">
        <h1>MOBILE WEBSITE CASE</h1>
        <h2>手机网站案例</h2>
        <dl>
            <dd class="i1">
                <h3>美容美发</h3>
                <div class="text">美容美发行业是一个时尚消费行业，越来越多的连锁巨头。通过APP应用向客户提供个性化服务，包含对VIP、会员提供最新发型的选择、自拍试型、手机预约等。</div>
            </dd>
            <dd class="i2">
                <h3>服装行业</h3>
                <div class="text">服装行业是一个时尚消费行业，越来越多的连锁巨头通过APP应用向客户提供个性化服务，包含对VIP、会员提供最新发型的选择、自拍试型、手机预约等。</div>
            </dd>
            <dd class="i3">
                <h3>婚纱摄影</h3>
                <div class="text">看看婚恋网站、交友网站、征婚节目有多么火，就知道婚纱摄影有多大的市场。APP应用将帮助各个婚纱影楼更早一步、更进一步的接触现在的80后、90后适婚青年，通过在线预约、在线选片、在线选摄影师、在线选景等一系列功能，展开移动营销。</div>
            </dd>
            <dd class="i4">
                <h3>汽车4S店</h3>
                <div class="text">汽车4S店的销售工作更具创新，从电话营销到电话、到微电影等，但是这些方式所能传播的信息都比较低。APP应用对于汽车4S店来将是一场销售的革命，通过开发在线选车、在线看车、在线预约试驾、在线预约保养等一系列的功能开发，使4S店能在碎片化时间对汽车消费者进行营销。</div>
            </dd>
            <dd class="i5">
                <h3>电子商务</h3>
                <div class="text">移动电子商务是电商们的新战场，现在投资电子商务，更应是快人一步，步步领先。在移动支付、智能手机普及、手机上网速度大幅得升的时代，通过APP应用来实现电子商务，是电商们的新高地。</div>
            </dd>
            <dd class="i6">
                <h3>移动办公</h3>
                <div class="text">跨地区运营，跨国连锁、跨国经营，多元化企业发展的今天，移动办公已成为中大型企业必须部署的办公新方式。众多企业已经通过APP应用来实现企业办公业务逻辑、核心经营业务逻辑等部署，完成了从PC办公向手机移动办公的迁移。</div>
            </dd>
            <dd class="i7">
                <h3>媒体资讯</h3>
                <div class="text">媒体资讯行业是处在人们越来越多的碎片化时间的行业，一个好的APP应用更能符合现在的人们消费媒体、资讯的需求。媒体服务商正通过APP应用向客户提供图片、新闻、快讯、社交等多个性化服务，以最大化现代人的碎片化时间。</div>
            </dd>
            <dd class="i8">
                <h3>医疗健康</h3>
                <div class="text">据不完全统计，超过50%的智能手机用户会利用碎片化时间来下载、安装、访问健康医疗类的APP应用。医疗健康类的APP应用将帮助企业更多的与智能手机用户、中高端的家庭用户联系在一起，通过手机问医、手机健康测试、手机排号、手机病历、手机支付等来实现对广大消费者的健康服务。</div>
            </dd>
        </dl>
    </div>
</div>
<!--Case-->
<!--Ccontact-->
<div class="contact" id="b2">
    <div class="w1000">
        <h1>CONTACT US</h1>
        <h2>联系我们</h2>
        <div class="fl">
            <h2 style="text-align:center;">扫描二维码</h2>
            <div id="qrcode" style="padding:10px;margin:auto;"></div>
            <input type="hidden" id="text" value="<?php echo ($url); ?>">
        </div>
        <div class="fr contact-fr">
            <h2>在线提交需求</h2>
            <form action="/" method="post" id="form">
                <div class="formipt mt20 fl">
                    <input class="text fl" type="text" name="username" id="username" placeholder="您的姓名（Name）">
                </div>
                <div class="formipt mt20 fl ml20">
                    <input class="text fr" type="text" name="companyname" placeholder="公司名称（Company）">
                </div>
                <div class="clear"></div>
                <div class="formipt mt20 fl">
                    <input class="text fl" type="text" name="tel" id="tel" placeholder="电话（Tel）">
                </div>
                <div class="formipt mt20 fl ml20">
                    <input class="text fr" type="text" name="email" id="email" placeholder="邮箱（E-mail）">
                </div>
                <div class="clear"></div>
                <div class="formtextarea mt20">
                    <textarea class="textarea" name="content" id="content" placeholder="您的需求描述？（Describe your needs or leave a message?）"></textarea>
                </div>
                <div class="clear"></div>
                <div class="formtextarea mt20">
                    <button class="btn fr">发送您的需求</button>
                </div>
            </form>
      </div>
    </div>
</div>
<!--Contact-->
<!--Footer-->
<div class="footer">
    <div class="w1000">
    <div class="cpy">
        <div class="int fl"><?php echo ($icp); ?></div>
        <?php if($statcode != ''): ?><div class="code fl ml10"><?php echo ($statcode); ?></div><?php endif; ?>
    </div>
    </div>
</div>
<!--Footer-->
</body>
</html>