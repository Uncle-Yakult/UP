<?php
$a='';
$b=null;        //bool(true)
var_dump(isset($a),isset($b));      //bool(false)
echo '<hr>';

$num1='';
$num2=0;
$num3=0.0;
$num4=array();
$num5=null;
var_dump(empty($num1),empty($num2),empty($num3),empty($num4),empty($num5));