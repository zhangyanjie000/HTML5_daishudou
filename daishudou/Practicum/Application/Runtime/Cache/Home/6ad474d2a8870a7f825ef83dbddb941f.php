<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>my</title>
    <script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
    <link href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/mui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/iconfont.css"> 
</head>
<body>
	<!-- 主界面菜单同时移动 -->
	    <!-- 侧滑导航根容器 -->
	    <div class="mui-off-canvas-wrap mui-draggable">
	        <!-- 主页面容器 -->
	        <div class="mui-inner-wrap">
	            <!-- 菜单容器 -->
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	            	<a  style="color:#eb6d85;" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	                <h1 class="mui-title" style="font-size: 20px;">信息设置</h1>
	            </header>
	            
	            <!-- 主页面内容容器 -->

	            <div class="mui-content mui-scroll-wrapper">
	                <div class="mui-scroll">

	                  	<!--描述：列表 -->  
	                    <ul class="mui-table-view my_ui_top">
						    <li class="mui-table-view-cell">
		     				    
						        <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_tou.png" width="20%">
						        <button type="button" class="mui-btn mui-btn-warning mui-btn-outlined">更换图像</button>
						    </li>						     
	                    </ul>

						<ul class="mui-table-view my_ui_top">
						     <li class="mui-table-view-cell">
						     	<a href="#" id="my_change_nicheng">
						            <span class="mui-icon iconfont icon-shouye22">昵  称</span></span>
						       	    <span class="mui-pull-right">新萌宝宝</span>
						     	</a>
						    </li>
						   <li class="mui-table-view-cell" id="my_change_password">

						        	<span class="mui-icon iconfont icon-shouye22">密   码</span>
						        	<span class="mui-pull-right">123456</span>

						    </li>
						    <li class="mui-table-view-cell" id='pickDateBtn'>
						      
						       	<span class="mui-icon iconfont icon-shouye8">宝宝出生日期</span>
						       	<span class="mui-pull-right">2013-12-2</span>

						    </li>
						    <li class="mui-table-view-cell" id="my_change_dizhi">
						       <span class="mui-icon iconfont icon-shouye8">地址</span>
						       <span class="mui-pull-right">未设置</span>
						    </li> 
						</ul>
						<ul class="mui-table-view my_ui_top">
						    <li class="mui-table-view-cell">
						       <a class="">
						       	<span class="mui-icon iconfont icon-shouye8">新消息提醒</span>
						       	<div class="mui-switch mui-switch-mini mui-active">
						       	  <div class="mui-switch-handle"></div>
						       	</div>
						       </a>
						    </li>
						     <li class="mui-table-view-cell">
						      <br>
						      <div class="out">
						       <button type="button" class="mui-btn mui-btn-danger"><a  href="#sheet">退出登录</a></button>
						     </div>
						     </li>
						</ul>
						<!--弹出菜单确定退出登陆-->
						<div id="sheet" class="mui-popover mui-popover-bottom mui-popover-action ">
						    <!-- 可选择菜单 -->
						    <ul class="mui-table-view">
						      <li class="mui-table-view-cell">
						        <a href="#" style="font-family: '微软雅黑';color: deeppink;">确定</a>
						      </li>
						      
						    </ul>
						    <!-- 取消菜单 -->
						    <ul class="mui-table-view">
						      <li class="mui-table-view-cell">
						        <a href="#" style="font-family: '微软雅黑';color: deeppink;">取消</a>
						      </li>
						    </ul>
						</div>	<!--弹出菜单确定退出登陆-->
						
						
	                </div>
	            </div>
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	
	<script type="text/javascript" charset="utf-8">
      	mui('.mui-scroll-wrapper').scroll({
			deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
		});

document.getElementById("my_change_nicheng").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Myset/my_change_nicheng.html",
				id: "my_change_nicheng.html"
			});
			
		})
 document.getElementById("my_change_password").addEventListener('tap',function(){
		    mui.openWindow({
			url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Myset/my_change_password.html',
			id    :'my_change_password.html'
		    });
		})
document.getElementById("my_change_dizhi").addEventListener('tap',function(){
		    mui.openWindow({
			url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Myset/my_change_dizhi.html',
			id    :'my_change_dizhi.html'
		    });
	})
      	document.getElementById("pickDateBtn").addEventListener('tap', function() {
    var dDate = new Date();
    //设置当前日期（不设置默认当前日期）
    dDate.setFullYear(2016, 11, 16);
    var minDate = new Date();
    //最小时间
    minDate.setFullYear(1950, 0, 1);
    var maxDate = new Date();
    //最大时间
    maxDate.setFullYear(2016, 11, 31);
    plus.nativeUI.pickDate(function(e) {
        var d = e.date;
        mui.toast('您选择的日期是:' + d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate());
    }, function(e) {
        mui.toast("您没有选择日期");
    }, {
        title: '请选择日期',
        date: dDate,
        minDate: minDate,
        maxDate: maxDate
    });
});
    </script>
    
</body>
</html>