<?php
namespace Home\Controller;
use Think\Controller;

class MysetController extends Controller {
	public function my_set() {
		//获取三条新闻
		$this->display();
	}
	public function my_change_dizhi() {
		//获取三条新闻

		$this->display();
	}
	public function my_change_nicheng() {
		$this->display();
	}
	public function my_change_password() {
		$this->display();
	}
	
}