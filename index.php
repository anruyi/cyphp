<?php
/**
 * 入口文件，index.php
 * 框架启动是率先执行的文件。
 */
use core\CyPHP;

//当前框架所在的根目录cyphp/
define('CYPHP',realpath('./'));
//核心文件core所处目录:cyphp/core
define('CORE',CYPHP.'/core');
//软件文件:cyphp/app
define('APP',CYPHP.'/app');
//调试开关
define('DEBUG',true);
//模型层
define('MODEL','/app/model');

/**
 * composer方法
 * vendor内部自动加载类
 */
include "vendor/autoload.php";

if(DEBUG){
    /**
     * 开源错误提示工具Whoops
     */
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错!';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    //display_errors 错误提示，init_set方法可以修改php配置
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

include CORE.'/common/function.php';
include CORE.'/CyPHP.php';

//设置自动加载,传递过去的参数是当前缺乏的文件地址
spl_autoload_register("core\CyPHP::load");


/**
 * 启动框架
 */
CyPHP::run();
