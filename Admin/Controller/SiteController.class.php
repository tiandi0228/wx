<?php
namespace Admin\Controller;
use Think\Controller;
class SiteController extends ControllerBack
{
    public function index()
    {
        $Site = M("Site");
        $list = $Site->where()->find();
        $this->assign('id',$list['id']);
        $this->assign('sitename',$list['sitename']);
        $this->assign('url',$list['url']);
        $this->assign('keywords',$list['keywords']);
        $this->assign('description',$list['description']);
        $this->assign('email',$list['email']);
        $this->assign('qq',$list['qq']);
        $this->assign('sinawb',$list['sinawb']);
        $this->assign('txwb',$list['txwb']);
        $this->assign('icp',$list['icp']);
        $this->assign('statcode',$list['statcode']);
        $this->display();
    }

    //更新
    public function update()
    {
        $Site = M("Site");
        $where['id'] = $_POST['id'];
        $data["sitename"] = $_POST['sitename'];
        $data["url"] = $_POST['url'];
        $data["keywords"] = $_POST['keywords'];
        $data["description"] = $_POST['description'];
        $data["email"] = $_POST['email'];
        $data["qq"] = $_POST['qq'];
        $data["sinawb"] = $_POST['sinawb'];
        $data["txwb"] = $_POST['txwb'];
        $data["icp"] = $_POST['icp'];
        $data["statcode"] = $_POST['statcode'];
        $Site->where($where)->save($data);
        header("Location:/Admin/Site");
    }
}