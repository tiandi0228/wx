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
                rangelength:[2,16]
            },
            tel: {
                required: true,
                number: true,
                rangelength:[11,11]
            },
            qq: {
                number: true
            },
            content: {
                required: true
            }
        },
        messages: {
            username: {
                required: "请填写用户名",
                rangelength: "姓名长度必须在{0}和{1}位数"
            },
            tel: {
                required: "请填写手机号码",
                rangelength: "手机号码长度为{0}位数",
                number: "手机号码只能是数字"
            },
            qq: {
                number: "QQ号码只能是数字"
            },
            content: {
                required: "请输入留言内容"
            }
        },
        //设置错误信息存放
        errorElement: "div",
        //设置验证触发事件
        focusInvalid: true,
    })
});