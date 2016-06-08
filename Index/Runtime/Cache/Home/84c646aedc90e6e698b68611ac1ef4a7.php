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
	<div class="detail">		
		<div style="margin-top: 10px; overflow: auto">
			<table class="table table-striped table-hover" style="background: #eee">
				<tt>
					<td style="width: 20px;"><input type="checkbox"></td>
					<td>代号<a href=""><span style="display:none;">0</span></a></td>
					<td style="width: 25em">目标单位</td>
					<td style="width: 15em">联系人</td>
					<td>目标任务</td>
					<td>备注</td>							
					<td>
						<div id="fat-menu" class="dropdown">
							<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								状态
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="drop3">
								<li><a href="#">已接收</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">完成检测</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">完成证书</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">已结账</a></li>
							</ul>
						</div>
					</td>
					<td>更新时间</td>
				</tt>
				<tbody style="height: 200px;">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><tr>
						<td><input type="checkbox"></td>
						<td><a href="#" class="code"><?php echo ($t["code"]); ?><span style="display:none;"><?php echo ($t["id"]); ?></span></a></td>
						<td>
							<label><?php echo ($t["target"]); ?></label><br />
							<i>地址：</i><label><?php echo ($t["addr"]); ?></label>
						</td>
						<td>
							<label><?php echo ($t["contact"]); ?></label><br />
							<i>电话：</i><label><?php echo ($t["tel"]); ?></label>
						</td>
						<td><?php echo ($t["project"]); ?></td>
						<td><?php echo ($t["comment"]); ?></td>								
						<td><?php echo ($t["step_zh"]); ?></td>
						<td><?php echo ($t["update_time"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
				</tbody>			
			</table>
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
			<form class="form" method="post" action="/MCMS/index.php/Home/Task/ready">
				<table class="table table-bordered" style="vertical-align:middle;">
					<tr class="hide"><td><input type="text" name="id" id='taskid'/></td></tr>
					<tr class="row">					
						<td class="col-sm-2"><span>任务代号</span></td>
						<td class="col-sm-4"><span id="code"></span></td>
						<td class="col-sm-2"><span>接收日期</span></td>
						<td class="col-sm-4"><span id="accept_time"></span></td>
					</tr>
					<tr class="row">
						<td class="col-sm-2">目标单位</td>
						<td class="col-sm-10" colspan="3"><span id="target"></span></td>
					</tr>	
					<tr class="row">
						<td class="col-sm-2">目标地址</td>
						<td class="col-sm-10" colspan="3"><span id="addr"></span></td>
					</tr>
					<tr class="row">
						<td class="col-sm-2"><span>联系人</span></td>
						<td class="col-sm-4"><span id="contact"></span></td>
						<td class="col-sm-2"><span>联系电话</span></td>
						<td class="col-sm-4"><span id="tel"></span></td>
					</tr>	
					<tr class="row">
						<td class="col-sm-2"><span>目标任务</span></td>
						<td class="col-sm-10" colspan="3"><span id="project"></span></td>
					</tr>	
					<tr class="row">					
						<td class="col-sm-2"><span>预约时间</span></td>
						<td class="col-sm-4"><span id="pre_start_date"></span></td>
						<td class="col-sm-2"><span>预完成时间</span></td>
						<td class="col-sm-4"><span id="pre_cmpl_date"></span></td>
					</tr>
					<tr class="row">
						<td class="col-sm-2"><span>备注</span></td>
						<td class="col-sm-10" colspan="3"><span id="comment"></span></td>
					</tr>	
					<tr class="row">
						<td class="col-sm-2">随行人员</td>
						<td class="col-sm-10" colspan="3">
							<div class="input-group div_party" style="width: 100%;">
								<input type="text" class="form-control auto_tip_party" autocomplete="off" name="party">
								<span class="input-group-btn">
									<button class="btn btn-default btn_add_party">添加</button>
								</span>
							</div>
						</td>
					</tr>
					<tr class="row">
						<td class="col-sm-2">附带工具</td>
						<td class="col-sm-10" colspan="3">
							<div class="input-group div_tool" style="width: 100%;">
								<input type="text" class="form-control auto_tip_tools" autocomplete="off" name="tool">
								<span class="input-group-btn">
									<button class="btn btn-default btn_add_tool">添加</button>
								</span>
							</div>
						</td>
					</tr>
					<tr class="row">					
						<td class="col-sm-2"><span>开始时间</span></td>
						<td class="col-sm-4"><span id="start_date"></span></td>
						<td class="col-sm-2"><span>完成时间</span></td>
						<td class="col-sm-4"><span id="cmpl_date"></span></td>
					</tr>
					<tr class="row">					
						<td class="col-sm-2"><span>证书时间</span></td>
						<td class="col-sm-4"><span id="certificate_time"></span></td>
						<td class="col-sm-2"><span>结账时间</span></td>
						<td class="col-sm-4"><span id="charge_time"></span></td>
					</tr>					
				</table>
			</form>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-danger  s0' >退回</button>
				<button type='button' class='btn btn-success s1' >准备完成</button>
				<button type='button' class='btn btn-success s2' >检测完成</button>
				<button type='button' class='btn btn-success s3' >证书完成</button>
				<button type='button' class='btn btn-success s4' >结账完成</button>
			</div>
		</div>
	</div>
</div>

<script>	

	$('.code').click(function(){
		var tid = $(this).children('span').html();
		$.ajax({
			url: "/MCMS/index.php/Home/Task/view",
			async: false,
			type: "POST",
			dataType: "json",
			data : {
				tid: tid,
			},
			success: function(rtn){
				$("span#code").html(rtn["code"]);
				$("span#code").attr('_id',rtn["id"]);
				$("#taskid").val(rtn["id"]);
				$("span#accept_time").html(rtn["accept_time"]);
				$("span#target").html(rtn["target"]);
				$("span#addr").html(rtn["addr"]);
				$("span#contact").html(rtn["contact"]);
				$("span#tel").html(rtn["tel"]);
				$("span#project").html(rtn["project"]);
				$("span#comment").html(rtn["comment"]);
				$('span#pre_start_date').html(rtn['pre_start_date']);
				$('span#pre_cmpl_date').html(rtn['pre_cmpl_date']);
				$('span#start_date').html(rtn['start_date']);
				$('span#cmpl_date').html(rtn['cmpl_date']);
				$('span#certificate_time').html(rtn['certificate_time']);
				$('span#charge_time').html(rtn['charge_time']);
				switch(rtn['step']){
					case '0' :  
						$('button.s0').html('退回');$('button.s1').show(); 
						$('button.s2').hide(); $('button.s3').hide(); $('button.s4').hide();
						break;
					case '1' :  
						$('button.s0').html('上一步');$('button.s0').attr('step',0);$('button.s2').show(); 
						$('button.s1').hide(); $('button.s3').hide(); $('button.s4').hide();
						break;
					case '2' :  
						$('button.s0').html('上一步');$('button.s0').attr('step',1);$('button.s3').show(); 
						$('button.s1').hide(); $('button.s2').hide(); $('button.s4').hide();
						break;
					case '3' :  
						$('button.s0').html('上一步');$('button.s0').attr('step',2);$('button.s4').show(); 
						$('button.s1').hide(); $('button.s2').hide(); $('button.s3').hide();
						break;
					default  : break;
				}
			},
		});

		$('#taskDetail').modal({
			backdrop: 'static',
		});
	});

	$(".auto_tip_party").auto_tip({
		'skey'	: "username",
		'url'	: "/MCMS/index.php/Home/User/auto_tip",
		'delay'	: 500,
	});

	$(".auto_tip_tools").auto_tip({
		'skey'	: "toolname",
		'url'	: "/MCMS/index.php/Home/Tool/auto_tip",
		'delay'	: 500,
	});

	$(".btn_add_party").click(function(){
		if($.type($(".auto_tip_party").attr('_id')) == "undefined") return;	
		var id = $(".auto_tip_party").attr('_id');
		var party = $(".auto_tip_party").val();
		var span = $('<span _id="'+id+'" style="margin-right: 10px"><input type="checkbox" checked="checked"><label style="vertical-align: middle;">'+party+'</label></span>');
		$(".div_party").after(span);
	});

	$(".btn_add_tool").click(function(){
		if($.type($(".auto_tip_tools").attr('_id')) == "undefined") return;	
		var id = $(".auto_tip_tools").attr('_id');
		var tool = $(".auto_tip_tools").val();	
		var span = $('<span _id="'+id+'" style="margin-right: 10px"><input type="checkbox" checked="checked"><label style="vertical-align: middle;">'+tool+'</label></span>');
		$(".div_tool").after(span);
	});

	$('button.s0').click(function(){
		if($(this).html() == '退回'){
			$.ajax({
				url: "/MCMS/index.php/Home/Task/accept",
				async: false,
				type: "POST",
				dataType: "html",
				data : {
					id: $("span#code").attr('_id'),
					unaccept: 0,
				},
				success: function(rtn){
					if('success' == rtn){
						alert('退回成功');
						window.location.href = '/MCMS/index.php/Home/Task/mytask';
					}else{
						alert('退回失败');
					}
				},
			});
		}else{
			$.ajax({
				url: "/MCMS/index.php/Home/Task/mytaskprevious",
				async: false,
				type: "POST",
				dataType: "html",
				data : {
					id: $("span#code").attr('_id'),
					step : $('button.s0').attr('step'),
				},
				success: function(rtn){
					if('success' == rtn){
						alert('成功');
						window.location.href = '/MCMS/index.php/Home/Task/mytask';
					}else{
						alert('失败');
					}
				},
			});
		}
	});

	$('button.s1').click(function(){
		$.ajax({
			url: "/MCMS/index.php/Home/Task/mytasknext",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				id: $("span#code").attr('_id'),
				step : 1,
			},
			success: function(rtn){
				if('success' == rtn){
					alert('完成');
					window.location.href = '/MCMS/index.php/Home/Task/mytask';
				}else{
					alert('失败');
				}
			},
		});		
	});

	$('button.s2').click(function(){
		$.ajax({
			url: "/MCMS/index.php/Home/Task/mytasknext",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				id: $("span#code").attr('_id'),
				step : 2,
			},
			success: function(rtn){
				if('success' == rtn){
					alert('完成');
					window.location.href = '/MCMS/index.php/Home/Task/mytask';
				}else{
					alert('失败');
				}
			},
		});		
	});

	$('button.s3').click(function(){
		$.ajax({
			url: "/MCMS/index.php/Home/Task/mytasknext",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				id: $("span#code").attr('_id'),
				step : 3,
			},
			success: function(rtn){
				if('success' == rtn){
					alert('完成');
					window.location.href = '/MCMS/index.php/Home/Task/mytask';
				}else{
					alert('失败');
				}
			},
		});		
	});

	$('button.s4').click(function(){
		$.ajax({
			url: "/MCMS/index.php/Home/Task/mytasknext",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				id: $("span#code").attr('_id'),
				step : 4,
			},
			success: function(rtn){
				if('success' == rtn){
					alert('完成');
					window.location.href = '/MCMS/index.php/Home/Task/mytask';
				}else{
					alert('失败');
				}
			},
		});		
	});
</script>

</body>
</html>