<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title></title>
        <link rel="stylesheet" type="text/css" href="style/common.css"/>
    </head>

    <body>
    <?php require 'inc/head.php' ?>
    <!-- 获取笑话 -->
    <?php
        $titleid = isset($_GET['titleid'])?$_GET['titleid']:1;      // 获取笑话类别编码
        $sql = "select * from contents where title = $titleid order by id desc";
        $rs = mysql_query($sql)
    ?>
    <table>
        <tr>
            <th>编号</th>
            <th>内容</th>
            <th>作者</th>
        </tr>
        <?php while ($rows = mysql_fetch_assoc ($rs) ): ?>
        <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['Contents'] ?></td>
            <td><?php echo $rows['Author'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>
    </body>
</html>