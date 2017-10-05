<?php


namespace app\ctrl;

use app\model\UserModel;
use core\CyPHP;

class UserCtrl extends CyPHP
{
    /**
     * 所有留言
     */
    public function index()
    {
        $model = new UserModel();
        $data = $model->all();
        $this->assign('data',$data);
        $this->assign('CYPHP',CYPHP);
        $this->display('index.html');
    }

    /**
     * 添加留言
     */
    public function layout()
    {

        $this->display('layout.html');
    }

    /**
     * 关于
     */
    public function about()
    {

        $this->display('about.html');
    }

    public function single()
    {
        $this->display('single.html');
    }

    /**
     * 保存留言
     */
    public function save()
    {

    }
}