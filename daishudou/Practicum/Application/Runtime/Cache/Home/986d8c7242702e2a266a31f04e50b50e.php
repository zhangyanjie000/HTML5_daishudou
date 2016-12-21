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
	        <div class="mui-inner-wrap">
	            <!-- 菜单容器 -->
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	                <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	                <h1 class="mui-title">我的文章</h1>
	            </header>
	            
	            <div class="mui-content mui-scroll-wrapper">
	                <div class="mui-scroll">
	                  <!--卡片-->
	                  <!--栅格卡片-->
	                    <div class="mui-row">
	                      <?php if(is_array($massages)): $i = 0; $__LIST__ = $massages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mui-col-sm-6 mui-col-xs-6" id="article">
	                          	<div class="mui-card" style="margin: 2%;">
								    <!--页眉，放置标题-->
								    <div class="mui-card-header" style="padding:2% 2% 0% 2%;">
									    <div class="zaocan">
										      <?php echo ($vo["content"]); ?>
											<p>发表于 <?php echo ($vo["publish_time"]); ?></p>
									    </div>
						
									</div>
														    <!--内容区-->
								    <div class="mui-card-content" style="margin:0%;">
								    	<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_all1.png" width="100%"/>
								    </div>
								    <!--页脚，放置补充信息或支持的操作-->
								    <div class="mui-card-footer">
								    	<a href="#"><span class="mui-icon iconfont icon-shouye8"><?php echo ($vo["like_num"]); ?></span></a>
								    	<a href="#"><span class="mui-icon iconfont icon-shouye8"><?php echo ($vo["zhuan_num"]); ?></span></a>
								    	<a href="#"><span class="mui-icon iconfont icon-shouye8"><?php echo ($vo["comment_num"]); ?></span></a>
			
								    </div>
								</div>
                          </div><!--卡片信息--><?php endforeach; endif; else: echo "" ;endif; ?>
                          
                          <!-- <div class="mui-col-sm-6 mui-col-xs-6">
	                          	<div class="mui-card" style="margin: 2%;">
								    <div class="mui-card-header" style="padding:2% 2% 0% 2%;">
									    <div class="zaocan">
										        才早餐吃什餐吃什么 才早餐吃什么
											<p>发表于 2016-06-30 15:30</p>
									    </div>
									</div>
								    <div class="mui-card-content" style="margin:0%;">
								    	<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_all1.png" width="100%"/>
								    </div>
								    <div class="mui-card-footer">
								    	<a href="#"><span class="mui-icon iconfont icon-shouye8">12</span></a>
								    	<a href="#"><span class="mui-icon iconfont icon-shouye8">12</span></a>
								    	<a href="#"><span class="mui-icon iconfont icon-shouye8">12</span></a>
			
								    </div>
								</div>
                          </div>-->

	                   </div><!--massages_all-->
	                </div>
	            </div>
	            
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	
	<script type="text/javascript" charset="utf-8">
      mui('.mui-scroll-wrapper').scroll({
			deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
		});

      document.getElementById("article").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Action/article",
				id: "article.html"
			});
			
		})
    </script>
</body>
</html>