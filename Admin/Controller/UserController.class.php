<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends ControllerBack
{
    //列表
    public function index()
    {
        $User = M("Users");
        //导入分页类
        $count = $User->where($user)->count();    //计算总数
        $p = new \Org\Util\Page($count, 20);
        $list = $User->limit($p->firstRow . ',' . $p->listRows)->order('uid asc')->select();
        $p->setConfig('header','位会员');
        $page = $p->show();
        $this->assign(array(
            'list' => $list,
            'page' => $page
        ));
        $this->display();
    }

    //详细页
    public function profile()
    {
        $User = M("Users");
        $user['uid']=$_SESSION["uid"];
        $where['uid'] = $_GET['uid'];
        if($_GET['uid'])
        {
            $list= $User->where($where)->find();
        }else{
            $list= $User->where($user)->find();
        }
        $this->assign('uid',$list['uid']);
        $this->assign('username',$list['username']);
        $this->assign('realname',$list['realname']);
        $this->assign('email',$list['email']);
        $this->assign('regip',$list['regip']);
        $this->assign('regtime',$list['regtime']);
        $this->assign('loginip',$list['loginip']);
        $this->assign('logintime',$list['logintime']);
        $this->assign('logincount',$list['logincount']);
        $this->assign('groupid',$list['groupid']);
        $this->display();
    }

    //更新
    public function update()
    {
        $User = M("Users");
        $where['uid'] = $_POST['uid'];
        $data["realname"] = $_POST['realname'];
        $data["email"] = $_POST['email'];
        $data["groupid"] = $_POST['groupid'];
        $User->where($where)->save($data);
        header("Location:/Admin/User/Profile");
    }

    //添加会员
    public function add()
    {
        $User = M("Users");
        if(!empty($_POST))
        {
            $data['username'] = $_POST['mobile'];
            $data['password'] = md5($_POST['pwd']);
            $data["regtime"] = time();
            $data['regip'] = get_client_ip();
            $data['groupid'] = $_POST['groupid'];
            $data['audit']=0;
            $User->add($data);
        }
        $this->display();
    }

    //修改密码
    public function pwd()
    {
        $User = M("Users");
        if(!empty($_POST))
        {
            $where['uid']=$_SESSION["uid"];
            $newpassword = md5($_POST['news_password']);
            $data['password'] = $newpassword;
            $User->where($where)->save($data);
        }
        $this->display();
    }

    //删除
    public function delall()
    {
        $User = M("Users");
        $uid = $_POST['uid'];
        $where['uid']=array('in',implode(',',$uid));
        $data['audit']=1;
        $User->where($where)->save($data);
        header("Location:/Admin/User");
    }
}