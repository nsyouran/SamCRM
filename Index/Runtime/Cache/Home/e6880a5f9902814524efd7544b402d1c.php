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
    <span style="vertical-align: middle; margin: 0 10px;">首页 > 用户管理 > 新增权限</span>
</div>

<div style="width: 650px; margin: 50px auto; padding : 20px; border: 1px solid #ccc; border-radius: 3px; background: #eee">
    <form action="" method="post" class="form-inline">
        <input type="text" name="id" value="<?php echo ($list[0]["id"]); ?>" class="hide">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">权限分类</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" style="width: 100%" autocomplete="off" name="group" value="<?php echo ($list[0]["group"]); ?>">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">权限名称</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" style="width: 100%" autocomplete="off" name="name" value="<?php echo ($list[0]["name"]); ?>">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">权限说明</label>
            </div>
            <div class="col-sm-10">
                <textarea style="width: 100%;height: 5em; resize: none; padding: 12px;font-size: 14px;border: 1px solid #ccc;border-radius: 3px;" name="description"><?php echo ($list[0]["description"]); ?></textarea>
            </div>
        </div>

        <div class="row">
            <div class="pull-right" style="padding: 0 20px;">
                <input type="submit" class="btn btn-primary" value="保存" name="submit">
                <button class="btn btn-warning" onclick="window.location.href='/SamCRM/index.php/Home/User/competence_del?id=<?php echo ($list[0]["id"]); ?>';return false;">删除</button>
                <button class="btn btn-danger" onclick="window.location.href='/SamCRM/index.php/Home/User/competence';return false;">取消</button>
            </div>

        </div>
    </form>
</div>
</body>
</html>