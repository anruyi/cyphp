<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 * Date: 17-8-18
 * Time: 11:15
 */

//当前框架所在的根目录
define('CYPHP',realpath('./'));
//核心文件core所处目录
define('CORE',CYPHP.'/core');
//项目文件：控制器、模型、、、
define('APP',CYPHP.'/app');
//调试
define('DEBUG',true);

if(DEBUG){
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}