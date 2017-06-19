<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo (!empty($title)) ? $title : '星享后台' ?></title>
    <link rel="stylesheet" href="/htdocs/Public/template/assets/css/index.min.css">
    <!--<link rel="stylesheet" href="/htdocs/Public/template/assets/css/bootstrap/css/bootstrap.css">-->

    <script src="/htdocs/Public/template/assets/js/vendor/jquery.min.js" data-main="/htdocs/Public/template/assets/js/common"></script>
    <script>
        var publicUrl = "/htdocs/Public";
        var rootUrl = "/htdocs/index.php/Home";
    </script>
</head>
<body>
<div class="wrap">
    <div class="header">
        <div class="clearfix layout">
            <h1><a href="/htdocs/index.php/Home/AdminBacker/index">星享管理系统</a></h1>
            <div>
                <span class="spantext" >管理员：<?php echo ($user['uid']); ?>,<a style="color:#FF0000;" href="/htdocs/index.php/Home/login/doLoginout" onclick="return confirm('确定退出本系统?')" >系统退出</a></span>
            </div>
        </div>
    </div>
    <div class="main">
        <style>
    .submenu{display: none;}
    .submenu li{color: #CCCCCC;}
    .act{background-color: #FFB6C1}
    .select{border-bottom: 2px dashed red;}
    .icon-star-img {
        width: 120px;
    }
</style>
<?php
 $starArr = array('Star', 'Info', 'Lucida', 'Meet', 'Appoint', 'Timer'); $cusArr = array( 'Customer'); $starCtr = array('carousel', 'listing', 'meet', 'appoint'); ?>
<div class="sidebar">
    <ul class="nav-list">
        <li class="pli">
            <a href="/htdocs/index.php/Home/AdminBacker/index" <?php if(CONTROLLER_NAME == 'AdminBacker'){echo 'class="active"';} ?>><i class="icon-home"></i><strong> 后台管理</strong></a>
        </li>
        <li class="pli">
            <a href="javascript:;" <?php if(in_array(CONTROLLER_NAME, $starArr)){echo 'class="active"';} ?>><i class="icon-star"></i><strong> 明星管理</strong></a>
            <ul class="submenu">
                <li><a href="/htdocs/index.php/Home/Star/carousel" <?php if(CONTROLLER_NAME == 'Star' && ACTION_NAME =='carousel'){echo 'class="act"';} ?>>轮播列表</a></li>
                <li><a href="/htdocs/index.php/Home/Info/listing" <?php if(CONTROLLER_NAME == 'Info' && ACTION_NAME =='listing'){echo 'class="act"';} ?>>资讯列表</a></li>
                <li><a href="/htdocs/index.php/Home/Lucida/listing" <?php if(CONTROLLER_NAME == 'Lucida' && ACTION_NAME =='listing'){echo 'class="act"';} ?>>明星列表</a></li>
                <li><a href="/htdocs/index.php/Home/Meet/meet" <?php if(CONTROLLER_NAME == 'Meet' && ACTION_NAME =='meet'){echo 'class="act"';} ?>>约见管理</a></li>
                <li><a href="/htdocs/index.php/Home/Appoint/appoint" <?php if(CONTROLLER_NAME == 'Appoint' && ACTION_NAME =='appoint'){echo 'class="act"';} ?>>约见类型管理</a></li>
                <li><a href="/htdocs/index.php/Home/Timer/listing" <?php if(CONTROLLER_NAME == 'Timer' && ACTION_NAME =='listing'){echo 'class="act"';} ?>>明星时间管理</a></li>
            </ul>
        </li>
        <li class="pli">
            <a href="javascript:;" <?php if(in_array(CONTROLLER_NAME, $cusArr)){echo 'class="active"';} ?>><i class="icon-tags"></i><strong> 消费者管理</strong></a>
            <ul class="submenu">
                <li><a href="/htdocs/index.php/Home/Customer/listing" <?php if(CONTROLLER_NAME == 'Customer' && ACTION_NAME =='listing'){echo 'class="act"';} ?>>消费者列表</a></li>
                <!--<li><a href="#">分享统计列表</a></li>-->
            </ul>
        </li>
        <li class="pli">
            <a href="javascript:;"><i class="icon-align-right"></i><strong> 数据查询</strong></a>
            <ul class="submenu">
                <li><a href="#">资金查询</a></li>
                <li><a href="#">持仓汇总查询</a></li>
                <li><a href="#">出入金查询</a></li>
                <li><a href="#">交易额明细查询</a></li>
                <li><a href="#">成交明细查询</a></li>
            </ul>
        </li>
        <li class="pli">
            <a href="javascript:;"><i class="icon-user"></i><strong> 系统账户管理</strong></a>
            <ul class="submenu">
                <li><a href="#">账户权限</a></li>
                <li><a href="#">账户角色</a></li>
                <li><a href="#">创建系统账户</a></li>
                <li><i class="fa fa-globe"></i>系统账户管理<i class="fa fa-chevron-down"></i></li>
                <ul>
                    <li><a href="#">区域总经销列表</a></li>
                    <li><a href="#">经销商列表</a></li>
                    <li><a href="#">零售商列表</a></li>
                </ul>
            </ul>
        </li>
    </ul>
</div>
<script>
    $(function () {
        $(".pli").each(function () {

            //是否已有选中的菜单
            var isActive   = $(this).children('a').hasClass('active');
            var box = $(this).children("ul");

            //添加点击事件
            $(this).children("a").bind("click", function () {

                //只留一个选中样式的菜单
                $(".pli a").removeClass('active');
                $(this).children('a').addClass('active');

                //是否已是选中状态 | 取消选中
                var isOpen   = (box).hasClass('open');
                if (box != undefined && isOpen == false) {
                    box.show();
                    box.addClass("open");
                } else {
                    box.hide();
                    box.removeClass("open");
                }
            });

            //默认选中并展开子菜单
            if (isActive) {
                box.show();
                box.addClass("open");
            }

        });
    });
</script>
        <div class="content">

<div class="control-bar">
    <h3><?php echo $title;?></h3>
</div>

<div class="data-container">
    <table>
        <thead>
        <tr>
            <th>创建时间</th>
            <th>约见明星</th>
            <th>活动名称</th>
            <th>目的城市</th>
            <th>消费者</th>
            <th>状态</th>
            <th>约见总金额</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div class="pagination"></div>
</div>

<div data-remodal-id="addMeetModal" class="remodal addMeetModal">
    <div class="remodal-head">
        <div class="remodal-title">约见信息</div>
        <div data-remodal-action="cancel" class="remodal-close"></div>
    </div>
    <div class="remodal-body">
        <form class="modalForm" enctype="multipart/form-data">
            <input type="text" name="id" style="display: none">
            <div class="form-control">
                <label>明星姓名</label>
                <input type="text" name="starname" readonly>
            </div>
            <div class="form-control">
                <label>明星编号</label>
                <input type="text" name="starcode" value="">
            </div>
            <div class="form-control">
                <label>粉丝昵称</label>
                <input type="text" name="nickname">
            </div>
            <div class="form-control">
                <label>创建时间</label>
                <input type="text" name="addtime" value="">
            </div>
            <div class="form-control">
                <label>约见类型</label>
                <input type="text" name="meettype" value="">
            </div>
            <div class="form-control">
                <label>目的城市</label>
                <input type="text" name="place">
            </div>
            <div class="form-control">
                <label>约见日期</label>
                <input type="text" name="timer" value="">
            </div>
            <div class="form-control">
                <label>约见状态</label>
                <input type="text" name="status" value="">
            </div>
            <div class="form-control">
                <label>约见总金额</label>
                <input type="text" name="price" value="">
            </div>
        </form>
    </div>
</div>

<div id="browse" class="browse">
</div>

<script src="/htdocs/Public/template/assets/js/vendor/require.js" data-main="/htdocs/Public/template/assets/js/common"></script>
<script>
    function status(obj) {
        var _this = $(obj);
        var id = _this.attr("data-id");
        $.ajax({
            type: "POST",
            url: "/htdocs/index.php/Home/Meet/status",
            dataType: "json",
            data: {id : id},
            success: function(msg){
                alert(msg.message);
                window.location.reload(true);
            }
        });
    }
    require(['common'], function () {
        require(['page/meet']);
    });
</script>


                </div>
            </div>
        </div>
    </bod>
</html>