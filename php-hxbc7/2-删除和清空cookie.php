<?php
setcookie('name','tom');
setcookie('name',false);    //删除cookie的name的值
setcookie('sex','');        //删除cookie的sex的值
setcookie('add','');        //清空cookie的add的值
echo $_COOKIE['name'];
?>