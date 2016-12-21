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

	<link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/photoswipe.css">

	<!-- Skin CSS file (optional)
         In folder of skin CSS file there are also:
         - .png and .svg icons sprite,
         - preloader.gif (for browsers that do not support CSS animations) -->
	<link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/default-skin/default-skin.css">

	<!-- Core JS file -->
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/photoswipe.js"></script>

	<!-- UI JS file -->
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/photoswipe-ui-default.js"></script>


</head>
<body>
<style>
	*{	/**/
		-webkit-box-sizing:border-box;
		box-sizing:border-box;
		-webkit-user-select:none;
		outline:none;
		-webkit-tap-highlight-color:transparent;
		-webkit-tap-highlight-color:transparent;
	}
	.green-ball {	/*进度条*/
		width:10px;
		height:10px;
		background-color:#eb6c85;
		border-radius:50%;
		margin-left:auto;
		margin-right:auto;
	}
	.block-style {
		width:100%;/* 选项卡占页面的比例 */
		margin-left:auto;/* 居中 */
		margin-right:auto;/* 居中 */
	}
	.control-item-inline {	/*滑动选项卡*/
		width:25%;
		display:inline-block;
		float:left;
		color:#eb6c85;
	}
	.mui-control-content {	/*内容主题*/
		min-height:500px;
	}
</style>
<!-- 宝宝辅食页面标题 -->
<header class="mui-bar mui-bar-nav">
	<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	<h1 class="mui-title">启蒙教育</h1>
	<a class="mui-icon mui-action-menu mui-icon-plusempty mui-pull-right" href="#offCanvasSide" onclick="openPublish();"></a>
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
<!-- 宝宝辅食页面内容容器 -->
<div class="mui-content mui-scroll-wrapper" id="pullrefresh" >
	<div class="mui-scroll">
		<!-- 宝宝辅食界面具体展示内容 -->
		<div id="slider" class="mui-slider">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<div class="block-style">
					<div class="control-item-inline" style="width:50%;"><a class="mui-control-item mui-active" href="#item1mobile">讨论区</a></div>
					<div class="control-item-inline"style="width:50%;" ><a class="mui-control-item" href="#item2mobile">热点推广</a></div>
				</div>
			</div>
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-6"></div>
			<!-- 进度条 -->


			<div class="mui-slider-group">
				<!-- 推广 -->
				<div id="item1mobile" class="mui-slider-item mui-control-content">
					<div>
						<ul class="mui-table-view mui-table-view-chevron">
							<li>
								<!--故事标题及作者-->
								<div class="mui-card">
									<!--页眉,放置标题-->
									<div class="mui-card-header mui-card-media">
										<div class="my-simple-gallery" itemscope itemtype="#"style="float:left;">
											<figure itemscope itemtype="#"style="margin:0px;">
												<a href="<?php echo ($user["user_img"]); ?>" itemprop="contentUrl" data-size="1024x1024">
													<img src="<?php echo ($user["user_img"]); ?>" itemprop="thumbnail" alt="Image description" style="width:30px;height:30px ;"/>
												</a>
											</figure>
										</div>
										<div class="mui-media-body">
											<?php echo ($user["user_name"]); ?>
											<p>宝宝生日：<?php echo ($user["user_birth"]); ?></p>
										</div>
									</div>
									<!--内容区-->

									<?php if(is_array($artice)): $i = 0; $__LIST__ = $artice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="mui-card-content">
											<ul class="mui-table-view" >
												<li class="mui-table-view-cell mui-media">
													<a href="javascript:;" class="mui-navigate-right" onclick="openarticleWindow1(<?php echo ($a["m_id"]); ?>);">
														<div class="mui-media-body">
															<button type="button" class="mui-btn mui-btn-outlined"style="padding:0px;margin-top:5px;float:left;">推荐</button>
															<p class='mui-ellipsis'><?php echo ($a["title"]); ?></p>
														</div>
													</a>
												</li>
											</ul>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>


								</div>
							</li>
							<li>
								<!--故事标题及作者-->
								<div class="mui-card">
									<!--页眉,放置标题-->
									<div class="mui-card-header mui-card-media">
										<div class="my-simple-gallery" itemscope itemtype="#"style="float:left;">
											<figure itemscope itemtype="#"style="margin:0px;">
												<a href="<?php echo ($user2["user_img"]); ?>" itemprop="contentUrl" data-size="1024x1024">
													<img src="<?php echo ($user2["user_img"]); ?>" itemprop="thumbnail" alt="Image description" style="width:30px;height:30px ;"/>
												</a>
											</figure>
										</div>
										<div class="mui-media-body">
											<?php echo ($user2["user_name"]); ?>
											<p>宝宝生日：<?php echo ($user2["user_birth"]); ?></p>
										</div>
									</div>
									<!--内容区-->
									<?php if(is_array($artice1)): $i = 0; $__LIST__ = $artice1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><div class="mui-card-content">
											<ul class="mui-table-view" >
												<li class="mui-table-view-cell mui-media">
													<a href="javascript:;" class="mui-navigate-right" onclick="openarticleWindow1(<?php echo ($b["m_id"]); ?>);">
														<div class="mui-media-body">
															<button type="button" class="mui-btn mui-btn-outlined"style="padding:0px;margin-top:5px;float:left;">推荐</button>
															<p class='mui-ellipsis'><?php echo ($b["title"]); ?></p>
														</div>
													</a>
												</li>
											</ul>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>

								
								</div>
							</li>
							<li>
								<!--故事标题及作者-->
								<div class="mui-card">
									<!--页眉,放置标题-->
									<div class="mui-card-header mui-card-media">
										<div class="my-simple-gallery" itemscope itemtype="#"style="float:left;">
											<figure itemscope itemtype="#"style="margin:0px;">
												<a href="<?php echo ($user3["user_img"]); ?>" itemprop="contentUrl" data-size="1024x1024">
													<img src="<?php echo ($user3["user_img"]); ?>" itemprop="thumbnail" alt="Image description" style="width:30px;height:30px ;"/>
												</a>
											</figure>
										</div>
										<div class="mui-media-body">
											<?php echo ($user3["user_name"]); ?>
											<p>宝宝生日：<?php echo ($user3["user_birth"]); ?></p>
										</div>
									</div>
									<!--内容区-->
									<?php if(is_array($artice2)): $i = 0; $__LIST__ = $artice2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><div class="mui-card-content">
											<ul class="mui-table-view" >
												<li class="mui-table-view-cell mui-media">
													<a href="javascript:;" class="mui-navigate-right" onclick="openarticleWindow1(<?php echo ($c["m_id"]); ?>);">
														<div class="mui-media-body">
															<button type="button" class="mui-btn mui-btn-outlined"style="padding:0px;margin-top:5px;float:left;">推荐</button>
															<p class='mui-ellipsis'><?php echo ($c["title"]); ?></p>
														</div>
													</a>
												</li>
											</ul>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>

									<!--页脚,放置补充信息或支持的操作-->
							
								</div>
							</li>

						</ul>
					</div>
				</div>
				<!-- 经典故事 -->
				<div id="item2mobile" class="mui-slider-item mui-control-content">
					<div>
						<ul class="mui-table-view mui-table-view-chevron">


							<?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media"style="text">
									<div class="my-simple-gallery" itemscope itemtype="#"style="float:left;">
										<figure itemscope itemtype="#"style="margin:6px;">

											<a href="<?php echo ($d["a_img"]); ?>" itemprop="contentUrl" data-size="1024x1024">
												<img src="<?php echo ($d["a_img"]); ?>" itemprop="thumbnail" alt="Image description"style="width:50px;height:50px;float:left" width:100%;/>
											</a>
										</figure>
									</div>
									<a href="javascript:;" onclick="openarticleWindow2(<?php echo ($d["article_id"]); ?>);" style="float:left;padding-left:20px ;text-align:left;">

										<div class="mui-media-body">
											<?php echo ($d["a_title"]); ?>
											<p class='mui-ellipsis'>  <?php echo ($d["a_time"]); ?></p>
										</div>
									</a>

								</li><?php endforeach; endif; else: echo "" ;endif; ?>


						</ul>
					</div>

				</div>
				<!-- 早教故事 -->

			</div>
		</div>
	</div>
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe.
         It's a separate element, as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

		<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
		<div class="pswp__container">
			<!-- don't modify these 3 pswp__item elements, data is added later on -->
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<!--  Controls are self-explanatory. Order can be changed. -->

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>



				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

				<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>

			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>

			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			</button>

			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>

		</div>

	</div>

</div>


<div class="mui-off-canvas-backdrop"></div>
<script type="text/javascript" charset="utf-8">
	mui.init();

	(function($) {
		$('.mui-scroll-wrapper').scroll({
			indicators:true //是否显示滚动条
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
<script type="text/javascript" charset="utf-8">

	var initPhotoSwipeFromDOM = function(gallerySelector) {

		// parse slide data (url, title, size ...) from DOM elements
		// (children of gallerySelector)
		var parseThumbnailElements = function(el) {
			var thumbElements = el.childNodes,
					numNodes = thumbElements.length,
					items = [],
					figureEl,
					childElements,
					linkEl,
					size,
					item;

			for(var i = 0; i < numNodes; i++) {


				figureEl = thumbElements[i]; // <figure> element

				// include only element nodes
				if(figureEl.nodeType !== 1) {
					continue;
				}

				linkEl = figureEl.children[0]; // <a> element

				size = linkEl.getAttribute('data-size').split('x');

				// create slide object
				item = {
					src:linkEl.getAttribute('href'),
					w:parseInt(size[0], 10),
					h:parseInt(size[1], 10)
				};



				if(figureEl.children.length > 1) {
					// <figcaption> content
					item.title = figureEl.children[1].innerHTML;
				}

				if(linkEl.children.length > 0) {
					// <img> thumbnail element, retrieving thumbnail url
					item.msrc = linkEl.children[0].getAttribute('src');
				}

				item.el = figureEl; // save link to element for getThumbBoundsFn
				items.push(item);
			}

			return items;
		};

		// find nearest parent element
		var closest = function closest(el, fn) {
			return el && ( fn(el) ? el :closest(el.parentNode, fn) );
		};

		// triggers when user clicks on thumbnail
		var onThumbnailsClick = function(e) {
			e = e || window.event;
			e.preventDefault ? e.preventDefault() :e.returnValue = false;

			var eTarget = e.target || e.srcElement;

			var clickedListItem = closest(eTarget, function(el) {
				return el.tagName === 'FIGURE';
			});

			if(!clickedListItem) {
				return;
			}


			// find index of clicked item
			var clickedGallery = clickedListItem.parentNode,
					childNodes = clickedListItem.parentNode.childNodes,
					numChildNodes = childNodes.length,
					nodeIndex = 0,
					index;

			for (var i = 0; i < numChildNodes; i++) {
				if(childNodes[i].nodeType !== 1) {
					continue;
				}

				if(childNodes[i] === clickedListItem) {
					index = nodeIndex;
					break;
				}
				nodeIndex++;
			}



			if(index >= 0) {
				openPhotoSwipe( index, clickedGallery );
			}
			return false;
		};

		// parse picture index and gallery index from URL (#&pid=1&gid=2)
		var photoswipeParseHash = function() {
			var hash = window.location.hash.substring(1),
					params = {};

			if(hash.length < 5) {
				return params;
			}

			var vars = hash.split('&');
			for (var i = 0; i < vars.length; i++) {
				if(!vars[i]) {
					continue;
				}
				var pair = vars[i].split('=');
				if(pair.length < 2) {
					continue;
				}
				params[pair[0]] = pair[1];
			}

			if(params.gid) {
				params.gid = parseInt(params.gid, 10);
			}

			if(!params.hasOwnProperty('pid')) {
				return params;
			}
			params.pid = parseInt(params.pid, 10);
			return params;
		};

		var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
			var pswpElement = document.querySelectorAll('.pswp')[0],
					gallery,
					options,
					items;

			items = parseThumbnailElements(galleryElement);

			// define options (if needed)
			options = {
				index:index,

				// define gallery index (for URL)
				galleryUID:galleryElement.getAttribute('data-pswp-uid'),

				getThumbBoundsFn:function(index) {
					// See Options -> getThumbBoundsFn section of docs for more info
					var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
							pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
							rect = thumbnail.getBoundingClientRect();

					return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
				},

				// history & focus options are disabled on CodePen
				// remove these lines in real life:
				historyEnabled:false,
				focus:false

			};

			if(disableAnimation) {
				options.showAnimationDuration = 0;
			}

			// Pass data to PhotoSwipe and initialize it
			gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
			gallery.init();
		};

		// loop through all gallery elements and bind events
		var galleryElements = document.querySelectorAll( gallerySelector );

		for(var i = 0, l = galleryElements.length; i < l; i++) {
			galleryElements[i].setAttribute('data-pswp-uid', i+1);
			galleryElements[i].onclick = onThumbnailsClick;
		}

		// Parse URL and open gallery if it contains #&pid=3&gid=1
		var hashData = photoswipeParseHash();
		if(hashData.pid > 0 && hashData.gid > 0) {
			openPhotoSwipe( hashData.pid - 1 ,  galleryElements[ hashData.gid - 1 ], true );
		}
	};

	// execute above function
	initPhotoSwipeFromDOM('.my-simple-gallery');

	function openarticleWindow2(a){
		this.a=a;
		mui.openWindow({
			url    :'/zhong_daishudou/daishudou/Practicum/index.php/Home/Qimeng/article2.html'+"?id="+a,

		});
	}
	function openarticleWindow1(a){
		this.a=a;
		mui.openWindow({
			url    :'/zhong_daishudou/daishudou/Practicum/index.php/Home/Qimeng/article1.html'+"?id="+a,

		});
	}
	function openPublish(){
		mui.openWindow({
			url    :'/zhong_daishudou/daishudou/Practicum/index.php/Home/Qimeng/publish.html',
			id:'publish.html'
		});
	}

	function discuss(){
		mui.openWindow({
			url    :'/zhong_daishudou/daishudou/Practicum/index.php/Home/index/discuss.html',
			id:'discuss.html'
		});
	}

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
</script>
<!--
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
</script>
-->


</body>
</html>