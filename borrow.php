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
    <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
</head>
<body>
    <!-- header:nav -->
    <?php
    include_once('./header.php');
    ?>

    <!-- section -->
    <div class="container el-borrow">
		<div class="row">
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title" style="background-color: #40d47e;">
					信用贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow_apply.php?id=b1" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title">车易贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow_apply.php?id=b2" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title" style="background-color: #2ca2ee;">
					房易贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 12,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow_apply.php?id=b3" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
		</div>
	</div>
    
    <!--底部链接内容-->
    
    <?php
    require_once("./footer.php");
    ?>


    <!-- import iquery.js -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- import bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!--  自定义：import p2p.min.js -->
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>