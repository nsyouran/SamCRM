<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home-SamCRM</title>

	<link rel="stylesheet" href="/SamCRM/Public/bs/css/bootstrap.css">

	<script src="/SamCRM/Public/js/jquery.min.js"></script>
	<script src="/SamCRM/Public/bs/js/bootstrap.min.js"></script>
	<script src="/SamCRM/Public/js/holder.min.js"></script>
</head>
<body>
<div class="header" style="width: 100%; height: 40px; background: #333; color: #fff">
	<div id="logo" style="display: inline-block; height: 40px;margin-left: 20px; vertical-align: middle">
		<span style="display: inline-block;font-size: 20px;margin-top: 7px;"><i>SamCRM</i></span>
	</div>
	<div class="pull-right">
		<div style="display: inline-block; height: 40px; padding: 9px 20px 0 0;">
		<img src="holder.js/30x30?text=TX" class="img-circle" style="margin: -5px 10px 0 0;">
		<a href="" style="color: #fff; font-size: 16px">admin</a>
		<span style="color: #fff; font-size: 16px; margin: 0 5px;">|</span>
		<a href="" style="color: #fff; font-size: 16px">退出</a>
		</div>
	</div>
</div>
<div class="top" style="height: 30px; background: #eee; border-bottom: 1px solid #ccc">
	<div id="jnkc" style="display: inline-block; margin: 5px 20px;"></div>
	<script>
		setInterval("jnkc.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
	</script>
	<div id="top_tips" style="display: inline-block; margin: 5px 20px;">A day is a miniature of eternity. （ Emerson ）</div>
</div>
<div style="position: absolute; top: 70px;bottom: 0; width: 100%;">
	<div id="left" style="position: absolute;top: 0;bottom: 0; width: 250px; border-right: 1px solid #ccc">
		<ul class="list-group">
			<li class="list-group-item">
				<a href="#collapse1" data-toggle="collapse" style="display: block;">
					<img src="/SamCRM/Public/img/home/img/22.png" style="height: 20px;">
					<span style="vertical-align: middle;margin-left: 5px;">首页</span>
				</a>
			</li>
			<div id="collapse1" class="collapse">
				<ul class="list-group" style="margin-bottom: 0px;">
					<li class="list-group-item" style="padding-left: 40px;"><a href="">sub1_1</a></li>
					<li class="list-group-item" style="padding-left: 40px; border-bottom: none"><a href="">sub1_2</a></li>
				</ul>
			</div>
			<li class="list-group-item" >
				<a href="#collapse2" data-toggle="collapse" style="display: block">button2</a>
			</li>
			<div id="collapse2" class="collapse">
				<ul class="list-group" style="margin-bottom: 0px;">
					<li class="list-group-item" style="padding-left: 40px;"><a href="">sub2_1</a></li>
					<li class="list-group-item" style="padding-left: 40px; border-bottom: none""><a href="">sub2_2</a></li>
				</ul>
			</div>
			<li class="list-group-item" >
				<a href="#collapse3" data-toggle="collapse" style="display: block">
					<img src="/SamCRM/Public/img/home/img/269.png" style="height: 20px;">
					<span style="vertical-align: middle;margin-left: 5px;">客户管理</span>
				</a>
			</li>
			<div id="collapse3" class="collapse">
				<ul class="list-group" style="margin-bottom: 0px;">
					<li class="list-group-item" style="padding-left: 40px;">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/Client/index');return false;">
							<img src="/SamCRM/Public/img/home/img/269.png" style="height: 16px;">
							<span style="vertical-align: middle;margin-left: 5px;">全部</span>
						</a>
					</li>
					<li class="list-group-item" style="padding-left: 40px; border-bottom: none"">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/Client/add');return false;">
							<img src="/SamCRM/Public/img/home/add.png" alt="">
							<span style="vertical-align: middle;margin-left: 5px;">新增</span>
						</a>
					</li>
				</ul>
			</div>
			<li class="list-group-item" >
				<a href="#collapse4" data-toggle="collapse" style="display: block">
					<img src="/SamCRM/Public/img/home/img/23.png" style="height: 20px;">
					<span style="vertical-align: middle;margin-left: 5px;">工具管理</span>
				</a>
			</li>
			<div id="collapse4" class="collapse">
				<ul class="list-group" style="margin-bottom: 0px;">
					<li class="list-group-item" style="padding-left: 40px;">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/Tool/index');return false;">
							<img src="/SamCRM/Public/img/home/img/23.png" style="height: 16px;">
							<span style="vertical-align: middle;margin-left: 5px;">全部</span>
						</a>
					</li>
					<li class="list-group-item" style="padding-left: 40px; border-bottom: none"">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/Tool/add');return false;">
							<img src="/SamCRM/Public/img/home/add.png" alt="">
							<span style="vertical-align: middle;margin-left: 5px;">新增</span>
						</a>
					</li>
				</ul>
			</div>
			<li class="list-group-item" >
				<a href="#collapse5" data-toggle="collapse" style="display: block">
					<img src="/SamCRM/Public/img/home/img/527.png" style="height: 20px;">
					<span style="vertical-align: middle;margin-left: 5px;">用户管理</span>
				</a>
			</li>
			<div id="collapse5" class="collapse">
				<ul class="list-group" style="margin-bottom: 0px;">
					<li class="list-group-item" style="padding-left: 40px;">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/User/index');return false;">
							<img src="/SamCRM/Public/img/home/img/527.png" style="height: 16px;">
							<span style="vertical-align: middle;margin-left: 5px;">全部</span>
						</a>
					</li>
					<li class="list-group-item" style="padding-left: 40px;">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/User/group');return false;">
							<img src="/SamCRM/Public/img/home/img/535.png" style="height: 16px;">
							<span style="vertical-align: middle;margin-left: 5px;">组管理</span>
						</a>
					</li>
					<li class="list-group-item" style="padding-left: 40px; border-bottom: none"">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/User/competence');return false;">
							<img src="/SamCRM/Public/img/home/img/534.png" style="height: 16px;">
							<span style="vertical-align: middle;margin-left: 5px;">权限管理</span>
						</a>
					</li>
				</ul>
			</div>
			<li class="list-group-item" >
				<a href="#collapse6" data-toggle="collapse" style="display: block">
					<img src="/SamCRM/Public/img/home/img/375.png" style="height: 20px;">
					<span style="vertical-align: middle;margin-left: 5px;">数据管理</span>
				</a>
			</li>
			<div id="collapse6" class="collapse">
				<ul class="list-group" style="margin-bottom: 0px;">
					<li class="list-group-item" style="padding-left: 40px;">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/Client/index');return false;">
							<img src="/SamCRM/Public/img/home/img/375.png" style="height: 16px;">
							<span style="vertical-align: middle;margin-left: 5px;">全部</span>
						</a>
					</li>
					<li class="list-group-item" style="padding-left: 40px;">
						<a onclick="$('#iframe').attr('src','/SamCRM/index.php/Home/Client/add');return false;">
							<img src="/SamCRM/Public/img/home/add.png" alt="">
							<span style="vertical-align: middle;margin-left: 5px;">新增</span>
						</a>
					</li>
				</ul>
			</div>
		</ul>

	</div>
	<div id="right" style="position: absolute;top: 0;bottom: 0; left: 250px; right: 0;overflow: hidden">
		<iframe src="/SamCRM/index.php/Home/Client/index" frameborder="0" id="iframe" style="width: 100%; height: 100%;"></iframe>
	</div>
</div>

</body>
</html>