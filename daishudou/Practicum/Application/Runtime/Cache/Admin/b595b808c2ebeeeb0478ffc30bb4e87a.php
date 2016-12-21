<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>袋鼠兜</title>
<link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Admin/css/bootstrap.css">
<link href="/zhong_daishudou/daishudou/Practicum/Public/Admin/css/jquery-ui.css" rel="stylesheet">
<link href="/zhong_daishudou/daishudou/Practicum/Public/Admin/css/mystyle.css" rel="stylesheet">
<script src="/zhong_daishudou/daishudou/Practicum/Public/Admin/js/jquery.js"></script>    
<script src="/zhong_daishudou/daishudou/Practicum/Public/Admin/js/bootstrap.min.js"></script>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   
    <span class="navbar-logo" > 袋鼠兜</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
   
  </div><!-- /.navbar-collapse -->
</nav> 

	<div class="row">
    	<div class=" col-md-2 sidebar">
           <div class="headface">
            <img src="/zhong_daishudou/daishudou/Practicum/Public/Admin/images/headface.png">
          </div>
          <div class="niname">
            <p>MM</p>
          </div>
    	  <div id="accordion">
    	    <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li  ><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Users/user_list.html">系统用户管理</a></li>
               <li  ><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Users/user_add.html">添加管理员</a></li>
    	      <li ><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Users/user_pass.html">修改个人密码</a></li>
    	      <li ><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Users/user_modi.html">修改个人信息</a></li>
  	      </ul>
    	    <h3><a href="#"><span class="glyphicon glyphicon-file"></span>文章管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Article/add.html">添加文章</a></li>
    	      <li><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Article/lists.html">管理文章</a></li>
  	      </ul>
    	    <h3><a href="#"><span class="glyphicon glyphicon-book"></span>活动管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li ><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Active/add.html">添加活动</a></li>
    	      <li><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Active/active_list.html">活动列表</a></li>
  	      </ul>
    	    <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>故事管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li ><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Story/add.html" >添加故事</a></li>
    	      <li ><a href="/zhong_daishudou/daishudou/Practicum/admin.php/Story/story_list.html">故事列表</a></li>
  	      </ul>
  	    </div>
    	</div>
      
        <div class="col-md-10 col-md-offset-2 ">
               	                  <ol class="breadcrumb">

 <!-- 幻灯片 -->
 <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="carousel slide" id="carousel-600914">
        <ol class="carousel-indicators">
          <li data-slide-to="0" data-target="#carousel-600914">
          </li>
          <li data-slide-to="1" data-target="#carousel-600914">
          </li>
          <li data-slide-to="2" data-target="#carousel-600914" class="active">
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="item">
            <img alt="" src="http://ibootstrap-file.b0.upaiyun.com/lorempixel.com/1600/500/sports/1/default.jpg" />
            <div class="carousel-caption">
              <h4>
                First Thumbnail label
              </h4>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </div>
          </div>
          <div class="item">
            <img alt="" src="http://ibootstrap-file.b0.upaiyun.com/lorempixel.com/1600/500/sports/2/default.jpg" />
            <div class="carousel-caption">
              <h4>
                Second Thumbnail label
              </h4>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </div>
          </div>
          <div class="item active">
            <img alt="" src="http://ibootstrap-file.b0.upaiyun.com/lorempixel.com/1600/500/sports/3/default.jpg" />
            <div class="carousel-caption">
              <h4>
                Third Thumbnail label
              </h4>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </div>
          </div>
        </div> <a class="left carousel-control" href="#carousel-600914" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-600914" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
  </div>
  
</ol>
        	<div class="row pad">
              <div class="col-md-3">
                <div class="panel panel-default">
  <div class="panel-body" id="ma_user">
    <div class=" nr">
        <h3>用户管理</h3>
      <p>统一管理用户账户，可以对用户进行修改、删除，并且可以修改自己的个人信息和</p>        
    </div>
    <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
    </div>
</div>
                </div>
                <div class="col-md-3">
                <div class="panel panel-default">
   <div class="panel-body" id="ma_content">
    <div class=" nr">
        <h3>内容管理</h3>
      <p>统一管理用户账户，可以对用户进行修改、删除，并且可以修改自己的个人信息和</p>        
    </div>
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>

    </div>   
    </div>
</div>
<div class="col-md-6">
              <div class="panel panel-default">
  <div class="panel-body" id="ma_email">
      <span class="glyphicon glyphicon-envelope pull-left "></span> 
    <div class=" nr">    
   
        <h2 class="pull-right" >123条<br/><span class="pull-right">邮件</span></h2>
    </div>
    
    
    </div>
    <div class="mes_more"><a href="#" >查看更多</a></div>
</div>
                </div>
                </div>
                
                <div class="row pad">
              <div class="col-md-3">
                <div class="panel panel-default">
  <div class="panel-body" id="ma_mess">
    <div class=" nr">
        <h3>消息管理</h3>
      <p>统一管理用户账户，可以对用户进行修改、删除，并且可以修改自己的个人信息和</p>        
    </div>
    <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
    </div>
</div>
                </div>
                <div class="col-md-3">
                <div class="panel panel-default">
   <div class="panel-body" id="ma_act">
    <div class=" nr">
        <h3>活动管理</h3>
      <p>统一管理用户账户，可以对用户进行修改、删除，并且可以修改自己的个人信息和</p>        
    </div>
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>

    </div>   
    </div>
</div>
<div class="col-md-6">
              <div class="panel panel-default">
  <div class="panel-body" id="ma_alert">
      <span class="glyphicon glyphicon-bell pull-left "></span> 
    <div class=" nr">    
   
        <h2 class="pull-right" >123条<br/><span class="pull-right">消息</span></h2>
    </div>
    
    
    </div>
    <div class="ale_more"><a href="#">查看更多</a></div>
</div>
                </div>
                </div>
         	


        </div>
        	
	
</div>
<script src="/zhong_daishudou/daishudou/Practicum/Public/Admin/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>