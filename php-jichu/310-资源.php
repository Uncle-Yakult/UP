<?php
$link=mysql_connect('localhost','root','root');
var_dump($link);    //resource(3) of type (mysql link)
echo '<br>';
$fp=fopen('./38-extract.php','r');
var_dump($fp);      //resource(5) of type (stream)

echo '<hr>';

function fun(){

}
var_dump(fun());    //NULL