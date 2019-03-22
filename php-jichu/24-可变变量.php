<?php
header('content-type:text/html;charset=utf-8');
$a='锄禾日当午';
$b='a';
echo $$b;

echo '<hr>';

function openjpg(){
    echo '打开jpeg';
}
function opengif(){
    echo '打开gif';
}
function openpng(){
    echo '打开png';
}

function openImage($type){
    if ($type=='jpg')
        openjpg();
    elseif($type=='gif'){
        opengif();
    }
    elseif($type=='png'){
        openpng();
    }else{
        echo 'error';
    }
    $fn='open'.$type;
    $fn();
}