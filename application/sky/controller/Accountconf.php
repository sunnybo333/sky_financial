<?php
namespace app\sky\controller;
use app\sky\controller\Action;
class Accountconf extends Action
{
    public function index()
    {
    	$js_file='../application/sky/view/accountconf/js/index.html';
    	$node = array('科目管理');
    	$this->assign('node',$node);
    	$this->assign('header','科目管理');
    	$this->assign('active_node',"'#kmgl'");
    	$this->assign('js_file',$js_file);
    	$map['del']=0;
    	$tree=db('account_node')->where($map)->select();
    	for ($i=0; $i < count($tree); $i++) { 
    		$id=$tree[$i]['id'];
    		$tree[$i]['top']=0;
    		for ($a=0; $a < count($tree); $a++) { 
    			if ($tree[$a]['pid']==$id) {
    				$tree[$i]['top']=1;
    				break;
    			} 
    		}
    	}
    	//var_dump($tree);
    	$this->assign('list_node',json_encode($tree));
    	return view();

    }
    function add()
    {
    	if (is_int((int)input('get.pid'))&&input('get.account_name')!=''&&strlen(input('get.account_name'))<20) {
    		$account_node=db('account_node');
    		$data['pid']=input('get.pid');
    		$data['account_name']=input('get.account_name');
    		$result=$account_node->insert($data);
    		if ($result==1) {
    			echo 1;
    		} else {
    			echo 0;
    		}
    	} else {
    		echo 2;
    	}	
    }
    function del()
    {
    	if (is_int((int)input('get.id'))) {
    		$account_node=db('account_node');
    		$map['pid']=input('get.id');
    		$result=$account_node->where($map)->select();
    		if (count($result)>0) {
    			echo 3;
    		} else {
    			$map=array();
	    		$map['id']=input('get.id');
	    		$data['del']=1;
	    		$result=$account_node->where($map)->update($data);
	    		if ($result==1) {
	    			echo 1;
	    		} else {
	    			echo 0;
	    		}
    		}
    	} else {
    		echo 2;
    	}	
    }

}
