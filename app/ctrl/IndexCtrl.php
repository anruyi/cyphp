<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-19
 * Time: 18:12
 */

namespace app\ctrl;

use app\model\MainModel;
use core\CyPHP;
use core\lib\Conf;
use core\lib\Model;
use Medoo\Medoo;

class indexCtrl extends CyPHP
{
    public function index()
    {

        $temp = Conf::get('CTRL','route');
        p($temp);
        p('This is a ctrl');
        
        /*模型层，连接数据库的那个层*/
        $model = new MainModel();
        $res = $model->lists();
        p($res);
        /*Mode end*/

        /*views page start*/
        $a = 'hello';
        $this->assign('a',$a);
        $this->display('index.html');
        /*views page end*/
    }

    public function test()
    {
        $a = 'test';
        $this->assign('a',$a);
        $this->display('test.html');
    }
}