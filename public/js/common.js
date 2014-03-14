$(document).ready(function(){

    jQuery('#qrcode').qrcode({
            width: 300,
            height: 250,
            render: "canvas",
            text: $("#text").val()
    });

    //导航
    $('.menu li#home').click(function(){
        var index = $(this).index();
        changeIndexNav(index);
        $('html,body').animate({scrollTop:$('#b0').offset().top}, 500);
    });
    $('.menu li#case').click(function(){
        var index = $(this).index();
        changeIndexNav(index);
        $('html,body').animate({scrollTop:$('#b1').offset().top}, 500);
    });
    $('.menu li#contact').click(function(){
        var index = $(this).index();
        changeIndexNav(index);
        $('html,body').animate({scrollTop:$('#b2').offset().top}, 500);
    });

    function changeIndexNav(index){
        $('.header .menu li:eq('+index+')').addClass('cur').siblings().removeClass('cur');
    }

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
            },
            tel: {
                required: true,
                number: true,
            },
            email: {
                required: false,
                email: true
            },
            content: {
                required: true
            }
        },
        messages: {
            username: {
                required: "请输入您的姓名!"
            },
            tel: {
                required: "请输入您的电话!",
                number: "电话号码必须为数字!",
            },
            email: {
                email: "请输入正确的邮箱地址!"
            },
            content: {
                required: "请输入留言内容!"
            }
        },
        //设置错误信息存放
        errorElement: "div",
        //设置验证触发事件
        focusInvalid: true,
    })
});