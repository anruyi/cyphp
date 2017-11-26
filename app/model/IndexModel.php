<?php
/**
 * Main Page Model
 * 主界面模型包涵：
 * 公共首、尾，文章封面
 */
namespace app\model;

use core\lib\Model;

/**
 * Class IndexModel
 * @package app\model
 * 默认数据库模型，所有用户都能触摸到的数据
 */
class IndexModel extends Model
{
    public $table = 'post';

    /**
     * 所有数据
     */
    public function all()
    {
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    /**
     * @return array|bool
     * 获取文章封面数据，getPostCover
     * id title author summary time/
     */
    public function getPostCover()
    {
        $data = [
            'id' => $this->select($this->table,'postID'),
            'title' => $this->select($this->table,'postTitle'),
            'author' => $this->select($this->table,'postAuthor'),
            'summary' => $this->select($this->table,'postSummary'),
            'created_at' => $this->select($this->table,'postCreateAt'),
            'updated_at' => $this->select($this->table,'postUpdateAt'),
        ];
        return $data;
    }

    /**
     * @return array
     * 获取文章所有内容，getPostAll
     * 数据库几乎所有数据
     */
    public function getPostAll()
    {
        $data = [
            'id' => $this->select($this->table,'postID'),
            'title' => $this->select($this->table,'postTitle'),
            'author' => $this->select($this->table,'postAuthor'),
            'created_at' => $this->select($this->table,'postCreateAt'),
            'updated_at' => $this->select($this->table,'postUpdateAt'),
        ];
        return $data;
    }

    /**
     * @return array
     * 获得一篇文章
     */
    public function getPostOne($id)
    {
        $data =
            $this->select(
                $this->table,
                [
                    "postTitle",
                    'postAuthor',
                    'postContent',
                    'postCreateAt',
                    'postUpdateAt',
                ],
                [
                    "postID[=]" => $id,
                ]
            );
        return $data;
    }


}