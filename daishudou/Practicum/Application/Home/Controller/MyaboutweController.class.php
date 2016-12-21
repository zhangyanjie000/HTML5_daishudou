<?php
namespace Home\Controller;
use Think\Controller;

class MyaboutweController extends Controller {
	public function My_about() {
		//获取三条新闻
		$this->display();
	}
	public function fankui() {
		//获取三条新闻
		$this->display();
	}
	
}