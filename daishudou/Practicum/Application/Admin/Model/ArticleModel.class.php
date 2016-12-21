<?php
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{
	protected $_validate = array(
		array("a_title", "require", "标题不能为空"),
		array("a_time", "require", "时间不能为空"),
		array("a_type", "require", "类型不能为空"),
		array("a_content", "require", "内容不能为空")
	);
}
?>