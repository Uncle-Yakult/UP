<?php
    $num=0;
    switch ($num%3){
        case 0:
            echo '十全十美';
            break;
        case 1:
            echo '一帆风顺';
            break;
        case 2:
            echo '双喜临门';
            break;
        default:
            echo '输入有误';
    }
?>