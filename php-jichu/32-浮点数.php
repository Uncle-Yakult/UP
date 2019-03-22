<?php
var_dump(0.9==(1-0.1)); //bool(true)
echo '<br>';
var_dump(0.1==(1-0.9)); //bool(false)
echo '<hr>';

echo bccomp(0.1,(1-0.9),5),'<br>';
echo bccomp(1.123,1.124,2),'<br>';
echo bccomp(1.123,1.124,3),'<br>';

echo '<hr>';

var_dump(PHP_INT_MAX);
echo '<br>';
var_dump(PHP_INT_MAX+1);
echo '<hr>';
echo 0.123456789012345;
?>