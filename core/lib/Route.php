<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-18
 * Time: 16:13
 */
namespace core\lib;

/**
 * Class Route
 * @package core\lib
 * 将陌生的url转化为可识别的路径（这一步由.htaccess完成），
 * 并且提取其中的文件名和控制器，由其他控制器调用。
 */
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
        //根目录 cyphp，具体需要修改
        //www.xxx.com/index/index,不是根目录
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/cyphp/') {
            $pathArr =  explode('/',trim($_SERVER['REQUEST_URI'],'/'));
            unset($pathArr[0]);
            if (isset($pathArr[1])){
                $this->ctrl = $pathArr[1];
                unset($pathArr[1]);
            }
            if (isset($pathArr[2])){
                $this->action = $pathArr[2];
                unset($pathArr[2]);
            } else {
                $this->action = Conf::get('ACTION','route');
            }
        } else {   //www.xxx.com/,根目录
            $this->ctrl = Conf::get('CTRL','route');
            $this->action = Conf::get('ACTION','route');
        }

        $i = 3;
        if(isset($pathArr))
            $count = count($pathArr) + 2;
        else
            $count = 0;
        while ($i<$count){
            $_GET[$i] = $pathArr[$i+1];
            $i+=2;
        }
    }
}