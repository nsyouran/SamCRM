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
    <span style="vertical-align: middle; margin: 0 10px;">首页 > 用户管理 > 新增用户</span>
</div>

<div style="width: 400px; margin: 50px auto; padding : 20px; border: 1px solid #ccc; border-radius: 3px; background: #eee">
    <form action="" method="post" class="form-inline" autocomplete="off">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">用户名</label>
            </div>
            <div class="col-sm-10">
                <input id="username" name="username" type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">密　码</label>
            </div>
            <div class="col-sm-10">
                <input id="password" name="password" type="password" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">验　证</label>
            </div>
            <div class="col-sm-10">
                <input id="repassword"  type="password" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">电　话</label>
            </div>
            <div class="col-sm-10">
                <input id="tel" name="tel" type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">邮　箱</label>
            </div>
            <div class="col-sm-10">
                <input id="email" name="email" type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">用户组</label>
            </div>
            <div class="col-sm-10">
                <select name="group" id="group" style="width: 100%; height: 34px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; padding-left:8px;">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><option value="<?php echo ($l["id"]); ?>"><?php echo ($l["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">说　明</label>
            </div>
            <div class="col-sm-10">
                <textarea id="description" name="description" style="width: 100%;height: 10em; resize: none; padding: 12px;font-size: 14px;border: 1px solid #ccc;border-radius: 3px;"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="pull-right" style="padding: 0 20px;">
                <input type="submit" class="btn btn-primary" name="submit" value="保存">
                <button class="btn btn-danger" onclick="window.location.href='/SamCRM/index.php/Home/User/index';return false;">取消</button>
            </div>

        </div>
    </form>
</div>

<script>
    $("form").submit(function () {
        if($("#username").val()==""){
            $("#username").attr("placeholder","用户名不能为空");
            blink($("#username"));
            return false;
        }
        if($("#password").val()==""){
            $("#password").attr("placeholder","密码不能为空");
            blink($("#password"));
            return false;
        }
        if($("#repassword").val()==""){
            $("#repassword").attr("placeholder","验证密码不能为空");
            blink($("#repassword"));
            return false;
        }
        if( $("#repassword").val() != $("#password").val() ){
            $("#repassword").val("");
            $("#repassword").attr("placeholder","验证密码与密码不相同");
            blink($("#repassword"));
            return false;
        }
        if( $("#email").val() != ""){
            var str = $("#email").val().toString().trim();
            var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            var r = str.match(reg);
            if(r==null){
                $("#email").val("");
                $("#email").attr("placeholder","邮箱格式错误");
                blink($("#email"));
                return false;
            }
        }
    });

    function blink(input) {
        var times = 7,count=0;
        var b = setInterval(function () {
            if(count < times){
                if(count%2 == 0){
                    input.css({
                        border: '1px solid red',
                    });
                }else{
                    input.css({
                        border: '1px solid #ccc',
                    });
                }

            }else{
                input.focus(function(){
                    input.css({
                        border: '1px solid #ccc',
                    });
                });
                clearInterval(b);
            }
            count++;
        },350);

    }
</script>
</body>
</html>