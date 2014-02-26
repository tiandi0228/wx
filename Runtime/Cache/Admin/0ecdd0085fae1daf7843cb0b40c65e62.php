<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>后台登录</title>
    <meta name="description" content="iSun微信" />
    <meta name="keywords" content="iSun微信" />
    <link rel="stylesheet" href="/public/css/reset.css?v=0.1" type="text/css"/>
    <link rel="stylesheet" href="/public/css/admin.css?v=0.1" type="text/css"/>
    <link rel="stylesheet" href="/public/uploadify/uploadify.css?v=0.1" type="text/css" />
    <script src="/public/js/jquery-1.10.2.js?v=0.1"></script>
    <script src="/public/js/jquery.validate.min.js?v=0.1"></script>
    <script src="/public/js/jquery.validate.message_cn.js?v=0.1"></script>
    <script src="/public/js/admin.js?v=0.1"></script>
    <script src="/public/uploadify/jquery.uploadify-3.1.min.js?v=0.1"></script>
    <script src="/public/js/jquery.qrcode.js?v=0.1"></script>
    <script>
        $(function(){
            $("#upload").uploadify({
                swf : '/public/uploadify/uploadify.swf',
                uploader : '/Admin/Pro/upload',
                width : 120,
                height : 30,
                buttonText : '选择图片',
                auto : true,
                removeCompleted: false,
                onUploadSuccess: function(file, data, response) {
                    $('#progress').hide();
                    var result = $.parseJSON(data);
                    if(result.status == 0){
                        alert(result.message);
                        return false;
                    }
                    //上传成功
                    var id = Math.random().toString();
                    id = id.replace('.','_'); //生成唯一标示
                    var html = '<li class="imageitem" id="'+id+'">';
                    html+= '<input type="hidden" name="file[]" value="'+result.file+'">';
                    html+= '<img height="160" width="160" src="'+result.file+'" />';
                    html+=  '<span class="txt">';
                    html+=  '<a title="删除" href=javascript:remove("'+result.file+'","'+id+'");><img src="/public/uploadify/remove.png" /></a>';
                    html+=  '</span>';
                    html+=  '<em><textarea style="height:20px;width:145px;">'+file.name+'</textarea></em>';
                    html+=  '</li>';
                    $('#image_result').append(html);
                },
                onUploadStart: function(){
                    $('#progress').text('正在上传，请耐心等待…');
                },
                onInit: function (){
                    $("#upload-queue").hide(); //隐藏上传队列
                }
            });
        });
        function remove(file,id){
            alert('确定要删除吗？');
            $('#'+id).remove();
        }

        $(document).on('click','.del',function(){
            $(this).parents('li:first').remove();
        })
    </script>
</head>
<body>
<table width="100%" height="100%" style="table-layout:fixed;">
    <tbody>
    <tr class="header">
        <td>
            <div class="menu">
                <ul>
                    <li><a href="/Admin/Index">首页</a></li>
                    <li><a href="/Admin/Pro">商品列表</a></li>
                    <li>
                        <a href="/Admin/Message">留言
                            <?php if($count == 0): elseif($count <= 99): ?><span><?php echo ($count); ?></span>
                                <?php else: ?><span>99+</span><?php endif; ?>
                        </a>
                    </li>
                    <?php if($_SESSION["groupid"] == "1"){?><li><a href="/Admin/User">会员列表</a></li><?php }?>
                    <?php if($_SESSION["groupid"] == "1"){?><li><a href="/Admin/User/Add">添加会员</a></li><?php }?>
                    <li><a href="/Admin/Business">商家信息</a></li>
                    <li><a href="/Admin/User/Profile">个人信息</a></li>
                    <li><a href="/Admin/User/Pwd">修改密码</a></li>
                </ul>
            </div>
            <div class="user">欢迎您：<span class="userInfo"><?php echo $_SESSION["realname"] ?></span>
                <a href="/Admin/Login/logout">[退出]</a>
            </div>
        </td>
    </tr>
    <tr class="content">
        <td valign="top">
            <div class="container">
<div class="widget widget-table">
    <div class="widget-header">
        <h3><span>修改密码</span></h3>
    </div>
    <div class="widget-content">
        <!--修改密码-->
        <div class="contents">
            <form id="form" action="/Admin/User/Pwd" method="post">
                <table class="table table-striped table-bordered table-set">
                    <tbody>
                    <tr>
                        <th width="8%">旧&nbsp;&nbsp;密&nbsp;&nbsp;码</th>
                        <td width="25%"><input type="password" name="password" id="password"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>新&nbsp;&nbsp;密&nbsp;&nbsp;码</th>
                        <td><input type="password" name="news_password" id="news_password"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>确认密码</th>
                        <td><input type="password" name="confirm_password" id="confirm_password"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan="2">
                            <button class="btn">修 改</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <!--修改密码-->
    </div>
</div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<script>
jQuery('#qrcode').qrcode({
        width: 200,
        height: 200,
        render: "table",
        text: $("#text").val()
});
</script>
</body>
</html>