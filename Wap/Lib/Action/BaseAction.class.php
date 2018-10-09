<?php
// 首页导入Action类
class BaseAction extends Action {
    public function _initialize(){
        if($_SESSION[C('USER_AUTH_KEY')]['id']){
            $id = $_SESSION[C('USER_AUTH_KEY')]['id'];
        }else{
            $this->redirect("/index.php/Login/index");
        }
    }
}