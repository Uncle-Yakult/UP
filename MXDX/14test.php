<?php

header("Content-type:text/html;Charset=UTF-8");

// 定义一个Goods类
class Goods {
    // 所有商品共有的属性
    public $goods_id;
    public $goods_name;
    public $goods_price;
}

// 定义一个book类
class Book extends Goods {
    // book类独有的属性
    public $author;     // 作者
    public $publisher;  // 出版社
    public $pages;      // 页数
}

// 定义一个phone类
class Phone extends Goods {
    // phone类独有的属性
    public $logo;   // 品牌
    public $system; // 操作系统
    public $size;   // 尺寸
    public $mode;   // 制式
}

$b = new Book;
echo '<pre>';
var_dump($b);