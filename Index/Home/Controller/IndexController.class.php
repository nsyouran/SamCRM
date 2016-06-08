<?php
namespace Home\Controller;

class IndexController extends CommonController {
    public function index(){
		layout("Layout/index");
        $this->display('index');
    }

}