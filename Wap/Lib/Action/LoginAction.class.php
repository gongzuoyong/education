<?php
// 首页导入Action类
session_start();
class LoginAction extends Action {
	public function index(){
		$this->display();
	}
    //登陆验证
    public function dologin(){
        $model=D('Users');
        $where['username']=$_POST['email'];
        $where['email']=$_POST['email'];
        $where['_logic']="OR";
        $list=$model->where($where)->select();
        if($list){
            if($list[0]['userpass']==md5($_POST['password'])){
                $_SESSION[C('USER_AUTH_KEY')]=$list[0];
                R("Message/hfnum");
                //$this->success("登陆成功！",U("Index/index"));
                $this->redirect("/index.php/User/index");
            }else{
                $this->error("密码错误！");
            }
        }else{
            $this->error("用户不存在！");
        }
    }
    //注册
    public function register(){
        $this->display();
    }
    //定义数据添加的方法
    public function insert(){

        //实例化对象
        $model = D("Users");
        //把要添加的数据通过create()方法保存到一个数组变量中
        if(!$model->create()){
            $this->error($model->getError());
        }

        //执行数据添加
        //$model->addtime=time();
        $list = $model->add();
        if ($list != false) {
            //查询刚注册用户的信息 存进SESSION中
            $userInfo = $model->find($list);
            $_SESSION[C("USER_AUTH_KEY")] = $userInfo;
            $this->redirect("/index.php/Index/index");//注册成功直接跳到首页
            //$this->display("Users/succ");//调用添加成功页面的方法
        }else{
            echo $model->getLastSql();exit;
            //$this->error("数据添加失败！");
        }

    }

	public function loginout(){
        $_SESSION[C('USER_AUTH_KEY')]='';
        $this->redirect("/index.php/Index/index");
    }

	public function bindtel(){
		$this->display();
	}
	public function password(){
		$this->display();
	}

}