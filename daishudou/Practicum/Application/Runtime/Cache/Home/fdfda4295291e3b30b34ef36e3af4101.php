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
	<link rel="stylesheet" type="text/css" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/style.css" />
	<style type="text/css">
		textarea{
			width:100%;
			height: 12em;
			font-size: 16px;
			line-height: 18px;
		}
		.upload_image{
			width: 8em;
			height: 8em;
			padding:5px;
		}
		.upload_append_list{
			float: left;
		}
	</style>

	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/jquery-2.2.3.min.js"></script>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
</head>
<body>

<form role="form" action="/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/doAdd" method="post" enctype="multipart/form-data" id="uploadForm">
	        <!-- 主页面容器 -->
	        <div class="mui-inner-wrap">
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	                <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	                <h1 class="mui-title">发动态</h1>
	                <button type="submit" class="mui-btn mui-pull-right" id="fileSubmit">发送</button>
	            </header>
	            <nav class="mui-bar mui-bar-tab">
	    		   	<div class="mui-row">
				        <div class="mui-col-sm-4 mui-col-xs-4">
				            <li class="mui-table-view-cell">
				                <a href="javascript:void(0);" class="mui-icon iconfont icon-smile mui-text-center imgBtn"></a>
				            </li>
				        </div>
				        <div class="mui-col-sm-4 mui-col-xs-4 ">
				            <li class="mui-table-view-cell">
				            	<a class="mui-icon iconfont icon-zhaopian mui-text-center" id="upphoto" onclick="fileSelect();"></a>
				            	  <input type="file" name="image" id="doc" onchange="javascript:setImagePreview();" style="display:none;"  multiple>
				            </li>
				        </div>
				        <div class="mui-col-sm-4 mui-col-xs-4">
				            <li class="mui-table-view-cell">
				                <a class="mui-icon iconfont icon-jiahao-copy mui-text-center"></a>
				            </li>
				        </div>
    				</div>
	    		</nav>
	    		
	    		
	    		
	            <!-- 主页面内容容器 -->
	            <div class="mui-content mui-scroll-wrapper">
	                <div class="mui-scroll">
	                    <!-- 主界面具体展示内容 -->
	                    <!--文本域-->
						<div class="Main">
						    <div class="Input_Box">
						      	<textarea class="Input_text" id="text" placeholder="说点什么..." name="content"></textarea>   
						       <div class="faceDiv"> </div>
							</div>
							
						</div>
						<div id="localImag">
							<img id="preview" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/添加.png" width="80em" height="80em">
						</div>
	                </div>
	            </div>
	            
	            
	        </div>
	    </div>
	 </form>
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/zxxFile.js"></script>
	<script type="text/javascript" charset="utf-8">
		mui.init();
		//表情包
		//文本域限字数
		document.getElementById('text').onkeydown = function() 
		{    
		    if(this.value.length >= 140) 
		      event.returnValue = false; 
		} 
		function fileSelect() {
        	document.getElementById("doc").click(); 
    	}

    	 //下面用于图片上传预览功能
		function setImagePreview(avalue) {
		var docObj=document.getElementById("doc");
		 
		var imgObjPreview=document.getElementById("preview");
		if(docObj.files &&docObj.files[0])
		{
		//火狐下，直接设img属性
		imgObjPreview.style.display = 'block';
		imgObjPreview.style.width = '8em';
		imgObjPreview.style.height = '8em'; 
		//imgObjPreview.src = docObj.files[0].getAsDataURL();
		 
		//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
		imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
		}
		else
		{
		//IE下，使用滤镜
		docObj.select();
		var imgSrc = document.selection.createRange().text;
		var localImagId = document.getElementById("localImag");
		//必须设置初始大小
		localImagId.style.width = "150px";
		localImagId.style.height = "180px";
		//图片异常的捕捉，防止用户修改后缀来伪造图片
		try{
		localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
		localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
		}
		catch(e)
		{
		alert("您上传的图片格式不正确，请重新选择!");
		return false;
		}
		imgObjPreview.style.display = 'none';
		document.selection.empty();
		}
		return true;
		}
		//插件添加多图
	   //   var params = {
				// 	fileInput: $("#fileImage").get(0),
				// 	upButton: $("#fileSubmit").get(0),
				// 	url: $("#uploadForm").attr("action"),
				// 	filter: function(files) {
				// 		var arrFiles = [];
				// 		for (var i = 0, file; file = files[i]; i++) {
				// 			if (file.type.indexOf("image") == 0) {
				// 				arrFiles.push(file);				
				// 			} 
				// 			else {
				// 				mui.toast('文件"' + file.name + '"不是图片。');	
				// 			}
				// 		}
				// 		return arrFiles;
				// 	},
				// 	onSelect: function(files) {
				// 		var html = '', i = 0;
				// 		$("#preview").html('<div class="upload_loading"></div>');
				// 		var funAppendImage = function() {
				// 			file = files[i];
				// 			if (file) {
				// 				var reader = new FileReader()
				// 				reader.onload = function(e) {
				// 					html = html + '<div id="uploadList_'+ i +'" class="upload_append_list mui-col-sm-4 mui-text-center"><p>'+ 
				// 						'<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +
				// 						'<img id="uploadImage_' + i + '" src="' + e.target.result + '" class="upload_image" /></p>'+ 
				// 						'<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
				// 					'</div>';								
				// 					i++;
				// 					funAppendImage();
				// 				}
				// 				reader.readAsDataURL(file);
				// 			} else {
				// 				$("#preview").html(html);
				// 				if (html) {
				// 					//删除方法
				// 					$(".upload_delete").click(function() {
				// 						ZXXFILE.funDeleteFile(files[parseInt($(this).attr("data-index"))]);
				// 						return false;	
				// 					});
				// 					//提交按钮显示
				// 					$("#fileSubmit").show();
				// 				}else{
				// 					//提交按钮隐藏
				// 					$("#fileSubmit").hide();
				// 				}
				// 			}
				// 		};
				// 		funAppendImage();		
				// 	},
				// 	onDelete: function(file) {
				// 		$("#uploadList_" + file.index).fadeOut();
				// 	},
				// 	onSuccess: function(file, response) {
						
				// 		$("#uploadInf").append("<p>上传成功，图片地址是：" + response + "</p>");
				// 	},
				// 	onFailure: function(file) {
				// 		$("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");	
				// 		$("#uploadImage_" + file.index).css("opacity", 0.2);
				// 	},
				// };
				// ZXXFILE = $.extend(ZXXFILE, params);
				// ZXXFILE.init();
  </script>
</body>
</html>