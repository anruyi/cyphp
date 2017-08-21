<?php
/**
 * 入口文件
 * 1.定义常量CYPHP\CORE\APP
 * 2.加载函数库cyphp
 * 3.启动框架run()
 * Date: 17-8-18
 * Time: 11:15
 */
use core\CyPHP;

//当前框架所在的根目录
define('CYPHP',realpath('./'));
//核心文件core所处目录
define('CORE',CYPHP.'/core');
//项目文件：控制器、模型、、、
define('APP',CYPHP.'/app');
//调试
define('DEBUG',true);
define('MODEL','/app');

if(DEBUG){
    //display_errors 错误提示，init_set方法可以修改php配置
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

include CORE.'/common/function.php';
include CORE.'/CyPHP.php';

//不知道什么原因，core\不能删除
spl_autoload_register("core\CyPHP::load");

CyPHP::run();
