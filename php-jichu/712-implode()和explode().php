<?php
header('content-type:text/html;charset=utf-8');
$stu=array('李白','杜甫','白居易','辛弃疾');
$stu=implode(',',$stu);     //别名：join()
echo $str,'<hr>';       //李白，杜甫，白居易，辛弃疾
$array=explode(',',$str);
print_r($array);        //Array([0]=>李白,[1]=>杜甫,[2]=>白居易,[3]=>辛弃疾)
?>
