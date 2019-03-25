<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        table{
            width: 780px;
            margin: auto;
            border-collapse: collapse;/*塌陷*/
        }tr{
            height: 30px;
                 }
        table,td{
            border: #000 solid 1px;
        }
    </style>
</head>
<body>
<table>
    <?php
    for ($i=1;$i<9;$i++){
        echo '<tr>';
        for ($j=1;$j<=$i;$j++){
            echo "<td>{$j}*{$i}=".($j*$i),'</td>';
        }
        echo '<br>';
    }
    ?>
</table>
</body>
</html>
