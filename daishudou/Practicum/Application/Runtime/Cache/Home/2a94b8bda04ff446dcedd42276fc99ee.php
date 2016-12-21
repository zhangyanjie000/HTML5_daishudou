<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
    <link href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/mui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/iconfont.css"> 
</head>
<body>
	
	
	<!-- 发现页面内容容器 -->
	<div class="mui-content mui-scroll-wrapper">
	    <div class="mui-scroll">
	    <!-- 发现界面具体展示内容 -->
	    	<!--发现页面轮播图-->
		    <div class="mui-slider">
			  <div class="mui-slider-group mui-slider-loop">
			    <!--支持循环，需要重复图片节点-->
			    <div class="mui-slider-item mui-slider-item-duplicate ">
			   		 <a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/welcome3.jpg" /></a>
			    </div>
			    <div class="mui-slider-item ">
			    	<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/welcome1.jpg" /></a>
			    </div>
			    <div class="mui-slider-item ">
			    	<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/welcome2.jpg" /></a>
			    </div>
			    <div class="mui-slider-item " >
			    	<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/welcome3.jpg" />
			    	    <button id="welcome" type="button" class="mui-btn"style="background-image: url(/zhong_daishudou/daishudou/Practicum/Public/Former/images/welcome3_03.png); background-size: 100%;background-repeat:no-repeat;background-color:#ace3e0;width:40%;height:8em;border:0px;position:absolute;top:75%;left:30%;">
					    </button> 
			    	</a>
			    </div>
			    <!--支持循环，需要重复图片节点-->
			    <div class="mui-slider-item mui-slider-item-duplicate">
			    	<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/welcome1.jpg" /></a>
			    </div>
			  </div>
			  <!--轮播图圆点-->
			  <div class="mui-slider-indicator"style="margin-bottom: 30px;">
				<div class="mui-indicator mui-active"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
			  </div>
			</div> 
		
			<!--发现页面分类-->
			
		</div>
	</div>
	 
	
	<script type="text/javascript" charset="utf-8">
      	mui.init();
      	document.getElementById("welcome").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/shouye",
				id: "shouye.html"
			});
			
		})

      	/*图片每隔两秒自动轮播*/
      	mui.plusReady(function(){
		    //获得slider插件对象
		    var gallery = mui('.mui-slider');
		        gallery.slider({
		  	    interval:0//自动轮播周期，若为0则不自动播放，默认为0；
		    });
		});
		(function($) {
			$('.mui-scroll-wrapper').scroll({
				indicators: false //是否显示滚动条
			});
		})(mui);
    </script>
</body>
</html>