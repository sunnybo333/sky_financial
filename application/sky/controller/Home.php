<?php
namespace app\sky\controller;
use app\sky\controller\Action;
class Home extends Action
{
    public function index()
    {
    	$js_file='../application/sky/view/home/js/index.html';
    	$node = array('明细表');
    	$this->assign('node',$node);
    	$this->assign('header','明细表');
    	$this->assign('active_node',"'#mxb'");
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
    public function total()
    {
    	$js_file='../application/sky/view/home/js/total.html';
    	$node = array('汇总表');
    	$this->assign('node',$node);
    	$this->assign('header','汇总表');
    	$this->assign('active_node',"'#hzb'");
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
}
