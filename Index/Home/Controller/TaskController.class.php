<?php
namespace Home\Controller;

use Org\Util\String;

class TaskController extends CommonController {

    public function index(){

		$table = M('task');
    	$list = $table->select();

    	$this->assign('list',$list);
		$this->assign('record',count($list));

		layout("Layout/task");
        $this->display('index');
    }

	public function add(){
		if(isset($_POST["submit"])){
			$table = M('user');
			if($table->create()){
				$rst = $table->add();
				if($rst){
					$this->success('新增成功',"index");
				}
				else{
					$this->error('新增失败');
				}
			}else{
				$this->error('新增失败');
			}
		}else{
			$table = M("group");
			$list = $table->select();
			$this->assign('list',$list);
			$date = date("Y-m-d",time());
			$this->assign("date",$date);
			layout("Layout/task");
			$this->display('add');
		}
	}

	public function getTarget(){
		$table = M("client");
		$list = $table->select();
		echo json_encode($list);
	}

	public function user_del(){
		if(isset($_GET["id"])){
			$id = $_GET["id"];
			$table = M('user');
			$rst = $table->where("id='$id'")->delete();
			if($rst){
				$this->success('删除成功',"index");
			}
			else{
				$this->error('删除失败1');
			}
		}else{
			$this->error('删除失败2');
		}
	}

	public function user_detail(){
		if(isset($_POST['submit'])){
			$_POST['last_time'] = date("Y-m-d H:i:s",time());
			$table = M('user');
			if($table->create()){
				$rst = $table->save();
				if($rst){
					$this->success('保存成功',"index");
				}
				else{
					$this->error('保存失败');
				}
			}else{
				$this->error('保存失败');
			}
			exit();
		}
		if(isset($_GET["id"])){
			$id = $_GET["id"];
			$table = M("user");
			$list = $table->where("id='$id'")->select();
			$this->assign("list",$list);

			$table = M("group");
			$group = $table->select();
			$currentGroup = $list[0]['group'];
			for($i=0; $i<count($group); $i++){
				if($currentGroup == $group[$i]['id']){
					$temp = $group[0];
					$group[0] = $group[$i];
					$group[$i] = $temp;
					break;
				}
			}
			$this->assign("group",$group);

			layout("Layout/user");
			$this->display('user_detail');
		}else{
			$this->error('无此项');
		}
	}

	public function group(){

		$client = M('group');
		$list = $client->select();
		$this->assign('list',$list);
		$this->assign('record',count($list));
		layout("Layout/user");
		$this->display('group');
	}

	public function group_add(){
		if(isset($_POST["submit"])){
			if($_POST["name"]=="" || $_POST["description"]==""){
				$this->error('新增失败');
			}
			$table = M('group');
			if($table->create()){
				$rst = $table->add();
				if($rst){
					$this->success('新增成功',"group");
				}
				else{
					$this->error('新增失败');
				}
			}else{
				$this->error('新增失败');
			}
		}else{
			$table = M("competence");
			$list = $table->group("`group`")->select();
			for($i=0; $i<count($list); $i++){
				$group = $list[$i]['group'];
				$list[$i]['list']= $table->where(" `group`='$group' ")->select();
			}
			$this->assign("list",$list);
			layout("Layout/user");
			$this->display('group_add');
		}
	}

	public function group_del(){
		if(isset($_GET["id"])){
			$id = $_GET["id"];
			$table = M('user');
			$list = $table->where("`group`='$id'")->select();
			if($list[0]!=""){
				$this->error('该用户组下仍然有用户，不能删除！',"group",10);
				exit();
			}
			$table = M('group');
			$rst = $table->where("id='$id'")->delete();
			if($rst){
				$this->success('删除成功',"group");
			}
			else{
				$this->error('删除失败');
			}
		}else{
			$this->error('删除失败');
		}
	}

	public function group_detail(){
		if(isset($_POST['submit'])){
			if($_POST["name"]=="" || $_POST["description"]==""){
				$this->error('保存失败');
			}
			$_POST['last_time'] = date("Y-m-d H:i:s",time());
			$table = M('group');
			if($table->create()){
				$rst = $table->save();
				if($rst){
					$this->success('保存成功',"group");
				}
				else{
					$this->error('保存失败');
				}
			}else{
				$this->error('保存失败');
			}
			exit();
		}
		if(isset($_GET["id"])){
			$id = $_GET["id"];
			$table = M("group");
			$list = $table->where("group.id='$id'")->select();
			$compe = $list[0]["competence"];
			$compe = explode(",",$compe );
			//print_r($compe);//exit();
			$this->assign("list",$list);
			$table = M("competence");
			$list = $table->group("`group`")->select();
			for($i=0; $i<count($list); $i++){
				$group = $list[$i]['group'];
				$list[$i]['list']= $table->where(" `group`='$group' ")->select();
				for($j=0; $j<count($list[$i]['list']); $j++){
					if(in_array($list[$i]['list'][$j]['id'], $compe)){
						$list[$i]['list'][$j]['ck'] = 1;
					}else{
						$list[$i]['list'][$j]['ck'] = 0;
					}
				}
			}
			//print_r($list);exit();
			$this->assign("compe",$list);
			layout("Layout/user");
			$this->display('group_detail');
		}else{
			$this->error('无此项');
		}
	}

	public function competence(){

		$client = M('competence');
		$list = $client->select();
		$this->assign('list',$list);
		$this->assign('record',count($list));
		layout("Layout/user");
		$this->display('competence');
	}


	public function competence_add(){
		if(isset($_POST["submit"])){
			if($_POST['group'] == "" || $_POST['name'] == ""){
				$this->error('新增失败');
			}
			$table = M('competence');
			if($table->create()){
				$rst = $table->add();
				if($rst){
					$this->success('新增成功',"competence");
				}
				else{
					$this->error('新增失败');
				}
			}else{
				$this->error('新增失败');
			}
		}else{
			layout("Layout/user");
			$this->display('competence_add');
		}
	}

	public function competence_del(){
		$this->error('您无权进行此项操作！');
	}

	public function competence_detail(){
		if(isset($_POST['submit'])){
			if($_POST["name"]=="" || $_POST["group"]==""){
				$this->error('保存失败');
			}
			$_POST['last_time'] = date("Y-m-d H:i:s",time());
			$table = M('competence');
			if($table->create()){
				$rst = $table->save();
				if($rst){
					$this->success('保存成功',"competence");
				}
				else{
					$this->error('保存失败');
				}
			}else{
				$this->error('保存失败');
			}
			exit();
		}
		if(isset($_GET["id"])){
			$id = $_GET["id"];
			$table = M("competence");
			$list = $table->where("id='$id'")->select();
			$this->assign("list",$list);
			layout("Layout/user");
			$this->display('competence_detail');
		}else{
			$this->error('无此项');
		}
	}

}