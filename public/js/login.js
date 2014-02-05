$(document).ready(function(){
    //设置默认属性
    $.validator.setDefaults({
        submitHandler: function(form) {
            form.submit();
        }
    }),

    //开始验证
    $("#form").validate({
        rules: {
            username: {
                required: true,
                number: true,
                rangelength: [11,11],
                remote: "/Admin/Check/username"
            },
            password: {
                required: true,
                minlength: 6,
                remote: "/Admin/Check/pwd"
            }
        },
        messages: {
            username: {
                required: "请输入手机号码!",
                number: "请输入手机号码!",
                rangelength: "手机号码为{0}位数!",
                remote: "手机号码错误，请重新输入!"
            },
            password: {
                required: "请填写密码!",
                minlength: jQuery.format("密码长度不能少于{0}位数!"),
                remote: "密码错误，请重新输入!"
            }
        },
        //设置错误信息存放
        errorElement: "div",
        //设置验证触发事件
        focusInvalid: true,
    })
});