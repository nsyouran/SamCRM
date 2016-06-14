<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Install-SamCRM</title>

    <link rel="stylesheet" href="/SamCRM/Public/bs/css/bootstrap.css">

    <script src="/SamCRM/Public/js/jquery.min.js"></script>
    <script src="/SamCRM/Public/bs/js/bootstrap.min.js"></script>
    <script src="/SamCRM/Public/js/holder.min.js"></script>
</head>

<body style="background: url(/SamCRM/Public/img/home/install_bg.jpg);">

<div id="con1" style="width: 600px; margin: 100px auto; border: 1px solid #ccc; border-radius: 0 50px 0 50px;background: #eee; padding: 20px 60px;">
    <h2 style="text-align: center;margin-bottom: 30px;">安装数据库</h2>
    <form action="" method="post" class="form">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-4" style="text-align: right;margin-top: 5px;">数据库服务器</div>
            <div class="col-sm-7">
                <input name="dbhost" type="text" class="form-control" placeholder="localhost">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-4" style="text-align: right;margin-top: 5px;">数据库端口</div>
            <div class="col-sm-7">
                <input name="dbport" type="text" class="form-control" placeholder="3306">
            </div>
        </div>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-4" style="text-align: right;margin-top: 5px;">数据库用户名</div>
            <div class="col-sm-7">
                <input name="dbuser" type="text" class="form-control" placeholder="root">
            </div>
        </div>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-4" style="text-align: right;margin-top: 5px;">数据库密码</div>
            <div class="col-sm-7">
                <input name="dbpass" type="text" class="form-control" placeholder="root">
            </div>
        </div>
        <div class="row" style="margin-bottom: 35px;">
            <div class="col-sm-4" style="text-align: right;margin-top: 5px;">数据库名称</div>
            <div class="col-sm-7">
                <input name="dbname" type="text" class="form-control" placeholder="samcrm">
            </div>
        </div>
        <div class="form-group" style="text-align: center">
            <a href="/SamCRM/index.php/Home/Install" class="btn btn-default" >上一步</a>
            <input type="submit" class="btn btn-default" value="安装" name="submit">
        </div>
    </form>
</div>

</body>

</html>