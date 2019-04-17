<?php
$num = array(140,23,78,69,5,12,8);
for($i = 1,$n = count($num); $i < $n; $i++){      //比较次数
    for ($j=0; $j<$n-$i; $j++){
        if ($num[$j] > $num[$j+1]){
        $temp = $num[$j];
        $num[$j] = $num[$j+1];
        $num[$j+1] = $temp;
        }
    }
}
print_r($num);
?>