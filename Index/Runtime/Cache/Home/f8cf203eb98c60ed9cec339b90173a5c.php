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

	
<div class="content">
	<div class="user">
		<img src="/MCMS/Public/img/user_default.jpg" alt="" width="170" height="170">
		<div>
			<h3><?php echo ($username); ?></h3>
			<h4>气体</h4>
			<h4>管理员</h4>
		</div>
	</div>
	<div class="calendar">加载日历插件中...</div>
	<div class="mytask" style="position: absolute;top: 2px; height: 300px;left: 380px;right: 0px;">
		<h3>我的任务</h3>
		<div style="overflow: auto;width: 100%;height: 260px;">
			<table class="table table-striped table-hover">
				<tbody>
				<tr>
					<td style="width: 20px;"><input type="checkbox"></td>
					<td>代号</td>
					<td>目标</td>
					<td>地址</td>
					<td>联系人</td>
					<td>联系电话</td>
					<td>接受日期</td>
				</tr>
				<?php if(is_array($tlist)): $i = 0; $__LIST__ = $tlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mt): $mod = ($i % 2 );++$i;?><tr>
					<td><input type="checkbox"></td>
					<td><a href="#" class="code"><?php echo ($mt["code"]); ?><span style="display:none;"><?php echo ($mt["id"]); ?></span></a></td>
					<td><?php echo ($mt["clientname"]); ?></td>
					<td><?php echo ($mt["addr"]); ?></td>					
					<td><?php echo ($mt["contact"]); ?></td>
					<td><?php echo ($mt["tel"]); ?></td>
					<td><?php echo ($mt["accept_time"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
		<h3>我的工具</h3>
		<div style="overflow: auto;width: 100%;height: 260px;">
			<table class="table table-striped table-hover">
				<tbody>
				<tr>
					<td style="width: 20px;"><input type="checkbox"></td>
					<td>代号</td>
					<td>目标</td>
					<td>地址</td>
					<td>联系人</td>
					<td>联系电话</td>
					<td>接受日期</td>
				</tr>
				<?php if(is_array($listtask)): $i = 0; $__LIST__ = $listtask;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mt): $mod = ($i % 2 );++$i;?><tr>
					<td><input type="checkbox"></td>
					<td><a href="#" class="code"><?php echo ($mt["code"]); ?><span style="display:none;"><?php echo ($mt["id"]); ?></span></a></td>
					<td><?php echo ($mt["clientname"]); ?></td>
					<td><?php echo ($mt["addr"]); ?></td>					
					<td><?php echo ($mt["contact"]); ?></td>
					<td><?php echo ($mt["tel"]); ?></td>
					<td><?php echo ($mt["accept_time"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>