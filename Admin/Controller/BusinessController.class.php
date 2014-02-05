<?php
namespace Admin\Controller;
use Think\Controller;
class BusinessController extends ControllerBack
{
    //详细页
    public function index()
    {
        $Business = M("Business");
        $where['uid']=$_SESSION["uid"];
        $list= $Business->where($where)->find();
        $this->assign('uid',$_SESSION['uid']);
        $this->assign('bid',$list['bid']);
        $this->assign('name',$list['name']);
        $this->assign('webname',$list['webname']);
        $this->assign('tel',$list['tel']);
        $this->display();
    }

    //更新
    public function update()
    {
        $Business = M("Business");
        $where['bid'] = $_POST['bid'];
        $list= $Business->where($where)->find();
        $data["name"] = $_POST['name'];
        $data["webname"] = $_POST['webname'];
        $data["tel"] = $_POST['tel'];
        $data['uid']=$_POST['uid'];
        if(!empty($list))
        {
            $Business->where($where)->save($data);
        }else{
            $Business->data($data)->add();
        }
        header("Location:/Admin/Business");
    }
}