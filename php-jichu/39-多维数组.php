<?php
header('content-type:text/html;charset=utf-8');
$stu=array(
    array('tom','berry','ketty'),
    array('李白','杜甫','白居易')
);
echo $stu[1][0],'<br>';     // 李白
echo $stu[0][2],'<hr>';     //ketty


$emp=array(
    'name'=>'李白',
    'sex'=>'男',
    'age'=>22,
    array('爬山','读书','游泳','喝酒')
);
print_r($emp[0]);       //Array ( [0] => 爬山 [1] => 读书 [2] => 游泳 [3] => 喝酒 )
    echo '<br>',$emp[0][0];     //爬山