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
    <span style="vertical-align: middle; margin: 0 10px;">首页 > 任务管理 > 发布任务</span>
</div>

<div style="width: 600px; margin: 50px auto; padding : 20px; border: 1px solid #ccc; border-radius: 3px; background: #eee">
    <form action="" method="post" class="form-inline" autocomplete="off">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">目标单位</label>
            </div>
            <div class="col-sm-10">
                <input id="target" name="target" type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">目标地址</label>
            </div>
            <div class="col-sm-10">
                <input id="addr" name="addr" type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">联 &nbsp; 系 人 </label>
            </div>
            <div class="col-sm-4">
                <input id="contact"  name="contact" type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">联系电话</label>
            </div>
            <div class="col-sm-4">
                <input id="tel"  name="tel" "type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">目标任务</label>
            </div>
            <div class="col-sm-10">
                <input id="project" name="project" type="text" class="form-control" style="width: 100%" autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">预约日期</label>
            </div>
            <div class="col-sm-4">
                <input id="pre_start_date"  name="pre_start_date" value="<?php echo ($date); ?>" type="text" class="form-control laydate-icon" style="width: 100%;height: 34px;" autocomplete="off" onclick="laydate();">
            </div>
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">完成日期</label>
            </div>
            <div class="col-sm-4">
                <input id="pre_cmpl_date"  name="pre_cmpl_date" type="text" class="form-control laydate-icon" style="width: 100%;height: 34px;" autocomplete="off" onclick="laydate();">
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-sm-2" style="text-align: right;padding: 5px 0px 0 0px;">
                <label for="">备　　注</label>
            </div>
            <div class="col-sm-10">
                <textarea id="comment" name="comment" style="width: 100%;height: 8em; resize: none; padding: 12px;font-size: 14px;border: 1px solid #ccc;border-radius: 3px;"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="pull-right" style="padding: 0 20px;">
                <input type="submit" class="btn btn-primary" name="submit" value="发布" />
                <button class="btn btn-danger" onclick="window.location.href='/SamCRM/index.php/Home/Task/index';return false;">取消</button>
            </div>
        </div>
    </form>
</div>

<script>
    var target="none";
    var tipPannel = $("<div></div>");
    tipPannel.css({
        position : "fixed",
        "z-index": 100,
        "max-height": 200,
        overflow: "auto",
        display: "none"
    });
    $("#target").bind("input focus",function () {
        if(target=="none"){
            console.log("get target ing...");
            $.ajax({
                url : "/SamCRM/index.php/Home/Task/getTarget",
                type : "get",
                dataType : "json",
                success : function (rtn) {
                    target = rtn;
                    console.log("getted");
                    tipPannel.css({
                        width : $("#target").width()+26,
                    });
                    $("#target").parent().append(tipPannel);
                }
            });
        }else{
            var val = $(this).val();
            if(val=="")     return;
            if(val=="%")    val="";

            tipPannel.children().remove();
            var ul = $("<ul class='list-group'></ul>");
            tipPannel.append(ul);

            var reg = eval("/.*?"+val+".*?/");
            console.log(val);
            for(var i in target){
                if(reg.test(target[i].clientname)){
                    console.log(i,target[i].clientname);
                    var li = $("<li class='list-group-item'></li>");
                    var a = $("<a id='"+i+"'>"+target[i].clientname+"</a>");
                    a.css({display: 'block'});
                    a.click(function () {
                        var id = $(this).attr('id');
                        console.log(id);
                        $("#target").val(target[id].clientname);
                        $("#addr").val(target[id].addr);
                        $("#contact").val(target[id].contact);
                        $("#tel").val(target[id].tel);
                        tipPannel.hide();
                        return false;
                    });
                    li.append(a);
                    ul.append(li);
                    tipPannel.show();
                }
            }
        }
    });
    $("#target").bind("blur",function () {
        setTimeout(function(){tipPannel.hide()},100);
    });
</script>
</body>
</html>