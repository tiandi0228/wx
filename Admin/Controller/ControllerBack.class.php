<?php
namespace Admin\Controller;
use Think\Controller;
class ControllerBack extends Controller
{
    public function _initialize()
    {
        $Message = M("Message");
        $count = $Message->where('audit=1')->count();
        $this->assign('count',$count);
        //检测
        if(empty($_SESSION['username']))
        {
            header("Location:/Admin/Login");
            exit();
        }
    }
}