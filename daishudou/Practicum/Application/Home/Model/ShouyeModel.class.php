<?php
namespace Home\Model;
use Think\Model;
use Think\Model\ViewModel;

/**
 *读取首页动态
 */
class ShouyeModel extends ViewModel{
	//定义视图表关联关系
  Protected $viewFields = array(
  	'user_message2' => array(
  		'm_id','content','publish_time','like_num','zhuan_num','comment_num','user_id',
  		'_type'=>'LEFT'
  		),
  	'users' => array(
  		'user_name','user_img',
  		'_on' => 'user_message2.user_id = users.user_id',
  		'_type' => 'LEFT'
  		),
  	'image' => array(
  		'image',
  		'_on' => 'user_message2.m_id = image.m_id',
  		'_type' => 'LEFT'
  		),
  	);

  //返回查询所有记录
  Public function getAll($where) {
  	return $this->where($where)->select();
  }
  
}
