<?php
namespace Home\Controller;
use Think\Controller;

class MyworksController extends Controller {
	public function my_allwork() {
		//获取三条新闻
        $lists = D("user_message1");
        $info = $lists->where("user_id=1")->select();
		$this->assign("massages",$info);
		$this->display();
	}

}