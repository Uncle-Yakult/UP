<?php
interface I_DB {
    public function my_query($sql);
    public function fecthAll($sql);
    public function fecthRow($sql);
    public function fecthColumn($sql);
}
class MySQLDB implements I_DB {
    /**
     * 定义相关的属性
     */
    private $host;   // 主机地址
    private $port;   // 端口号
    private $user;   // 用户名
    private $pass;   // 密码
    private $charset;// 字符集
    private $dbname; //数据库名
    //运行时需要的属性
    private $link;   // 保存连接资源

    /**
     * 构造方法
     */
    public function __construct($arr) {
        // 初始化属性的值
        $this->init($arr);
        // 连接数据库
        $this->my_connect();
        // 选择默认字符集
        $this->my_charset();
        // 选择默认数据库
        // $this->my_dbname();
    }

    /**
     * 初始化属性的值
     */
    private function init($arr) {
        $this->host = isset($arr['host']) ? $arr['host'] : '127.0.0.1';
        $this->port = isset($arr['port']) ? $arr['port'] : '3306';
        $this->user = isset($arr['user']) ? $arr['user'] : 'root';
        $this->pass = isset($arr['pass']) ? $arr['pass'] : '';
        $this->charset = isset($arr['charset']) ? $arr['charset'] : 'UTF8';
        $this->dbname = isset($arr['dbname']) ? $arr['dbname'] : '';
    }

    /**
     * 连接数据库
     */
    private function my_connect() {
        // 如果连接成功，就将连接资源保存到$link属性里面
        if ($link = @mysqli_connect("$this->host:$this->port", $this->user, $this->pass, $this->dbname)) {
            $this->link = $link;
        }else {
            // 连接失败
            echo "数据库连接失败！<br />";
            echo "错误编号：", mysqli_errno(),"<br />";
            echo "错误信息：", mysqli_error(),'<br />';
            return false;
        }
    }

    /**
     * 错误调试方法
     */
    public function my_query($sql) {
        $result = mysqli_query($this->link,$sql);
        if (!$result) {
            //执行失败
            echo "SQL语句执行失败！<br />";
            echo "错误编号：", mysqli_errno(),"<br />";
            echo "错误信息：", mysqli_error(),'<br />';
            return false;
        }
        return $result;
    }

    /**
     * 选择默认的字符集
     */
    private function my_charset() {
        $sql = "set names $this->charset";
        $this->my_query($sql);
    }

    /**
     * 选择默认的数据库
     */
    /*public function my_dbname() {
        $sql = "use $this->dbname";
        $this->my_query($sql);
    }*/

    /**
     * 析构方法
     */
    public function __destruct(){
        // 释放额外的数据库连接资源
        mysqli_close($this->link);
    }

    /**
     * __sleep方法，序列化对象的时候自动调用
     */
    public function __sleep(){
        // 返回一个数组，数组内的元素为需要被序列化的属性名的集合
        return array('host','port','user','pass','charset','dbname');
    }

    /**
     * 返回多行多列的查询结果
     * @param string $sql 一条sql语句
     * @return mixed array|false
     */
    public function fetchAll($sql) {
        // 先执行sql语句
        if ($result = $this->my_query($sql)) {
            // 执行成功
            // 遍历资源结果集
            $rows = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            // 释放结果集资源
            mysqli_free_result($result);
            // 返回所有的数据
            return $rows;
        }else {
            return false;
        }
    }

    /**
     * 返回一行多列的查询结果
     * @param string $sql 一条sql语句
     * @return mixed array|false
     */
    public function fetchRow($sql) {
        // 先执行sql语句
        if ($result = $this->my_query($sql)) {
            // 执行成功
            $row = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            //返回这一条记录的数据
            return $row;
        }else {
            return false;
        }
    }

    /**
     * 返回单行单列的查询结果(单一值)
     * @param string $sql 一条sql语句
     * @return mixed string|false
     */
    public function fetchColumn($sql) {
        // 先执行sql语句
        if ($result = $this->my_query($sql)) {
            // 执行成功
            $row = mysqli_fetch_row($result);
            // 释放结果集资源
            mysqli_free_result($result);
            // 返回这个单一值
            return isset($row[0]) ? $row[0] : false;
        }else {
            // 执行失败
            return false;
        }
    }
}