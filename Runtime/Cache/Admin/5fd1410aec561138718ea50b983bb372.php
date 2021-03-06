<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>后台登录</title>
    <meta name="description" content="iSun微信" />
    <meta name="keywords" content="iSun微信" />
    <link rel="stylesheet" href="/public/css/reset.css?v=0.1" type="text/css"/>
    <link rel="stylesheet" href="/public/css/login.css?v=0.1" type="text/css"/>
    <script src="/public/js/jquery-1.10.2.js?v=0.1"></script>
    <script src="/public/js/jquery.validate.min.js?v=0.1"></script>
    <script src="/public/js/jquery.validate.message_cn.js?v=0.1"></script>
    <script src="/public/js/login.js?v=0.1"></script>
</head>
<body>
<div class="login">
    <div class="login_top"></div>
    <div class="loginMain">
        <h1>iSun微信</h1>
        <form action="/Admin/Login/Check" method="POST" id="form">
            <ul class="FormList">
                <li>
                    <em class="Icon Account"></em>
                    <input type="text" class="text" name="username" id="username" placeholder="请输入手机号码"/>
                </li>
                <li>
                    <em class="Icon Paddword"></em>
                    <input type="password" class="text" id="password" name="password" placeholder="请输入密码"/>
                </li>
                <li>
                    <button type="submit" data-toggle="button" class="button">登 录</button>
                </li>
            </ul>
        </form>
    </div>
    <div class="login_bottom"></div>
</div>
<div class="Copyright">&copy; <?php echo date('Y'); ?> <a href="http://www.syuchun.com">iSun's Bolg</a></div>
</body>
</html>