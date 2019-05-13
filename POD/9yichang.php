<?php

header("Content-type:text/html;Charset=UTF-8");
class Goods {
    public function getPrice() {
        $price = $_GET['p'];
        if ($price < 0) {
            // 实例化一个异常对象
            $e = new Exception($messager = '价格不能为负值！');
            throw $e; // 抛出异常对象
        }else {
            echo $price;
        }
    }
}
try{    //对代码进行监听
    $book = new Goods;
    $book->getPrice();
}catch (Exception $e) { // 捕获异常
    echo $e->getMessage();
}