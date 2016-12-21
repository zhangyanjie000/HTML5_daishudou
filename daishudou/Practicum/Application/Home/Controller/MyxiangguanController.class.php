<?php
namespace Home\Controller;
use Think\Controller;

class MyxiangguanController extends Controller {
	public function my_xiangguan() {
		$db = M("user_message1");
		$sql = "
		select 
		users.user_id,
		users.user_name,
		users.user_img,
		user_message1.m_id,
		user_message1.content,
		user_message1.m_img,
		user_comment.type,
		user_comment.comment_time,
		user_comment.comment
		from
		users,user_message1,user_comment 
		where 
		users.user_id = user_comment.user_id and user_comment.m_id = user_message1.m_id";
		$result = $db->query($sql);
		//dump($result);
	    //exit;
		$this->assign("list",$result);

		$this->display();
	}
	
}