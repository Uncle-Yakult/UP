<?php
header('content-type:text/html;charset=utf-8');
class DB1 {}
class DB2 {}
class DB3 {}

function getInstance($db_name) {
    static $array = array();
    if (isset($array[$db_name]))
        $array[$db_name] = new $db_name;
    return $array[$db_name];
}
$db1 = getInstance('DB1');
$db1 = getInstance('DB2');
$db1 = getInstance('DB3');
var_dump($db1,$db2,$db3);
?>