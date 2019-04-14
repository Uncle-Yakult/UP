<?php
header('content-type:text/html;charset=utf-8');
$stu=array('name'=>'李白','sex'=>'男','age'=>20,'add'=>NULL);
var_dump(array_key_exists('name',$stu),isset($stu['name']));    //bool(true)    bool(true)
echo '<hr>';
var_dump(array_key_exists('add',$stu),isset($stu['add']));      //bool(true)    bool(false)
?>
