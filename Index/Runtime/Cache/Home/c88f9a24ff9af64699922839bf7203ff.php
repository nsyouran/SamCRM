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
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addPdf" data-backdrop="static">新增</button>
			<button type="button" class="btn btn-default delete">删除</button>			
		</div>
		<form action="/MCMS/index.php/Home/Help/index" method="post" style="width:400px;margin:0 200px 0 0;float: right">
			<div class="input-group" >			
				<input type="text" class="form-control" name="s" value="<?php echo ($s); ?>">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit">搜索</button>
				</span>
			</div>
		</form>
		
	</div>
	<div class="detail">		
		<div style="position: absolute;top: 42px; bottom:0;left: 10px;right: 10px; overflow: auto">
			<table class="table table-striped table-hover" style="background: #eee">
				<tt>
					<td style="width: 20px;"><input type="checkbox"></td>
					<td>帮助文件</td>
					<td>使用企业</td>
					<td>生产企业</td>					
					<td>仪器型号</td>					
					<td>添加日期</td>
				</tt>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?><tr>
						<td><input type="checkbox" _id="<?php echo ($h["id"]); ?>"></td>
						<td><a href="/mcms/Index/Common/help_file/<?php echo ($h["save_name"]); ?>.pdf"><?php echo ($h["file_name"]); ?></a></td>
						<td><?php echo ($h["comp_user"]); ?></td>
						<td><?php echo ($h["comp_made"]); ?></td>
						<td><?php echo ($h["model"]); ?></td>						
						<td><?php echo ($h["create_time"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>				
			</table>
		</div>		
	</div>
</div>

<!-- addClient -->
<div class="modal fade" id="addPdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">新增帮助文件</h4>
			</div>

			<div class="modal-body">
			<form class="form form_addPdf" enctype="multipart/form-data" method="POST" action="/MCMS/index.php/Home/Help/add">
				<div class="form-group">
					<label for="clientname">使用企业</label>
					<input type="text" class="form-control auto_tip_user" name="comp_user" autocomplete="off" placeholder="使用企业">
				</div>
				<div class="form-group">
					<label for="">生产企业</label>
					<input type="text" class="form-control auto_tip_made" name="comp_made" autocomplete="off" placeholder="生产企业">
				</div>
				<div class="form-group">
					<label for="">规格型号</label>
					<input type="text" class="form-control auto_tip_model" name="model" autocomplete="off" placeholder="规格型号">
				</div>
				<div class="form-group">
					<label for="">上传文件</label>
					<div class="input-group">				      
					    <input type="text" class="form-control" id="file_mirror" name="" readonly="readonly" style="background: none" onclick="$('#file').click();">
					    <span class="input-group-btn">
					    	<button class="btn btn-default" type="button" onclick="$('#file').click();">选择文件</button>
					    </span>
				    </div>
					
				</div>
				<input type="file" name="file" id="file" onchange="$('#file_mirror').val($(this).val());" class="hide" />
			</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				<button type="button" class="btn btn-primary" onclick="$('.form_addPdf').submit();">保存</button>
			</div>
		</div>
	</div>
</div>

<!-- clientDetail -->
<div class="modal fade" id="clientDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' id='myModalLabel'>修改帮助文件</h4>
			</div>

			<div class="modal-body">
			<form class="form form_addPdf" enctype="multipart/form-data" method="POST" action="/MCMS/index.php/Home/Help/add">
				<div class="form-group">
					<label for="clientname">使用企业</label>
					<input type="text" class="form-control auto_tip_user" name="comp_user" autocomplete="off" placeholder="使用企业">
				</div>
				<div class="form-group">
					<label for="">生产企业</label>
					<input type="text" class="form-control auto_tip_made" name="comp_made" autocomplete="off" placeholder="生产企业">
				</div>
				<div class="form-group">
					<label for="">规格型号</label>
					<input type="text" class="form-control auto_tip_model" name="model" autocomplete="off" placeholder="规格型号">
				</div>
				<div class="form-group">
					<label for="">上传文件</label>
					<div class="input-group">				      
					    <input type="text" class="form-control" id="file_mirror" name="" readonly="readonly" style="background: none" onclick="$('#file').click();">
					    <span class="input-group-btn">
					    	<button class="btn btn-default" type="button" onclick="$('#file').click();">选择文件</button>
					    </span>
				    </div>
					
				</div>
				<input type="file" name="file" id="file" onchange="$('#file_mirror').val($(this).val());" class="hide" />
			</form>
			</div>

			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>取消</button>
				<button type='button' class='btn btn-primary' id="btn_modifyclient">修改</button>
			</div>
		</div>
	</div>
</div>

<script>

	$('.delete').click(function(){
		var has=0
		$(':checkbox').each(function(){
			if($(this).parent().parent().children().eq(1).children().children().html()!=0){
				if($(this).is(':checked')){
					has = has+1;
					var cid_ = $(this).parent().parent().children().eq(1).children().children().html();
					var clientname_ = $(this).parent().parent().children().eq(1).children().html();
					clientname_ = clientname_.split("<span")[0];
					if(confirm('确认删除 ' + clientname_ + " ?")){
						$.ajax({
							url: "/MCMS/index.php/Home/Client/delete",
							async: false,
							type: "POST",
							dataType: "html",
							data : {
								cid: cid_,
							},
							success: function(rtn){
								if(rtn == "success"){
									alert(clientname_ + '删除成功');
								}else{
									alert(clientname_ + '删除失败');
								}
							},
						});
					};
				}
			}
		});
		if(has==0){
			alert("请先选择需要删除文件");
		}else{
			window.location.reload(true);
		}	
	});

	$("#btn_modifyclient").click(function(){
		var cid_ = $("#vid").val();
		var clientname_ = $("#vclientname").val();
		var addr_ = $("#vaddr").val();
		var contact_ = $("#vcontact").val();
		var tel_ = $("#vtel").val();
		$.ajax({
			url: "/MCMS/index.php/Home/Client/modify",
			async: false,
			type: "POST",
			dataType: "html",
			data : {
				cid: cid_,
				clientname: clientname_,
				addr: addr_,
				contact: contact_,
				tel: tel_,
			},
			success: function(rtn){
				if(rtn == "success"){
					alert("修改成功");
					window.location.reload();
				}else{
					alert("修改失败");
				}
			},
		});
	});

	

	$('.auto_tip_user').auto_tip({
		'skey' 	: 'comp_user',
		'url'	: '/MCMS/index.php/Home/Help/auto_tip',
		'delay'	: 500
	});

	$('.auto_tip_made').auto_tip({
		'skey' 	: 'comp_made',
		'url'	: '/MCMS/index.php/Home/Help/auto_tip',
		'delay'	: 500
	});

	$('.auto_tip_model').auto_tip({
		'skey' 	: 'model',
		'url'	: '/MCMS/index.php/Home/Help/auto_tip',
		'delay'	: 500
	});
</script>

</body>
</html>