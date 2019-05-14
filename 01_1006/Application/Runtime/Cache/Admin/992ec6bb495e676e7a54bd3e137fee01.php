<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html" charset="UTF-8">
    <title>test10</title>
</head>
<body>
    个性签名：<?php echo ((isset($sign ) && ($sign !== ""))?($sign ): '这个家伙很懒，什么都没有留下...'); ?>
</body>
</html>