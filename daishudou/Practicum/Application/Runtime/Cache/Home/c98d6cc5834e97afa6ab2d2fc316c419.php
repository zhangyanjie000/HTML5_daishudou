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
		<a href="/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/shouye"><span style="color:#eb6c85" class="mui-icon mui-icon-back"></span></a>
		<h1 class="mui-title" style="font-size: 20px;">详情</h1>
		<a href="#"class="mui-pull-right"><span style="color:#eb6c85" class="mui-icon mui-icon-more"></span></a>
	</header>


<div class="ctd"> 
	<nav class="mui-bar mui-bar-tab">
<!-- <textarea id="testDiv" rows="3" placeholder="评论会变美呦！" style="height:40px;width:100%;display:none;"></textarea> -->

	    		    <a class="mui-tab-item" style="color:#eb6d85;">
	    		        <span class="mui-icon iconfont icon-shouye6 "></span>
	    		        <span class="mui-tab-label">收藏</span>
	    		    </a>
	    		    <a class="mui-tab-item" style="color:#eb6d85;">
	    		        <span class="mui-icon iconfont icon-shouye2 "> </span> 
	    		        <span class="mui-tab-label">送花</span>
	    		    </a>
	    		    <a class="mui-tab-item" id="discuss" style="color:#eb6d85;">
	    		        <span class="mui-icon iconfont icon-shouye14 "></span>
	    		        <span class="mui-tab-label">评论</span>
	    		    </a>
	</nav>     
</div>	

<div class="mui-scroll-wrapper" style="padding-top:30px;">
	<div class="mui-scroll">
		<!--这里放置真实显示的DOM内容-->
<input type="hidden" name="m_id" value="<?php echo ($info["m_id"]); ?>">
	<div class="mui-content">
		<br>
		<div class="mui-card-header mui-card-media">
			<img src="<?php echo "/zhong_daishudou/daishudou/Practicum/Public/".$users[0][user_img]?>"/>
		<div class="mui-media-body" style="font-size:16px;">
		<!-- 小M家的呵呵哒 --><?php echo $users[0][user_name]?>
		<p style="line-height:33px;"><?php echo ($info["publish_time"]); ?></p>
		</div>
		</div>
		
 		<div style="padding:10px;">
		<div align="center"><img src="<?php echo "/zhong_daishudou/daishudou/Practicum/Public/".$img[0][image]?>" width="100%"/>
</div>
		<div class="ctd" style="border-bottom:1px solid gainsboro;padding: 20px;">
		<p><?php echo ($info["content"]); ?></p>
<!-- 		<p>家长在家里，看到听到宝宝说“不上幼儿园”要怎么办。</p>

    	<p>我们还要想一想：就算幼儿园的环境不陌生了，老师也熟悉了，但和家里比起来，幼儿园里可没有家里那么自由——不能想干什么就干什么，要配合班级其他幼儿及班里老师的安排！如果是妈妈带着自己，当看到了好玩的、新奇的东东，妈妈一定会带自己去看吧。可是幼儿园班上三十个宝宝感兴趣的东西可不一定都一样哦，所以，看到喜欢的东东可不一定能看个够。当然，还有类似于，和小朋友之间发生的摩擦、当遇到困难的时候（内向胆小的宝宝想上厕所但不敢和老师说，便会哭起来；即使不胆小的宝宝，睡醒午觉起来看到自己的鞋子被其他宝宝穿去了或不见了，也会哭着找鞋子的；宝宝弄湿了衣服、尿湿了裤子、想拉臭臭又不习惯在家以外的地方拉）。</p>

    	<p>所以，宝宝更喜欢家里面多一些的，特别是刚入园，一来到班里，就看到其他宝宝狂哭，原本情绪较稳定的宝宝也难免会被影响而“想起妈妈，想回家”。</p>
    	<p>第一，不要阻止和拒绝宝宝，尽量不要对宝宝说不。

    	第二，即然家中安排要送宝宝上幼儿园，而且也到了上幼儿园的年龄，或是不送去不行，就

    	是说，宝宝还是要送去幼儿园的，在这种情况下，请家长这样说：

    	哦，宝宝不想上幼儿园！——就是用重复性的回应。</p>

   		<p>我们不能不理睬宝宝，不要漠视宝宝的情绪情感，要让宝宝感觉得到爸爸妈妈是关心他的。</p>
    	<p align="right">小西写作</p> -->
    	</div>
    	<div style="padding: 25px;"><h3 align="center" style="color:#eb6d85;font-size: 20px;">热门评论</h3></div>
    <!-- <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>-->
	<div class="mui-card">
	<!--页眉，放置标题-->

		<div class="mui-card-header mui-card-media">
		<img src="/zhong_daishudou/daishudou/Practicum/Public/<?php echo ($list["user_img"]); ?>" />
		<div class="mui-media-body" style="font-size:16px;">
		<!-- 小M家的呵呵哒 --><?php echo ($list["user_name"]); ?>
		<p><!-- 06月30日  &nbsp;15:30 --><?php echo ($list["com_time"]); ?></p>
		</div>
		</div>
	<!--内容区-->
		<div class="mui-card-content" style="padding: 10px;"><!-- 我们不能不理睬宝宝，不要漠视宝宝的情绪情感，要让宝宝感觉得到爸爸妈妈是关心他的。摆正心态很重要，要相信宝宝是可以开心地在幼儿园和其他小朋友一起快乐生活的。 --><?php echo ($list["comment"]); ?></div>

	<!--页脚，放置补充信息或支持的操作-->
	<div class="mui-card-footer">
		<a href="#"><span class="mui-icon iconfont icon-shouye14">0</span></a>
		<a href="#"><span class="mui-icon iconfont icon-icon6">14</span></a>
		<a href="#"class="mui-pull-right"><span class="mui-icon mui-icon-more"></span></a>
		</div>
		</div>
<!--<?php endforeach; endif; else: echo "" ;endif; ?> -->


	</div>

</div>
	</div>
</div>	

<script type="text/javascript">
			mui.init();
			mui('.mui-scroll-wrapper').scroll({
	deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
});
		</script>
	<script type="text/javascript" charset="utf-8">
      mui.init();
document.getElementById("openWindow").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/shouye",
				id: "shouye.html"
			});
			
		})
</script>

 <script>
//openDiscuss
		document.getElementById("discuss").addEventListener('tap',function(){
			mui.openWindow({
				url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/discuss/id/<?php echo ($info["m_id"]); ?>",
				id: "discuss.html"
			});
			
		})
    </script>
<!--<script>
document.getElementById("discuss").addEventListener('tap', function() {

document.getElementById("testDiv").style.display="block";

	});
    </script>-->
</body>
</html>