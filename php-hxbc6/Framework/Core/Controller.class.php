<?php
/*
 * 基础控制器类
 */
class Controller {
/*
 * 成功跳转的方法
 * @param $url string 跳转的地址
 * @param $msg string 显示信息，如果$msg为空，就直接跳转
 * @param $time int 页面停留时间
 */
    public function success($url,$msg = '',$time = 3) {
        $this -> jump($url,$msg,$time,true);
    }
    /*
     * 失败的跳转
     */
    public function error($url,$msg='',$time=3){
        $this -> jump($url,$msg,$time,false);
    }
    /*
     * 跳转的方法
     */
    private function jump($url,$msg = '',$time = 3,$falg=true) {
        if ($msg == '') {
            header("location:{$url}");
        }else{
            if ($flag)
                $path = '<img src="../../../Public/images/90.bmp">';
            else
                $path = '<img src="../../../Public/images/95.bmp">';
            echo <<<jump
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html" charset="utf-8">
    <meta http-equiv="refresh" content="{$time};URL = {$url}">
    <title>无标题文档</title>
    <script type="text/css">
        body {
            text-align: center;
            font-size: 20px;
            background-color: #F90;
            color: #F00;
            padding-top: 30px;
            font-family: '微软雅黑';
        }
    </script>
</head>

<body>
{$path}
{$msg}
</body>
</html>
jump;

        }
    }
}
?>