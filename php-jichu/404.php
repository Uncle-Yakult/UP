<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div id="shi">
    锄禾日当午，<br>
    汗滴禾下土。<br>
    谁知盘中餐，<br>
    粒粒皆辛苦。<br>
</div>
<form method="post" action="">
    <select name="color">
        <option value="">---请选择颜色---</option>
        <option value="1">红色</option>
        <option value="2">绿色</option>
        <option value="3">蓝色</option>
    </select>
    <input type="submit" name="button" value="确定">
</form>
<?php
if (isset($_POST['button'])){
    $color=$_POST['color'];
    switch ($color){
        case 1:
            $color='#FF0000';
            break;
        case 2:
            $color='#009900';
            break;
        case 3:
            $color='#0000FF';
            break;
        default:
            $color='#000000';
    }
    ?>
    <script type="text/javascript">
        shi.style.color='<?php echo $color?>';
        </secript>
        <?php
    }
?>
</body>
</html>
