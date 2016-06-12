<?php
namespace Home\Controller;

class ToolController extends CommonController {

    public function index(){

    	$client = M('tool');
    	$list = $client->select();
    	$this->assign('list',$list);
		layout("Layout/tool");
        $this->display('index');
    }

    public function add(){
		if(isset($_POST["submit"])){
			$client = M('client');
			if($client->create()){
				$rst = $client->add();
				if($rst){
					echo "success";
				}
				else{
					echo "error";
				}
			}else{
				echo "error";
			}
		}else{
			layout("Layout/tool");
			$this->display('add');
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