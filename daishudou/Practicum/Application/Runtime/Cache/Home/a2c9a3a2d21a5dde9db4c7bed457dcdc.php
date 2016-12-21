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
    <link rel="stylesheet" type="text/css" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/normalize.css" />
	<link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/font-awesome.min.css">
	<link rel='stylesheet' id='jquery-gif-css'  href='/zhong_daishudou/daishudou/Practicum/Public/Former/css/jquery.gif.css' type='text/css' media='all' />
</head>
<body>
	<style type="text/css">
		.mui-scroll-wrapper
		{ 
		  background-image: url(/zhong_daishudou/daishudou/Practicum/Public/Former/images/story_yinpin1.gif);
		  background-size:100%;
		  background-color: white;
		}
		.content {
			background-color: whitesmoke;
		}
	</style>
	<!-- 睡前故事页面标题 -->
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title"><?php echo ($article_yinpin["story_title"]); ?></h1>
	</header>
	<!-- 故事详情页面内容容器 -->
	<div class="mui-content mui-scroll-wrapper">
	    <div class="mui-scroll">
	    <!-- 故事详情界面具体展示内容 -->
	    	<div class="content">
					<br>
			 		<p align="left" style="color:#eb6c85;font-size: 20px; padding-left: 10px;">
			 			<?php echo ($article_yinpin["story_title"]); ?>
			 			<audio autoplay preload="auto" controls loop  id="audio">
					     <source src="/zhong_daishudou/daishudou/Practicum/Public/Former/music/gg.mp3" type="audio/mpeg" />
					   </audio>
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
									
									<div class="mui-slider-item htmleaf-content">
										<img src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/story_yinpin.gif" id="playp">
									</div>
									
								</div>
								
							</div>
						</div>
						<div class="ctd" style="padding: 20px;">
							<?php echo ($article_yinpin["story_content"]); ?>
							<!-- <p>小兔子要上床睡觉了；它紧紧抓著大兔子的长耳朵，要大兔子好好地听它说。 </p>
					    	<p>“猜猜我有多爱你？”小兔子问。</p>
					    	<p>“噢！我大概猜不出来。”大兔子笑笑说。</p>
					    	<p>“我爱你这么多。”小兔子把手臂张开，开得不能再开。</p>
					    	<p>大兔子有双更长的手臂，它张开来一比，说：“可是，我爱你这么多。”</p>
					    	<p>小兔子动动右耳，想：嗯，这真的很多。</p>
					    	<p>“我爱你，像我举的这么高，高得不能再高。”小兔子说，双臂用力往上撑举。</p>
					    	<p>“我爱你，像我举的这么高，高得不能再高。”大兔子也说。</p>
					    	<p>哦，小兔子想，真糟，他又比我高。</p>
					    	<p>小兔子又有个好主意，它把脚顶在树干上倒立了起来。他说：“我爱你到我的脚趾头这么多。”</p>
					    	<p>大兔子一把抓起小兔子的手，将它抛起来，飞得比它的头还高，说：“我爱你到你的脚趾头这么多。”</p>
					    	<p>小兔子大叫：“我爱你，一直到过了小路，在远远的河那边。”</p>
					    	<p>大兔子说：“我爱你，一直到过了小河，越过山的那一边。”</p>
					    	<p>小兔子想，那真的好远。它揉揉红红的两眼，开始困了，想不出来了；它抬头看着树丛后面那一大片的黑夜，觉得再也没有任何东西比天空更远的了。</p>
					    	<p>大兔子轻轻抱起频频打著呵欠的小兔子，小兔子闭上了眼睛，在进入梦乡前，喃喃说：“我爱你，从这里一直到月亮。”</p>
					    	<p>“噢！那么远。”大兔子说，“真的非常远，非常远。”</p>
					    	<p>大兔子轻轻将小兔子放到叶子铺成的床上，低下头来，亲亲它，祝它晚安。</p>
					    	<p>然后，大兔子躺在小兔子的旁边，小声地微笑著说：“我爱你，从这里一直到月亮，再……绕回来。”</p>
					    	<p align="right">小西写作</p> -->
				    	</div>
				    	<hr>
				    	<div style="padding: 10px;">
				    		<h3 align="center" style="color:#eb6d85;font-size: 20px;">相关推荐</h3>
				    		<ul class="mui-table-view">
							    <li class="mui-table-view-cell mui-media">
							        <a href="javascript:;"  onclick="openStory_article();">
							            <img class="mui-media-object mui-pull-right" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_zhaojiling.png">
							            <div class="mui-media-body">
							                柴犬一家
							                <p class='mui-ellipsis'>宝宝妈 2016-10-3</p>
							            </div>
							        </a>
							    </li>
							    <li class="mui-table-view-cell mui-media">
							        <a href="javascript:;" onclick="openStory_article();">
							            <img class="mui-media-object mui-pull-right" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/my_zhaojiling.png">
							            <div class="mui-media-body">
							                柴犬一家
							                <p class='mui-ellipsis'>宝宝妈 2016-10-3</p>
							            </div>
							        </a>
							    </li>
							</ul>
				    	</div> 
					</div>
				</div>
		</div>
	</div>
	<div class="mui-off-canvas-backdrop"></div>   
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/jquery.1.7.1.min.js" type="text/javascript"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/jquery.gif.min.js"></script>
	<script type="text/javascript" charset="utf-8">
      		mui.init()
		$( document ).ready(function() {
        
	        // swap all the gifs on the page.
	        $('.gif').each(function() {
	          $(this).gif();
	        });

	     });

      		function openStory_article(){
		    mui.openWindow({
				url    : 'story_article_123.html',
				id: 'story_article_123.html'
		    });
		}
			mui('.mui-scroll-wrapper').scroll({
				deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
			});
			mui.plusReady(function(){ 
				var  slider=mui('.mui-slider');
				slider.slider({interval:1000});
			});
</script>
</body>
</html>