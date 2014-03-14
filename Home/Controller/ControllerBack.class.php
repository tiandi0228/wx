<?php
namespace Home\Controller;
use Think\Controller;
class ControllerBack extends Controller
{
    public function _initialize()
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
    }
}