<?php
namespace app\sky\controller;

class Login
{
    public function index()
    {
    	$this->assign('js_file','../view/login/js/index.html');
        $this->check_login();
    }
    public function check_login()
    {
    	return 333;
    }
}
