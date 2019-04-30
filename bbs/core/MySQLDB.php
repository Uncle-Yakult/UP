<?php

/**
 * 数据库连接文件
 */

/**
 * 数据库连接函数
 */
function my_connect($arr) {
	$host = isset($arr['host']) ? $arr['host'] : 'localhost';
	$port = isset($arr['port']) ? $arr['port'] : '3306';
	$user = isset($arr['user']) ? $arr['user'] : 'root';
	$pass = isset($arr['pass']) ? $arr['pass'] : 'root';
	$dbname = isset($arr['dbname']) ? $arr['dbname'] : 'bbs';
	$link = mysqli_connect("$host:$port", $user, $pass,$dbname);
	if(!$link) {
		echo "数据库连接失败！<br />";
		echo "错误编号：", mysqli_errno(), "<br />";
		echo "错误信息：", mysqli_error(), '<br />';
		die;
	}
}

/**
 * 封装错误调试函数
 * @param string $sql 一条sql语句
 * @return mixed(true|resource) sql语句的执行结果
 */ 
function my_query ($sql) {
    $link = mysqli_connect("localhost:3306","root","root","bbs");
	// 先执行sql语句
	$result = mysqli_query($link,$sql);
	// 再判断执行的结果
	if(!$result) {
		// sql语句执行失败
		// 给出相关的提示信息
		echo "SQL语句执行失败！<br />";
		echo "错误编号：", mysqli_errno(), "<br />";
		echo "错误信息：", mysqli_error(), '<br />';
		die;	
	}
	// 返回执行结果
	return $result;
}

/**
 * 选择默认的字符集
 */
function my_charset($arr) {
	$charset = isset($arr['charset']) ? $arr['charset'] : 'utf8';
	$sql = "set names $charset";
	my_query($sql);
}
 /**
 * 选择默认的数据库
 */
function my_dbname($arr) {
	$dbname = isset($arr['dbname']) ? $arr['dbname'] : 'bbs';
	$sql = "use $dbname";
	my_query($sql);
}

// 加载配置文件
$config = include DIR_CONFIG . 'config.php';
$arr = $config['db'];

// 数据库连接三步曲
// 连接数据库
my_connect($arr);
// 选择默认字符集
my_charset($arr);