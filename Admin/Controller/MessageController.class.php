<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends ControllerBack
{
    //列表
    public function index()
    {
        $user['bid']=$_SESSION["uid"];
        $user['audit']=0;
        $message['bid']=$_SESSION["uid"];
        $message['audit']=1;
        $Message = M("Message");
        $count = $Message->where($message)->count();    //计算未读总数
        $count1 = $Message->where($user)->count();    //计算全部总数
        $p = new \Org\Util\Page($count, 20);
        $p1 = new \Org\Util\Page($count1, 20);
        $list = $Message->where($message)->limit($p->firstRow . ',' . $p->listRows)->order('id asc')->select();
        $list1 = $Message->where($user)->limit($p1->firstRow . ',' . $p1->listRows)->order('id asc')->select();
        $p->setConfig('header','条留言');
        $p1->setConfig('header','条留言');
        $page = $p->show();
        $pager = $p1->show();
        $this->assign(array(
            'list' => $list,
            'list1' => $list1,
            'page' => $page,
            'pager' =>$pager
        ));
        $this->display();
    }

    //详细页
    public function show()
    {
        $Message = M("Message");
        $where['id'] = $_GET['id'];
        $data['audit']=0;
        $Message->where($where)->save($data);
        $list= $Message->where($where)->find();
        $this->assign('id',$list['id']);
        $this->assign('username',$list['username']);
        $this->assign('tel',$list['tel']);
        $this->assign('qq',$list['qq']);
        $this->assign('content',$list['content']);
        $this->display();
    }

    //删除
    public function delall()
    {
        $Message = M("Message");
        $id = $_POST['id'];
        $where['id']=array('in',implode(',',$id));
        $Message->where($where)->delete();
        header("Location:/Admin/Message");
    }
}