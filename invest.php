<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我要投资</title>
    <!-- import: bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
	<!-- import: query.pagination.css分页插件样式 -->
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>
<body>
    <!-- header:nav -->
    <?php
			include_once('./header.php');
			?>

    <!-- 网页内容 -->
	<div class="container">
		<h4 class="page-title">投资列表</h4>
		<form id="searchForm" style="height:100%;">
			<div style="margin: 20px 0px;">
                <span class="text-muted">标的状态</span><div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
                </label>
                <label class="btn btn-default">
                <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
                </label>
                <label class="btn btn-default">
                <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
                </label>
			</div>			
		</form>
		<table class="table el-table table-hover">
			<thead id="gridHead">
				<tr>
					<th>借款人</th>
					<th width="180px">借款标题</th>
					<th>年利率</th>
					<th>金额</th>
					<th>还款方式</th>
					<th>进度</th>
					<th width="80px">操作</th>
				</tr>
			</thead>
			<tbody id="gridBody">
		
			</tbody>
		</table>
		<div style="text-align: center;margin: 0 5%;">
			<div id="page" class="m-pagination"></div>
		</div>
		<!-- <div style="text-align: center;">
			<div id="page" class="m-pagination">
				<ul class="m-pagination-page" style="">
					<li class="active"><a data-page-index="0">1</a></li>
					<li><a data-page-index="1">2</a></li><li><a data-page-index="2">3</a></li>
					<li><a data-page-index="3">4</a></li>
				</ul>
				<div class="m-pagination-size" style="">
					<select data-page-btn="size">
						<option value="5">5</option>
						<option value="10">10</option>
						<option value="15">15</option>
						<option value="20">20</option>
					</select>
				</div>
			    <div class="m-pagination-jump" style="">
					<div class="m-pagination-group">
						<input type="text"><button data-page-btn="jump" type="button">Go</button>
					</div>
				</div>
				<div class="m-pagination-info" style="">1 ~ 5页 共20页</div>
			</div>
		</div> -->
	</div>

    
    <!--底部链接内容-->
    
    <?php
			require_once("./footer.php");
			?>


    <!-- import iquery.js -->
    <script src="./lib/jquery/jquery.min.js"></script>
	<!-- import tmpl.js -->
	<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
	<!-- import pagination-1.2.7.min.js -->
	<script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <!-- import bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!--  自定义：import p2p.min.js -->
    <script src="./dist/js/p2p.min.js"></script>
	<!-- 定义模板： 用户渲染数据 -->
	<script id="borrowTmpl" type="text/html">
		<tr>
			<td>${username}</td>
			<td>${borrowTitle}</td>
			<td class="text-info">${currentRate}%</td>
			<td class="text-info">${borrowAmount}</td>
			<td>${repayment}</td>
			<td>100%</td>
			<td><a class="btn btn-danger btn-sm" href="#">查看</a></td>
		</tr>
    </script>
	<script>
        //投资页面加载时自动发起ajax请求获取数据
        // $.get("./API/borrowList.php",function (result) {
        //     //渲染模板
        //     var htmlStr=$("#borrowTmpl").tmpl(result);
        //     //把渲染后的结果更新到页面
        //     $("#gridBody").html(htmlStr);
        // },"json");


        //5. 配置插件的参数
        $("#page").page({
            debug: true, //开启调试
            showInfo: true, //显示调试信息
            pageSize: 5, //定义每页的数据条数
            showJump: true, //开启跳转功能
            showPageSizes: true, //用户自定义每页大小
            remote: {
                //请求数据的地址
                url: './API/invest.php', //请求的数据
                //请求成功的回调函数
                success: function (data) {
                    //console.log("获取api回来的数据",data);
                    //渲染模板
                    var htmlStr=$("#borrowTmpl").tmpl(data.list);
                    //把渲染后的结果更新到页面
                    $("#gridBody").html(htmlStr);
                    $("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
                }
            }
        });

       $("#page").on("pageClicked", function (event, pageIndex) {
           // $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
       }).on('jumpClicked', function (event, pageIndex) {
           // $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
       }).on('pageSizeChanged', function (event, pageSize) {
          //  $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
       });
    </script>
</body>
</html>