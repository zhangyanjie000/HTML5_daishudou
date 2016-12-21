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
	        <div class="mui-inner-wrap"
	                <div class="mui-scroll">
	            <!-- 菜单容器 -->
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	                <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	                <h1 class="mui-title">与我相关</h1>
	            </header>

	            <div class="mui-content mui-scroll-wrapper">
	                <div class="mui-scroll">
	                   
                         <?php foreach ($list as $key => $value) { ?>
							
	                        <div class="mui-card">
						    <!--页眉，放置标题-->
						    <div class="mui-card-header mui-card-media">
							    <img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/friend_1.png" width="10%"/>
							    <div class="mui-media-body">
							       <?php echo ($value["user_name"]); ?>     <span><?php echo ($value["type"]); ?>了我</span>
							    <button type="button"  id = "xiangqing" class="mui-btn mui-btn-outlined mui-pull-right">查看详情</button>
								<p><?php echo ($value["zan_time"]); ?></p>
							    </div>
							</div>
						    <!--内容区-->
						    <div class="mui-card-content" style="margin: 0% 2% 4% 2%;padding: 2%;">
						    	<img src="<?php echo ($value["m_img"]); ?>" width="20%" style="float: left;margin-right: 4%;">
						        <p ><?php echo ($value["content"]); ?></p>
						    </div>
						     <div style="color:#666;border-top:1px solid #ddd;padding-left:2%;" ><?php echo ($value["comment"]); ?></div>
						</div>
						<?php }?>
		            </div>
		
	                   
												
	                </div>
	            </div>
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	
	<script type="text/javascript" charset="utf-8">
      	mui('.mui-scroll-wrapper').scroll({
			deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
		});
		document.getElementById("xiangqing").addEventListener('tap',function(){
				mui.openWindow({
					url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/content",
					id: "content.html"
				});
			})
    </script>
</body>
</html>