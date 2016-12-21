<?php
namespace Home\Controller;
use Think\Controller;

class QinziController extends Controller {
    public function index() {
        $articeModel1 = D("sysEvent");
        //系统活动的动态获取
        $articeResult1= $articeModel1->limit("3")->select();
        //var_dump($articeResult1);exit;
        $this->assign("artice1",$articeResult1);

        $articeModel2 = D("userEvent");
        //用户活动的动态获取
        $articeResult2= $articeModel2->limit("3")->select();
        //var_dump($articeResult2);exit;
        $this->assign("artice2",$articeResult2);

        $this->display();
    }
    public function qinzi_activing_sys() {
        $a = I("id");
        //var_dump($a);
        $articeModel3 = D("sysEvent");
        $articeResult= $articeModel3->where("sys_event_id=".$a )->select();
        //var_dump($articeResult);exit;
        $this->assign("article_sys",$articeResult[0]);

        $this->display();
    }
    public function qinzi_activing_user() {
        $a = I("id");
        //var_dump($a);
        $articeModel4 = D("userEvent");
        $articeResult= $articeModel4->where("event_id=".$a )->select();
        //var_dump($articeResult);exit;
        $this->assign("article_user",$articeResult[0]);

        $this->display();
    }
    public function upload(){
        //dump(进来了);
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public'; // 设置附件上传根目录
        $upload->savePath  =     '/uploads/'; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            foreach($info as $file){
                $photos =  $file['savepath'].$file['savename'];
            }
        }
        $data['e_title'] = $_POST['e_title'];
        $data['e_address'] = $_POST['e_address'];
        $data['e_time'] = $_POST['e_time'];
        $data['e_details'] = $_POST['e_details'];
        $data['e_img'] = "../../Public".$photos;
        //dump($data);

        $users = M("userEvent");
        $users->add($data);
        $this->redirect("Qinzi/index");
    }
}