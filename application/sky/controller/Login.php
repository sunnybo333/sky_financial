<?php
namespace app\sky\controller;
use think\Controller;
class Login extends Controller
{
    public function index()
    {
        //$this->redirect('home/index');
    	$this->assign('js_file','../application/sky/view/login/js/index.html');
    	return view();

    }
    public function check_login()
    {
        $user=db('user');
        $map['username']=$_POST['username'];
        $map['password']=$_POST['password'];
        $result=$user->where($map)->select();
        var_dump($result);
        if (count($result)>0) {
            session('username',$result[0]['username']);
            session('last_login_ip',$result[0]['ip']);
            session('last_login_date',date('Y-m-d H:i:s',$result[0]['date']));
            $data['ip']='111.666.888.999';
            $data['date']=time();
            $user->where($map)->update($data);
            session('login_state',true);
            return true;
        }
        else{
            return false;
        }
    	
    }
    function login()
    {
    	if($this->check_login()){
            $this->redirect('home/index');
        }
    	
    }
    function logout()
    {
        session(null);
        $this->redirect('login/index');

    }
}
