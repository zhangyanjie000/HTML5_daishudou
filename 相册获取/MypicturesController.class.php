<?php
namespace Home\Controller;
use Think\Controller;

class MypicturesController extends Controller {
	public function my_pictures() {
		//获取三条新闻
		$message=D('user_message');
		$info = $message->where("user_id=1")->select();  //"user_id=$user_id"
		$this->assign('info',$info);
		
		// $user_comment = D('user_comment');
		// $totle = $user_comment->where('m_id=$m_id')->count();
		// $this->assign('totle',$totle);

		$users= D('users');
		$this->assign('users',$users);
		$user_age = $users->where("user_id=1")->getField('user_age');
		$this->assign('user_age',$user_age);
		$this->display();
	}
	
}