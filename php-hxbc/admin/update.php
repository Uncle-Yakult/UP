<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title></title>
    <link rel="stylesheet" type="text/css" href="../style/common.css"/>
</head>

<body>
<?php
require '../inc/conn.php';
$id = (int) $_GET['id'];
$sql = "select * from contents where id = $id";
$rs = mysql_query($sql);
if (mysql_num_rows($rs)==0)
    die('你是一个坏人');
?>
<form id="form1" name="form1" method="post" action="" onSubmit="return check()">
    <table width="500" border="1" cellspacing="1" cellpadding="1">
        <tr>
            <th colspan="2">修改笑话</th>
        </tr>
        <tr>
            <td>类别：</td>
            <td><select name="type" id="type">
                    <?php
                    $sql = 'select * from title';
                    $rs = mysql_query($sql);
                    while($rows = mysql_fetch_assoc($rs)):
                        ?>
                        <option value="<?php echo $rows['id']?>"><?php echo $rows['Title']?></option>
                    <?php
                    endwhile;
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>内容：</td>
            <td><textarea name="content" id="content" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>作者：</td>
            <td><input type="text" name="author" id="author"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="修改笑话" />
          <input type="button" name="button2" id="button2" value="返回" onclick="location.href='admin.php'" /></td>
        </tr>
    </table>
</form>
</body>
</html>