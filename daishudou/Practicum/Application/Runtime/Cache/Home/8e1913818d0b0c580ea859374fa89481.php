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
    <!--主要样式-->
	<link rel="stylesheet" type="text/css" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/style.css" />
	<style type="text/css">
	.mui-content{
		background: #f2e3e6;
	}
		#calender{
			width: 90%;
			margin-top: 10%;
			margin-left: 5%;

		}
		#calender th{
			width: 4.8%;
			height: 3em;
			background-color:#ec6e86;
			color: #fff;
		}
		#calender tr{
			border: 1% solid #c8c9cb;
			background-color:#fff;
		}
		#calender td {
			border: 1px solid #c8c9cb;
			width: 2em;
			height:3em;
			text-align: center;
			background-color:#fff;
		}
		#btn {
			width: 155px;
			margin: 0 auto;
			padding-top: 10px;
			
		}
		button{
			width: 102%;
			height: 44px;
			background: #ec6e86;
			color: #fff;
			display: block;
			font-size: 1em;
		}
	</style>
</head>
<body>
    <!-- 主页面容器 -->
    <div class="mui-inner-wrap">
        <!-- 菜单容器 -->
        <!-- 主页面标题 -->
        <header class="mui-bar mui-bar-nav">
              <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
            <h1 class="mui-title">签到</h1>
        </header>
        <nav class="mui-bar mui-bar-tab">
		    <a class="mui-tab-item mui-active">
		        <span class="mui-icon iconfont icon-shouye5"></span>
		        <span class="mui-tab-label">圈子</span>
		    </a>
		    <a class="mui-tab-item">
		        <span class="mui-icon iconfont icon-shouye22"></span>
		        <span class="mui-tab-label">发现</span>
		    </a>
		    <a class="mui-tab-item">
		        <span class="mui-icon iconfont icon-shouye8"></span>
		        <span class="mui-tab-label">我的</span>
		    </a>
		</nav>
		
		
		
        <!-- 主页面内容容器 -->
        <div class="mui-content mui-scroll-wrapper">
            <div class="mui-scroll">
                <!-- 主界面具体展示内容 -->
                <div id="calender"></div>
                <div id="btn"><button type="button">立即签到</button></div>
				
            </div>
        </div>
    </div>

	    
	<script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		mui.init();
		
		//日历
		var calender = document.getElementById("calender");

		//判断是否闰年
		function isLeap(year) {
		return year % 4 == 0 ? (year % 100 != 0 ? 1 : (year % 400 == 0 ? 1 : 0)) : 0;
		}
		var today = new Date();	//获取当前日期
		var y = today.getFullYear();	//获取年份
		var m = today.getMonth();      //获取月份
		var d = today.getDate(); //获取日期
		var firstday = new Date(y,m,1);	//获取当前月份的第一天
		var dayOfWeek = firstday.getDay(); //判断当前月份第一天星期几，返回0-6
		var days_per_month = new Array(31,28+isLeap(y),31,30,31,30,31,31,30,31,30,31);	//月份数组
		var str_nums = Math.ceil((dayOfWeek+days_per_month[m]) / 7);//共多少数字
		var table = document.createElement("table");
		table.innerHTML = "<tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr>";
		calender.appendChild(table);
		for(var i = 0; i < str_nums; i ++) {
			var tr =document.createElement("tr");
			table.appendChild(tr);
			for(var k = 0; k < 7; k++) {
				var idx = 7 * i + k;	//为每个表格创建索引，从0开始
				var date = idx - dayOfWeek + 1;	//将当月1号与星期做匹配
				(date <=0 || date > days_per_month[m]) ? date = ' ' : date = idx - dayOfWeek + 1; //索引小于等于0或者大于月份最大值时就用空格代替
				var td = document.createElement("td");
				tr.appendChild(td);
				var textNode = document.createTextNode(date);
				td.appendChild(textNode);
			}
		}
		
		//签到
		document.getElementById("btn").onclick = function(){
			var d = new Date().getDate(); //获取当前日
			var btn = document.getElementById("btn");
			var table = document.getElementsByTagName("table");
			var td = document.getElementsByTagName("td");
			var len = td.length;
			for(var i=0; i<len; i++) {
				if(td[i].innerHTML == d) {
					td[i].style.background = "#ec6e86";
					td[i].style.color = "#ffffff";
					btn.innerHTML = "<button type='button'>今日已签</button>";
				}
			}
		}
		
    </script>
</body>
</html>