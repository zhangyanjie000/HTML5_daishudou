window.onload = function() {
	//悬浮按钮
		 if(document.querySelector(".float-menu")){
			var plus = document.querySelector(".plus");
			var floatMenu = document.querySelector(".float-menu");
			plus.addEventListener("tap", function(){
				floatMenu.className.indexOf("open") > -1?floatMenu.className = "float-menu":floatMenu.className = "float-menu open";
			},false);
		}
		//拖拽悬浮按钮
			// 获取节点
		  	var block = document.getElementById("menu");
		  	var oW,oH;
			  // 绑定touchstart事件
			block.addEventListener("touchstart", function(e) {
		   	console.log(e);
		  	var touches = e.touches[0];
		   	oW = touches.clientX - block.offsetLeft;
		   	oH = touches.clientY - block.offsetTop;
		   	//阻止页面的滑动默认事件
		   	document.addEventListener("touchmove",defaultEvent,false);
		  	},false)
		 
		  	block.addEventListener("touchmove", function(e) {
		   	var touches = e.touches[0];
		   	var oLeft = touches.clientX - oW;
		   	var oTop = touches.clientY - oH;
		   	if(oLeft < 0) {
		    	oLeft = 0;
		   	}else if(oLeft > document.documentElement.clientWidth - block.offsetWidth) {
		    	oLeft = (document.documentElement.clientWidth - block.offsetWidth);
		   	}
		   	block.style.left = oLeft + "px";
		   	block.style.top = oTop + "px";
		  	},false);
		   
		  	block.addEventListener("touchend",function() {
		   		document.removeEventListener("touchmove",defaultEvent,false);
		  	},false);
		  	function defaultEvent(e) {
		   		e.preventDefault();
		  	}


	function getElementsClass(classnames){ 
		var classobj= new Array();//定义数组 		 
		var classint=0;//定义数组的下标 		 
		var tags=document.getElementsByTagName("*");//获取HTML的所有标签 
		 
		for(var i in tags){//对标签进行遍历 		 
			if(tags[i].nodeType==1){//判断节点类型 
		 	//判断和需要CLASS名字相同的，并组成一个数组 
			if(tags[i].getAttribute("class") == classnames){
				classobj[classint]=tags[i]; 
				classint++;
			}
		} 
	} 
		return classobj;//返回组成的数组 
	}
	//图片四张排版
	var row = getElementsClass("mui-row");
	var col = getElementsClass("mui-col-xs-4 mui-col-sm-4");
	for (var j=0; j<row.length; j++) {
		(function(j) {
			if(row[j].children.length < 5) {
				for(var i=0; i<row[j].children.length; i++) {
					row[j].children[i].className = "mui-col-xs-6 mui-col-sm-6";
				}
			}
		})(j)
	}
	

}
