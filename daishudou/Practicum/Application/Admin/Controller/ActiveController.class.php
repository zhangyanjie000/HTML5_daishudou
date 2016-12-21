<?php
namespace Admin\Controller;
use Think\Controller;

class ActiveController extends Controller {
	public function add() {
		$this->display();
	}
	public function doAdd() {
		$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
	    $upload->savePath  =     '../Public/uploads'; // 设置附件上传（子）目录
	    $upload->thumb = true;//开启图片缩略
	    $upload->thumbRemoveOrigin = true;//生成缩略图删除原图
	    // 上传文件 
	    $info   =   $upload->upload();

	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
    		$model=M("sys_event");
	    	if(!$data = $model->create()) {
	    		$this->error($model->getError());
	    	}
	    	$data['a_time'] = date('Y-m-d');
			//设置img字段属性
	    	$data['s_e_img']=$info['s_e_img']['savepath'].$info['s_e_img']['savename'];
	    	
	    	if($model->add($data)) {
	    		$this->success("添加成功！",U("Active/active_list"));
	    	}
	    	else {
	    		$this->error("添加失败！");
	    	}
	    }
	}
	public function active_list() {
		$model = M("sys_event")->select();
		$this->assign("activelists",$model);
		$this->display();
	}
 	public function edit($id) {
 		if(IS_POST) {
	    	$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
		    $upload->savePath  =     '../Public/uploads'; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();

		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }
		    else{// 上传成功
	            $model = M("sys_event");
	            $model ->create();
	            // var_dump($model->create());exit;
	            if($model->save()) {
	                $this->success("修改成功！",U("Active/active_list"));
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
				$sys_event = M("sys_event")->find($id);
				$this->assign("active", $sys_event);
				$this->display();
	        }
 	}

	public function del() {
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if($id == '') {
			exit("bad param!");
		}
		if(M('sys_event')->delete($id)) {
			$this->success("删除成功！");
		}
	}
}
?>