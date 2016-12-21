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
	<style type="text/css">
		.mui-scroll-wrapper
		{ 
		  background-image: url(images/qinzi2.gif);
		  background-size:100%;
		  background-color: white;
		}
	</style>
	<!-- 亲子活动页面标题 -->
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title">亲子活动</h1>
	    <a class="mui-icon mui-action-menu mui-icon-plusempty mui-pull-right" href="#offCanvasSide" onclick="openZhaoji();"></a>
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
	<!-- 亲子活动页面内容容器 -->
	<div class="mui-content mui-scroll-wrapper" id="pullrefresh">
	    <div class="mui-scroll">
	    <!-- 亲子活动界面具体展示内容 -->
	    	<!--亲子活动页面轮播图 官方和用户成功举办的活动-->
		    <div class="mui-slider">
			  <div class="mui-slider-group mui-slider-loop">
			    <!--支持循环，需要重复图片节点-->
			    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_2.jpg" /></a></div>
			    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_1.jpg" /></a></div>
			    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_2.jpg" /></a></div>
			    <!--支持循环，需要重复图片节点-->
			    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_1.jpg" /></a></div>
			  </div>
			  <!--轮播图圆点-->
			  <div class="mui-slider-indicator">
				<div class="mui-indicator mui-active"></div>
				<div class="mui-indicator"></div>
			  </div>
			</div> 
			
			<!--亲子活动 官方或用户发起的活动-->
			<ul class="mui-table-view mui-grid-view">
				<?php if(is_array($artice1)): $i = 0; $__LIST__ = $artice1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media mui-col-xs-6">
				        <!-- <a href="#" onclick="openActiving();"> -->
				        <a href="#" onclick="openarticle_sys(<?php echo ($a["sys_event_id"]); ?>);">
				            <img class="mui-media-object" src="/zhong_daishudou/daishudou/Practicum/Public/<?php echo ($a["s_e_img"]); ?>">
				            <div class="mui-media-body"><?php echo ($a["s_e_title"]); ?></div>
				        </a>
				    </li><?php endforeach; endif; else: echo "" ;endif; ?>
			    <!-- <li class="mui-table-view-cell mui-media mui-col-xs-6">
			        <a href="#" onclick="openActiving();">
			            <img class="mui-media-object" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_4.jpg">
			            <div class="mui-media-body">宝宝游泳</div>
			        </a>
			    </li>
			    <li class="mui-table-view-cell mui-media mui-col-xs-6">
			        <a href="#" onclick="openActiving();">
			            <img class="mui-media-object" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_3.jpg">
			            <div class="mui-media-body">一起来赏花</div>
			        </a>
			    </li> -->
			    <?php if(is_array($artice2)): $i = 0; $__LIST__ = $artice2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media mui-col-xs-6">
				        <a href="#" onclick="openarticle_user(<?php echo ($b["event_id"]); ?>);">
				            <img class="mui-media-object" src="/zhong_daishudou/daishudou/Practicum/Public/<?php echo ($b["e_img"]); ?>">
				            <div class="mui-media-body"><?php echo ($b["e_title"]); ?></div>
				        </a>
				    </li><?php endforeach; endif; else: echo "" ;endif; ?>
			    <!-- <li class="mui-table-view-cell mui-media mui-col-xs-6">
			        <a href="#" onclick="openActiving();">
			            <img class="mui-media-object" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_3.jpg">
			            <div class="mui-media-body">一起来赏花</div>
			        </a>
			    </li>
			    <li class="mui-table-view-cell mui-media mui-col-xs-6">
			        <a href="#" onclick="openActiving();">
			            <img class="mui-media-object" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/qinzi_4.jpg">
			            <div class="mui-media-body">宝宝游泳</div>
			        </a>
			    </li> -->
			</ul>
		</div>
	</div>
	<div class="mui-off-canvas-backdrop"></div>   
	<script type="text/javascript" charset="utf-8">
      	mui.init({});
      	//openIndex
		document.getElementById("index").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/shouye.html",
				id: "index.html"
			});

		})
		//openFind
		document.getElementById("find").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Action/find.html",
				id: "find.html"
			});

		})
		//openMy
		document.getElementById("my").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/My/my.html",
				id: "my.html"
			});

		})
      	function openZhaoji(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Qinzi/qinzi_zhaoji.html',
				id: 'qinzi_zhaoji.html'
		    });
		}
      	function openActiving(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Qinzi/qinzi_activing.html',
				id: 'qinzi_activing.html'
		    });
		}

		//系统活动动态获取
		function openarticle_sys(a){
			this.a=a;
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Qinzi/qinzi_activing_sys.html'+"?id="+a,
		    });
		}
		//用户活动动态获取
		function openarticle_user(b){
			this.b=b;
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Qinzi/qinzi_activing_user.html'+"?id="+b,
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
<!--<script type="text/javascript">
		function formatDate(now) {
		var toLocaleDateString = now.toLocaleDateString();
		var hour = now.getHours();
		var minute = now.getMinutes();
		var second = now.getSeconds();
		//return toLocaleDateString + " " + hour + ":" + minute + ":" + second;
		return toLocaleDateString ;
		}
		var myDate = new Date();
		myDate.setTime(myDate.getTime()-4000);
		var OldData = formatDate(myDate);
		//-&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;Mui初始化-&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;
		mui.init({
		swipeBack: false,
		pullRefresh: {
		container: '#pullrefresh',
		down: {
		callback: pulldownRefresh,
		height: 60,
		auto: false,
		contentdown: "下拉刷新", //可选,在下拉可刷新状态时,下拉刷新控件上显示的标题内容
		//contentover: "释放立即刷新", //可选,在释放可刷新状态时,下拉刷新控件上显示的标题内容
		//contentrefresh: '   ' + "正在刷新" + '' + "上次刷新：" + OldData, //可选,正在刷新状态时,下拉刷新控件上显示的标题内容
		contentrefresh: '   ' + "正在刷新" , //可选,正在刷新状态时,下拉刷新控件上显示的标题内容
		contentmore: '刷新完成'
		},
		}
		 
		});
		 
		//-&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;下拉刷新-&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;
		 
		function pulldownRefresh() {
		var myDate1 = new Date();
		var FirstData = formatDate(myDate1);
		// console.log(FirstData);
		 
		var text = document.getElementsByClassName("mui-pull-caption");
		console.log(text[0].innerHTML);
		setTimeout(function() {
		//text[0].innerHTML = "   刷新完成" + '' + "最新刷新：" + FirstData;
		//}, 2500);
		text[0].innerHTML = "   刷新完成" ;
		}, 2000);
		// 设置刷新完成的时间为2.5秒后显示,把dom的innerHTML获取到后,修改为“刷新完成 和最新时间”即可。
		setTimeout(function() {
		location.reload();
		mui('#pullrefresh').pullRefresh().endPulldownToRefresh(); //refresh completed
		}, 2500);
		//设置正在刷新的时间为3秒,dom的innerHTML 为“正在刷新 和 上次刷新时间”。
		}
</script>-->
</body>
</html>