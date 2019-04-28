<?php
$path = 'f:/壁纸/01c6ec5c3201fda80121df904a4848.jpg@2o.jpg';

//方法一：
echo time().rand(100,999).strrchr($path,'.'),'<hr>';

//方法二：
echo uniqid().strrchr($path,'.'),'<hr>';
echo uniqid('news_').strrchr($path,'.'),'<hr>';

echo uniqid('news_',true).strrchr($path,'.'),'<hr>';