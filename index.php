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
    <!-- header:nav -->
    <?php
    include_once('./header.php');
    ?>

    <!-- banner广告部分:slide -->
    <div class="container-fuil">
            <div id="carousel-banner-generi" class="carousel slide el-banner" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-banner-generi" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-banner-generi" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./images/banner01.jpg" alt="banner01">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="./images/banner02.jpg" alt="banner02...">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-banner-generi" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-banner-generi" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>  

    <!-- 项目3大特色feature -->
    <div class="container" id="feature">
        <div class="row">
            <dl class="col1 col-xs-12 col-sm-4">
                <dt>投资理财</dt>
                <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
            </dl>
            <dl class="col2 col-xs-12 col-sm-4">
                <dt>投资理财</dt>
                <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
            </dl>
            <dl class="col3 col-xs-12 col-sm-4">
                <dt>投资理财</dt>
                <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
            </dl>
        </div>
    </div>  

    <!-- 投资列表 -->
    <div class="container el-panel" id="investList">
       <!-- 投资面板 -->
       <div class="panel el-panel"> 
          <div class="panel-title">
             <span class="pull-left">进行中借款</span>
             <div class="pull-right">
                <a href="#" class="btn btn-link">进入投资列表</a>
             </div>
          </div>

          <table class="table el-table table-hover">
             <thead>
                 <tr>
                     <th>借款人</th>
                     <th class="hideTitle">借款标题</th>
                     <th>年利率</th>
                     <th>金额</th>
                     <th class="hideTitle">还款方式</th>
                     <th>进度</th>
                     <th>操作</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>张三</td>
                     <td class="hideTitle">给我2000度过难关</td>
                     <td>10.00%</td>
                     <td>2,000.00</td>
                     <td class="hideTitle">按月分期还款</td>
                     <td>78.00%</td>
                     <td><a href="#" class="btn btn-danger btn-sm">查看</a></td>
                 </tr>
                 <tr>
                     <td>王五</td>
                     <td class="hideTitle">江湖救急，借100吃饭</td>
                     <td>12.00%</td>
                     <td>100.00</td>
                     <td class="hideTitle">按月到期还款</td>
                     <td>100.00%</td>
                     <td><a href="#" class="btn btn-danger btn-sm">查看</a></td>
                 </tr>
                 <tr>
                     <td>赵六</td>
                     <td class="hideTitle">江湖救急，借100吃饭</td>
                     <td>12.00%</td>
                     <td>100.00</td>
                     <td class="hideTitle">按周到期还款</td>
                     <td>100.00%</td>
                     <td><a href="#" class="btn btn-danger btn-sm">查看</a></td>
                 </tr>
             </tbody>
          </table>
       </div>

       <!-- artical-list -->
       <div class="row"> 
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel el-panel">
                    <div class="panel-title">
                        <span class="pull-left">
                            企业最新资讯
                        </span>
                        <div class="pull-right">
                            <a class="btn btn-link " href="#">
                                更多资讯
                            </a>
                        </div>
                    </div>
                    <div class="el-new-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel el-panel">
                    <div class="panel-title">
                        <span class="pull-left">
                        用户反馈
                        </span>
                        <div class="pull-right">
                            <a class="btn btn-link " href="#">
                                更多资讯
                            </a>
                        </div>
                    </div>
                    <div class="el-new-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel el-panel">
                    <div class="panel-title">
                        <span class="pull-left">
                        理财经验
                        </span>
                        <div class="pull-right">
                            <a class="btn btn-link " href="#">
                                更多资讯
                            </a>
                        </div>
                    </div>
                    <div class="el-new-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel el-panel">
                    <div class="panel-title">
                        <span class="pull-left">
                            活动分享
                        </span>
                        <div class="pull-right">
                            <a class="btn btn-link " href="#">
                                更多资讯
                            </a>
                        </div>
                    </div>
                    <div class="el-new-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left">央视力挺互联网金融</span>
                                    <span class="pull-right">发表日期：2015-03-23</span>
                                    <span class="clearfix"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
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