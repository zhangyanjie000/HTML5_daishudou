<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <link href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/mui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/iconfont.css"> 
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!--qqface-->
    <link rel="stylesheet" type="text/css" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/face.css" />
    <!--主要样式-->
	<link rel="stylesheet" type="text/css" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/style.css" />
	<style type="text/css">
		textarea{
			height: 200px;
			width:100%;
			font-size: 16px;
			line-height: 18px;
		}
	</style>
</head>
<body>
<form role="form" action="" method="post" enctype="multipart/form-data" id="uploadForm">
<input type="hidden" name="m_id" value="<?php echo ($info["m_id"]); ?>">
	        <!-- 主页面容器 -->
	        <div class="mui-inner-wrap">
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	                <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	                <h1 class="mui-title">评论</h1>
	                
	                <button type="submit" class="mui-btn mui-pull-right" id="send">发送</button>
	            </header>
<!-- 	            <nav class="mui-bar mui-bar-tab">
	    		   	<div class="mui-row">
				        <div class="mui-col-sm-4 mui-col-xs-4">
				            <li class="mui-table-view-cell">
				                <a href="javascript:void(0);" class="mui-icon iconfont icon-smile mui-text-center imgBtn"></a>
				            </li>
				        </div>
				        <div class="mui-col-sm-4 mui-col-xs-4 ">
				            <li class="mui-table-view-cell">
				                <a class="mui-icon iconfont icon-zhaopian mui-text-center" id="upphoto"></a>
				            </li>
				        </div>
				        <div class="mui-col-sm-4 mui-col-xs-4">
				            <li class="mui-table-view-cell">
				                <a class="mui-icon iconfont icon-jiahao-copy mui-text-center"></a>
				            </li>
				        </div>
    				</div>
	    		</nav> -->
	    		
	    		
	    		
	            <!-- 主页面内容容器 -->
	            <div class="mui-content mui-scroll-wrapper">
	                <div class="mui-scroll">
	                    <!-- 主界面具体展示内容 -->
	                    <!--文本域-->
	                   <!--<form id="input_text">
						    <div>
						        <label class="mui-hidden">文本域</label>
						    	<textarea type="input" id="text" name="text" class="mui-input-clear mui-input-speech" placeholder="说点什么..."></textarea>
						    </div>
						</form>
						
						
						<div id="picShow"></div>-->
						<div class="Main">
						    <div class="Input_Box">
						    
						      	<textarea class="Input_text" id="text" placeholder="说点什么..." name="comment"></textarea>
						      	
							      <div class="faceDiv"> </div>
							</div>
						</div>
							  
	                </div>
	            </div>
	            
	            
	        </div>
	    </div>
	    </from>  
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/jquery-2.2.3.min.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/face.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/upphoto.js"></script>
	<script type="text/javascript" charset="utf-8">
		mui.init();
		//openIndex
		// document.getElementById("send").addEventListener('tap',function(){
		// 	mui.openWindow({
		// 		url: "/zhong_daishudou/daishudou/Practicum/index.php/Home/Index",
		// 		id: "shouye.html"
		// 	});
			
		// })
		//表情包
		//文本域限字数
		document.getElementById('text').onkeydown = function() 
		{    
		    if(this.value.length >= 140) 
		      event.returnValue = false; 
		} 
  </script>
</body>
</html>