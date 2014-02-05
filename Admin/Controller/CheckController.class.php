<?php
namespace Admin\Controller;
use Think\Controller;
class CheckController extends Controller
{

//验证手机号码
public function username()
{
    $where['username'] =$_GET['username'];
    $User = M("Users");
    $data = $User->where($where)->find();
    if($_GET)
    {
        if($username !== $data['username'])
        {
            echo 'true';
        }else{
            echo 'false';
        }
        exit();
    }
}

//验证手机号码是否重复
public function mobile()
{
    $where['username'] =$_GET['mobile'];
    $User = M("Users");
    $data = $User->where($where)->find();
    if($_GET)
    {
        if($username == $data['username'])
        {
            echo 'true';
        }else{
            echo 'false';
        }
        exit();
    }
}

//验证密码
public function  pwd()
{
    $where['password'] =md5($_GET['password']);
    $User = M("Users");
    $data = $User->where($where)->find();
    if($_GET)
    {
        if($username !== $data['password'])
        {
            echo 'true';
        }else{
            echo 'false';
        }
        exit();
    }
}

}