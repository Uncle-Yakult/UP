<?php

header("Content-type:text/html;Charset=UTF-8");
// 定义一个Goods类
class Goods {
    // 所有商品共有的属性
    public $goods_id;
    public $goods_name;
    public $goods_price;
    public function showName() {
        echo $this->goods_name;
    }
}

// 定义一个book类
class Book extends Goods {
    // book类独有的属性
    public $author_name;     // 作者
    public $publisher;  // 出版社
    public $pages;      // 页数
    // 子类重新父类方法
    public function showAuthorName() {
        echo $this->author_name;
    }
}

$b = new Book;
$b->goods_name = "火影忍者";
$b->author_name = "岸本齐史";
$b->showName();
echo '<br />';
$b->showAuthorName();