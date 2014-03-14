<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends ControllerBack
{
    public function index()
    {
        $Message = M("Message");
        if ($Message->autoCheckToken($_POST))
        {
            $data['username'] = $_POST['username'];
            $data['companyname'] = $_POST['companyname'];
            $data['tel'] = $_POST['tel'];
            $data['email'] = $_POST['email'];
            $data['content'] = $_POST['content'];
            $data['bid']=1;
            $data["time"] = time();
            $data['ip'] = get_client_ip();
            $data['audit']=1;
            $Message->add($data);
        }
        $this->display();
    }
}