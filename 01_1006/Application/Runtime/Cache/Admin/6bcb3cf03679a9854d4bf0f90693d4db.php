<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html" charset="UTF-8">
    <title>test10</title>
</head>
<body>
    $Think.server.path : <?php echo ($_SERVER['PATH']); ?><br>
    $Think.get.id : <?php echo ($_GET['id']); ?><br>
    $Think.request.pid : <?php echo ($_REQUEST['pid']); ?><br>
    $Think.cookie.PHPSESSID : <?php echo (cookie('PHPSESSID')); ?><br>
    $Think.config.DEFAULT_MODULE :<?php echo (C("DEFAULT_MODULE")); ?>
</body>
</html>