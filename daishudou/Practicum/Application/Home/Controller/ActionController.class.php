<?php
namespace Home\Controller;
use Think\Controller;

class ActionController extends Controller {
    public function find() {
        //获取三条新闻

        $this->display();
    }
    public function contact_template() {
        $this->display();
    }
    public function intro_template() {
        $this->display();
    }
}