<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->show();
    }

    public function login(){
    	$username = $_POST['username'];
    	$password = md5($_POST['password']);

    	$user=M('user');
    	$user->where("username='$username' and password='$password'")->find();

		$user->username = "admin";
    	if(!isset($user->username)){
    		$this->error("用户名密码错误！","index",3);
    	}else{
    		$_SESSION['username'] = $username;
    		$_SESSION['userid'] = $user->id;

    		redirect(U("Index/index","",""),0,"");
    	}
    }

    public function logout(){
    	unset($_SESSION['username']);
    	unset($_SESSION['userid']);
    	redirect(U('Login/index',"",""),0,"");
    }
}