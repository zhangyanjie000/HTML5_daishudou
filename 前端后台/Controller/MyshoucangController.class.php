<?php
namespace Home\Controller;
use Think\Controller;

class MyshoucangController extends Controller {
	public function my_shoucang() {
		$M_shopping = M('user_save'); 
		$M_product = M('user_message1');
		$list = $M_shopping->join('as user_save left join  user_message1 as user_message1 on user_save.m_id = user_message1.m_id')
		->field('user_message1.m_id,
			     user_save.user_id,
			     user_message1.content,
			     user_message1.publish_time,
			     user_message1.zhuan_num,
			     user_message1.like_num,
			     user_message1.m_img,
			     user_message1.comment_num')
		->where("user_save.user_id= 1 ") 
		->group('user_message1.m_id')
		->select();
		//dump($list);
		//exit;
		$this->assign('list',$list);
        $this->display();

	}
}