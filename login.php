<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户登录</title>
    <!-- import bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
     <!-- 引入bootstrapValidator的样式 -->
     <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/comHeaderLogReg.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
</head>
<body>
    <!-- 引入头部信息 -->
    <!-- 网页顶部导航 -->
    <?php
       require_once("comHeaderLogReg.php");
    ?>

    <!-- 网页导航 -->
    <div class="navbar navbar-default el-navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="#">
                    <img src="./images/logo.png" alt="logo">
                </a>
            </div>
            <h3 class="userLogin">用户登陆</h3>
            </div>
        </div>
    </div>

    <!-- 模板的内容开始 -->
    <div class="container userlogin">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户登录</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="loginForm" method="post">
                    <h4>请输入用户名和密码</h4> 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">用户名：</label>
                        <div class="col-sm-9 inputW">
                        <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">密码：</label>
                        <div class="col-sm-9 inputW">
                        <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">立即登录</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- 模板的内容结尾 -->

    <!-- 引入页脚 -->
     <?php
       require_once("footer.php");
    ?>

    <!-- 蒙层:提示弹框-->
    <div class="modal fade" id="loginAlert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="alertTitle">标题</h4>
            </div>
            <div class="modal-body" id="alertContent">
                内容
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
            </div>
            </div>
        </div>
    </div>

    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入bootstrapValidator的JS库 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入自定义的效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 表单验证的js效果 -->
    <script src="./dist/js/checkForm.min.js"></script>
</html>