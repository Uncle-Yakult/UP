<?php
/*
 * 基础模型类，用来封装所有模型的公共属性和方法
 */
class Model {
    protected $db;      //用来保存MySQLDB的单例
    /*
     * 构造函数初始化连接数据库
     */
    public function __construct()
    {
        $this->initDB();
    }
    //获取MySQLDBm类的实例
    private function initDB() {
        $config=array(
            'host'	=>	'127.0.0.1',
            'user'	=>	'root',
            'pwd'	=>	'aa',
            'dbname'=>	'php4'
        );
        $this -> db=MySQLDB::getInstance($config);
    }
}
?>