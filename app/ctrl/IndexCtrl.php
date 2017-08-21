<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-19
 * Time: 18:12
 */

namespace app\ctrl;

use core\CyPHP;
use core\lib\Model;

class indexCtrl extends CyPHP
{
    public function index()
    {
        $model = new Model();

        p('This is a ctrl');
        /*模型层，连接数据库的那个层*/
        $sql = 'select * from cytable';
        $res = $model->query($sql);
        p($res->fetchAll());

        /*Mode end*/

        /*views page start*/
        $a = 'hello';
        $this->assign('a',$a);
        $this->display('index.html');
        /*views page end*/

    }
}