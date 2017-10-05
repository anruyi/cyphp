<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-24
 * Time: 11:30
 */
namespace app\model;

use core\lib\Model;

class AdminModel extends Model
{
    /**
     * @var string
     * 要查询的表名
     */
    public $table = 'admin';

    public function lists()
    {
        $res = $this->select($this->table,'*');
        return $res;
    }

    public function getOne($id)
    {
        $ret = $this->get($this->table,'*',array(
            'id' => $id,
        ));
        return $ret;
    }
}