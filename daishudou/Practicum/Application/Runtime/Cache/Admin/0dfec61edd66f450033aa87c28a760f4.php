<?php if (!defined('THINK_PATH')) exit();?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Admin/css/bootstrap.css">
<link href="/zhong_daishudou/daishudou/Practicum/Public/Admin/css/jquery-ui.css" rel="stylesheet">
<link href="/zhong_daishudou/daishudou/Practicum/Public/Admin/css/mystyle.css" rel="stylesheet">
<script src="/zhong_daishudou/daishudou/Practicum/Public/Admin/js/jquery.js"></script>    
<script src="/zhong_daishudou/daishudou/Practicum/Public/Admin/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header"> <span class="navbar-logo" > 袋鼠兜</span></div>
</nav> 

	<div class="row">
    <div class="col-md-4"></div>
    	<div class="col-md-4 ">
        <div class="list-group login">
  <div  class="list-group-item active">
  <strong class="font14">登录</strong>
  </div>
  <div class="list-group-item">
  	<form role="form" action="" method="post">
    <div class="input-group">
  <input type="text" class="form-control" placeholder="用户名在这里" name="username">
</div>
<div class="input-group">
  <input type="password" class="form-control" placeholder="密码在这里" name="password">
</div>
 <div class="row yz">
  <div class="col-md-8">
<div class="input-group">   
<div class="checkbox">
    <label>
      <input type="checkbox"name="rememberpwd"> 记住密码
    </label>
    <a href="#" class="pull-right img1">我要注册</a> 
    </div> 
     <div class="input-group">
  <button type="submit" class="btn btn-primary "> &nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;</button>
  </div>
    </form>
  </div>
 
</div>
        </div>
        <div class="col-md-4"></div>
    </div>

</body>
</html>