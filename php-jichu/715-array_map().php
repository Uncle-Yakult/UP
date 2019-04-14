<?php
header('content-type:text/html;charset=utf-8');
$PHP=array(88,99,77,66);    //PHP成绩
$MySQL=array(78,65,58,96);  //MySQL成绩
//成绩求总分
function fun($php,$mysql){
    return $php+$mysql;
}
print_r(array_map('fun',$PHP,$MySQL));  //Array ( [0] => 166 [1] => 164 [2] => 135 [3] => 162 )

echo '<hr>';
echo '<pre>';
print_r(array_map(null,$PHP,$MySQL));
?>