
<?php public function uploadImg() {
       if(!$this->isPost()) {
            halt("页面不存在");
        }
        $upload = $this->_upload(
            'Users','180,80,50','180,80,50');
    }