<?php
    //公共文件
    //设定字符集
    header('content-type:text/html;charset=utf-8');

    /*
     * 跳转函数
     * @paraml string $url，跳转目标
     * @param2 string $ur2, 提示信息
     * @param3 int $time = 3，跳转等待时间
     */
    function redirect($url,$msg,$time){
        //跳转
        header("?Refresh:{$time};url={$url}");
        //提示
        echo $msg;
        //终止脚本执行
        exit;
    }