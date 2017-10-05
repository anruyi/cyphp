<?php

namespace app\model;

use core\lib\Model;

/**
 * Class GuestModel
 * @package app\model
 * 游客数据库模板
 */
class UserModel extends Model
{
    public $table = 'user';

    /**
     * 默认获取所有数据
     */
    public function all()
    {
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    /**
     * 默认插入数据
     */
    public function addOne()
    {

    }
}