# CYPHP
## 目录

CYPHP框架目录结构
~~~
┬── app ┬── assets  //静态库
│       ├── ctrl    //C 控制器
│       ├── model   //M 数据模型
│       └── views   //V 视图
│            
│
├── core ┬── common //公共函数库
│        ├── config //配置文件
│        ├── lib    //
│        └── CyPHP.php
│
├── log  //日志存放处（本目录自动生成）
│
│
├── vendor ┬── catfan //medoo 开源错误提示
│          ├── composer
│          ├── filp  //whoop，开源错误提示
│          ├── psr   
│          ├── twig  //前端模板引擎
│          └── autoload.php
│
│
├── index.php  //入口文件
│
│
└── README.MD  //说明
~~~

基础MVC使用参照样例程序。

## 一、MVC基本使用说明

### 1.Model 
数据模型统一继承Model类，并且采用Medoo数据库引擎，使用方法详情google、BaiDu，

### 2.View 视图层
视图层采用twig模板引擎，使得前后端分离的更清晰，使用简明。

### 3.Ctrl
连接并引导模型层和控制层

### 4.路由
本框架路由简明，详情请参照下面的例子
* xxx.com/index/index/id  / 2  /etc
* 域名.com/控制器/方法  /参数名/参数值/etc

### 5.基本配置
配置文件在core/config目录下，请务必主要修改database文件

## 二、主要功能

### (一) 日志
日志系统

### (二) 待更新
暂未完善

### (三) 待更新

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
### 3.框架运行流程

> 系统默认调用入口文件index.php，该文件装载必要的类库和开源PHP插件，完成后，调用CyPHP.php文件，框架开始运行。
> CyPHP.php解析路由，并通过路由调用相关的控制器和方法

## (四) 本框架使用的开源插件

### 1. medoo数据库

### 2. twig前端模板

### 3. wangEditor富文本编辑器

### 4. markDown解析器 /还没加上

### 5. Whoops错误提示