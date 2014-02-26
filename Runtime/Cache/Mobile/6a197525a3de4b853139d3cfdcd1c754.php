<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title><?php echo ($webname); ?></title>
    <meta name="description" content="iSun微信" />
    <meta name="keywords" content="iSun微信" />
    <link rel="stylesheet" href="/public/css/reset.css?v=0.1" type="text/css"/>
    <link rel="stylesheet" href="/public/css/web.css?v=0.1" type="text/css"/>
    <script type="text/javascript" src="/public/js/jquery-1.10.2.js?v=0.1"></script>
    <script type="text/javascript" src="/public/js/MobileSlide.js?v=0.1"></script>
    <script src="/public/js/jquery.validate.min.js?v=0.1"></script>
    <script src="/public/js/jquery.validate.message_cn.js?v=0.1"></script>
    <script src="/public/js/web.js?v=0.1"></script>
</head>
<body>
<div class="MinWidth">
    <!--幻灯片广告-->
    <div class="banner">
        <ul id="BanCont">
            <li><a href="#" title="牛仔VT"><img src="http://www.0754shop.com/images/mobi/cn/advertising/HomeSlides1.jpg" width="320" height="161" alt="牛仔VT"></a></li>
            <li><a href="#" title="闺蜜装"><img src="http://www.0754shop.com/images/mobi/cn/advertising/HomeSlides2.jpg" width="320" height="161" alt="闺蜜装"></a></li>
            <li><a href="#" title="闺蜜装"><img src="http://www.0754shop.com/images/mobi/cn/advertising/HomeSlides3.jpg" width="320" height="161" alt="闺蜜装"></a></li>
            <li><a href="#" title="闺蜜装"><img src="http://www.0754shop.com/images/mobi/cn/advertising/HomeSlides4.jpg" width="320" height="161" alt="闺蜜装"></a></li>
            <li><a href="#" title="闺蜜装"><img src="http://www.0754shop.com/images/mobi/cn/advertising/HomeSlides5.jpg" width="320" height="161" alt="闺蜜装"></a></li>
        </ul>
        <ul class="banner_link">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
    </div>
    <!--幻灯片广告-->
    <div class="btn_big">
        <ul>
            <li><a href="/Mobile/Pro/index.html?bid=<?php echo ($bid); ?>&catid=1">新品上市</a></li>
            <li><a href="/Mobile/Pro/index.html?bid=<?php echo ($bid); ?>&catid=2">促销专区</a></li>
            <li><a href="/Mobile/Pro/index.html?bid=<?php echo ($bid); ?>&catid=3">精品推荐</a></li>
        </ul>
    </div>
    <div class="pr_showList_Grid MarginTop10">
        <ul>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                    <a href="/Mobile/Pro/Show.html?bid=<?php echo ($val["bid"]); ?>&pid=<?php echo ($val["pid"]); ?>">
                        <img src="<?php echo ($val["img"]); ?>" width="130" height="130">
                    </a>
                    <p class="ellipsis">
                        <a href="/Mobile/Pro/Show.html?bid=<?php echo ($val["bid"]); ?>&pid=<?php echo ($val["pid"]); ?>" title="<?php echo ($val["proname"]); ?>"><?php echo ($val["proname"]); ?></a>
                    </p>
                    <del>市场价：￥<?php echo ($val["price"]); ?></del>
                    <p>会员价：￥<span><?php echo ($val["pricing"]); ?></span></p>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div class="MinWidth copyright">
    <p>版权所有 &copy; <?php echo ($name); ?></p>
    <p>技术支持：iSun's Blog</p>
</div>
<footer id="box_footerBody" style="bottom: -1px;">
    <div class="columnSpace" id="elem-Toolbar_show01-001" name="下方工具条">
        <div id="Toolbar_show01-001" class="Toolbar_show01-d1_c1">
            <ul id="uldiv" class="footerWrap">
                <li class="z3g-column5">
                    <a alt="" href="tel:<?php echo ($tel); ?>" id="mobile" class="active">
                        <span class="icon tel">
                        </span>
                        <span class="text">电话</span>
                    </a>
                </li>
                <li class="z3g-column5">
                    <a alt="" href="sms:<?php echo ($tel); ?>" id="mobile" class="active">
                        <span class="icon email">
                        </span>
                        <span class="text">短信</span>
                    </a>
                </li>
                <li class="z3g-column5">
                    <a alt="" id="map" href="p_map.action?company.id=239&amp;tel=&amp;cid=&amp;type=mp.weixin.qq.com"
                    class="active">
                        <span class="icon map">
                        </span>
                        <span class="text">地图</span>
                    </a>
                </li>
                <li class="z3g-column5">
                    <a alt="" id="share" href="javascript:submitName1();" class="active">
                        <span class="icon share">
                        </span>
                        <span class="text">分享</span>
                    </a>
                </li>
                <li class="z3g-column5">
                    <a alt="" id="message" href="/Mobile/message.html?bid=<?php echo ($bid); ?>" class="active">
                        <span class="icon msg">
                        </span>
                        <span class="text">留言</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>