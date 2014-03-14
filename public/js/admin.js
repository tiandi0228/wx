$(document).ready(function(){
    //Tab滑动效果
    $('.widget-header span').click(function(){
        $('.widget-header span').removeClass("current");
        $(this).addClass("current");
        $(".contents").slideUp('1500').eq($('.widget-header span').index(this)).slideDown('1500');
    });

    //设置默认属性
    $.validator.setDefaults({
        submitHandler: function(form) {
            form.submit();
        }
    }),

    //开始验证
    $("#form").validate({
        rules: {
            password: {
                required: true,
                minlength: 6,
                remote: "/Admin/Check/pwd"
            },
            news_password: {
                required: false,
                minlength: 6,
            },
            confirm_password: {
                required: false,
                minlength: 6,
                equalTo: "#news_password"
            },
            realname: {
                minlength:2
            },
            email: {
                required: false,
                email: true,
            },
            tel: {
                required: true,
                number: true,
                rangelength:[11,11]
            },
            mobile: {
                required: true,
                number: true,
                rangelength: [11,11],
                remote: "/Admin/Check/mobile"
            },
            proname: {
                required: true
            }
        },
        messages: {
            password: {
                required: "请填写旧密码!",
                minlength: jQuery.format("密码长度不能少于{0}位数!"),
                remote: "密码错误，请重新输入!"
            },
            news_password: {
                required: "请填写密码!",
                minlength: jQuery.format("密码长度不能少于{0}位数!"),
                remote: "密码错误，请重新输入!"
            },
            confirm_password: {
                required: "请输入确认密码",
                minlength: jQuery.format("密码长度不能少于{0}位数!"),
                equalTo: "两次输入密码不一致不一致"
            },
            realname: {
                minlength: jQuery.format("真实姓名不能少于{0}位数")
            },
            email: {
                email: "邮箱格式不正确，如：xxx@live.com"
            },
            tel: {
                required: "请填写手机号码",
                rangelength: "手机号码长度为{0}位数",
                number: "手机号码只能是数字"
            },
            mobile: {
                required: "请填写手机号码",
                number: "手机号码只能是数字",
                rangelength: "手机号码长度为{0}位数",
                remote: "手机号码重复，请重新输入!"
            },
            proname: {
                required: "请输入商品名称!",
            }
        },
        //设置错误信息存放标签
        errorElement: "div",
        //指定错误信息位置
        errorPlacement: function(error, element) {
            if ( element.is(":radio") )
                error.appendTo( element.parent().next().next() );
            else if ( element.is(":checkbox") )
                error.appendTo ( element.next() );
            else
                error.appendTo( element.parent().next() );
        },
        //设置验证触发事件
        focusInvalid: true,
        //设置验证成功提示格式
        success:function(e)
        {
            e.html("&nbsp;").addClass("success");
        }
    })
});