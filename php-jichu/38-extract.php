<?php
$stu=array(
    'id'=>1,
    'name'=>'tom'
);
extract($stu);
echo $id,'<br>',$name;