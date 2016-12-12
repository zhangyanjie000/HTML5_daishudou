<?php
namespace Home\Controller;
use Think\Controller;

class BabyfoodController extends Controller {
	public function index() {
		$articeModel = M("sysArticle");
		$articeModel2 = M("userMessage");
		$articeModel3 = M("users");
		$a = 1;//文章类型
		$b= 2;
		$d= 4;
		$c=1;//用户 title_type     user_id
		$articeResult1= $articeModel2->limit("3")->where('title_type = 3 and user_id = 1')->select();
		//dump($articeResult1);exit;
		$this->assign("artice",$articeResult1);

		$articeResult2= $articeModel3->where('user_id = 1')->select();
		//dump($articeResult2);exit;
		$this->assign("user",$articeResult2[0]);

		$articeResult3= $articeModel3->where(' user_id = 2')->select();
		//dump($articeResult1);exit;
		$this->assign("user2",$articeResult3[0]);

		$articeResult4= $articeModel3->where(' user_id = 3')->select();
		//dump($articeResult1);exit;
		$this->assign("user3",$articeResult4[0]);

		$articeResult6= $articeModel2->limit("3")->where('title_type = 3 and user_id = 2')->select();
		//dump($articeResult1);exit;
		$this->assign("artice1",$articeResult6);

		$articeResult7= $articeModel2->limit("3")->where('title_type = 3 and user_id = 3')->select();
		//dump($articeResult1);exit;
		$this->assign("artice2",$articeResult7);






		
		$articeResult5= $articeModel->limit("10")->where("a_type=".$d)->select();
		//dump($articeResult3);exit;
		$this->assign("area",$articeResult5);
		$this->display();
	}
	public function article2() {
		$a = I("id");
		//dump($a);
		$articeModel = M("sysArticle");
		$articeResult= $articeModel->where("article_id=".$a )->select();
		//dump($articeResult);
		$this->assign("article",$articeResult[0]);
		
		$this->display();
	}
	public function article1() {
		$a = I("id");
		//dump($a);
		$articeModel2 = M("userMessage");
		$articeResult= $articeModel2->where("m_id=".$a )->select();
		//dump($articeResult);
		$this->assign("article",$articeResult[0]);
		
		$this->display();
	}
	

}