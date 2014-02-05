<?php
namespace Mobile\Controller;
use Think\Controller;
class ControllerBack extends Controller
{
    public function _initialize()
    {
        $id = $_GET['bid'];
        $Pro = M("Pro");
        $rs = $Pro->field('pro.bid,pro.catid,b.name,b.webname,b.tel')->join('INNER join business b on pro.bid='.$id)->find();
        $this->assign('bid',$rs['bid']);
        $this->assign('catid',$rs['catid']);
        $this->assign('webname',$rs['webname']);
        $this->assign('name',$rs['name']);
        $this->assign('tel',$rs['tel']);
        //检测
        if(empty($id) || $id !== $rs['bid'])
        {
            header("Location:/Mobile/Error.html");
            exit();
        }
    }
}