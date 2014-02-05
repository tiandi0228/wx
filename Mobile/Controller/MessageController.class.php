<?php
namespace Mobile\Controller;
use Think\Controller;
class MessageController extends Controller
{
    public function index()
    {
        $id = $_GET['bid'];
        $_SESSION['bid']=$id;
        $Pro = M("Pro");
        $rs = $Pro->field('pro.bid,pro.catid,b.name,b.webname,b.tel')->join('INNER join business b on pro.bid='.$id)->find();
        $this->assign('bid',$rs['bid']);
        $this->assign('catid',$rs['catid']);
        $this->assign('webname',$rs['webname']);
        $this->assign('name',$rs['name']);
        $this->assign('tel',$rs['tel']);
        $this->display();
    }

    public function insert()
    {
        $Message = M("Message");
        if ($Message->create())
        {
            $data['username'] = $_POST['username'];
            $data['tel'] = $_POST['tel'];
            $data['qq'] = $_POST['qq'];
            $data['content'] = $_POST['content'];
            $data['bid']=$_POST['bid'];
            $data["time"] = time();
            $data['ip'] = get_client_ip();
            $data['bid'] = $_SESSION['bid'];
            $data['audit']=1;
            $Message->add($data);
            header('Location:/Mobile/message.html?bid='.$_SESSION['bid']);
        }
    }
}