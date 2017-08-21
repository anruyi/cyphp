<?php
/**
 * Created by PhpStorm.
 * User: ChenYi
 * Date: 17-8-18
 * Time: 14:53
 */

namespace core;

use app\ctrl\indexCtrl;
use core\lib\Route;


/**
 * Class CyPHP
 * @package core
 */
class CyPHP
{
    public $assign = array();

    public static $classMap = array();
    /**
     * 启动框架调用方法
     */
    static public function run()
    {
        $route = new Route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
            p($ctrlfile,'ctrlfile');
        if (is_file($ctrlfile)){
            $indexCtrl = new indexCtrl();
            $indexCtrl->$action();
        }else {
            throw new \Exception('找不到控制器'.$ctrlfile);
        }

    }

    /**
     * 自动加载路由 cyphp/app/
     * @param $class
     * @return bool
     */
    static public function load($class)
    {
        if(isset($classMap['$class'])){
            return true;
        }else{
            $file = CYPHP .'/' .$class . '.php';
            if (is_file($file)) {
                include $file;
                p($file,'自动装载路径：');
                self::$classMap[$class] = $file;
            }else{
                false;
            }
        }
    }

    public function assign($name,$value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file = APP.'/views/'.$file;
        if (is_file($file)){
            extract($this->assign);
            include $file;
        } else {
            p('is not a file',$file);
        }

    }
}