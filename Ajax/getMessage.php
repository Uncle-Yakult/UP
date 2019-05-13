<?php
require './conn.php';
$maxid = $_GET['maxid'];
$rs = mysqli_query($link,"select * from message where id>$maxid order by id");
$info = array();
while ($rows = mysqli_fetch_assoc($rs)) {
    $info[] = $rows;
}
echo json_encode($info);