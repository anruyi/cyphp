# CYPHP
My first php framework named cyphp

CYPHP框架目录结构
~~~
╔══ app ╦══ assets  //静态库
║       ╠══ ctrl    //C 控制器
║       ╠══ model   //M 数据模型
║       ╚══ views   //V 视图
║            
║
╠══ core ╦══ common //公共函数库
║        ╠══ config //配置文件
║        ╠══ lib    //
║        ╚══ CyPHP.php
║
╠══ log  //日志存放处（本目录自动生成）
║
║
╠══ vendor ╦══ catfan 
║          ╠══ composer
║          ╠══ filp  //whoop数据库引擎
║          ╠══ psr   
║          ╠══ twig  //前端模板引擎
║          ╚══ autoload.php
║
║
╠══ index.php  //入口文件
║
║
╚══ README.MD  //说明
~~~

基础MVC使用参照样例程序。

## 一、MVC基本使用说明

### 1.Model 
数据模型统一继承Model类，并且采用Medoo数据库引擎，使用方法详情google、BaiDu，

### 2.View 视图层
视图层采用twig模板引擎，使得前后端分离的更清晰，使用简明。

### 3.Ctrl
没啥好说的

### 4.路由
本框架路由简明，详情请参照下面的例子
* xxx.com/index/index/id/2/etc
<br />
* 域名 / 控制器 / 方法 / 参数名 / 参数值 /etc

### 5.基本配置
配置文件在core/config目录下，请务必主要修改database文件

## 二、主要功能

### 功能一
日志系统

### 功能二
暂未完善


## 三、注意事项

### 1.编码
请使用无BOM的UTF-8编码进行作业。

### 2.命名规范
* 不严格的遵守PHP代码规范
1. 控制器、模型、视图:大驼峰
    > xxxCtrl
    > xxxView
    > xxxModel
2. 类名：大驼峰
    > 没有例子
3. 方法名：小驼峰
    > insertOne