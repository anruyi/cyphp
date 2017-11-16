<?php
/**
 * Author: CYLeft
 * 启动框架方法
 */

namespace core;

use app\ctrl\indexCtrl;
use core\lib\Log;
use core\lib\Route;

/**
 * Class CyPHP
 * @package core
 * [功能:]
 * 一 运行框架
 * 二 启动路由
 * 三 自动加载
 * 四 导出前端数据
 * 五 display页面
 */
class CyPHP
{
    /**
     * @var array
     * assign数组，即显示在前端界面的数据
     */
    public $assign = array();

    /**
     * @var array
     * 自动加载类的变量，记录文件是否已经加载过
     */
    public static $classMap = array();

    /**
     * 运行框架调用方法
     */
    static public function run()
    {
        /**
         * 启动日志
         */
        Log::init();

        /**
         * 获取Route()的控制器名（自动追加Crtl.php）和方法
         */
        $route = new Route();

        $ctrlName = $route->ctrl;
        $ctrlAction = $route->action;
        $ctrlPath = APP.'/ctrl/'.$ctrlName.'Ctrl.php';

        if (is_file($ctrlPath)){

            //控制器:/app/ctrl/indexCtrl
            $ctrlClass = '\app\ctrl\\'.$ctrlName.'Ctrl';
            $indexCtrl = new $ctrlClass();

            //通过index控制器调用其内部方法
            $indexCtrl->$ctrlAction();

            //编写日志
            Log::log('ctrl:'.$ctrlName.'    '.'action:'.$ctrlAction);

        }else {
            throw new \Exception('找不到控制器'.$ctrlPath);
        }
    }

    /**
     * 自动加载路由 cyphp/app/，如果页面未加载，则自动加载文件
     * @param $class
     * @return bool
     */
    static public function load($class)
    {
        if (isset($classMap[$class])) {
            return true;
        } else {
            $path = CYPHP .'/' .$class . '.php';
            if (is_file($path)) {
                include $path;
                self::$classMap[$class] = $path;
            } else  {
                false;
            }
        }
    }

    /**
     * @param $name
     * @param $value
     * 传递数据到前端界面
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
        // index页面
        $html = $file;

        // 拼接app/views/index
        $file = APP.'/views/'.$file;

        if (is_file($file)){

            // 将页面通过TWIG模板引擎加载进页面
//            require_once CYPHP.'/vendor/twig/twig/lib/Twig/Autoloader.php';
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/views');

            //将.html转译成.php文件
            $twig = new \Twig_Environment($loader, array(
                // 我将此视为twig内置的log程序,这个是可以删除的.
                'cache' => CYPHP.'/log/compilation_cache',
                'debug' => 'DEBUG'
            ));
            // 装载.php文件
            $template = $twig->loadTemplate($html);
            $template->display($this->assign?$this->assign:array());

        } else {

            p('is not a file',$file);

        }

    }
}