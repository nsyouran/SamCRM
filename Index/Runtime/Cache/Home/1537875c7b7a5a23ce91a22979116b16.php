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
    <span style="vertical-align: middle; margin: 0 10px;">首页 > 工具管理 > 新增工具</span>
</div>

<div style="width: 650px; margin: 50px auto; padding : 20px; border: 1px solid #ccc; border-radius: 3px; background: #eee">
    <form action="" method="post" class="form-inline">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">工具名称</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">保管人</label>
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">有效日期</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control laydate-icon" style="width: 100%;height: 34px;" autocomplete="off" onclick="laydate();">
            </div>
        </div>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">当前位置</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">备注</label>
            </div>
            <div class="col-sm-10">
                <textarea style="width: 100%;height: 10em; resize: none; padding: 12px;font-size: 14px;border: 1px solid #ccc;border-radius: 3px;"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="pull-right" style="padding: 0 20px;">
                <button class="btn btn-primary">保存</button>
                <button class="btn btn-danger">取消</button>
            </div>

        </div>
    </form>
</div>
</body>
</html>