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

<div id="con1" style="width: 800px; margin: 100px auto; border: 1px solid #ccc; border-radius: 0 50px 0 50px;background: #eee; padding: 20px 60px;">
    <h2 style="text-align: center;margin-bottom: 30px;">安装环境</h2>
    <table class="table">
        <tr>
            <td>项目</td>
            <td>SamCRM 所需配置</td>
            <td>当前服务器</td>
        </tr>
        <tr>
            <td>服务器操作系统</td>
            <td>不限制</td>
            <td>
                <?php if($info["PHP_OS_C"] == 1): ?><img src="/SamCRM/Public/img/home/yes.png" alt="">
                <?php else: ?>
                    <img src="/SamCRM/Public/img/home/no.png" alt=""><?php endif; ?>                
                <?php echo ($info['PHP_OS']); ?>
            </td>
        </tr>
        <tr>
            <td>PHP版本</td>
            <td>5.3</td>
            <td>
                <?php if($info["PHP_VERSION_C"] == 1): ?><img src="/SamCRM/Public/img/home/yes.png" alt="">
                <?php else: ?>
                    <img src="/SamCRM/Public/img/home/no.png" alt=""><?php endif; ?>
                <?php echo ($info['PHP_VERSION']); ?>
            </td>
        </tr>
        <tr>
            <td>Mysql支持</td>
            <td>需要支持</td>
            <td>
                <?php if($info["mysql_c"] == 1): ?><img src="/SamCRM/Public/img/home/yes.png" alt="">
                <?php else: ?>
                    <img src="/SamCRM/Public/img/home/no.png" alt=""><?php endif; ?>
                <?php echo ($info['mysql']); ?>
            </td>
        </tr>
    </table>
    <div style="text-align: center">
        <?php if($info["ok"] == 1): ?><a href="/SamCRM/index.php/Home/Install/next" class="btn btn-default">下一步</a>
            <?php else: ?>
            <a href="" class="btn btn-default" disabled="disable">下一步</a><?php endif; ?>
    </div>
</div>

</body>

</html>