<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <!-- import bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>
<body>
    <!-- 网页顶部导航 -->
    <header class="el-topBar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!--菜单标题-->
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <i>028-86261949</i>
                    <span class="time"><!--（服务时间: 9:00-18:00）--></span>
                </a>
                <!--菜单隐藏式显示的按钮-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topMenu"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="topMenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li id="index"><a href="index.php">首页</a></li>
                    <!-- <li><a class="el-current-user" href="#">小强</a></li>
                    <li><a href="#">赶快充值</a></li>
                    <li><a href="./API/loginOut.php">注销</a></li> -->
                    <li><a href="#">帮助</a></li>
                    <li><a href="#" id="contact" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='./images/contract.png' height='110' width='110'>">联系客服 </a></li>        
                </ul>
            </div>
        </div>

    </header>

    <!-- 网页导航 -->
    <div class="navbar navbar-default el-navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="#">
                    <img src="./images/logo.png" alt="logo">
                </a>
            </div>
            <ul class="nav navbar-nav" id="mainNav">
                <li class="active"><a href="index.php?menuid=1">首页</a></li>
                <li><a href="invest.php?menuid=2">我要投资</a></li>
                <li><a href="borrow.php?menuid=3">我要借款</a></li>
                <li><a href="personal.php?menuid=4">个人中心</a></li>
                <li><a href="#">新手指引</a></li>
                <li><a href="#">关于我们</a></li>
            </ul>
            </div>
        </div>
    </div>
    <!-- import：jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    
    <script>
        //根据后端登录的状态，显示对应的菜单
        $.get("./API/userStatusCheck.php",(data)=>{
            console.log(data);
            //判断：
            if(data.isSuccess){
                //显示登录后的menu
                var htmlStr=`<li><a href="#">${data.username}</a></li>
                            <li><a href="#">赶快充值</a></li>
                            <li><a href="./API/loginOut.php">注销</a></li>`;

                $("#index").after(htmlStr);
            }else{
                //显示登录前的menu
                var htmlStr=`<li><a href="./register.php">注册</a></li>
                <li><a href="./login.php">登录</a></li>`;
                $("#index").after(htmlStr);
            }
        },"json");

        // mainNav:点击切换.php功能
        //1.获取url
        var reqUrl=location.href;
        //2.截取.php对应的id
        var menuid=reqUrl.split("=")[1];
        //console.log(".php对应的id：",menuid);
        //3.给id添加active激活的类
        $("#mainNav li").eq(menuid-1).addClass("active").siblings("li").removeClass("active");

    </script>
</body>
</html>