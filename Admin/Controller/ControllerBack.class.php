<?php
namespace Admin\Controller;
use Think\Controller;
class ControllerBack extends Controller
{
    public function _initialize()
    {
        $Message = M("Message");
        $user['bid']=$_SESSION["uid"];
        $user['audit']=1;
        $count = $Message->where($user)->count();
        $this->assign('count',$count);
        //检测
        if(empty($_SESSION['username']))
        {
            header("Location:/Admin/Login");
            exit();
        }
    }
}