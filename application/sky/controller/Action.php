<?php
namespace app\sky\controller;
use think\Controller;
class Action extends Controller
{
    function _initialize()
    {
        //session(null);
        if (session('login_state')!=true) {
            $this->redirect('Login/index');
        }    
    }
}
