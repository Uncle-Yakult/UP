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
$pagesize = 10;     //一页放10条记录
//第一步：获取总记录数
$sql = "select count(*) from contents where title = $titleid";
$rs = mysql_query($sql);
$rows = mysql_fetch_row($rs);
$recordcount = $rows[0];    //总记录数
//第二步：求出总页数
$pagecount = ceil($recordcount / $pagesize);
//第四步：获取当前页
$pageno = isset($_GET['pageno'])?$_GET['pageno']:1;
if ($pageno < 1)
    $pageno = 1;
if ($pageno > $pagecount)
    $pageno = $pagecount;
//第五步：求每个页面的起始位置
$startno = ($pageno-1) * $pagesize;
//第六步：获取当前页面的内容
$sql = "select * from contents where title = $titleid order by desc limit $startno,$pagesize";
$rs = mysql_query($sql);
?>
<table>
    <tr>
        <th>编号</th>  <th>内容</th>  <th>作者</th>
    </tr>
    <?php while ($rows = mysql_fetch_assoc ($rs) ): ?>
        <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['Contents'] ?></td>
            <td><?php echo $rows['Author'] ?></td>
        </tr>
    <?php endwhile ?>
</table>

<table>
    <td>
        <?php
        //第三部：循环页码
        for ($i=1;$pageno<=$pagecount;$i++):
        ?>
            <a href="?pageno=<?php echo $i ?>&titleid=<?php echo $titleid?>"><?php echo $i?></a>
        <?php
        endfor;
        ?>
    </td>
    <td>
        <?php if ($pageno == 1): ?>
        【首页】
        【上一页】
        <?php else: ?>
        【<a href="?pageno=1&titleid=<?php echo $titleid?>">首页</a>】
        【<a href="?pageno=<?php echo $pageno-1?>&titleid=<?php echo $titleid?>">上一页</a>】
        <?php endif ?>

        <?php if ($pageno == $pagecount): ?>
        【下一页】
        【末页】
        <?php  else:?>
        【<a href="?pageno=<?php echo $pageno+1?>&titleid=<?php echo $titleid?>">下一页</a>】
        【<a href="?pageno=<?php echo $pagecount?>&titleid=<?php echo $titleid?>">末页</a>】
        <?php endif;?>
    </td>
</table>
</body>
</html>