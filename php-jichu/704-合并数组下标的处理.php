<?php
header('content-type:text/html;charset=utf-8');
$array1=array('name'=>'李白','sex'=>'男',0=>'a',3=>'c');
$array2=array('name'=>'杜甫','add'=>'北京',0=>'a');
$array=array_merge($array,$array2);
print_r($array);
?>
