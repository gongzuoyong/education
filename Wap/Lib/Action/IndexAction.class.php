<?php
// 首页导入Action类
class IndexAction extends Action {
    public function index(){
        $cc=D('Cat');
        //灵心治疗栏位
        $res=$cc->field('id,name')->where(array('pid'=>'1','status'=>'1'))->select();
        $this->assign("cat",$res);
        $video = M('video')->field('id,picname')->where('is_top=1')->order('id desc')->select();
        $this->assign("video",$video);
        $this->display();
        
    }    
    public function getCatData(){
        $tid = I('catid');
        $key = I('key');
        $model = M('Video');
        //导入分页类
        import("ORG.Util.Page");
        if(!empty($tid)){
            $where['tid'] = array("eq",$tid);
        }
        if(!empty($key)){
            $where['videoname'] = array('like',"%$key%");
        }
        //===============
        $count=$model->where($where)->count();//获取总数据条数
        $page=new Page($count,5);//创建分页对象
        $result = $model->where($where)->limit($page->firstRow.",".$page->listRows)->order('id desc')->select();
        echo json_encode($result);
        exit;
    }

    public function show(){
        //实例化视频表对象
        $model = M("Video");
        $vo = $model->find($_GET['id']);
        $model->clicknum += 1;;//执行视频的点击率加一
        $model->save();

        //查询该视频的笔记列表
        $note = M("Note")->where("vid={$_GET['id']}")->limit(5)->select();
        $notenum = M("Note")->where("vid={$_GET['id']}")->count();
        $this->assign("note",$note);
        $this->assign("notenum",$notenum);
        //调用评论表中显示视频评论的方法
        R("Videocom/index",array($_GET['id']));
        
        //实例化赞表和收藏表对象
        $zan = M("Zan");
        $collect = M("Collect");
        //封装搜索条件
        $where['uid'] = array("eq",$_SESSION[C('USER_AUTH_KEY')]['id']);
        $where['vid'] = array("eq",$_GET['id']);
        //查询该用户是否赞过这个资源
        $iszan = $zan->where($where)->find();
        $coll = $collect->where($where)->find();
        $this->assign("iszan",$iszan);
        $this->assign("collect",$coll);
        /*
        //首先判断该用户是否登录 未登录则不做记录
        if ($_SESSION[C('USER_AUTH_KEY')]['id']) {
            //记录用户的观看视频记录
            $history = M("Vhistory");
            $map["uid"] = $_SESSION[C('USER_AUTH_KEY')]['id'];
            $map['vid'] = $_GET['id'];
            //首先判断该用户是否看过这个视频，若看过只更新数据表时间
            $res = $history->where($where)->find();
            if ($res) {
                $res['addtime'] = time();
                $history->where($where)->save($res);//更新时间
            }else{
                $map['addtime'] = time();
                $history->add($map);//保存记录
            }
        }
         */
        //根据用户所看视频的类别id查询其他相应的视频 猜你喜欢模块
        //$like = $model->where("tid={$vo['tid']}")->limit(6)->select();
        //查询点击率前六位的视频
        $like = $model->where("id<>{$_GET['id']}")->order("clicknum desc")->limit(6)->select();
        $this->assign("like",$like);

        $this->assign("vo",$vo);
        $this->display();
    }
}
