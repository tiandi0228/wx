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
        <h3>添加商品</h3>
    </div>
    <div class="widget-content">
        <!--编辑商品-->
        <div class="contents">
            <form action="/Admin/Pro/update" method="post">
                <input type="hidden" name="pid" value="<?php echo ($pid); ?>">
                <table class="table table-striped table-bordered table-set">
                    <tbody>
                        <tr>
                            <th width="8%">商品名字</th>
                            <td><input type="text" name="proname" id="proname" value="<?php echo ($proname); ?>"></td>
                        </tr>
                        <tr>
                            <th>市场价</th>
                            <td><input type="text" name="price" id="price" value="<?php echo ($price); ?>"></td>
                        </tr>
                        <tr>
                            <th>会员价</th>
                            <td><input type="text" name="pricing" id="pricing" value="<?php echo ($pricing); ?>"></td>
                        </tr>
                        <tr>
                            <th>商品图片</th>
                            <td>
                                <div class="controls">
                                    <a style="float:right" id="upload"></a>
                                    <div id="controls">
                                        <ul class="imagelist" id="image_result">
                                            <?php if($file != ''): if(is_array($file)): foreach($file as $key=>$vscms): if (empty($vscms)) continue;?>
                                                    <li class="imageitem">
                                                        <input type="hidden" name="file[]" value="<?php echo ($vscms); ?>">
                                                        <img height="160" width="160" src="<?php echo ($vscms); ?>" />
                                                        <span class="txt">
                                                            <a title="删除" class="del" href='javascript:;'><img src="/public/uploadify/remove.png" /></a>
                                                        </span>
                                                    </li><?php endforeach; endif; endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>商品分类</th>
                            <td>
                                <select name="catid">
                                    <option value="1" <?php if($catid == 1): ?>selected<?php endif; ?>>新品上市</option>
                                    <option value="2" <?php if($catid == 2): ?>selected<?php endif; ?>>促销专区</option>
                                    <option value="3" <?php if($catid == 3): ?>selected<?php endif; ?>>精品推荐</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>商品介绍</th>
                            <td><textarea name="contents" style="height:100px;"><?php echo ($contents); ?></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="btn">编辑</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <!--编辑商品-->
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