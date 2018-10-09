<?php
// 首页导入Action类
class IntroduceAction extends Action {
    public function index(){
        $data = M('notice')
            ->where(array("title"=>"公司简介"))
            ->find();
        $this->assign("data",$data);
        $this->display();
    }

}
