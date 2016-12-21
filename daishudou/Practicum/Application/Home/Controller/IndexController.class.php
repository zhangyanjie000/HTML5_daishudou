<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {


    public function shouye() {
        //内容展示
        $db =D("Shouye");
        $message = $db->order("publish_time desc")->select();
        // dump($message);die();
        $u=array();
        foreach($message as $k=>&$e){
            $mid=&$e['m_id'];
            if(!isset($u[$mid])){
                $u[$mid]=$e;
                unset($u[$mid]['image']);
            }
            $u[$mid]['images'][]=array('image'=>$e['image']);
        }
        $a=array_values($u);
        unset($u);
        $this->assign("message",$a);

        //当前登录用户信息
        $curuser = array(
            "username" => session("user_name"),
            "userid" => session("user_id")
        );
        $userinfo = M("users") ->where($curuser)->find();
        $this->assign("userinfo",$userinfo);

        //健康提示
        $model = M("points");
        $healsql = "select users.user_age,points.pointcontent from users,points where users.user_age = points.user_age";
        $healres = $model->query($healsql);
        for($i=0; $i<count($model->select()); $i++){
            if($healres[$i]['user_age'] == $userinfo['user_age']) {
                $this->assign("heal",$healres[$i]);
            }

        }



        $this->display();
    }
    public function denglu() {
        if(IS_POST) {
            $login = M("users");
            $condition = array(
                "user_name" => trim(I("post.user_name")),
                "user_pwd" => I("post.user_pwd")
            );

            $result = $login->where($condition)->find();
            if($result) {
                $id=$result["user_id"];
                session("user_name",I("post.user_name"));
                session("user_pwd",I("post.user_pwd"));
                session("user_id",$id);
                $this->redirect('Index/shouye');
            }
            else{
                $this->error("用户名或密码不正确");
            }
        }
        else {
            $this->display();
        }
    }
    public function publish() {
            $data2 = array(
                'user_id' => session("user_id"),
            );
            //判断是否登录
            if(!$data2['user_id']){
                $this->redirect('Index/denglu');
            }
        $this->display();
    }
    public function doAdd() {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
        $upload->savePath  =     '../Public/uploads'; // 设置附件上传（子）目录
        $upload->thumb = true;//开启图片缩略
        $upload->thumbRemoveOrigin = true;//生成缩略图删除原图
        // 上传文件 
        $info   =   $upload->upload();
        // dump($info['image']['savename']);exit;
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            $data = array(
                'content' => I("post.content"),
                'publish_time' => date("Y-m-d H:i:s",time()),
                'user_id' => session("user_id"),
                'image' => $info['image']['savepath'].$info['image']['savename']
                );
            if($m_id = M("user_message2")->data($data)->add()) {
                if($info['image']) {
                    $img = array(
                        "image" => $info['image']['savepath'].$info['image']['savename'],
                        "m_id"=>$m_id
                        );
                    M('image')->data($img)->add();
                }
                $this->success('发布成功',U('Index/shouye'));
            }else{
                $this->error("发布失败");
            }
        }

             
    }

    //处理图片上传
    // private function _upload($path,$width,$height) {
    //     import('ORG.Net.UploadFile');
    //     $obj = new UploadFile();
    //     $obj->savePath = C('UPLOAD_PATH').$path.'/';
    //     $obh->saveRule = 'uniqid';
    //     $obj->uploadReplace = true;
    //     $obj->allowExts = C('UPLOAD_EXTS');
    //     $obj->thumb = true;
    //     $obj->thumbMaxWidth = $width;
    //     $obj->thumbMaxHeight = $height;
    //     $obj->thumbPerfix = 'max_,medium_,mini_';
    //     $obj->thumbPath = $obj->savePath;
    //     $obj->thumbRemoveOrigin = true;
    //     $obj->autoSub = ture;//使用子目录保存文件
    //     $obj->subType = 'date';//使用日期为子目录名称
    //     $obj->dateFormat = 'Y_m';

    //     $obj->upload();
    // }

    public function content($id){ //$m_id
        if($id) {
            $message=M('user_message2')->find($id);
            $this->assign("info", $message); //"m_id=$m_id"

            $sql = "select image from image,user_message2 where image.m_id = user_message2.m_id and image.m_id=$id";
            $result = M("image")->query($sql);
            $this->assign('img',$result);
            // dump($result[0]['image']);die();
            //获取user_name
            $user_id = $message['user_id'];
            $users= D('users')->where("user_id=$user_id")->select();
            $this->assign('users',$users);
            // dump($users);die();
            //获取comment_id

            $users = M('users');
            $sql = "select user_name,user_img,com_time,comment,m_id from users,user_comment1 where users.user_id=user_comment1.user_id and m_id=$id";
            $list = $users->query($sql);
            $this->assign('list',$list);
    }else {
       exit("bad Param!"); 
    }
       
        // var_dump($list);die();

        


        // $totle = $user_comment->where('m_id=1')->count();
        // $this->assign('totle',$totle);
        // //var_dump($totle);
        $this->display();
    }
    public function discuss($id){
        $data2 = array(
                'user_id' => session("user_id"),
            );
            //判断是否登录
            if(!$data2['user_id']){
                $this->redirect('Index/denglu');
            }
        if(IS_POST) {
            $data = array(
            'comment' => I("post.comment"),
            'com_time' => date("Y-m-d H:i:s",time()),
            'user_id' => session("user_id"),
            'm_id' => $id
            );
            // dump($data);exit();  
            if($mid = M('user_comment1')->data($data)->add()){
                
                $this->redirect("Home/index/content",array("id"=>$id));   
            }else{
                $this->error("发布失败");
            }
        }
        $this->display();
        
    }
    public function zhuce() {
        if(IS_POST) {
            $user = D("users");
            if(!$data=$user->create()) {
                header("Content-type:text/html;charset=utf-8");
                exit($user->getError());
            }
            //插入数据库
            if($user->add($data)) {
                $this->success("注册成功",U("Index/shouye"));
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