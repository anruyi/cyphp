<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-18
 * Time: 16:13
 */
namespace core\lib;
class Route
{
    /**
     * @var $ctrl 控制器
     * @var $action 方法
     */
    public $ctrl;
    public $action;

    /**
     * Route constructor.
     * 初始化方法
     */
    public function __construct()
    {
        /**
         * 路由器
         */
        //根目录 cyphp，具体需要修改
        //www.xxx.com/index/index,不是根目录
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/cyphp/') {
            $patharr =  explode('/',trim($_SERVER['REQUEST_URI'],'/'));
            unset($patharr[0]);
            if (isset($patharr[1])){
                $this->ctrl = $patharr[1];
                unset($patharr[1]);
            }
            if (isset($patharr[2])){
                $this->action = $patharr[2];
                unset($patharr[2]);
            } else {
                $this->action = 'index';
            }
        } else {   //www.xxx.com/,根目录
            $this->ctrl = 'index';
            $this->action = 'index';
        }

        $i = 3;
        if(isset($patharr))
            $count = count($patharr) + 2;
        else
            $count = 0;
        while ($i<$count){
            $_GET[$i] = $patharr[$i+1];
            $i+=2;
        }
    }
}