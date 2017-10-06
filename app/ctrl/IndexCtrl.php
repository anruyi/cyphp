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

        $data = $model->all();

        /**
         * [导入数据到前端]:
         * 1.主页面所有post封面数据
         */
        $this->assign('data',$data);

        /**
         * [display view]:主页面index.html
         */
        $this->display('index.html');
    }

    /**
     * 显示关于页面
     */
    public function about()
    {

        $this->display('about.html');
    }

    /**
     * 显示post单页面
     */
    public function single()
    {
        $this->display('single.html');
    }

}