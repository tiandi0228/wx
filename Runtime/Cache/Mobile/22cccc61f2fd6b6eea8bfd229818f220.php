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
    <script src="/public/js/jquery.validate.min.js?v=0.1"></script>
    <script src="/public/js/jquery.validate.message_cn.js?v=0.1"></script>
    <script src="/public/js/web.js?v=0.1"></script>
</head>
<body>
<div class="TopMin320 TopBg">
    <div class="top_title">商品详情</div>
    <div class="top_title_back PicIEPng">
        <a href="javascript:history.back();">
            <img src="/public/images/back_ico.png">
        </a>
    </div>
    <div class="top_title_home">
        <ul>
            <li class="PicIEPng">
                <a href="/Mobile/index.html?bid=<?php echo ($bid); ?>">
                    <img src="/public/images/home_ico.png">
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="MinWidth">
    <div class="MarginTop10 pr_show_kuang">
        <ul>
            <?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if (empty($val)) continue;?>
                <img src="<?php echo ($val); ?>"/><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="widthMAX pr_show_txt MarginTop10">
        <p><?php echo $proname?></p>
        <p id="pMarketPrice"><del>市场价￥<?php echo ($price); ?></del></p>
        <p id="pSalePrice">会员价：<span>￥<?php echo ($pricing); ?></span></p>
    </div>
    <div class="MarginTop10 pr_show_info">
        <?php echo ($contents); ?>
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