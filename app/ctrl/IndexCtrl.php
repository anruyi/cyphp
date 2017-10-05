<?php


namespace app\ctrl;

use app\model\IndexModel;
use app\model\UserModel;
use core\CyPHP;

/**
 * Class indexCtrl
 * @package app\ctrl
 * 所有用户都可以操作的控制器
 */
class indexCtrl extends CyPHP
{
    /**
     * 所有留言
     */
    public function index()
    {
        $model = new IndexModel();
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