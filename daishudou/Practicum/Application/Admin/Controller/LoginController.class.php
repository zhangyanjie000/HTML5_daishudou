<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function login() {
		if(IS_POST) {
			$login = M("Admin");
			$condition = array(
					"username" => I("post.username"),
					"password" => I("post.password")
				);
			$result = $login->where($condition)->find();
			if($result) {
				$id=$result["id"];
				session("username",I("post.username"));
				session("password",I("post.password"));
				session("id",$id);
				$this->success("登录成功",U("Index/index"));
			}
			else{
				$this->error("用户名或密码不正确");
			}
		}
        else {
            $this->display();
        }
	}

	public function reg() {
		if(IS_POST) {
			$user = D("Admin");

			if(!$data=$user->create()) {
				header("Content-type:text/html;charset=utf-8");
				exit($user->getError());
			}

			//插入数据库
			if($user->add($data)) {
				$this->success("注册成功！");
			}
			else {
				$this->error("注册失败！");
			}
		}
		else {
			$this->display();
		}
	}
}

?>