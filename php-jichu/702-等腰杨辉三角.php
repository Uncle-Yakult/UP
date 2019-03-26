<style type="text/css">
    span{
        width: 45px;
        height: 20px;
        display: inline-block;
    }
    div{
        text-align: center;
         }
</style>
<div id="" class="">
<?php
//打印杨辉三角
function yanghui($lines=10){
    for ($rows=1;$rows<=$lines;$rows++){
        for ($cols=1;$cols<=$rows;$cols++){
            if ($cols==1 || $cols==$rows)
                $num[$rows][$cols]=1;
            else{
                $num[$rows][$cols]=$num[$rows-1][$cols]+$num[$rows-1][$cols-1];
            }
            echo '<span>'.$num[$rows][$cols].'</span>';
        }
        echo '<br>';
    }
}
yanghui();
?>
</div>
