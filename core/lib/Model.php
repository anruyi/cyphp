<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-20
 * Time: 14:07
 */
namespace core\lib;

class Model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=cyphp';
        $username = 'cyphp';
        $passwd = '123456';
//        $options = '';
        try {
        parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e){
            p($e->getMessage());
        }
    }
}