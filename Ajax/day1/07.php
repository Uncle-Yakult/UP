<?php
$link = mysqli_connect('localhost','root','root');
mysqli_select_db($link,'php4');
mysqli_query($link,'set names UTF8');
// 总记录数
$rs = mysqli_query($link,'select count(*) from products');
$rows = mysqli_fetch_row($rs);
$recordcount = $rows[0];
// 页面大小
$pagesize = 10;
// 总页数
$pagecount = ceil($recordcount/$pagesize);
// 获得当前页
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
if ($pageno < 1)
    $pageno = 1;
if ($pageno > $pagecount)
    $pageno = $pagecount;
// 起始位置
$startno = ($pageno - 1) * $pagesize;
$sql = "select * from products limit $startno,$pagesize";
$rs = mysqli_query($link,$sql);
?>
<meta charset = "UTF-8">
<table>
    <tr>
        <th>编号</th>
        <th>商品名称</th>
        <th>商品规格</th>
        <th>商品价格</th>
        <th>库存量</th>
    </tr>
    <?php while ($rows = mysqli_fetch_assoc($rs)): ?>
    <tr>
        <th><?php echo $rows['proID'] ?></th>
        <th><?php echo $rows['proname'] ?></th>
        <th><?php echo $rows['proguige'] ?></th>
        <th><?php echo $rows['proprice'] ?></th>
        <th><?php echo $rows['proamount'] ?></th>
    </tr>
    <?php endwhile; ?>
    <tr>
        <td colspan="5">
            <?php
                for ($i=1; $i<=$pagecount; $i++){
                    echo "<a href='javascript:void(0)' onclick='showList($i)'>{$i}</a>&nbsp;";
                }
            ?>
        </td>
    </tr>
</table>