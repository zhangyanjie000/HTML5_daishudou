<?php
namespace Home\Model;
use Think\Model;

class UserMessage2Model extends Model{
	protected $_validate = array(
		array("content", "require", "内容不能为空"),
		array("user_id", "require", "用户不能为空"),
	);
}
?>