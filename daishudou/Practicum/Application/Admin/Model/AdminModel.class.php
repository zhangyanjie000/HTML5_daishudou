<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model {
	protected $_validate = array(
		array('username','require','用户名不能为空'),
		array('username','','账号名称已存在',0,'unique',1),
		array('email','','该邮箱已被占用',0,'unique',1),
		// array('telphone', '', '该手机号码已被占用', 0, 'unique', 1),
		array('password', '/^([a-zA-Z0-9]{6,22})$/', '密码格式不正确,请重新输入！', 0), 
		array('repassword','password','确认密码不正确',0,'confirm'),
		array('email', 'email', '邮箱格式不正确'),
		array('mobile', '/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/', '手机号码格式不正确', 0),
		array('newpassword','renewpassword','确认密码不正确',0,'confirm'),
		// array('verify', 'verify_check', '验证码错误', 0, 'function'),
		// array('agree','require','请先阅读用户协议',1)			
	);
	protected $_auto = array(
		// array('password','md5',	3,'function'),
		// array('regdate','time',1,'function')
	);
	//判断是否同意用户协议
	 // protected function is_agree()
  //   {
  //       // 获取POST数据
  //       $agree = I('post.agree', 0, 'intval');
  //       // 验证
  //       if ($agree) {
  //           return true;
  //       } else {
  //           return false;
  //       }
  //   }
}

?>