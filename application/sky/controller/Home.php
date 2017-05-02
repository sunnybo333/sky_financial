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
    	$this->assign('now_date',date('Y-m-d'));
    	return view();

    }
    function get_list($tree_pid=0,$begin_date='',$end_date='')
    {
    	# code...
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
    function add()
    {
    	$account_name=input('get.account_name');
    	$account_id=input('get.account_id');
    	$account_node=db('account_node');
    	$map['account_name']=$account_name;
    	$map['id']=$account_id;
    	$result=$account_node->field('id')->where($map)->limit(1)->select();
    	if (count($result)==1) {
    		$map['pid']=$result[0]['id'];
    		$result=$account_node->field('id')->where($map)->limit(1)->select();//var_dump($result);
    		if (!isset($result[0]['id'])) {
    			$detial=db('detial');
		    	$data['account_name']=$account_name;
		    	$data['account_id']=$account_id;
		    	$data['money']=input('get.money');
		    	$data['date']=strtotime(input('get.date'));
		    	//var_dump($data);
		    	$result=$detial->insertGetId($data);

		    	if ($result>=1) {
		    		echo $result;
		    	} else {
		    		echo -3;//插入失败
		    	}
		    	
    			
    		} else {
    			echo 0;//所选科目不是低级科目
    		}
    	} else {
    		echo -2;//科目不存在
    	}
    	
    }
}
