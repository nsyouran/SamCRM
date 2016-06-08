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
	<div class="control">
		<div class="btn-group" >
			<button type="button" class="btn btn-default refresh">刷新</button>	
			<button type="button" class="btn btn-default" data-toggle="modal" id="pre_publish" data-backdrop="static">发布</button>
			<button type="button" class="btn btn-default delete">删除</button>			
		</div>
		<div class="input-group" style="width:400px;margin:0 200px 0 0;float: right">
				<input type="text" class="form-control">
				<span class="input-group-btn">
					<a href="#" class="btn btn-default">搜索</a>
				</span>
		</div>
	</div>
	<div class="detail">		
		<div style="position: absolute;top: 42px; bottom:0;left: 10px;right: 10px; overflow: auto">
			<table class="table table-striped table-hover" style="background: #eee">
				<tt>
					<td style="width: 20px;"><input type="checkbox"></td>
					<td>代号<a href=""><span style="display:none;">0</span></a></td>
					<td>目标单位</td>
					<td>目标项目</td>
					<td>备注</td>
					<td>发布日期</td>
				</tt>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><tr>					
						<?php if($t["accepter"] == 0): ?><td><input type="checkbox"></td>
						<td><a href="#" class="code"><?php echo ($t["code"]); ?><span style="display:none;"><?php echo ($t["id"]); ?></span></a></td>
						<?php else: ?>
						<td><input type="checkbox" disabled="true"></td>
						<td><?php echo ($t["code"]); ?><span style="display:none;"><?php echo ($t["id"]); ?></span></td><?php endif; ?>
						<td><?php echo ($t["target"]); ?></td>
						<td><?php echo ($t["project"]); ?></td>
						<td><?php echo ($t["comment"]); ?></td>
						<td><?php echo ($t["publish_time"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>				
			</table>
		</div>
	</div>
</div>

<!-- publishTask -->
<div class="modal fade" id="publishTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">发布任务</h4>
			</div>

			<div class="modal-body">
			<form class="form">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="code">任务代号</label>
							<input type="text" class="form-control" id="code" placeholder="任务代号" value="89757">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="form-group">
							<label for="">目标单位</label>
							<input type="text" class="form-control auto_tip_target" id="target" placeholder="目标单位" autocomplete="off">			
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="">目标地址</label>
					<input type="text" class="form-control " id="address" placeholder="目标地址">			
				</div>
				<div class="row">
					<div class="col-sm-5">
						<div class="form-group">
							<label for="">联系人</label>
							<input type="text" class="form-control " id="contact" placeholder="联系人">			
						</div>						
					</div>
					<div class="col-sm-7">
						<div class="form-group">
							<label for="">联系电话</label>
							<input type="text" class="form-control" id="tel" placeholder="联系电话">			
						</div>							
					</div>
				</div>
				<div class="form-group">
					<label for="">目标任务</label>
					<input type="text" class="form-control" id="project" placeholder="目标任务">			
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">预约日期</label>
							<input type="text" class="form-control" id="pre_start_date" placeholder="预约日期">			
						</div>						
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">预计完成日期</label>
							<input type="text" class="form-control" id="pre_cmpl_date" placeholder="预计完成日期">			
						</div>							
					</div>
				</div>
				<div class="form-group">
					<label for="">备注</label>
					<input type="text" class="form-control " id="comment" placeholder="备注">	
				</div>
			</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				<button type="button" class="btn btn-primary" id="btn_publishtask">发布</button>
			</div>
		</div>
	</div>
</div>

<!-- taskDetail -->
<div class="modal fade" id="taskDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' id='myModalLabel'>任务详情</h4>
			</div>

			<div class="modal-body">
			<form class="form">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="code">任务代号</label>
							<input type="text" class="form-control" id="vcode" placeholder="任务代号" value="89757">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="form-group">
							<label for="">目标单位</label>
							<input type="text" class="form-control auto_tip_target" id="vtarget" placeholder="目标单位" autocomplete="off">			
						</div>
					</div>
				</div>					

				<div class="form-group">
					<label for="">目标地址</label>
					<input type="text" class="form-control " id="vaddress" placeholder="目标地址">			
				</div>
				<div class="row">
					<div class="col-sm-5">
						<div class="form-group">
							<label for="">联系人</label>
							<input type="text" class="form-control " id="vcontact" placeholder="联系人">			
						</div>						
					</div>
					<div class="col-sm-7">
						<div class="form-group">
							<label for="">联系电话</label>
							<input type="text" class="form-control" id="vtel" placeholder="联系电话">			
						</div>							
					</div>
				</div>
				<div class="form-group">
					<label for="">目标任务</label>
					<input type="text" class="form-control" id="vproject" placeholder="目标任务">			
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">预约日期</label>
							<input type="text" class="form-control" id="vpre_start_date" placeholder="预约日期">			
						</div>						
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">预计完成日期</label>
							<input type="text" class="form-control" id="vpre_cmpl_date" placeholder="预计完成日期">			
						</div>							
					</div>
				</div>
				<div class="form-group">
					<label for="">备注</label>
					<input type="text" class="form-control " id="vcomment" placeholder="备注">	
				</div>
			</form>
			</div>

			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>取消</button>
				<button type='button' class='btn btn-primary' id="btn_modifytask">修改</button>
				<button type='button' class='btn btn-danger btn-accept'>接受</button>
			</div>
		</div>
	</div>
</div>

<script>
	$('.refresh').click(function(){
		window.location.reload();
	});

	$('.delete').click(function(){
		var has=0
		$(':checkbox').each(function(){
			if($(this).parent().parent().children().eq(1).children().children().html()!=0){
				if($(this).is(':checked')){
					has = has+1;
					var tid_ = $(this).parent().parent().children().eq(1).children().children().html();
					var code_ = $(this).parent().parent().children().eq(1).children().html();
					code_ = code_.split("<span")[0];
					if(confirm('确认删除 ' + code_ + " ?")){
						$.ajax({
							url: "/MCMS/index.php/Home/Task/delete",
							async: false,
							type: "POST",
							dataType: "html",
							data : {
								tid: tid_,
							},
							success: function(rtn){
								if(rtn == "success"){
									alert(code_ + '删除成功');
								}else{
									alert(code_ + '删除失败');
								}
							},
						});
					};
				}
			}
		});
		if(has==0){
			alert("请先选择需要删除的任务");
		}else{
			window.location.reload(true);
		}	
	});

	$("#pre_publish").click(function(){
		$("#code").val('1111');
		$("#publishTask").modal('show');
	});

	$('.code').click(function(){
		var tid_ = $(this).children('span').html();
		$.ajax({
			url: "/MCMS/index.php/Home/Task/view",
			async: false,
			type: "POST",
			dataType: "json",
			data : {
				tid: tid_,
			},
			success: function(rtn){
				$("#vcode").val(rtn["code"]);
				$("#vcode").attr('_id',rtn['id']);
				$("#vtarget").val(rtn["target"]);
				$("#vaddress").val(rtn["addr"]);
				$("#vcontact").val(rtn["contact"]);
				$("#vtel").val(rtn["tel"]);
				$("#vproject").val(rtn["project"]);
				$("#vpre_start_date").val(rtn["pre_start_date"]);
				$("#vpre_cmpl_date").val(rtn["pre_cmpl_date"]);
				$("#vcomment").val(rtn["comment"]);
			},
		});

		$('#taskDetail').modal({
			backdrop: 'static',
		});
	});

	$("#btn_modifytask").click(function(){
		var tid = $("#vcode").attr('_id')
		var code = $("#vcode").val();
		var target = $("#vtarget").val();
		var addr = $("#vaddress").val();
		var contact = $("#vcontact").val();
		var tel = $("#vtel").val();
		var project = $("#vproject").val();
		var pre_start_date = $("#vpre_start_date").val();
		var pre_cmpl_date = $("#vpre_cmpl_date").val();
		var comment = $("#vcomment").val();
		$.ajax({
			url: "/MCMS/index.php/Home/Task/modify",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				id 		: tid,
				code 	: code,
				target 	: target,
				addr 	: addr,
				contact	: contact,
				tel 	: tel,
				project	: project,
				pre_start_date	: pre_start_date,
				pre_cmpl_date	: pre_cmpl_date,
				comment 		: comment,
			},
			success: function(rtn){
				console.log(rtn);
				if(rtn == "success"){
					alert("修改成功");
					window.location.reload();
				}else{
					alert("修改失败");
				}
			},
		});
	});

	$('#btn_publishtask').click(function(){
		$.ajax({
			url: "/MCMS/index.php/Home/Task/add",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				code 	: $("#code").val(),
				target 	: $("#target").val(),
				addr	: $("#address").val(),
				contact	: $("#contact").val(),
				tel 	: $("#tel").val(),
				project	: $("#project").val(),
				pre_start_date	: $("#pre_start_date").val(),
				pre_cmpl_date	: $("#pre_cmpl_date").val(),
				comment			: $("#comment").val(),
			},
			success: function(rtn){
				if(rtn == "success"){
					window.location.reload(true);
				}else{
					alert('发布失败');
				}
			},
		});
	});

	$('.auto_tip_target').auto_tip({
		'skey'	: 'clientname',
		'url'	: '/MCMS/index.php/Home/Task/auto_tip',
		'delay'	: 500,
		'success'	: function(){
			console.log('auto_cmplt');
			$.ajax({
				url: '/MCMS/index.php/Home/Task/find',
				async: true,
				type: "POST",
				dataType: "json",
				data : {
					id	: $('.auto_tip_target').attr('_id')
				},
				success: function(rtn){	
					//console.log(rtn);
					$('#address').val(rtn['addr']);
					$('#contact').val(rtn['contact']);
					$('#tel').val(rtn['tel']);
				},
			});
		}
	});
	
	$('.btn-accept').click(function(){
		$.ajax({
			url: "/MCMS/index.php/Home/Task/accept",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				id: $("#vcode").attr('_id'),
			},
			success: function(rtn){
				if('success' == rtn){
					alert('接受成功');
					window.location.href = '/MCMS/index.php/Home/Task/mytask';
				}else{
					alert('接受失败');
				}
			},
		});
	});
</script>

</body>
</html>