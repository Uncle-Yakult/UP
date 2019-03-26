<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8">
        <title></title>
        <style type="text/css">
            td{
                border: #000 solid 1px;
                width:20px;
                height: 20px;
            }
            table{
                border-collapse: collapse;
                float: left;
            }
        </style>
    </head>
    <body>
    <div style="width: 500px;margin: auto">
    <?php
    $arr=array('0','3','6','9','C','F');//组成颜色的字符
    $n=count($arr);//数组的个数
    for ($r=0;$r<$n;$r++){
        echo '<table>';
        for ($b=0;$b<$n;$b++){
            echo '<tr>';
            for ($g=0;$g<$n;$g++){
                echo '<td style="background-color:#'.$arr[$r].$arr[$g].$arr[$b].'"></td>';
            }

            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
    </div>
    </body>
</html>
