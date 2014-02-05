<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }

    //登陆检测
    public function check()
    {
        $User = M("Users");
        $where = array();
        $where['username'] = $_POST['username'];
        $list= $User->where($where)->find();
        // 缓存访问权限
        $_SESSION["uid"] = $list["uid"];
        $_SESSION["username"] = $list["username"];
        $_SESSION["realname"] = $list["realname"];
        $_SESSION["groupid"] = $list["groupid"];
        //保存登陆信息
        $data = array();
        $data['username'] = $list['username'];
        $data['logincount'] = array('exp','logincount+1');
        $data['loginip'] = get_client_ip();
        $data['logintime']  = time();
        $User->where($where)->save($data);
        header("Location:/Admin/Index");
        exit();
    }

    // 登出
    public function logout()
    {
        $_SESSION = array();
        session_destroy();
        header("Location:/Admin/Login");
        exit();
    }
}