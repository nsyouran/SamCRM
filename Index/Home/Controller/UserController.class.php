<?php
namespace Home\Controller;

class UserController extends CommonController {

    public function index(){

		$table = M('user');
    	$list = $table->join("`group` ON user.group=group.id")->select();
		//print_r($list);exit();
    	$this->assign('list',$list);
		layout("Layout/user");
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
			layout("Layout/user");
			$this->display('add');
		}
	}

	public function group(){

		$client = M('group');
		$list = $client->select();
		$this->assign('list',$list);
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

	public function competence(){

		$client = M('competence');
		$list = $client->select();
		$this->assign('list',$list);
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



    public function delete(){
    	$cid = $_POST['cid'];
    	$client = M('client');
    	if($client->where("id = '$cid'")->delete()){
    		echo "success";
    	}else{
    		echo "error";
    	}    	
    }

    public function modify(){
    	$cid = $_POST['cid'];
    	$client = M('client');
    	$client->create();
    	if($client->where("id = '$cid'")->save()){
    		echo "success";    		
    	}else{
    		echo "error";
    	}
    }

    public function view(){
    	$cid = $_POST['cid'];
    	$client = M('client');
    	$list = $client->where("id = '$cid'")->select();
    	$clientname = $list[0]['clientname'];
    	$addr = $list[0]['addr'];
    	$contact = $list[0]['contact'];
        $tel = $list[0]['tel'];
    	$arr = array(
    		"id" => $cid,
    		"clientname" => $clientname,
    		"addr" => $addr,
    		"tel" => $tel,
    		"contact" => $contact
    	);
    	echo json_encode($arr);
    }

}