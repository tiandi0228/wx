<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends ControllerBack
{
    public function index()
    {
        $where['bid']=$_GET['bid'];
        $Pro = M("Pro");
        $list = $Pro->where($where)->limit(6)->order('pid asc')->select();
        foreach($list as $key=>$val){  //随机取出每条记录的一张图片
            $arr = explode('|',$val['img']);
            $c = count($arr)-2;
            $list[$key]['img'] = $arr[rand(0,$c)];
        }
        $this->assign('list',$list);
        $this->display();
    }
}