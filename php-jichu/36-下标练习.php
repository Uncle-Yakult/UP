<?php
$array=array(1=>'a','b','c','d');   //Array ( [1] => a [2] => b [3] => c [4] => d )
print_r($array); echo '<hr>';

$array=array('a',2=>'b','c',5=>'d');    //Array ( [0] => a [2] => b [3] => c [5] => d )
print_r($array);echo '<hr>';

$array=array('a','name'=>'b','c','sex'=>'d');   //Array ( [0] => a [name] => b [1] => c [sex] => d )
print_r($array);echo '<hr>';

$array=array(1=>'a',1=>'b',1=>'c','d');     //Array ( [1] => c [2] => d )
print_r($array);echo '<hr>';