<?php
namespace Home\Controller;

class CalculateController extends CommonController {

    public function index(){
		layout("Layout/client");
        $this->display('index');
    }

}