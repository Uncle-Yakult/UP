<?php
// 模板引擎类
class MiniSmarty {
    public $template_dir  = "./view/";//模板目录
    public $templatec_dir = "./view_c/";//编译文件目录

    // 给该类声明属性，用于存储外部的变量信息
    public $tpl_var = array();
    // 把外部变量设置为类内部属性的一部分
    function assign($k,$v) {
        $this -> tpl_var[$k] =$v;
    }
    //"编译"模板文件（{}标记替换为php标记）
    function compile($tpl) {
        $com_file = $tpl.".php";
        // 走“已经生成”的混编文件
        // ①该混编文件必须存在
        // ②混编文件的修改时间 大于 模板文件的修改时间
        if (file_exists($com_file) && filemtime($com_file) > filemtime($tpl)) {
            require $com_file;
        }else {
            echo "new file";
            // 获得模板文件内部具体的模板内容
            $cont = file_get_contents($tpl);

            // 替换：{ ---->  <  ?php echo
            // 替换：{ ---->  <  ?php echo $this->tpl_var['
            $cont = str_replace("{\$","<?php ehco \$this->tpl_var['",$cont);
        }

        // 获得模板文件内部具体的模板内容
        $cont = file_get_contents($tpl);
        // echo $cont;

        // 替换：{ ----> < ?php echo
        $cont = str_replace("{","<?php echo ",$cont);

        // 替换：} ----> , ? >
        $cont = str_replace("}","?>",$cont);

        // echo $cont;
        // 把生成好的编译内容（php+html混编内容）放入一个文件里面
        file_put_contents('./02.html.php',$cont);

        // 引入混编文件
        require "02.html.php";
    }
}