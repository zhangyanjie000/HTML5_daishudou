<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller {
	public function __construct() {
		parent::__construct();
		
		if (!isLogin()) {
			$this->error("请先登录", U("Login/login"));
		}
	}
	public function add() {
		$this->display();
	}
	public function doAdd() {
		if(!IS_POST) {
			exit("bad request!");
		}
		$articleModel = D("sys_article");
		if(!$articleModel->create()) {
			$this->error($articleModel->getError());
		}
		$data['a_time'] =date('Y-m-d');
		if($articleModel->add($data)) {
			$this->success("添加成功！",U("Article/lists"));
		}
		else {
			$this->error("添加失败！");
		}
	}
	public function lists() {
		$listsModel = D("sys_article");
		$lists = $listsModel-> select();
		$this->assign("lists",$lists);
		$this->display();
	}
	public function edit($id) {
		if(IS_POST) {
			$model = M("sys_article");
			$model ->create();
			// var_dump($model->create());exit;
			// $data['a_time'] = date('Y-m-d');
			$id=array(
  				'article_id'		=>I('get.id'),
  				'a_title'		=>I('post.a_title'),
  				'a_content'	=>I('post.a_content'),
  				'a_time'	=>date('Y-m-d'),
  				'a_type'	=>I('post.a_type'),
  				);
			if($model->save($id)) {
				$this->success("修改成功！",U("Article/lists"));
			}else{
				$this->error($model->getError());
			}
		}
		else{
			if($id=='') {
				exit("bad Param!");
			}
			$sys_article = M("sys_article")->find($id);
			$this->assign("sys_article", $sys_article);
			$this->display();
		}
	}
	public function del() {
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad Param!");			
		}
		if(M("sys_article")->delete($id)) {
			$this -> success("删除成功");
		}

		// if(is_array($id)) {
		// 	$where = 'id in('.implode(',', $id).')';
		// 	if(M("sys_article")->where($where)->delete()) {
		// 		$this->success("删除成功");
		// 	}
		// }
	}
}

?>