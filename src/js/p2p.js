$(function () {
    //工具提示效果
    $('[data-toggle="tooltip"]').tooltip();

    //pc端的单击切换
    $("#btnOnOff").on("click",function(){
        //单击切换类样式：toggleClass("类名")
        $("#mainContent").toggleClass("active");
        //hasClass()方法判断：active类，从而改变文字
        if($("#mainContent").hasClass("active")){
            $(this).text("show");
        }
        else{
            $(this).text("hidden");
        }  
        
    });

    //移动端滑动切换
    //1.开始触碰屏幕：手指的起始位置
    $(window).on("touchstart",function(e){
        var x1=e.originalEvent.changedTouches[0].clientX;
        var y1=e.originalEvent.changedTouches[0].clientY;
    });
    //2.离开屏幕：滑动到目的地后离开屏幕
    $(window).on("touched",function(e){
        var x2=e.originalEvent.changedTouches[0].clientX;
        var y2=e.originalEvent.changedTouches[0].clientY;

        //3.计算滑动距离
        var distanceX = x2-x1;

        //4.判断：不管左右，设置有效滑动100
        if(Math.abs(distanceX)>=100){
            console.log("有效滑动：100");
            $("#btnOnOff").click();
        }
    });    
});


// borrow_apply:
var reqUrl=location.href;
var borrowType=reqUrl.split("=")[1];
$("#borrowType").val(borrowType);
if(!borrowType){
    $("#borrowType").val("b1");
}

//借款信息的前端业务逻辑的处理
//1. 提交按钮的事件监听
$("#btnSubmit").on("click",function () {
    //2. 获取表单元素的值
    var formData=$("#borrowForm").serialize(); 
    //console.log("borrowForm表单元素的值:",formData); 
    //3. 发起ajax请求：
    $.post("../../API/borrowAdd.php",formData,function (result) {
       // console.log("borrowAdd.php表单数据:",result); 
        //4. 判断：根据后端api返回的结果，处理前端逻辑
        if(result.isSuccess){
            //1.设置标题
            $("#alertTitle").text("借款信息注册成功！");
            //2.设置内容：
            $("#alertContent").html(`<span class='glyphicon glyphicon-ok'></span> ${result.msg}，<span id
            ='num'>5</span>秒后跳转到借款信息界面...`);
            //3.设置定时器修改跳转等待数字
            let num=5;
            var timesId=setInterval(()=>{
                num--;
                $("#num").text(num);
                if(num==0){
                    clearInterval(timesId);
                    location.href="borrow_list.php";           
                }
            },1000); 
        }else{
            //1.设置标题
            $("#alertTitle").text("借款信息注册失败！");
            //2.设置内容：
            $("#alertContent").html("<span class='glyphicon glyphicon-remove'></span> "+result.msg);
        }
        //3.显示蒙层
        $('#loginAlert').modal('show');   
    },"json");
});
 

// borrow_list:
//发送ajax请求：后台api获取当前登录用户的借款信息
$.get("./API/borrowList.php",function (result) {
    //console.log("后端api返回的结果",result);
    var htmlStr=$("#borrowTmpl").tmpl(result);
    //console.log(htmlStr);
    //把渲染后的html更新到页面
    $("#borrowData").html(htmlStr);
},"json");

