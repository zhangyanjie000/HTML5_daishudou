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
	<style>
		*{	/**/
	    -webkit-box-sizing: border-box;
	            box-sizing: border-box;
	    -webkit-user-select: none;
	    outline: none;
	    -webkit-tap-highlight-color: transparent;
	    -webkit-tap-highlight-color: transparent;
		}
		.green-ball {	/*进度条*/
	    width: 10px;
	    height: 10px;
	    background-color: #eb6c85;
	    border-radius: 50%;
	    margin-left: auto;
	    margin-right: auto;
		}
		.block-style {
		    width:100%;/* 选项卡占页面的比例 */
		    margin-left: auto;/* 居中 */
		    margin-right: auto;/* 居中 */
		}
		.control-item-inline {	/*滑动选项卡*/
		    width:25%;
		    display:inline-block;
		    float: left;
		    color: #eb6c85;
		}
		.mui-control-content {	/*内容主题*/
		    min-height: 500px;
		}
	</style>
	<!-- 睡前故事页面标题 -->
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title">睡前故事</h1>
	    <a class="mui-icon mui-action-menu mui-icon-search mui-pull-right" href="#offCanvasSide" onclick="openSearch();"></a>
	</header>
	<nav class="mui-bar mui-bar-tab" onclick="openIndex();">
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
	<!-- 睡前故事页面内容容器 -->
	<div class="mui-content mui-scroll-wrapper" id="pullrefresh">
	    <div class="mui-scroll">
	    <!-- 睡前故事界面具体展示内容 -->
	    <div id="slider" class="mui-slider">
	    	<div id="sliderSegmentedControl" class="mui-slider-indicator mui-fullscreen mui-segmented-control mui-segmented-control-inverted">
	            <div class="block-style">
	                <div class="control-item-inline"><a class="mui-control-item mui-active" href="#item1mobile">推广</a></div>
	                <div class="control-item-inline"><a class="mui-control-item" href="#item2mobile">经典故事</a></div>
	                <div class="control-item-inline"><a class="mui-control-item" href="#item3mobile">早教故事</a></div>
	                <div class="control-item-inline"><a class="mui-control-item" href="#item4mobile">音频故事</a></div>
	            </div>
        	</div>
	    	<!-- 进度条 -->
	        <div class="block-style">
	            <div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-3" style="margin-top: -6px;">
	                <div class="green-ball"></div>
	            </div>
	        </div>
			
	        <div class="mui-slider-group">
	            <!-- 推广 -->
	            <div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
	            	<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
	            		<ul class="mui-table-view mui-table-view-chevron">
		            		<?php if(is_array($artice1)): $i = 0; $__LIST__ = $artice1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li>
									<!--故事标题及作者-->
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <!-- <a href="javascript:;" onclick="openStory_article();"> 
										         -->
										        <a href="javascript:;" onclick="openarticle_123(<?php echo ($a["sys_story_id"]); ?>);">
										            <!-- <img class="mui-media-object mui-pull-left" src=" /zhong_daishudou/daishudou/Practicum/Public/Former/images/5.jpeg"> -->
										            <img class="mui-media-object mui-pull-left" src=" <?php echo ($a["story_img"]); ?>" width="52em" height="52em">
										            <div class="mui-media-body" width="10em" height="10em">
										                <b><?php echo ($a["story_title"]); ?></b>
										                <p class='mui-ellipsis'><?php echo ($a["story_time"]); ?></p>
										            </div>
										        </a>
										    </li>
										</ul>
										<!--内容区-->
										<div class="mui-card-content">
											<p><?php echo ($a["story"]); ?></p>
											<img src="<?php echo ($a["story_img"]); ?>" width="100%"/>
										</div>
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
								
								<!-- <li>
									故事标题及作者
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <a href="javascript:;" onclick="openStory_article();">
										            <img class="mui-media-object mui-pull-left" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/5.jpeg">
										            <div class="mui-media-body">
										                <b>柴犬一家</b>
										                <p class='mui-ellipsis'>BY 南拳妈妈</p>
										            </div>
										        </a>
										    </li>
										</ul>
										内容区
										<div class="mui-card-content">
											<p>小可爱一家亲，我是爸爸</p>
											<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/story2.jpg" width="100%"/>
										</div>
									</div>
								</li> -->
						</ul>
	            		</div>
	            	</div>
	            </div>
	            <!-- 经典故事 -->
	            <div id="item2mobile" class="mui-slider-item mui-control-content">
	            	<div>
	            		<ul class="mui-table-view mui-table-view-chevron">
	            			<?php if(is_array($artice2)): $i = 0; $__LIST__ = $artice2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li>
									<!--故事标题及作者-->
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <a href="javascript:;" onclick="openarticle_123(<?php echo ($a["sys_story_id"]); ?>);">
										            <img class="mui-media-object mui-pull-left" src="<?php echo ($a["story_img"]); ?>" width="52em" height="52em">
										            <div class="mui-media-body" width="52em" height="52em">
										                <b><?php echo ($a["story_title"]); ?></b>
										                <p class='mui-ellipsis'><?php echo ($a["story_time"]); ?></p>
										            </div>
										        </a>
										    </li>
										</ul>
										<!--内容区-->
										<div class="mui-card-content">
											<p><?php echo ($a["story"]); ?></p>
											<img src="<?php echo ($a["story_img"]); ?>" width="100%"/>
										</div>
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>	
								<!-- <li>
									故事标题及作者
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <a href="javascript:;" onclick="openStory_article();">
										            <img class="mui-media-object mui-pull-left" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/5.jpeg">
										            <div class="mui-media-body">
										                <b>柴犬</b>
										                <p class='mui-ellipsis'>BY 南拳妈妈</p>
										            </div>
										        </a>
										    </li>
										</ul>
										内容区
										<div class="mui-card-content">
											<p>小可爱一家亲，我是爸爸</p>
											<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/story2.jpg" width="100%"/>
										</div>
									</div>
								</li> -->
						</ul>
	            	</div>
	            </div>
	            <!-- 早教故事 -->
	            <div id="item3mobile" class="mui-slider-item mui-control-content">
	            	<div>
	            		<ul class="mui-table-view mui-table-view-chevron">
							<?php if(is_array($artice3)): $i = 0; $__LIST__ = $artice3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li>
									<!--故事标题及作者-->
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <a href="javascript:;" onclick="openarticle_123(<?php echo ($a["sys_story_id"]); ?>);">
										            <img class="mui-media-object mui-pull-left" src="<?php echo ($a["story_img"]); ?>" width="52em" height="52em">
										            <div class="mui-media-body" width="52em" height="52em">
										                <b><?php echo ($a["story_title"]); ?></b>
										                <p class='mui-ellipsis'><?php echo ($a["story_time"]); ?></p>
										            </div>
										        </a>
										    </li>
										</ul>
										<!--内容区-->
										<div class="mui-card-content">
											<p><?php echo ($a["story"]); ?></p>
											<img src="<?php echo ($a["story_img"]); ?>" width="100%"/>
										</div>
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
								
								<!-- <li>
									故事标题及作者
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <a href="javascript:;" onclick="openStory_article();">
										            <img class="mui-media-object mui-pull-left" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/5.jpeg">
										            <div class="mui-media-body">
										                <b>柴犬一家</b>
										                <p class='mui-ellipsis'>BY 南拳妈妈</p>
										            </div>
										        </a>
										    </li>
										</ul>
										内容区
										<div class="mui-card-content">
											<p>小可爱一家亲，我是爸爸</p>
											<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/story2.jpg" width="100%"/>
										</div>
									</div>
								</li> -->
						</ul>
	            	</div>
	            </div>
	            <!-- 音频故事 -->
	            <div id="item4mobile" class="mui-slider-item mui-control-content">
	            	<div>
	            		<ul class="mui-table-view mui-table-view-chevron">
							<?php if(is_array($artice4)): $i = 0; $__LIST__ = $artice4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li>
									<!--故事标题及作者-->
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <a href="javascript:;" onclick="openarticle_yinpin(<?php echo ($a["sys_story_id"]); ?>);">
										            <img class="mui-media-object mui-pull-left" src="<?php echo ($a["story_img"]); ?>" width="10em" height="52em">
										            <div class="mui-media-body" width="52em" height="52em">
										                <b><?php echo ($a["story_title"]); ?></b>
										                <p class='mui-ellipsis'><?php echo ($a["story_time"]); ?></p>
										            </div>
										        </a>
										    </li>
										</ul>
										<!--内容区-->
										<div class="mui-card-content">
											<p><?php echo ($a["story"]); ?></p>
											<img src="<?php echo ($a["story_img"]); ?>" width="100%"/>
										</div>
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
								
								<!-- <li>
									故事标题及作者
									<div class="mui-card">
										<ul class="mui-table-view">
										    <li class="mui-table-view-cell mui-media">
										        <a href="javascript:;" onclick="openStory_article_yinpin();">
										            <img class="mui-media-object mui-pull-left" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/5.jpeg">
										            <div class="mui-media-body">
										                <b>柴犬一家</b>
										                <p class='mui-ellipsis'>BY 南拳妈妈</p>
										            </div>
										        </a>
										    </li>
										</ul>
										内容区
										<div class="mui-card-content">
											<p>小可爱一家亲，我是爸爸</p>
											<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/story2.jpg" width="100%"/>
										</div>
									</div>
								</li> -->
						</ul>
	            	</div>
	            </div>
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
      	function openStory_article(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Story/story_article_123.html',
				id: 'story_article_123.html'
		    });
		}
      	function openStory_article_yinpin(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Story/story_article_yinpin.html',
				id: 'story_article_yinpin.html'
		    });
		}
      	function openSearch(){
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Story/search.html',
				id: 'search.html'
		    });
		}
		//动态获取
		function openarticle_123(a){
			this.a=a;
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Story/story_article_123.html'+"?id="+a,
		    });
		}
		function openarticle_yinpin(a){
			this.a=a;
		    mui.openWindow({
				url    : '/zhong_daishudou/daishudou/Practicum/index.php/Home/Story/story_article_yinpin.html'+"?id="+a,
		    });
		}
		
		(function($) {
			$('.mui-scroll-wrapper').scroll({
				indicators: true //是否显示滚动条
			});
			<!--根据选择获取各个面板-->
			/*var html2 = '<ul class="mui-table-view"><li class="mui-table-view-cell">第二个选项卡子项-1</li><li class="mui-table-view-cell">第二个选项卡子项-2</li><li class="mui-table-view-cell">第二个选项卡子项-3</li><li class="mui-table-view-cell">第二个选项卡子项-4</li><li class="mui-table-view-cell">第二个选项卡子项-5</li></ul>';*/
			var html2 = '';
			var item2 = document.getElementById('item2mobile');
			document.getElementById('slider').addEventListener('slide', function(e) {
				if (e.detail.slideNumber === 1) {
					if (item2.querySelector('.mui-loading')) {
						setTimeout(function() {
							item2.querySelector('.mui-scroll').innerHTML = html2;
						}, 500);
					}
				}
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