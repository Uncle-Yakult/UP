<?php   //header('content-type:text/html;charset=utf-8');
//字符串和bool的转换规律
var_dump((bool)'abcd');echo '<br>';     //true
var_dump((bool)'');echo '<br>';         //false
var_dump((bool)'0');echo '<br>';        //false
var_dump((bool)'0.0');echo '<br>';      //true
var_dump((bool)'00');echo '<br>';       //true
var_dump((bool)'false');echo '<br>';    //true
var_dump((bool)'null');echo '<br>';     //true
//数字和bool的转换规律
var_dump((bool)1);echo '<br>';          //true
var_dump((bool)0);echo '<br>';          //false
var_dump((bool)-10);echo '<br>';        //true
var_dump((bool)1.1);echo '<br>';        //true
var_dump((bool)0.0);echo '<br>';        //false
var_dump((bool)-1.1);echo '<br>';       //true
//数组和bool的转换规律
var_dump((bool)array());echo '<br>';    //false
var_dump((bool)array(1));echo '<br>';   //true
var_dump((bool)array(false));echo '<br>';       //true
//数组和null的转换规律
var_dump((bool)null);                   //false