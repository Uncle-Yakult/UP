<?php
setcookie('name','tom',time()+3600);   //此cookie保存3600秒
echo $_COOKIE['name'];
?>