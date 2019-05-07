<?php

header("Content-type:text/html;Charset=UTF-8");
// 定义一个Goods类
class Goods {
    // 所有商品共有的属性
    public $goods_id;
    public $goods_name = "火影忍者";
    public $goods_price;
    // 构造方法
    public function __construct($g_name) {
        // 给商品的名字初始化
        $this->goods_name = $g_name;
    }
}

// 定义一个book类
class Book extends Goods {
    // book类独有的属性
    public $author_name;     // 作者
    public $publisher;  // 出版社
    public $pages;      // 页数
    // 构造方法
    public function __construct($g_name,$a_name) {
        // 显式的调用父类的构造方法
        parent::__construct($g_name);
        // 给作者名字初始化
        $this->author_name = $a_name;
    }
}

$b = new Book('火影忍者','岸本齐史');
echo "<pre>";
var_dump($b);