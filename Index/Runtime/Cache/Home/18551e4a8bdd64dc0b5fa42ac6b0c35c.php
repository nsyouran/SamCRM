<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home-SamCRM</title>

	<link rel="stylesheet" href="/SamCRM/Public/bs/css/bootstrap.css">

	<script src="/SamCRM/Public/js/jquery.min.js"></script>
	<script src="/SamCRM/Public/bs/js/bootstrap.min.js"></script>
	<script src="/SamCRM/Public/js/holder.min.js"></script>
	<script src="/SamCRM/Public/laydate/laydate.js"></script>
</head>

<body style="padding: 10px;">
	
<div class="top position" style="height: 30px; border-bottom: 1px solid #ccc;">
	<img src="/SamCRM/Public/img/home/img/22.png" style="height: 20px;">
	<span style="vertical-align: middle; margin: 0 10px;">首页 > 用户管理 > 全部用户</span>
</div>

<div id="table" style="position: absolute; top: 50px; bottom: 60px; left: 10px; right: 10px; overflow: auto">

	<table class="table table-striped table-hover" style="background: #eee">
		<tr style="background: #333;color: #eee; font-weight: bold">
			<td style="width: 20px;"><input type="checkbox" class="ck_f"></td>
			<td style="width: 2em;">#</td>
			<td style="width: 5em;">用户名</td>
			<td style="width: 5em;">用户组</td>
			<td style="width: 5em;">电话</td>
			<td style="width: 10em;">Email</td>
			<td style="width: 3em">状态</td>
			<td style="width: 11em;">最后更新</td>
			<td style="width: 60px;">操作</td>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><tr>
			<td><input type="checkbox"></td>
			<td><?php echo ($l["id"]); ?></td>
			<td><a href="/SamCRM/index.php/Home/User/index_detail?id=<?php echo ($l["id"]); ?>" class="clientname"><?php echo ($l["username"]); ?></a></td>
			<td><a href="/SamCRM/index.php/Home/User/group_detail?id=<?php echo ($l["groupid"]); ?>"><?php echo ($l["groupname"]); ?></a></td>
			<td><?php echo ($l["tel"]); ?></td>
			<td><?php echo ($l["email"]); ?></td>
			<td>
				<?php if($l["state"] == 0): ?><img src="/SamCRM/Public/img/home/yes.png" alt="">
					<?php else: ?>
					<img src="/SamCRM/Public/img/home/no.png" alt=""><?php endif; ?>
			</td>
			<td><?php echo ($l["last_time"]); ?></td>
			<td>
				<a href="/SamCRM/index.php/Home/User/user_detail?id=<?php echo ($l["id"]); ?>" class="edit"><img src="/SamCRM/Public/img/home/edit.png"  style="margin-right: 5px;"></a>
				<a href="/SamCRM/index.php/Home/User/user_del?id=<?php echo ($l["id"]); ?>" class="del" onclick="if(confirm('确认删除？')){return true}else{return false}"><img src="/SamCRM/Public/img/home/delete.png" ></a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>

</div>

<div class="buttom" style="position: absolute; bottom: 0;left: 10px; right: 10px; border-top: 1px solid #ccc; padding: 8px 0;">
	<button class="btn btn-sm btn-primary" onclick="window.location.href='/SamCRM/index.php/Home/User/user_add'">新增</button>
	<button class="btn btn-sm btn-default" id="check_all">全选</button>
	<button class="btn btn-sm btn-default" id="check_reverse">反选</button>
	<button class="btn btn-sm btn-default" id="check_none">全不选</button>
	<span style="margin: 0 10px;">对选中行进行</span>
	<button class="btn btn-sm btn-danger" id="check_del">删除</button>
	<span style="margin-left: 50px">共</span>
	<span style="font-size: 20px;color: red;"> <?php echo ($record); ?> </span>
	<span>条记录</span>
	<!--<span style="margin-left: 10px"> 1/2 </span>-->
	<!--<span>页</span>-->
</div>

<script>
	$("#check_all").click(function () {
		$("input[type=checkbox]").each(function (index,ele) {
			if(!$(ele).is(":checked")){
				$(ele).click();
			}
		});
	});
	$("#check_none").click(function () {
		$("input[type=checkbox]").each(function (index,ele) {
			if($(ele).is(":checked")){
				$(ele).click();
			}
		});
	});
	$("#check_reverse").click(function () {
		$("input[type=checkbox]").each(function (index,ele) {
			$(ele).click();
		});
	});
	$("#check_del").click(function () {
		$("input[type=checkbox]").each(function (index,ele) {
			if($(ele).is(":checked")){
				$(ele).parent().parent().children().eq(8).children().eq(1).click();
			}
		});
	});
</script>

</body>
</html>