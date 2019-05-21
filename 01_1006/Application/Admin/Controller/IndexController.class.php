<?php
// 命名空间声明
namespace Admin\Controller;
// 引入父类控制器
use Think\Controller;
// 声明类并且继承父类
class IndexController extends Controller{

    // index方法
    public function index() {
        // 展示模板
        $this -> display();
    }

    // home方法
    public function home(){
        // 展示模板
        $this -> display();
    }
}