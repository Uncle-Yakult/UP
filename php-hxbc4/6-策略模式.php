<?php
header('content-type:text/html;charset=utf-8');
interface IStrategy {
    function ontheway();
}
class Walk implements IStrategy {
    public function ontheway() {
        echo '走着去<br>';
    }
}
class Bick implements IStrategy {
    public function ontheway() {
        echo '骑自行车去<br>';
    }
}
class Bus implements IStrategy {
    public function ontheway() {
        echo '坐巴士去<br>';
    }
}
//策略模式，传递不同的参数，调用不同的策略
class Strategy {
    public function getway(IStrategy) {
        $obj->ontheway();
    }
}
$obj = new Strategy();
$obj ->getWay(new Walk);
$obj ->getWay(new Bick);
$obj ->getWay(new Bus);
?>