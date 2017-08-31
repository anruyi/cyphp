<?php
/**
 * Created by PhpStorm.
 * User: ChenYi
 * Date: 17-8-18
 * Time: 14:53
 */

namespace core;

use app\ctrl\indexCtrl;
use core\lib\Log;
use core\lib\Route;

/**
 * Class CyPHP
 * @package core
 * 基类
 */
class CyPHP
{
    /**
     * @var array
     * 我也不知道这是什么鬼
     */
    public $assign = array();

    public static $classMap = array();

    /**
     * 启动框架调用方法
     */
    static public function run()
    {
        /**
         * 启动日志
         */
        Log::init();

        /**
         * 获取Route()的文件和控制器名,选择要调药的控制器，这里默认调用indexCtrl
         */
        $route = new Route();
        $ctrlClass = $route->ctrl;
        $ctrlAction = $route->action;
        $ctrlPath = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        if (is_file($ctrlPath)){
            $indexCtrl = new indexCtrl();
            $indexCtrl->$ctrlAction();
            Log::log('ctrl:'.$ctrlClass.'    '.'action:'.$ctrlAction);
        }else {
            throw new \Exception('找不到控制器'.$ctrlPath);
        }

    }

    /**
     * 自动加载路由 cyphp/app/
     * @param $class
     * @return bool
     */
    static public function load($class)
    {

        if(isset($classMap[$class])){
            return true;
        }else{

            $path = CYPHP .'/' .$class . '.php';
            if (is_file($path)) {
                include $path;
                self::$classMap[$class] = $path;
            }else{
                false;
            }
        }
    }

    /**
     * @param $name
     * @param $value
     * 插入数据给页面
     */
    public function assign($name,$value)
    {
        $this->assign[$name] = $value;
    }

    /**
     * @param $file
     * 显示相应的view层页面
     */
    public function display($file)
    {
        $html = $file;
        $file = APP.'/views/'.$file;
        if (is_file($file)){
            /**
             * 使用TWIG模板引擎
             */
            require_once CYPHP.'/vendor/twig/twig/lib/Twig/Autoloader.php';
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => CYPHP.'/log/compilation_cache',
                'debug' => 'DEBUG'
            ));
            $template = $twig->loadTemplate($html);
            $template->display($this->assign?$this->assign:array());
        } else {
            p('is not a file',$file);
        }

    }
}