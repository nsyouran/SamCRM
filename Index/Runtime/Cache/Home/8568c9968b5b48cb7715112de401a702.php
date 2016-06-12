<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login-SamCRM</title>

	<link rel="stylesheet" href="/SamCRM/Public/bs/css/bootstrap.css">

	<script src="/SamCRM/Public/js/jquery.min.js"></script>
	<script src="/SamCRM/Public/bs/js/bootstrap.min.js"></script>
	<script src="/SamCRM/Public/js/holder.min.js"></script>
</head>

<body style="background: url(/SamCRM/Public/img/home/login_bg1.jpg)">
	<div style="width: 600px;margin:0 auto;margin-top: 150px;text-align: center;">
		<div class="row">			
			<div class="">
				<img src="holder.js/100x100?text=Logo&size=20&theme=vine" class="img-circle" style="margin-bottom: 20px;">
			</div>
		</div>
		<form class="form-horizontal" id="loginForm" action="/SamCRM/index.php/Home/Login/login" method="post">
			<div class="form-group">
				<label for="username" class="col-sm-3 control-label" style="color: #ccc">用户名</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="username" name="username" autocomplete="off">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label" style="color: #ccc">密　码</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="password" name="password" autocomplete="off">
				</div>
			</div>
			<?php if(1 == 2): ?><div class="form-group">
				<label for="password" class="col-sm-3 control-label" style="color: #ccc">验证码</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="vcode" name="vcode" autocomplete="off">
				</div>
				<div class="col-sm-2" style="text-align: right">
					<img src="holder.js/125x34?text=1 2 3 4&size=14" class="img-rounded" alt="">
				</div>
			</div><?php endif; ?>
			<div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<button type="submit" class="btn btn-primary" id="login" style="width:100%;">登　录</button>
				</div>	
			</div>
		</form>
	</div>
	<script>
		$("#login").click(function () {
			var username = $("#username").val();
			var password = $("#password").val();
			var vcode = $("#vcode").val();
			if(username == ""){
				$("#username").focus();
				return false;
			}
			if(password == ""){
				$("#password").focus();
				return false;
			}
			if(vcode == ""){
				$("#vcode").focus();
				return false;
			}
		});
	</script>
</body>
</html>