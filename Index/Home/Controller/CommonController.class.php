<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct() {
    	parent::__construct();

    	//检查用户登录，如果没有登录则跳转到登录界面
    	if(!isset($_SESSION['username'])){
    		redirect(U("Login/index","",""),0,"");
    	}else{
    		$login = true;
    		$login_user = $_SESSION['username'];
    		$this->assign('login',$login);
    		$this->assign('login_user',$login_user);

    		//首次登陆，更改密码...
    	}
    }
}