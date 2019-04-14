<?php
header('content-type:text/html;charset=utf-8');
$stu=array(10,-20,23,-48,13,-7);
$new_array=array_map('abs',$array);
print_r($new_array);

echo '<hr>';

$stu=array('李白','杜甫','白居易');
//写法一：
function fun($name){
    return '你好：'.$name;
}
$new_stu=array_map('fun',$stu);
print_r($new_stu);//Array ( [0] => 你好：李白 [1] => 你好：杜甫 [2] => 你好：白居易 )
echo '<hr>';
//写法二：
$new_stu=array_map(function ($name){
    return "你好：{$name}";
},$stu);
print_r($new_stu);//Array ( [0] => 你好：李白 [1] => 你好：杜甫 [2] => 你好：白居易 )
?>
