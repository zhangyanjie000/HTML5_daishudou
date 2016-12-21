<?php
namespace Home\Controller;
use Think\Controller;

class MyController extends Controller {
	public function my() {
		//获取三条新闻
		$this->display();
	}
	
}