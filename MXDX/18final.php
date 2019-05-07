<?php

header("Content-type:text/html;Charset=UTF-8");
class Goods {
    public $goods_name = '火影忍者';
    public function showName() {
        echo $this->goods_name;
        echo '<br />';
    }
}

class Book extends Goods {
    public $author_name = '岸本齐史';
    final public function showName() {
        echo $this->author_name;
        echo '<br />';
    }
}

class Novel extends Book {
    public $publisher_name = '日本疾风社';
    public function showName() {
        echo $this->publisher_name;
        echo "<br />";
    }
}

final class LoveNovel extends Novel {}

class LongLoveNovel extends LoveNovel {}