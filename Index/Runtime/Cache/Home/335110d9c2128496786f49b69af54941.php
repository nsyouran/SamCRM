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
    <span style="vertical-align: middle; margin: 0 10px;">首页 > 用户管理 > 用户组详情</span>
</div>

<div style="width: 800px; margin: 50px auto; padding : 20px; border: 1px solid #ccc; border-radius: 3px; background: #eee">
    <form action="" method="post" class="form-inline">
        <input type="text" name="id" value="<?php echo ($list[0]["id"]); ?>" class="hide">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="name">组名称</label>
            </div>
            <div class="col-sm-9">
                <input id="name" type="text" class="form-control" style="width: 100%" autocomplete="off" name="name" value="<?php echo ($list[0]["name"]); ?>">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="description">组说明</label>
            </div>
            <div class="col-sm-9">
                <textarea id="description" name="description" style="width: 100%;height: 5em; resize: none; padding: 12px;font-size: 14px;border: 1px solid #ccc;border-radius: 3px;"><?php echo ($list[0]["description"]); ?></textarea>
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding-top: 5px;">
                <label for="">权限</label>
            </div>
            <div class="col-sm-10" style="padding-top: 5px;">
                <table class="table">
                    <?php if(is_array($compe)): $i = 0; $__LIST__ = $compe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><tr>
                        <td style="text-align: right"><label><?php echo ($l["group"]); ?>：</label></td>
                        <?php if(is_array($l["list"])): $i = 0; $__LIST__ = $l["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ll): $mod = ($i % 2 );++$i;?><td>
                            <?php if($ll["ck"] == 1): ?><input type="checkbox" id="<?php echo ($ll["id"]); ?>" class="competence" ck="1" checked="checked" >
                            <?php else: ?>
                                <input type="checkbox" id="<?php echo ($ll["id"]); ?>" class="competence" ck="0" ><?php endif; ?>
                            <label for="<?php echo ($ll["id"]); ?>" style="vertical-align: middle;margin: 0 20px 0 2px;"><?php echo ($ll["name"]); ?></label>
                        </td><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>

        <input type="text" name="competence" id="competence" class="hide">

        <div class="row">
            <div class="pull-right" style="padding: 0 20px;">
                <input type="submit" class="btn btn-primary" value="保存" name="submit" onclick="save();">
                <button class="btn btn-warning" onclick="window.location.href='/SamCRM/index.php/Home/User/group_del?id=<?php echo ($list[0]["id"]); ?>';return false;">删除</button>
                <button class="btn btn-danger" onclick="window.location.href='/SamCRM/index.php/Home/User/group';return false;">取消</button>
            </div>

        </div>
    </form>
</div>

<script>
    $(".competence").click(function(){
        if( $(this).attr('ck') == 0){
            $(this).attr('ck',1);
        }else{
            $(this).attr('ck',0);
        }
    });
    function save() {
        var competence="";
        $(".competence").each(function(index, ele){
            if($(ele).attr('ck')=="1"){
                if(competence == ""){
                    competence = $(ele).attr('id');
                }else{
                    competence = competence+","+$(ele).attr('id');
                }
            }
        });
        $("#competence").val(competence);
    }
</script>
</body>
</html>