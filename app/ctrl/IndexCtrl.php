<?php


namespace app\ctrl;

use app\model\IndexModel;
use core\CyPHP;

/**
 * Class indexCtrl
 * @package app\ctrl
 * 所有用户都可以操作的控制器
 */
class indexCtrl extends CyPHP
{
    /**
     * 默认主方法
     */
    public function index()
    {
        $model = new IndexModel();

        $data = $model->getPostCover();

        var_dump($data);
    }

    /**
     * 显示关于页面
     */
    public function about()
    {
        header("Access-Control-Allow-Origin:*");
    }

    /**
     * 显示post单页面
     */
    public function single()
    {
        $this->display('single.html');
    }


    public function login()
    {

    }

    public function register()
    {

    }

}