<?php
// 声明命名空间
namespace Admin\Controller;
// 引入父类
use Think\Controller;
// 声明类并且继承父类
class DocController extends Controller{

    // add方法
    public function add() {
        // 判断请求类型
        if (IS_POST) {
            // 处理提交
            $post = I('post.');
            // 实例化模型
            $model = D('Doc');
            // 数据保存
            $result = $model -> saveData($post,$_FILES['file']);
            // 判断保存结果
            if ($result) {
                // 成功
                $this -> success('添加成功！',U('showList'),3);
            }else{
                // 失败
                $this -> error('添加失败！');
            }
        }else{
            // 展示模板
            $this -> display();
        }
    }

    // showList方法
    public function showList() {
        // 查询数据
        $model = M('Doc');
        $data = $model -> select(); // 查询全部
        // 传递给模板
        $this -> assign('data',$data);
        // 展示模板
        $this -> display();
    }

    // download方法
    public function download() {
        // 接收id
        $id = I('get.id');
        // 查询数据
        $data = M('Doc') -> find($id);
        // 下载代码
        $file = WORKING_PATH . $data['filepath'];
        // 输出文件
        header("Content-type: application/octet_stream");
        header('Content-Disposition: attachment; filename="' . basename($file) . '" ');
        header("Content-Length: ". filesize($file));
        // 输出缓冲区
        readfile($file);
    }

    // showContent方法
    public function showContent() {
        // 接收id
        $id = I('get.id');
        // 查询数据
        $data = M('Doc') -> find($id);
        // 输出内容，并且还原被转移的字符
        echo htmlspecialchars_decode($data['content']);
    }
}