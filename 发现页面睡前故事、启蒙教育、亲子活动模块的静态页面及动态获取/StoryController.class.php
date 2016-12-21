<?php
namespace Home\Controller;
use Think\Controller;

class StoryController extends Controller {
    public function index() {
        $articeModel = D("sysStory");
        //推广类的动态获取
        $articeResult1= $articeModel->limit("2")->where('story_type = 1')->select();
        //var_dump($articeResult1);exit;
        $this->assign("artice1",$articeResult1);
        //经典故事类的动态获取
        $articeResult2= $articeModel->limit("2")->where('story_type = 2')->select();
        //var_dump($articeResult2);exit;
        $this->assign("artice2",$articeResult2);
        //早教故事类的动态获取
        $articeResult3= $articeModel->limit("2")->where('story_type = 3')->select();
        //var_dump($articeResult3);exit;
        $this->assign("artice3",$articeResult3);
        //音频故事类的动态获取
        $articeResult4= $articeModel->limit("2")->where('story_type = 4')->select();
        //var_dump($articeResult4);exit;
        $this->assign("artice4",$articeResult4);

        $this->display();
    }
    public function story_article_123() {
        $a = I("id");
        //var_dump($a);
        $articeModel = D("sysStory");
        $articeResult= $articeModel->where("sys_story_id=".$a )->select();
        //var_dump($articeResult);exit;
        $this->assign("article_123",$articeResult[0]);

        $this->display();
    }
    public function story_article_yinpin() {
        $a = I("id");
        //var_dump($a);
        $articeModel1 = D("sysStory");
        $articeResult= $articeModel1->where("sys_story_id=".$a )->select();
        //var_dump($articeResult);exit;
        $this->assign("article_yinpin",$articeResult[0]);

        $this->display();
    }
}