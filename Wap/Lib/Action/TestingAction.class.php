<?php
// 首页导入Action类
class TestingAction extends Action {
	public function index(){
		$this->display();
	}

	public function lists(){
		$this->display();
	}

	public function detail(){
        $mod = M("Test");
        $data = $mod->find($_GET['id']);

        //=======
        $this->assign("tid",$data['id']);
        $this->assign("title",$data['title']);
        $this->assign("data",$data);
        //实例化试题详情对象
        $model = M("Quest");
        //拼装查询语句 让试题详情表中的tid等于试题表中的id
        $where['tid'] = array("eq",$_GET['id']);
        //执行查询
        $list = $model->where($where)->select();
        //将查询结果赋值给模板
        $this->assign("list",$list);
        if($data['status'] == 'mf'){
            $this->display();
        }else{
            $this->display("detailff");
        }
		
	}

    public function detailInfo(){
        $mod = M("Test");
        $data = $mod->find($_GET['id']);

        //=======
        $this->assign("tid",$data['id']);
        $this->assign("title",$data['title']);
        $this->assign("data",$data);
        //实例化试题详情对象
        $model = M("Quest");
        //拼装查询语句 让试题详情表中的tid等于试题表中的id
        $where['tid'] = array("eq",$_GET['id']);
        //执行查询
        $list = $model->where($where)->select();
        //将查询结果赋值给模板
        $this->assign("list",$list);

        $this->display();
    }

    public function score(){
        $mod=M("Quest");       
        $model=M("Score");
        $_POST['score'] = json_encode($_POST['test']);
        $_POST['time']=time();
        $model->create();
        $model->add();
        $tid = $_POST['tid'];
        $data = M("Test")->find($tid);
        $this->assign("data",$data);
        $this->display();
    }

	public function ajaxSession(){
		$key = $_POST['k'];
		$value = $_POST['v'];
		$uid=$_SESSION[C("USER_AUTH_KEY")]['id'];
		$arr[$key] = $value;
		$data = json_encode($arr);
		session($key,$value);
		echo session($key);
	}

	public function listsAjax(){
		//实例化试题库对象
        $model = M("Test");
        //导入分页类
        import("ORG.Util.Page");
        if(!empty($_GET['data'])){
            $where['status'] = array("eq",$_GET['data']);
        }
        //===============
        $count=$model->where($where)->count();//获取总数据条数
        $page=new Page($count,5);//创建分页对象
        $result = $model->where($where)->limit($page->firstRow.",".$page->listRows)->order('id desc')->select();
        echo json_encode($result);
        exit;
	}
}