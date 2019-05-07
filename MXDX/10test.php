<?php

header("Content-type:text/html;Charset=UTF-8");
class Test {
    /**
     * 静态方法
     */
    public static function f1() {
        echo "静态方法！<br />";
    }

    /**
     * 非静态方法
     */
    public function f2() {
        echo "非静态方法！<br />";
    }
}

$obj = new Test;
// 分别使用类调用两个方法
Test::f1();
@Test::f2();

echo '<hr />';
// 分别使用对象调用两个方法
$obj->f1();
$obj->f2();
