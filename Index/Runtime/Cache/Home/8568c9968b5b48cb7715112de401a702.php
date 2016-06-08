<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医化管理系统</title>

	<link rel="stylesheet" href="/MCMS/Public/bs/css/bootstrap.css">
	<link rel="stylesheet" href="/MCMS/Public/css/index.css">

	<script src="/MCMS/Public/js/jquery.min.js"></script>
	<script src="/MCMS/Public/js/jquery.auto_tip.js"></script>
	<script src="/MCMS/Public/bs/js/bootstrap.min.js"></script>
</head>
<body>
	<?php if($login == 'true'): ?><div class="header">
		<nav class="navbar navbar-default navbar-static" >
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">医化管理系统</a>
				</div>
				
				<div class="collapse navbar-collapse navbar-right"> 
					 
					<ul class="nav navbar-nav">
						<li id="fat-menu" class="dropdown">
							<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo ($login_user); ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="drop3">
								<li><a href="#">我的账户</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="/MCMS/index.php/Home/Login/logout">安全退出</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav">
						<li><img src="/MCMS/Public/img/user_default.jpg" alt="头像" class="img-circle" style="margin: 10px 5px 0 5px;"></li>
					</ul> 					
				</div>
			</div>
    	</nav>
	</div>

	<div class="nav">
		<ul class="nav nav-tabs">
			<li role="presentation" <?php if($pg == 'index'): ?>class="active"<?php endif; ?>><a href="/MCMS/index.php/Home/Index/index">工作台</a></li>
			<li role="presentation" <?php if($pg == 'task'): ?>class="active"<?php endif; ?>><a href="/MCMS/index.php/Home/Task/index">任务大厅</a></li>
			<li role="presentation" <?php if($pg == 'mytask'): ?>class="active"<?php endif; ?>><a href="/MCMS/index.php/Home/Task/mytask">我的任务</a></li>
			<li role="presentation" <?php if($pg == 'client'): ?>class="active"<?php endif; ?>><a href="/MCMS/index.php/Home/Client/index">客户</a></li>
			<li role="presentation" <?php if($pg == 'tool'): ?>class="active"<?php endif; ?>><a href="/MCMS/index.php/Home/Tool/index">工具</a></li>
			<li role="presentation" <?php if($pg == 'user'): ?>class="active"<?php endif; ?>><a href="/MCMS/index.php/Home/User/index">用户</a></li>
			<li role="presentation" <?php if($pg == 'help'): ?>class="active"<?php endif; ?>><a href="/MCMS/index.php/Home/Help/index">HELP</a></li>
			<li role="presentation"><a href="#" class=''>日志</a></li>
		</ul>
	</div><?php endif; ?>

	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医化管理系统</title>

	<link rel="stylesheet" href="/MCMS/Public/bs/css/bootstrap.css">
</head>
<body>		
	<div style="width: 400px;margin:0 auto;margin-top: 200px;text-align: center;">
		<div class="row">			
			<div class="col-sm-offset-3">
				<img src="/MCMS/Public/img/logo.jpg" alt="" style="margin-bottom: 20px;">
			</div>
		</div>
		<form class="form-horizontal" action="/MCMS/index.php/Home/Login/login" method="post">
			<div class="form-group">
				<label for="username" class="col-sm-3 control-label" style="color: #666">用户名</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="username" name="username">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label" style="color: #666">密　码</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="password" name="password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					<button type="submit" class="btn btn-primary" id="login" style="width:100%;">登录</button>
				</div>	
			</div>
		</form>



	</div>

	<script src="/MCMS/Public/js/jquery.min.js"></script>
	<script src="/MCMS/Public/bs/js/bootstrap.min.js"></script>
</body>
</html>

</body>
</html>