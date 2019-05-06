<?php

// 1, 加载项目初始化文件
include '../init.php';

// 2, 加载数据库连接文件
include DIR_CORE . 'MySQLDB.php';

// 3, 接收pub_id
$pub_id = $_GET['pub_id']; // 楼主的帖子的id号

// 6, 每点一次,楼主的publish表的pub_hits加1
if (!$_GET['action']) {
	$sql = "update publish set pub_hits = pub_hits + 1 where pub_id = $pub_id";
	my_query($sql);
}

// 4, 提取楼主的帖子的信息
$sql = "select * from publish where pub_id=$pub_id";
$result = my_query($sql); // 得到了资源结果集
$row = mysqli_fetch_assoc($result); // 楼主的帖子的信息

// 以下的代码跟分页有关
// (1) 接收当前页码数
$pageNum = isset($_GET['num']) ? $_GET['num'] : 1;
// (2) 定义每一页显示的记录数
$rowsPerPage = 5;
// (3) 查询总记录数
$sql = "select count(*) as sum from reply where rep_pub_id=$pub_id";
$result = my_query($sql);
$row_num = mysqli_fetch_assoc($result);//还是一个数组
$rowCount = $row_num['sum'];//得到总记录数
// (4) 计算总页数
$pages = ceil($rowCount / $rowsPerPage);

// (5) 拼凑出页码字符串
$strPage = '';
// 拼凑出“首页”
$strPage .="<a href='./show.php?pub_id=$pub_id$action=reply&num=1'>首页</a>";
// 拼凑出“上一页”
$preNum = $pageNum == 1 ? 1 : $pageNum - 1;
$strPage .="<a href='./show.php?pub_id=$pub_id$action=reply&num=$preNum'><<上一页</a>";
// 确定显示的第1个页码$startNum的值
if ($pageNum <= 3) {
	$startNum = 1;
}else {
	$startNum = $pageNum -2;
}
// 确定$startNum的最大值
if ($startNum > $pages - 4) {
	$startNum > $pages = 4;
}
// 防止$startNum出现负值
if ($startNum <= 1) {
	$startNum = 1;
}
// 确定显示的最后一个页面$endNum的值
$endNum = $startNum + 4;
// 防止$endNum越界
if ($endNum > $pages) {
	$endNum = $pages;
}

// 拼凑出中间的页码
for ($i=$startNum; $i <= $endNum; $i++) { 
	if ($i == $pageNum) {
		$strPage .="<a href='./show.php?pub_id=$pub_id$action=reply&num=$i'><font color='red'>$i</font></a>";
	}else {
		$strPage .="<a href='./show.php?pub_id=$pub_id$action=reply&num=$i'>$i</a>";
	}
}
// 拼凑出“下一页”
$nextNum = $pageNum == $pages ? $pages : $pageNum + 1;
$strPage .= "<a href='./show.php?pub_id=$pub_id$action=reply&num=$nextNum'>下一页>></a>";
// 拼凑出“尾页”
$strPage .= "<a href='./show.php?pub_id=$pub_id$action=reply&num=$pages'>尾页</a>";
// 拼凑出“总页数”
$strPage .= "总页数:$pages";
// 分页到此结束


// 7, 提取回帖的资源结果集
$rep_sql = "select * from reply where rep_pub = $pub_id order by rep_time";
$rep_result = my_query($rep_sql);

// 提取当前帖子的回复数量
$num_sql = "select count(*) from reply where rep_pub_id = $pub_id";
$rep_num = fetchColumn($num_sql);

// 5,加载视图文件
include DIR_VIEW . 'show.html';
