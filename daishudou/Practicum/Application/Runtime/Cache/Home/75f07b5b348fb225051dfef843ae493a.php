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
	<!-- 发现页面标题 -->
	<header class="mui-bar mui-bar-nav">
	    <h1 class="mui-title">发现</h1>
	</header>
	<nav class="mui-bar mui-bar-tab">
	    		    <a class="mui-tab-item" id="index">
	    		        <span class="mui-icon iconfont icon-shouye5"></span>
	    		        <span class="mui-tab-label">圈子</span>
	    		    </a>
	    		    <a class="mui-tab-item mui-active" id="find">
	    		        <span class="mui-icon iconfont icon-shouye22"></span>
	    		        <span class="mui-tab-label">发现</span>
	    		    </a>
	    		    <a class="mui-tab-item" id="my">
	    		        <span class="mui-icon iconfont icon-shouye8"></span>
	    		        <span class="mui-tab-label">我的</span>
	    		    </a>
	</nav>
	<!-- 发现页面内容容器 -->
	<div class="mui-content mui-scroll-wrapper">
	    <div class="mui-scroll">
	    <!-- 发现界面具体展示内容 -->
	    	<!--发现页面轮播图-->
		    <div class="mui-slider">
			  <div class="mui-slider-group mui-slider-loop">
			    <!--支持循环，需要重复图片节点-->
			    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/find_3.jpg" /></a></div>
			    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/find_1.jpg" /></a></div>
			    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/find_2.jpg" /></a></div>
			    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/find_3.jpg" /></a></div>
			    <!--支持循环，需要重复图片节点-->
			    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/find_1.jpg" /></a></div>
			  </div>
			  <!--轮播图圆点-->
			  <div class="mui-slider-indicator">
				<div class="mui-indicator mui-active"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
			  </div>
			</div> 
			<br/>
			<!--发现页面分类-->
			<div class="mui-row" >
					<div class="mui-col-xs-6 caidan" >
		              <a href="#" onclick="openCommunication();">
		            	<div class="">
							<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/1.jpg" />
							<div class="tips">
								交流问答
								<p>共同解决我们的难题</p>
							</div>
						</div>
		              </a>
		        </div>

		        <div class="mui-col-xs-6 caidan" >
		              <a href="#" onclick="openQimeng();">
		            	<div class="caisan">
							<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/5.jpg" />
							<div class="tips">
								启蒙教育
								<p>早教铸就智慧</p>
							</div>
						</div>
		              </a>
		        </div>
		        <div class="mui-col-xs-6 caidan" >
		              <a href="#" onclick="openQinzi();">
		            	<div class="caisan">
							<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/3.jpg" />
							<div class="tips">
								亲子活动
								<p>亲情活动锦囊</p>
							</div>
						</div>
		              </a>
		        </div>
		        <div class="mui-col-xs-6 caidan" >
		              <a href="#" onclick="openWeightloss();">
		            	<div class="caisan">

							<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/6.jpg" />
							<div class="tips">
								产后减肥
								<p>产后减肥妙手</p>
							</div>
						</div>
		              </a>
		        </div>
		        <div class="mui-col-xs-6 caidan" >
		              <a href="#" onclick="openBabyfood();">
		            	<div class="caisan">
		            	
							<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/2.jpg" />
							<div class="tips">
								宝宝辅食
								<p>宝宝健康成长</p>
							</div>
						</div>
		              </a>
		        </div>
		        <div class="mui-col-xs-6 caidan" >
		              <a href="#" onclick="openStory();">
		            	<div class="caisan">
							<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/14.png" />
							<div class="tips">
								睡前故事
								<p>温馨故事汇集</p>
							</div>
						</div>
		              </a>
		        </div>
		    </div>
		</div>
	</div>
	<div class="mui-off-canvas-backdrop"></div>   
	
	<script type="text/javascript" charset="utf-8">
      	mui.init();
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
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/My/my",
				id: "my.html"
			});
			
		})
      	function openQimeng(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Qimeng',
				id: 'qimeng.html'
		    });
		}
      	
      	function openQinzi(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Qinzi',
				id: 'qinzi.html'
		    });
		}
      	function openStory(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Story',
				id: 'story.html'
		    });
		}
      	function openSearch(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Action/search',
				id: 'search.html'
		    });
		}
      	function openCommunication(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Communication',
				id: 'communication.html'
		    });
		}
      	function openWeightloss(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Weightloss',
				id: 'weightloss.html'
		    });
		}
      	function openBabyfood(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Babyfood',
				id: 'babyfood.html'
		    });
		}
      	/*图片每隔两秒自动轮播*/
      	mui.plusReady(function(){
		    //获得slider插件对象
		    var gallery = mui('.mui-slider');
		        gallery.slider({
		  	    interval:2000//自动轮播周期，若为0则不自动播放，默认为0；
		    });
		});
		(function($) {
			$('.mui-scroll-wrapper').scroll({
				indicators: true //是否显示滚动条
			});
		})(mui);
    </script>
</body>
</html>