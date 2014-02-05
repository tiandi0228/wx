<?php
//单入口模式
define('APP_DEBUG',TRUE); // 开启调试模式
define('DIR_SECURE_FILENAME', 'default.html');
// 定义运行时目录
define('RUNTIME_PATH','./Runtime/');
// 更名框架目录名称，并载入框架入口文件
require './Think/ThinkPHP.php';