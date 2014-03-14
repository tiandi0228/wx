<?php
namespace Admin\Controller;
use Think\Controller;
class ProController extends ControllerBack
{
    //列表
    public function index()
    {
        $user['bid']=$_SESSION["uid"];
        $Pro = M("Pro");
        //导入分页类
        $count = $Pro->where($user)->count();    //计算总数
        $p = new \Org\Util\Page($count, 20);
        $list = $Pro->where($user)->limit($p->firstRow . ',' . $p->listRows)->order('pid asc')->select();
        $p->setConfig('header','个商品');
        $page = $p->show();
        foreach($list as $key=>$val){  //随机取出每条记录的一张图片
            $arr = explode('|',$val['img']);
            $c = count($arr)-2;
            $list[$key]['img'] = $arr[rand(0,$c)];
        }
        $this->assign(array(
            'list' => $list,
            'page' => $page
        ));
        $this->display();
    }

    //添加
    public function add()
    {
        $this->display();
    }

    //添加数据
    public function insert()
    {
        $Pro = M("Pro");
        if ($Pro->create()) 
        {
            $data['proname'] = $_POST['proname'];
            $data['price'] = $_POST['price'];
            $data['pricing'] = $_POST['pricing'];
            $data['contents'] = $_POST['contents'];
            $im=$_POST['file'];
            for($i=0;$i<count($im);$i++){
                $bimgurl = $im[$i];
                $data['img'].=$bimgurl."|";
            }
            $data["time"] = time();
            $data['bid'] = $_SESSION['uid'];
            $data['catid']=$_POST['catid'];
            $data['audit']=1;
            $Pro->add($data);
            header("Location:/Admin/Pro");
        }
    }

    //上传图片
    public function upload()
    {
        if (!empty($_FILES))
        {
            import("@.ORG.Image");
            $upload = new \Org\Util\UploadFile();
            $upload->maxSize            = 1024000;
            $upload->allowExts          = array('jpg', 'gif', 'png', 'jpeg');
            $upload->savePath           = './upload/images/'.$_SESSION["username"].'/';
            $upload->thumb              = false;
            $upload->saveRule           = 'uniqid';
            $upload->autoSub            = true;
            $upload->uploadReplace     =  true;
            $upload->subType            = 'date';
            $upload->dateFormat         = 'Y/m/d/';
            $upload->thumb = true;
            if (!$upload->upload())
            {
                // 上传错误提示错误信息
                $error['message'] = $upload->getErrorMsg();
                $error['status'] = 0;
                //return $error;
                echo json_encode($error);
                //exit;
            } else {
                // 上传成功 获取上传文件信息
                $info = $upload->getUploadFileInfo();
                $info[0]['file'] = trim($info[0]['savepath'].$info[0]['savename'],'.');
                //return $info;
                echo json_encode($info[0]);
                //exit;
            }
        }
    }

    //详细页
    public function show()
    {
        $Pro = M("Pro");
        $where['pid'] = $_GET['pid'];
        $arrlist = $Pro->where($where)->find();
        $this->assign('pid',$arrlist['pid']);
        $this->assign('proname',$arrlist['proname']);
        $this->assign('price',$arrlist['price']);
        $this->assign('pricing',$arrlist['pricing']);
        $this->assign('contents',$arrlist['contents']);
        $this->assign('file',explode("|",$arrlist['img']));
        $this->assign('catid',$arrlist['catid']);
        $this->assign('list_img',$arrlist);
        $this->display();
    }

    //更新
    public function update()
    {
        $Pro = M("Pro");
        $where["pid"] = $_POST["pid"];
        $data["proname"] = $_POST['proname'];
        $data["price"] = $_POST['price'];
        $data["pricing"] = $_POST['pricing'];
        $data["contents"] = $_POST['contents'];
        $im=$_POST['file'];
        $data['img'] = null;
        for($i=0;$i<count($im);$i++){
            $bimgurl = $im[$i];
            $data['img'].=$bimgurl."|";
        }
        $data["time"] = time();
        $data['catid'] = $_POST['catid'];
        $Pro->where($where)->save($data);
        header("Location:/Admin/Pro");
    }

    //删除
    public function del(){
        $Pro = M("Pro");
        $where['pid'] = $_GET['pid'];
        $Pro->where($where)->delete();
        header("Location:/Admin/Pro");
    }

    //批量删除
    public function delall()
    {
        $Pro = M("Pro");
        $pid = $_POST['pid'];
        $where['pid']=array('in',implode(',',$pid));
        $Pro->where($where)->delete();
        header("Location:/Admin/Pro");
    }
}