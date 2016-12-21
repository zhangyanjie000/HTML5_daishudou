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
    <style type="text/css">
    	@media screen and (max-device-width: 400px) {
			.myoic_text span p{
				width: 100px;

			}
		}
    </style>
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
	            	<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	                <h1 class="mui-title">智能相册</h1>
	            	<a class="mui-pull-right" href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/haufu.png" style="width: 50%;margin-top: 10%;margin-left: 60%;"/></a>	                
	            </header>

	            <!-- 主页面内容容器 -->

	            <div class="mui-content mui-scroll-wrapper" id="pullrefresh">
   	              <div class="mui-scroll" >
                       <!--栅格-->
					    <div class="mui-row" style="background-color: white;" >
					        <div class="mui-col-sm-5 mui-col-xs-5">
					            <div>
					               <a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/jia.jpg" width="124%"/></a>
					            </div>
					        </div>
					    </div>
					    <?php foreach ($info as $key => $value) { $time = substr("$value[publish_time]",0,10); $content1=mb_substr("$value[content]",0,23,'utf-8'); ?>
					    <div class="mui-row" style="background-color: white; " >
					    
					        <div class="mui-col-sm-4 mui-col-xs-4">
					            <div class="znxc_1">
					                <h4><?php echo ($user_age); ?>岁</h4>
					                <h5><!-- 2016-12-3 --><?php echo ($time); ?></h5>
					            </div>
					        </div>
					        <div class="mui-col-sm-8 mui-col-xs-8 znxc_2"  >
					            <div class="znxc_22">
					             <div class="mui-row">
					            	<div class="mui-col-sm-9 mui-col-xs-9">
					            		<img src="/zhong_daishudou/daishudou/Practicum/Public/<?php echo ($value["m_img"]); ?>" width="90%"  />
					            	</div>
					            	<div class="mui-col-sm-3 mui-col-xs-3">
					            		<span><!-- 宝宝又笑了开心... --><p><?php echo ($content1); ?>&nbsp;</p></span>
					            	</div>
					                     	
					  				</div>              
					            </div>
					        </div>

					    </div>
					    <?php }?>
					    <!--栅格
					    <div class="mui-row" style="background-color: white;" >
					        <div class="mui-col-sm-4 mui-col-xs-4">
					            <div class="znxc_1">
					                <h4>三月三岁</h4>
					                <h5>2016-12-3</h5>
					            </div>
					        </div>
					        <div class="mui-col-sm-8 mui-col-xs-8 znxc_2"  >
					            <div class="znxc_22">
					                <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_all1.png"/>
					                <div class="myoic_text">
					                	<span class="text">宝宝又笑了开心...</span>
					                	<span class="text-icon mui-icon iconfont icon-shouye8">1</span>             	
					                </div>					               
					            </div>
					        </div>
					    </div>栅格-	
					    <div class="mui-row" style="background-color: white;" >
					        <div class="mui-col-sm-4 mui-col-xs-4">
					            <div class="znxc_1">
					                <h4>三月三岁</h4>
					                <h5>2016-12-3</h5>
					            </div>
					        </div>
					        <div class="mui-col-sm-8 mui-col-xs-8 znxc_2"  >
					            <div class="znxc_22">
					                <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_all1.png"/>
					                <div class="myoic_text">
					                	<span class="text">宝宝又笑了开心...</span>
					                	<span class="text-icon mui-icon iconfont icon-shouye8">1</span>             	
					                </div>					               
					            </div>
					        </div>
					    </div>栅格	
					    <div class="mui-row" style="background-color: white;" >
					        <div class="mui-col-sm-4 mui-col-xs-4">
					            <div class="znxc_1">
					                <h4>三月三岁</h4>
					                <h5>2016-12-3</h5>
					            </div>
					        </div>
					        <div class="mui-col-sm-8 mui-col-xs-8 znxc_2"  >
					            <div class="znxc_22">
					                <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_all1.png"/>
					                <div class="myoic_text">
					                	<span class="text">宝宝又笑了开心...</span>
					                	<span class="text-icon mui-icon iconfont icon-shouye8">1</span>             	
					                </div>					               
					            </div>
					        </div>
					    </div>栅格-->	
   	              </div>
	            </div>
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	
	<script type="text/javascript" charset="utf-8">
      mui('.mui-scroll-wrapper').scroll({
			deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
		});
    </script>
    <script type="text/javascript">
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
		//-----------Mui初始化-------------
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
		 
		//-----------下拉刷新-------------
		 
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
</script>
</body>
</html>