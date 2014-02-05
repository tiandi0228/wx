<?php
namespace Mobile\Controller;
use Think\Controller;
class ProController extends ControllerBack
{
    public function index()
    {
        $Pro = M("Pro");
        $where['catid']=$_GET['catid'];
        $where['bid']=$_GET['bid'];
        $list = $Pro->where($where)->order('pid asc')->select();
        foreach($list as $key=>$val){  //随机取出每条记录的一张图片
            $arr = explode('|',$val['img']);
            $c = count($arr)-2;
            $list[$key]['img'] = $arr[rand(0,$c)];
        }
        $this->assign('list',$list);
        $this->display();
    }

    public function show()
    {
        $Pro = M("Pro");
        $where['pid'] = $_GET['pid'];
        $arrlist = $Pro->where($where)->find();
        $this->assign('pid',$arrlist['pid']);
        $this->assign('proname',$arrlist['proname']);
        $this->assign('price',$arrlist['price']);
        $this->assign('pricing',$arrlist['pricing']);
        $this->assign('contents',$arrlist['contents']);
        $this->assign('img',explode("|",$arrlist['img']));
        $this->assign('catid',$arrlist['catid']);
        $this->assign('list_img',$arrlist);
        $this->display();
    }
}