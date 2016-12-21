<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function shouye() {
        //内容展示
        $db =D("Shouye");
        $message = $db->select();
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
        // dump($a);die();
        $this->assign("message",$a);

        //当前登录用户信息
        $curuser = array(
            "username" => session("user_name"),
            "userid" => session("user_id")
        );
        $userinfo = M("users") -> where($curuser)->find();
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
                $this->redirect("Index/shouye");
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

        // if(IS_POST) {
        //     $data = array(
        //         'content' => I("post.content"),
        //         'publish_time' => date("Y-m-d H:i:s",time()),
        //         'user_id' => session("user_id"),
        //     );
        //     //判断是否登录
        //     if(!$data['user_id']){
        //         $this->redirect('Index/denglu');
        //     }
        //         $model = D("UserMessage2"); 
        //         if(!$data = $model->create()) {
        //             $this->error($model->getError());
        //         }
        //         if($mid =  $model->data($data)->add()){
        //             // if(!empty($_FILES)) {
        //             //     $img = array(
        //             //         'image' => I("post.img")
        //             //     );
        //             //     M('image')->data($img)->add();
        //             // }
        //             $this->success("发布成功",U("Index/shouye"));
        //         }else{
        //             $this->error("发布失败");
        //         }         
        // }
        $this->display();
    }
    public function doAdd() {
        // if(IS_POST) {
            //  $data2 = array(
            //     'content' => I("post.content"),
            //     'publish_time' => date("Y-m-d H:i:s",time()),
            //     'user_id' => session("user_id"),
            // );
            // //判断是否登录
            // if(!$data2['user_id']){
                // $this->redirect('Index/denglu');
            // }

        $upload = new \Think\Upload();// 实例化上传类
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
        $upload->savePath  =     '../Public/uploads'; // 设置附件上传（子）目录
        $upload->thumb = true;//开启图片缩略
        $upload->thumbRemoveOrigin = true;//生成缩略图删除原图
        // 上传文件 
        $info   =   $upload->upload();
        // dump($info['image']['savepath']);exit;
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
                if(!$info['imgae']) {
                    $img = array(
                        "image" => $info['image']['savepath'],
                        "m_id"=>$m_id
                        );
                    M('image')->data($img)->add();
                }
                $this->success('发布成功',U('Index/shouye'));
            }else{
                $this->error("发布失败");
            }
        }
        // }
             
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

    
	public function content($m_id){ //
		$message=D('user_message');
		$info = $message->where("m_id=$m_id")->select();  //""
		$this->assign('info',$info);
		//获取user_name
		$user_id = $info[0]['user_id'];
		$users= D('users');
		$this->assign('users',$users);
		$user_name = $users->where("user_id=$user_id")->getField('user_name');
		$user_img = $users->where("user_id=$user_id")->getField('user_img');
		$this->assign('user_name',$user_name);
		$this->assign('user_img',$user_img);
		//获取comment_id

		$user_comment = D('user_comment');
		$list = $user_comment->where("m_id=$m_id")->select();//""
		$this->assign('list',$list);

		$totle = $user_comment->where("m_id=$m_id")->count();
		$this->assign('totle',$totle);
		//var_dump($totle);
		$this->display();
	}

	public function discuss($m_id){
		
		if(IS_POST) {
			$data = array(
			'comment' => I("post.comment"),
			'com_time' => date("Y-m-d H:i:s",time()),
			'user_id' => 2,//session("user_id")
			'm_id' => $m_id
			);
			// dump($data);exit();	
			if($mid = M('user_comment')->data($data)->add()){
				
				$this->success("发布成功",U("Index/shouye"));	
			}else{
				$this->error("发布失败");
			}
		}
		$this->display();
		
	}
	
}







