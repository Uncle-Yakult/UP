<?php

// 1, 加载项目初始化文件
include '../init.php';

// 2, 加载数据库连接文件
include DIR_CORE . 'MySQLDB.php';

/**
 * 以下代码跟分页有关
 */
// (1) 接受当前页码数
$pageNum = isset($_GET['num']) ? $_GET['num'] : 1;
// (2) 定义每一页显示的记录数
$rowsPerPage = 5;
// (3) 查询总记录数
$sql = "select count(*) from publish";
$rowCount = fetchColumn($sql);
// (4) 计算总页数
$pages = ceil($rowCount / $rowsPerPage);


// 3, 提取publish表的数据
$sql = "select * from publish order by pub_time desc";
$result = my_query($sql); // 得到资源结果集

// 4,加载视图文件
include DIR_VIEW . 'list_father.html';