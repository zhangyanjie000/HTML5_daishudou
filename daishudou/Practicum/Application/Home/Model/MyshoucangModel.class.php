<?php
namespace Home\Model;
use Think\Model;
use Think\Model\RelationModel;

class usersaveModel extends RelationModel{ //这地方要继承RelationModel 
protected $_link=array( //所有的关联定义都统一记录在模型类的$_link里面
	'Info'=>array( //关联的表名
	'mapping_type' =>HAS_ONE, //关联类型
	'class_mame' =>'Info', //需要关联的模型类名
	'mapping_name'=>'Info', //关联的映射名称，用于获取数据用
	'foreign_key' =>'uid', //关联的外键名称
	//'mapping_fields'=>'uid,title,info', //关联要查询的字段
	'as_fields' =>'uid,title,info:message', //直接把关联的字段值映射成数据对象中的某个字段
),
);
}
?>