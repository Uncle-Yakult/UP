<?php
// 声明命名空间
namespace Admin\Controller;
// 引入父类控制器
use Think\Controller;
// 声明并且继承父类控制器
class TestController extends Controller{

    public function test() {
        // 输出
        // echo 'Hello world.';
        // 定义变量
        $var = date('Y-m-d H:i:s',time());
        // 变量分配
        $this -> assign('var',$var);
        // 展示模板
        $this -> display();
    }

    public function test1() {
        // echo U('index');
        $this -> display('test');
    }

    public function test2() {
        // echo U('Index/index');
        $this -> display('Demo/test');
    }

    public function test3() {
        echo U('Index/index', array('id' => 100));
    }

    public function test4() {
        // 成功跳转
        $this -> success('操作成功', U('test'), 10);
    }

    public function test5() {
        // 失败跳转
        $this -> error('你人品有问题',U('test1'),10);
    }

    public function test6() {
        // 模板常量的展示
        $this -> display();
    }

    //  视图注释
    public function test7() {
        // 展示模板
        $this -> display();
    }

    // 变量的输出（数组）
    public function test8() {
        // 定义一维数组
        $array = array('西游记','三个女人和105个男人的故事','一个男人和一堆女人的故事','三国演义');
        // 定义二维数组
        $array2 = array(
            array('白骨精','大师兄','二师兄','沙师弟'),
            array('宋江','孙二娘','林冲','李逵'),
            array('贾宝玉','刘姥姥','薛宝钗','林黛玉'),
            array('孙枣','鲁大师','孙小虎','术爸'),
        );
        // 变量分配
        $this -> assign('array', $array);
        $this -> assign('array2', $array2);
        // 展示模板
        $this -> display();
    }

    // 变量分配（对象）
    public function test9() {
        // 实例化Student对象
        $stu = new Student();
        // 给类的属性赋值
        $stu -> id = 100;
        $stu -> name = '马冬梅';
        $stu -> sex = '女';
        // 变量的分配
        $this -> assign('stu',$stu);
        // 展示模板
        $this ->display();
    }

    // 系统变量
    public function test10() {
        // 展示模板
        $this -> display();
    }

    // 模板中函数使用
    public function test11() {
        // 定义时间戳
        $time = time();
        // 定义字符串
        $str = 'AbcDeFghiJk';
        // 传递给模板
        $this -> assign('time', $time);
        $this -> assign('str', $str);
        // 展示模板
        $this -> display();
    }

    // 默认值
    public function test12() {
        // 定义一个空的字符串
        $sign = '';
        // $sign = $sign ? : '这个家伙很懒...';
        // 传递给模板
        $this -> assign('sign',$sign);
        // 展示模板
        $this -> display();
    }

    // 运算符
    public function test13() {
        // 定义两个变量
        $a = 100;
        $b = 10;
        // 传递给模板
        $this -> assign('a',$a);
        $this -> assign('b',$b);
        // 展示模板
        $this -> display();
    }
}