<?php
namespace Admin\Controller;
use Think\Controller;

class UsersController extends Controller {
	Public function upload(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		// $upload->maxSize  = 3145728 ;// 设置附件上传大小
		// $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		}
		// 保存表单数据 包括附件数据
		$User = M("Books"); // 实例化User对象
		$User->create(); // 创建数据对象
		$User->photo = $info[0]['savename']; // 保存上传的照片根据需要自行组装
		$User->add(); // 写入用户数据到数据库
		$this->success('数据保存成功！');
	}
	public function user_add() {
		$this->display();
	}
	public function doAdd() {
		if(!IS_POST) {
			exit("bad Param!");
		}
		$adminModel = D("Admin");
		if(!$adminModel->create()) {
			$this->error($adminModel->getError());
		}
		if($adminModel->add()) {
			$this->success("添加成功!",U("Users/user_list"));
		}
		else {
			$this->error("添加失败！");
		}
	}

	public function user_list() {
		$lists = M("admin")->select();
		$this->assign("userlists",$lists);
		$this->display();
	}
	public function del() {
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if($id=='') {
			exit("bad Param!");
		}
		if(M("Admin")->delete($id)) {
			$this->success("删除成功！");
		}
	}
	public function user_edit($id) {
		if(IS_POST) {
			$model = D("Admin");
			$model->create();
			// var_dump($model->save());exit();
			if($model->save()) {
				$this->success("修改成功！");
			}
			else {
				$this->error("修改失败！");
			}
		}
		else {
			if($id=='') {
				exit("bad Param!");
			}
			$users=M("Admin")->find($id);
			$this->assign("users",$users);
			$this->display();
		}
	}
	public function user_modi() {
		if(IS_POST) {
			$model = M('Admin');
		    $model->create();
			if($model->save()) {
				$this->success("修改成功！",U("Users/user_list"));
			}
			else {
				$this->error("修改失败！");
			}
		}
		else {
			$id=isset($_POST['id']) ? intval($_POST['id']):$_POST['username'];
			$data = M('Admin')->find($id);
			$this->assign("info",$data);
			$this->display();
		}
		
	}
	public function user_pass() {
		if(IS_POST) {
			$model=M('Admin');
			$model->create();
			if(I("post.oldpassword") != $_SESSION['password']) {
				$this->error("旧密码错误！");
			}
			if($model->save()) {
				$this->success("修改成功！",U("Users/user_list"));
			}
			else{
				$this->error("修改失败！");
			}
		}
		else {
			$id=isset($_SESSION['id']) ? intval($_SESSION['id']):$_SESSION['username'];
			$pass = M('Admin')->find($id);
			$this->assign("pass",$pass);
			$this->display();
		}
	}
}
?>