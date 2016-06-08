<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医化管理系统</title>

	<link rel="stylesheet" href="/Public/bs/css/bootstrap.css">
	<link rel="stylesheet" href="/Public/css/index.css">

	<script src="/Public/js/jquery.min.js"></script>
	<script src="/Public/bs/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-default navbar-static" >
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">医化管理系统</a>
				</div>
				
				<div class="collapse navbar-collapse navbar-right"> 
					<ul class="nav navbar-nav">
						<li><a href="#">待办事项</a></li>
						<li><img src="" alt="提醒" class="img-circle" style="margin: 10px 5px 0 5px;"></li>
						<li><img src="" alt="消息" class="img-circle" style="margin: 10px 5px 0 5px;"></li>
					</ul> 
					<ul class="nav navbar-nav">
						<li id="fat-menu" class="dropdown">
							<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								宁海峰 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="drop3">
								<li><a href="#">我的账户</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="/index.php/Home/Login/logout">安全退出</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav">
						<li><img src="/Public/img/user_default.jpg" alt="头像" class="img-circle" style="margin: 10px 5px 0 5px;"></li>
					</ul> 					
				</div>
				<div class="navbar-nav navbar-right" >
					<div class="input-group search">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<a href="#" class="btn btn-default">搜索</a>
						</span>
					</div>					
				</div>
			</div>
    	</nav>
	</div>

	<div class="nav">
		<ul class="nav nav-tabs">
			<li role="presentation" <?php if($pg == 'index'): ?>class="active"<?php endif; ?>><a href="/index.php/Home/Index/index">工作台</a></li>
			<li role="presentation" <?php if($pg == 'task'): ?>class="active"<?php endif; ?>><a href="/index.php/Home/Task/index">任务</a></li>
			<li role="presentation" <?php if($pg == 'client'): ?>class="active"<?php endif; ?>><a href="/index.php/Home/Client/index">客户</a></li>
			<li role="presentation" <?php if($pg == 'tool'): ?>class="active"<?php endif; ?>><a href="/index.php/Home/Tool/index">工具</a></li>
			<li role="presentation" <?php if($pg == 'user'): ?>class="active"<?php endif; ?>><a href="/index.php/Home/User/index">用户</a></li>
			<li role="presentation"><a href="log.html">日志</a></li>
		</ul>
	</div>

	index

</body>
</html>