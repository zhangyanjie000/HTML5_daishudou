<?php
namespace Admin\Controller;
use Think\Controller;

class StoryController extends Controller {
	public function add() {
		$this->display();
	}
	public function doAdd() {
		$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
	    $upload->savePath  =     '../Public/uploads'; // 设置附件上传（子）目
	    
	    $upload2 = new \Think\Upload();// 实例化上传类
	    $upload2->maxSize   =     100000000;// 设置附件上传大小
	    $upload2->exts      =     array('mp3', 'mp4');// 设置附件上传类型
	    $upload2->rootPath  =     THINK_PATH; // 设置附件上传根目录
	    $upload2->savePath  =     '../Public/audio'; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    $info2  =   $upload2->upload();
		if(!$info||!$info2) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	        $this->error($upload2->getError());
	    }else{// 上传成功
    		$model=M("sys_story");
	    	if(!$data = $model->create()) {
	    		$this->error($model->getError());
	    	}
	    	$data['story_time'] = date('Y-m-d');
			//设置img字段属性
	    	$data['story_img']=$info['story_img']['savepath'].$info['story_img']['savename'];
	    	$data['story_audio']=$info2['story_audio']['savepath'].$info2['story_audio']['savename'];
	    	if($model->add($data)) {
	    		$this->success("添加成功！",U("Story/story_list"));
	    	}
	    	else {
	    		$this->error("添加失败！");
	    	}
	    }
	}
	public function story_list() {
		$model = M("sys_story")->select();
		$this->assign("storylists",$model);
		$this->display();
	}
 	public function edit($id) {
		if(IS_POST) {
	    	$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
		    $upload->savePath  =     '../Public/uploads'; // 设置附件上传（子）目录
		    
		    $upload2 = new \Think\Upload();// 实例化上传类
		    $upload2->maxSize   =     100000000;// 设置附件上传大小
		    $upload2->exts      =     array('mp3', 'mp4');// 设置附件上传类型
		    $upload2->rootPath  =     THINK_PATH; // 设置附件上传根目录
		    $upload2->savePath  =     '../Public/audio'; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();
		    $info2  =   $upload2->upload();

		    if(!$info||!$info2) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		        $this->error($upload2->getError());
		    }
		    else{// 上传成功
	            $model = M("sys_story");
	            $model ->create();
	            // var_dump($model->create());exit;
	            if($model->save()) {
	                $this->success("修改成功！",U("Story/story_list"));
	            } 
	            else {
	                $this->error("修改失败！");
	            }      
	        }
	    }
        else{
           if($id=='') {
				exit("bad Param!");
			}
			$storys = M("sys_story")->find($id);
 			$this->assign("storys",$storys);
 			$this->display();
        }
 	}

	public function del() {
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if($id == '') {
			exit("bad param!");
		}
		if(M('sys_story')->delete($id)) {
			$this->success("删除成功！");
		}
	}
}

?>