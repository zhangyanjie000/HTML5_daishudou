<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <link href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/mui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/iconfont.css"> 
    
    <!--主要样式-->
	<link rel="stylesheet" type="text/css" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/main.css" />
	
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/imageview.css" />
    <link rel="stylesheet" type="text/css" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/style.css" />
</head>
<body>
	<!-- 主界面菜单同时移动 -->
	    <!-- 侧滑导航根容器 -->
	    <div class="mui-off-canvas-wrap mui-draggable">
	        <!-- 主页面容器 -->
	        <div class="mui-inner-wrap">
	        	<!--悬浮按钮-->
					    <div class="float-menu" id="menu">
							<div class="plus"><div class="cross"></div></div>
							<div class="menu-list">
								<a href="" class="link-home" id="publish">发动态</a>
								<a href="#my" class="link-my">我的</a>
								<a href="#cart" class="link-cart" id="upphoto">相册</a>
							</div>
						</div>
	            <!-- 菜单容器 -->
	            <aside class="mui-off-canvas-left" id="offCanvasSide">
	                <div class="mui-scroll-wrapper">
	                    <div class="mui-scroll">
	                        <!-- 菜单具体展示内容 -->
	                       <ul class="mui-table-view touming">
							    <li class="mui-table-view-cell mui-media" id="userinfo">
							        <a href="javascript:;">
							            <img class="mui-media-object mui-pull-left" src="/zhong_daishudou/daishudou/Practicum/Public/<?php echo ($userinfo["user_img"]); ?>">
							            <div class="mui-media-body">
							               	<?php echo ($userinfo["user_name"]); ?>
							                <p class='mui-ellipsis'><?php echo ($userinfo["user_age"]); ?>岁</p> 
							            </div>
							        </a>
							    </li>
							    <li class="mui-table-view-cell mui-media" id="health">
							        <a href="javascript:;">
							            <h4 style="color:#c21f3e">健康提示</h4>
							            <div class="mui-media-body" >
							                <p class="canvas_p"><?php echo ($heal["pointcontent"]); ?></p>				
							            </div>
							        </a>
							    </li>
							    <li class="mui-table-view-cell mui-media">
							            <span class="mui-icon iconfont icon-icon7 canvas_p" ></span><span class="canvas_p">查看全部内容</span>
							            <!-- 开关关闭状态 -->
							            <div id="mySwitch" class="mui-pull-right">
											<div class="mui-switch mui-switch-mini mui-switch-blue">
											  <div class="mui-switch-handle"></div>
											</div>
							            </div>
							        </a>
							    </li>
							     <li class="mui-table-view-cell mui-media">
							        <a href="javascript:;" id="my_pictures">
							            <div class="mui-media-body">
							                <i class="mui-icon iconfont icon-icon16 canvas_p"></i><span class="canvas_p">智能相册</span>		
							            </div>
							        </a>
							    </li>
							</ul>
	                    </div>
	                </div>
	            </aside>
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	                <a class="mui-icon mui-action-menu mui-icon-bars mui-pull-left" href="#offCanvasSide"></a>
	                <h1 class="mui-title">袋鼠兜</h1>
	                <a class="mui-icon iconfont icon-qiandao mui-pull-right" href="#" id="calender"></a>
	            </header>
	            <nav class="mui-bar mui-bar-tab">
	    		    <a class="mui-tab-item mui-active color-1 material-design" data-color="pink" id="index">
	    		        <span class="mui-icon iconfont icon-shouye5"></span>
	    		        <span class="mui-tab-label">圈子</span>
	    		    </a>
	    		    <a class="mui-tab-item" id="find">
	    		        <span class="mui-icon iconfont icon-shouye22"></span>
	    		        <span class="mui-tab-label">发现</span>
	    		    </a>
	    		    <a class="mui-tab-item" id="my">
	    		        <span class="mui-icon iconfont icon-shouye8"></span>
	    		        <span class="mui-tab-label">我的</span>
	    		    </a>
	    		</nav>
	    		
	    		
	    		
	            <!-- 主页面内容容器 -->
	            <div class="mui-content mui-scroll-wrapper">
	                <div class="mui-scroll">
	                    <!-- 主界面具体展示内容 -->
	                    
	                    <!-- 轮播图 -->
	                   <div class="mui-slider">
						  <div class="mui-slider-group mui-slider-loop">
						    <!--支持循环，需要重复图片节点-->
						    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/index_1.jpg" /></a></div>
						    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/index_1.jpg" /></a></div>
						    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/index_2.jpg" /></a></div>
						    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/index_3.jpg" /></a></div>
						    <div class="mui-slider-item"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/index_1.jpg" /></a></div>
						    <!--支持循环，需要重复图片节点-->
						    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/index_1.jpg" /></a></div>
						  </div>
						</div>
						
						<!--内容展示-->
						<ul class="mui-table-view mui-table-view-chevron">
						<!--转发-->
							<li><!--转发-->
							   	<div class="mui-card" >
									<!--页眉，放置标题-->
									<div class="mui-card-header mui-card-media">
										<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/friend_1_1.png" />
											<div class="mui-media-body">
												candsankjcas
												<p>发表于 2016-12-6</p>
											</div>
									</div>

									<!--内容区-->
									<div class="mui-card-content" >
                                         <p>转发</p>
                                          <!--转发的内容-->
											<!--页眉，放置标题-->
											<div  style="border:1px solid #ddd;background:#f7f7f7;">
											<!--内容区-->
											<div >
												<a href="#" id="my_content"> 
												  <div class="mui-row">
												      <img  src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/article_2.jpg" data-preview-src="" data-preview-group="<?php echo ($mes["m_id"]); ?>"width="100%" />
												      <p  style="margin-top:2% ;">宝宝吐奶怎么办
												      <a href="#">@1mmm</a></p>
												  </div> 
												</a>
											</div>
										</div>
										<!--转发的内容-->
								     </div>
									<!--页脚，放置补充信息或支持的操作-->
									<div class="mui-card-footer mui-text-center">
										<a href="#" class="text">
											<span class="mui-icon iconfont icon-icon4"></span>转发
											<span class="num"><?php echo ($mes["zhuan_num"]); ?></span>
										</a>
										<a href="#" class="text" id="discuss">
											<span class="mui-icon iconfont icon-shouye23"></span>评论
											<span class="num"><?php echo ($mes["comment_num"]); ?></span>
										</a>
                                        <a href="javascript:void(0);" class="text ">
											<div class="feed" id="feed1">
												<div class="heart " id="like1" rel="like"></div>
											 	<div class="likeCount" id="likeCount1">2</div>
											</div>
										</a>
									</div>
								</div>
						</li>
						<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mes): $mod = ($i % 2 );++$i;?><li>
								<div class="mui-card">
									<!--页眉，放置标题-->
									<div class="mui-card-header mui-card-media">
										<img src="/zhong_daishudou/daishudou/Practicum/Public/<?php echo ($mes["user_img"]); ?>" />
											<div class="mui-media-body">
												<?php echo ($mes["user_name"]); ?>
												<p>发表于 <?php echo ($mes["publish_time"]); ?></p>
											</div>
									</div>
									<!--内容区-->
									<div class="mui-card-content" >
										<div id="content">
											<p id="<?php echo ($mes["m_id"]); ?>"><?php echo ($mes["content"]); ?></p>
										</div>
										<div class="mui-row">
										<?php if(is_array($mes["images"])): $i = 0; $__LIST__ = $mes["images"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><div class="mui-col-xs-4 mui-col-sm-4">
												<img  src="/zhong_daishudou/daishudou/Practicum/Public/<?php echo ($img["image"]); ?>" data-preview-src="" data-preview-group="<?php echo ($mes["m_id"]); ?>"width="100%"/>
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
									</div>
									<!--页脚，放置补充信息或支持的操作-->
									<div class="mui-card-footer mui-text-center">
										<a href="#" class="text"><span class="mui-icon iconfont icon-icon4"></span>转发<span class="num"><?php echo ($mes["zhuan_num"]); ?></span></a>
										<a href="#" class="text" id="discuss"><span class="mui-icon iconfont icon-shouye23"></span>评论<span class="num"><?php echo ($mes["comment_num"]); ?></span></a>
										 <a href="javascript:void(0);" class="text ">
											<div class="feed" id="feed1">
												<div class="heart " id="dlike1" rel="like"></div>
											 	<div class="likeCount" id="likeCount1"><?php echo ($mes["like_num"]); ?></div>
											</div>
										  </a>
										
									</div>
								</div>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
	
						</ul>
						
	                </div>
	            </div>
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	  <script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/jquery-2.2.3.min.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/upphoto.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/main.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.zoom.js">	</script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.previewimage.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/tools.js" ></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/zan.js"></script>
	<script type="text/javascript" charset="utf-8">
		mui.init();
		document.getElementById("userinfo").addEventListener('tap',function() {
			mui.openWindow({
				url:"/zhong_daishudou/daishudou/Practicum/index.php/Home/Myset/my_set",
				id:"my_set"
			});
		})
		//openIndex
		document.getElementById("index").addEventListener('tap',function(){
			mui.openWindow({
				url: "index.html",
				id: "index.html"
			});
			
		})
		//openFind
		document.getElementById("find").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Action/find",
				id: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Action/find"
			});
			
		})
		//openMy
		document.getElementById("my").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/My/my.html",
				id: "index.php/Home/My/my.html"
			});
			
		})
		//openContent
		$("#content p").on("tap",function() {
			$(this).each(function() {
				var id =  $(this).attr('id');
				mui.openWindow({
					url:"content/id/"+id
				})
			})
		})
			
		// })
		//openCalender
		document.getElementById("calender").addEventListener('tap',function(){
			mui.openWindow({
				url: "calender.html",
				id: "calender.html"
			});
			
		})
		//openMy_pictures
		document.getElementById("my_pictures").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Mypictures/my_pictures.html",
				id: "my_pictures.html"
			});
			
		})
		//openDiscuss
		document.getElementById("discuss").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/index/discuss.html",
				id: "discuss.html"
			});
			
		})
		//动态
		document.getElementById("publish").addEventListener('tap',function(){
			mui.openWindow({
				url:"/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/publish.html",
				id:"publish.html"
			});
		})
		//获得slider插件对象
			var gallery = mui('.mui-slider');
			gallery.slider({
			  interval:3000//自动轮播周期，若为0则不自动播放，默认为0；
			});
		//区域滚动
		mui('.mui-scroll-wrapper').scroll({
			deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
		});	
		//侧边栏开关状态
		document.getElementById("mySwitch").addEventListener("toggle",function(event){
		  if(event.detail.isActive){
		    console.log("你启动了开关");
		  }else{
		    console.log("你关闭了开关");  
		  }
		})
		//点赞
		$(".z").on('click',function(){
	        var Oa=$(this);
	        var id=Oa.attr('id');//获取id属性
	        var vl=Oa.find("span").text();
	            vl=parseInt(vl)+1;
	        $.post('/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/zan',{id:id},function(data){
	            if(data.status==1){ 
	                alert('感谢您的支持！');//模拟异步数据加1
	                Oa.find("span").text(vl);//页面元素加1
	            }else{
	                alert('您已经点过赞了,不要重复哦！');
	            }
	        },'json'); 
    	})
		mui.previewImage();
		
		mui.plusReady(function() {
			getaData();
		})
		// 获取数据
		function getaData() {
			var table = document.body.querySelector('.mui-table-view');
			var timestamp = getDataStr();
			mui.ajax(baseUrl, {
				data: {
					key: '',
					typeId: '',
					showapi_appid: appid,
					showapi_sign: sign,
					showapi_timestamp: timestamp,
					page:1
				},
				dataType: 'json',
				type: 'post',  
				timeout: 10000,
				beforeSend: function(data) {
					plus.nativeUI.showWaiting(); 
				},
				success: function(data) {
				},
				error: function(xhr, type, errerThrown) {
					mui.toast('网络异常,请稍候再试');
					plus.nativeUI.closeWaiting();  
				}
			});
		}	
		
		
	</script>
    
  
</body>
</html>