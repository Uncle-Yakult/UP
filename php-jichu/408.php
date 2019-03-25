<?php
header('content-type:text/html;charset=utf-8');
for ($i=1,$j=9;$i>$j,$i<=$j;$i++,$j--){
    echo "10可以分为{$i}和{$j}<br>";
}