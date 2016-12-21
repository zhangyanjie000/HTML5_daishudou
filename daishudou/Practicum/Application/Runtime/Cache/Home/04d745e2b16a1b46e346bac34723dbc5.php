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
	                <h1 class="mui-title" style="font-size: 20px;">我的</h1>
	            </header>
	            <nav class="mui-bar mui-bar-tab">
	    		    <a class="mui-tab-item" id="index">
	    		        <span class="mui-icon iconfont icon-shouye5"></span>
	    		        <span class="mui-tab-label">圈子</span>
	    		    </a>
	    		    <a class="mui-tab-item" id="find">
	    		        <span class="mui-icon iconfont icon-shouye22"></span>
	    		        <span class="mui-tab-label">发现</span>
	    		    </a>
	    		    <a class="mui-tab-item mui-active" id="my">
	    		        <span class="mui-icon iconfont icon-shouye8"></span>
	    		        <span class="mui-tab-label">我的</span>
	    		    </a>
	    		</nav>
	            <!-- 主页面内容容器 -->

	            <div class="mui-content mui-scroll-wrapper" >
	                <div class="mui-scroll">
	                	<div class="my_style_pic" style="font-family: '微软雅黑';"><!--我的展示-->
                           <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_tou.png" width="15%" height="18%" style="margin-top:1em;" />
                           <p class="my_p1">新萌宝宝</p>
                           <p class="my_p2">2岁</p>
                           <p class="my_p3"> 签到23天</p>
	                	</div>
	                  	<!--描述：列表 -->  
	                    <ul class="mui-table-view my_ui_top">
						    <li class="mui-table-view-cell">
						        <a class="mui-navigate-right"><span class="mui-icon iconfont icon-icon2">&nbsp;&nbsp;  文章管理</span></a>					    
						    </li>						     
	                    </ul>
	                    
	                     <div class="mui-row"  style="font-family: '微软雅黑';" align="center">
					        <div class="mui-col-sm-4 mui-col-xs-4">
					            <li class="mui-table-view-cell hua">					                
					                <a href="#" id="my_allwork">
					                <span class="mui-icon iconfont icon-icon2"></span>
					                <h2  style="font-family: '微软雅黑';"> 我的文章</h2>
					                </a>
					            </li>
					        </div>
					        <div class="mui-col-sm-4 mui-col-xs-4">
					            <li class="mui-table-view-cell hua">
					                <a href="#" id="my_xiangguan"> <span class="mui-icon iconfont icon-shouye8"></span>
					                <h2  style="font-family: '微软雅黑';">与我相关</h2>
					                </a>
					            </li>
					        </div>
					        <div class="mui-col-sm-4 mui-col-xs-4">
					            <li class="mui-table-view-cell ">
					                 <a href="#" id="my_shoucang"><span class="mui-icon iconfont icon-icon1"></span>
					                <h2  style="font-family: '微软雅黑';">我的收藏</h2></a>
					            </li>
					        </div>
					    </div>
	                    	
						<ul class="mui-table-view my_ui_top">
						     <li class="mui-table-view-cell">
						        <a class="mui-navigate-right" id="my_set">
						        	<span class="mui-icon iconfont icon-shouye12">  &nbsp;信息设置</span>
						        </a>
						    </li>
						   <li class="mui-table-view-cell">
						        <a class="mui-navigate-right" id="my_pictures"><span class="mui-icon iconfont icon-icon16">  &nbsp;智能相册</span></a>
						    </li>
						    <li class="mui-table-view-cell">
						       <a class="mui-navigate-right " id="my_about"><span class="mui-icon iconfont icon-shouye8">  &nbsp;关于我们</span></a>
						    </li>
						</ul>
	                </div>
	            </div>
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	
	<script type="text/javascript" charset="utf-8">
     	mui('.mui-scroll-wrapper').scroll({
			deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
		});
		//openIndex
		document.getElementById("index").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/shouye",
				id: "shouye.html"
			});
			
		})
		//openFind
		document.getElementById("find").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Action/find",
				id: "find.html"
			});
			
		})
		//openMy
		document.getElementById("my").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/my/my",
				id: "my.html"
			});
			
		})
		//openMy_pictures
		document.getElementById("my_pictures").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Mypictures/my_pictures",
				id: "my_pictures.html"
			});
			
		})
document.getElementById("my_set").addEventListener('tap',function(){
		    mui.openWindow({
			url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Myset/my_set',
			id    :'my_set.html'
		    });
	})
 document.getElementById("my_about").addEventListener('tap',function(){
		    mui.openWindow({
			url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Myaboutwe/my_about',
			id    :'my_about.html'
		    });
	})
 document.getElementById("my_xiangguan").addEventListener('tap',function(){
		    mui.openWindow({
			url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Myxiangguan/my_xiangguan',
			id    :'my_xiangguan.html'
		    });
	})
 document.getElementById("my_shoucang").addEventListener('tap',function(){
		    mui.openWindow({
			url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Myshoucang/my_shoucang.html',
			id    :'my_shoucang.html'
		    });
	})
 document.getElementById("my_allwork").addEventListener('tap',function(){
		    mui.openWindow({
			url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Myworks/my_allwork',
			id    :'my_allwork.html'
		    });
	})
      
      
    </script>
</body>
</html>