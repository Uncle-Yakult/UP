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
/*if ($pageno < 1)
    $pageno = 1;
if ($pageno > $pagecount)
    $pageno = $pagecount;*/
// 起始位置
$startno = ($pageno - 1) * $pagesize;
$sql = "select * from products limit $startno,$pagesize";
$rs = mysqli_query($link, $sql);
$info = array();
while($rows = mysqli_fetch_assoc($rs)) {
    $info[] = $rows;
}
$info[] = $pagecount;  //将总页码保存到数组中
echo json_encode($info);