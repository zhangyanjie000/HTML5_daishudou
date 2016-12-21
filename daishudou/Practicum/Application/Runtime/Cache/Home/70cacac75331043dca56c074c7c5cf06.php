<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
    <script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/jquery.js"></script>
    
    <link href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/mui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/iconfont.css"> 
</head>
<body>
	<style type="text/css">
		.mui-scroll-wrapper
		{ 
		  background-image: url(images/qinzi_activing1.gif);
		  background-size:100%;
		  background-color: white;
		}
		.mui-scroll {
		  background:-moz-linear-gradient(#fff,pink);
		  background:-webkit-gradient(linear,center top,center bottom,from(#fff),to(pink));
		  background:-webkit-linear-gradient(#fff,pink);
		  background:-o-linear-gradient(#fff,pink);
		  background:-ms-linear-gradient(#fff,pink);
		  background:linear-gradient(#fff,pink);
		}
	</style>
	<!-- 主界面菜单同时移动 -->
	    <!-- 侧滑导航根容器 -->
	    <div class="mui-off-canvas-wrap mui-draggable">
	        <!-- 主页面容器 -->
	        <div class="mui-inner-wrap">
	            <!-- 菜单容器 -->
	           
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	                <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    			<h1 class="mui-title">亲子活动</h1>
	            </header>
	           
	            <!-- 主页面内容容器 -->
	            <div class="mui-content mui-scroll-wrapper" >
	                <div class="mui-scroll">
	                    <!-- 主界面具体展示内容 -->
	                    <div class="actcle1"style="text-align:center;padding-top:5px;">
	                    	<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_3.jpg"style="width:200px;height:150px;">
	                    </div>
	                    <form class="mui-input-group">
						    <div class="mui-input-row">
						        <label>标题：</label>
						        <p style="text-align:left;padding-top:10px;color:black;"><?php echo ($article_sys["s_e_title"]); ?>
						        </p>
						    </div>
						    <div class="mui-input-row">
						        <label>地点：</label>
						    	<p style="text-align:left;padding-top:10px;color:black;"><?php echo ($article_sys["s_e_address"]); ?>
						    	</p>
						    </div>
						    <div class="mui-input-row">
						        <label>日期：</label>
						    	<p style="text-align:left;padding-top:10px;color:black;"><?php echo ($article_sys["s_e_time"]); ?>
						    	</p>
						    </div>
						    <div class="mui-input-row" style="height:300px;">
						        <label for="textarea" style="padding-top:40px ;">详细介绍：</label>
						    	<textarea cols="40" rows="10" style="height:100%;"  name="textarea" id="textarea"  placeholder="详细内容">
						    		<?php echo ($article_sys["s_e_detail"]); ?>
						    	</textarea>
						    </div>
						</form>		    
	            </div>
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	
	<script type="text/javascript" charset="utf-8">
      	mui.init();
      	function openFind(){
		    mui.openWindow({
				url    : 'find.html',
				id: 'find.html'
		    });
		}
      	(function($) {
			$('.mui-scroll-wrapper').scroll({
				indicators: true //是否显示滚动条
			});
		})(mui);
    </script>
</body>
</html>