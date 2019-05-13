<?php

header("Content-type:text/html;Charset=UTF-8");
class Goods {
    public static $id = 'in_goods';
    public static function showID() {
        echo static::$id;
    }
}
class Book extends Goods {
    public static $id = 'inbook';
}
// echo Book::$id;
Book::showID();