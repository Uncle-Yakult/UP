<?php
header('content-type:text/html;charset=utf-8');
/*
 * Phone继承了Goods类
 */
class Phone extends Goods {
    //重写父类的方法
    public function getName() {
        echo $this->name;
    }
}
?>
