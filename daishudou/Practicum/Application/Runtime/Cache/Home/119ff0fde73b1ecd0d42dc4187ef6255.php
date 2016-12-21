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
	<header class="mui-bar mui-bar-nav">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title" style="font-size: 20px;">文章详情</h1>
		<a href="#"class="mui-pull-right"><span class="mui-icon mui-icon-more"></span></a>
	</header>

<div class="footer ctd">           
	<nav class="mui-bar mui-bar-tab">
	    		    <a class="mui-tab-item" style="color:#eb6d85;">
	    		        <span class="mui-icon iconfont icon-shouye6"></span>
	    		        <span class="mui-tab-label">收藏</span>
	    		    </a>
	    		    <a class="mui-tab-item" style="color:#eb6d85;">
	    		        <span class="mui-icon iconfont icon-shouye2"> </span> 
	    		        <span class="mui-tab-label">送花</span>
	    		    </a>
	    		    <a class="mui-tab-item" id="discuss" style="color:#eb6d85;">
	    		        <span class="mui-icon iconfont icon-shouye14"></span>
	    		        <span class="mui-tab-label">评论</span>
	    		    </a>
	</nav>     
</div>
		<div class="mui-scroll-wrapper"style="margin-top:30px;">
			<div class="mui-scroll">
				<!--这里放置真实显示的DOM内容-->
		
				<div class="mui-content">
					<br>
			 		<p align="center" style="color:#eb6c85;font-size: 18px;">
			 			<?php echo ($article["a_title"]); ?>
			 		</p>
					&nbsp;
					<a href="#">
						<button style="border-color:#ea9d99;color:#eb6d85;padding: 0px;">早教</button>&nbsp;&nbsp;
						<button style="border-color:#ea9d99;color:#eb6d85;padding: 0px;">生活</button>
					</a>
					<div style="padding:10px;">
						<div align="center">
							<div class="mui-slider">
								<div class="mui-slider-group mui-slider-loop">
									<div class="mui-slider-item mui-slider-item-duplicate">
										<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_3.jpg"></a>
									</div>
									<div class="mui-slider-item">
										<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_1.jpg"></a>
									</div>
									<div class="mui-slider-item">
										<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_2.jpg"></a>
									</div>
									<div class="mui-slider-item">
										<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_3.jpg"></a>
									</div>
									<div class="mui-slider-item mui-slider-item-duplicate">
										<a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_1.jpg"></a>
									</div>
								</div>
								<div class="mui-slider-indicator">
								    <div class="mui-indicator mui-active"></div>
								    <div class="mui-indicator"></div>
								    <div class="mui-indicator"></div>
								</div>
							</div>
				<div class="my-simple-gallery" style="position: relative;width: 90px;">			
							  
							  
							  
	<figure itemscope itemtype="#"style="width: 30px;float: left;margin: 0px;padding-right:5px ;margin-top: 5px;">
      <a href="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_1.jpg" itemprop="contentUrl" data-size="1024x1024" style="margin: 0px;padding: 0px;">
          <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_1.jpg" style="width:20px;height:20px;"/>
      </a>
     
    </figure>

    <figure itemscope itemtype="#" style="width: 30px;float: left;margin: 0px;padding-right:5px ;margin-top: 5px;">
      <a href="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_2.jpg" itemprop="contentUrl" data-size="964x1024">
          <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_2.jpg"   style="width:20px;height:20px; "/>
      </a>
      
    </figure>

    <figure itemscope itemtype="#" style="width: 30px;float: left;margin: 0px;padding-right:5px ;margin-top: 5px;">
      <a href="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_3.jpg" itemprop="contentUrl" data-size="1024x683">
          <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_3.jpg"style="width:20px;height:20px; " />
      </a>
      
    </figure>


  </div>
							
							
						</div>
						<br>
						<div class="ctd" style="padding: 20px;">
						<?php echo ($article["a_content"]); ?>
							
				    	</div>
				    	<hr>
				    	<div style="padding: 10px;">
				    		<h3 align="center" style="color:#eb6d85;font-size: 20px;">相关推荐</h3>
				    		<ul class="mui-table-view">
							    <li class="mui-table-view-cell mui-media">
							        <a href="javascript:;">
							            <img class="mui-media-object mui-pull-right" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_zhaojiling.png">
							            <div class="mui-media-body">
							                支招 | 营养早餐
							                <p class='mui-ellipsis'>宝宝妈 2016-10-3</p>
							            </div>
							        </a>
							    </li>
							    <li class="mui-table-view-cell mui-media">
							        <a href="javascript:;">
							            <img class="mui-media-object mui-pull-right" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_zhaojiling.png">
							            <div class="mui-media-body">
							                支招 | 营养早餐
							                <p class='mui-ellipsis'>宝宝妈 2016-10-3</p>
							            </div>
							        </a>
							    </li>
							</ul>
				    	</div>
				    	
				    	<hr>
				    	<div style="padding: 10px;">
				    		<h3 align="center" style="color:#eb6d85;font-size: 20px;">热门评论</h3>
							<div class="mui-card">
						<!--页眉，放置标题-->
								<div class="mui-card-header mui-card-media">
								<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/sub_1.jpg" />
								<div class="mui-media-body" style="font-size:16px;">
								小M家的呵呵哒
								<p>06月30日  &nbsp;15:30</p>
								</div>
								</div>
							<!--内容区-->
								<div class="mui-card-content" style="padding: 10px;">我们不能不理睬宝宝，不要漠视宝宝的情绪情感，要让宝宝感觉得到爸爸妈妈是关心他的。摆正心态很重要，要相信宝宝是可以开心地在幼儿园和其他小朋友一起快乐生活的。</div>
							<!--页脚，放置补充信息或支持的操作-->
								<div class="mui-card-footer">
								<a href="#" id="discuss"><span class="mui-icon iconfont icon-shouye14">0</span></a>
								<a href="#"><span class="mui-icon iconfont icon-icon6">14</span></a>
								<a href="#"class="mui-pull-right"><span class="mui-icon mui-icon-more"></span></a>
								</div>
						</div>
							<div class="mui-card">
					<!--页眉，放置标题-->
								<div class="mui-card-header mui-card-media">
								<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/sub_1.jpg" />
								<div class="mui-media-body" style="font-size:16px;">
								小M
								<p>05月24日  &nbsp;16:25</p>
								</div>
								</div>
							<!--内容区-->
								<div class="mui-card-content" style= "padding: 10px;">其实，教育这东东，懂和不懂就差那么一点点！</div>
							<!--页脚，放置补充信息或支持的操作-->
								<div class="mui-card-footer">
								<a href="#" id="discuss"><span class="mui-icon iconfont icon-shouye14">0</span></a>
								<a href="#"><span class="mui-icon iconfont icon-icon6">14</span></a>
								<a href="#"class="mui-pull-right"><span class="mui-icon mui-icon-more"></span></a>
								</div>
							</div>	
				    	</div> 
					</div>
				</div>
			</div>
		</div>
		<div id="PopoverPicContainer" class="mui-popover" style="height: 300px;width:90% ;">
            <div class="mui-slider-item">
                <ul class="mui-table-view mui-grid-view">
                    <li class="mui-table-view-cell mui-media "style="padding-right:3px ;">
                        <a href="#">
                            <img class="mui-media-object" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/sub_1.jpg"style="height: 280px;width: 100%;">
                        </a>
                    </li>
                </ul>
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





	<script type="text/javascript" charset="utf-8">
      mui.init({
    
});
//openDiscuss
		document.getElementById("discuss").addEventListener('tap',function(){
			mui.openWindow({
				url: "discuss.html",
				id: "discuss.html"
			});
			
		})
    </script>
    	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
		<script type="text/javascript">
			mui.init();
			//openDiscuss
			document.getElementById("discuss").addEventListener('tap',function(){
				mui.openWindow({
					url: "discuss.html",
					id: "discuss.html"
				});
			})
			mui('.mui-scroll-wrapper').scroll({
	deceleration: 0.0006 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
});
</script>
		<script type="text/javascript">
			mui.plusReady(function(){ 
				var  slider=mui('.mui-slider');
				slider.slider({interval:5000});
			});
			
		</script>
		
		
		<script>
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
				src: linkEl.getAttribute('href'),
				w: parseInt(size[0], 10),
				h: parseInt(size[1], 10)
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
	    return el && ( fn(el) ? el : closest(el.parentNode, fn) );
	};

	// triggers when user clicks on thumbnail
	var onThumbnailsClick = function(e) {
	    e = e || window.event;
	    e.preventDefault ? e.preventDefault() : e.returnValue = false;

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
	        index: index,

			// define gallery index (for URL)
	        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

	        getThumbBoundsFn: function(index) {
	            // See Options -> getThumbBoundsFn section of docs for more info
	            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
	                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
	                rect = thumbnail.getBoundingClientRect(); 

	            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
	        },

	        // history & focus options are disabled on CodePen
           	// remove these lines in real life: 
		   historyEnabled: false,
		   focus: false	

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
</script>
</body>
</html>