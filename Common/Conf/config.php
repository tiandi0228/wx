<?php
//+-------------------------------------------------------
//+ @name $config 系统配置文件
//+-------------------------------------------------------
$config = require './config.php';
$array = array(
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin','Mobile'),
    'DEFAULT_MODULE'       =>    'Home',
    // 设置禁止访问的模块列表
    'MODULE_DENY_LIST'      =>  array('Common','Runtime','Api'),
    //默认需要认证模型
    'URL_CASE_INSENSITIVE'  =>true,//URL是否不区分大小写 默认区分大小写
    'DB_FIELDTYPE_CHECK'    =>true, //是否进行字段类型检查
    'DATA_CACHE_SUBDIR'     =>true,//哈希子目录动态缓存的方式
    'TMPL_CACHE_ON'         =>false,//调式期关闭缓存
    'DATA_PATH_LEVEL'       =>'2',
    'URL_HTML_SUFFIX' => 'html|shtml|xml',//伪静态
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
);
return array_merge($config,$array);