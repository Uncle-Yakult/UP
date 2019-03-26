<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8">
        <title></title>
        <style type="text/css">
            span{
                width: 5px;
                margin: 0px 8px;
                display: inline-block;
            }div{
                text-align: center;
                         }
        </style>
    </head>
    <body>
    <div>
    <?php
    $total=9;   //总行数
    for($i=1;$i<=$total;$i++){
        $row=$i;    //$row表示变化后的行的编号
        if ($i>$total/2)
            $row=$total-$i+1;
        $n=(2*$row-1);  //星星的个数
        for ($j=1;$j<=$n;$j++){
            echo '<span>*</span>';
        }
        echo '<br>';
    }
    ?>
        <hr />
        <div>
            <?php
            for ($i=1;$i<=10;$i++){
                if($i==1 || $i==2 || $i==10){
                    for ($j=1;$j<=10;$j++){
                        echo '<span>*</span>';
                    }
                }else{
                    for ($j=1;$j<=10;$j++){
                        if ($j==1 || $j==2 || $j==9 || $j==10)
                            echo '<span>*</span>';
                        else
                            echo '<span>*</span>';
                    }
                }echo '<br>';
            }
            ?>
        </div>
    </div>
    </body>
</html>
