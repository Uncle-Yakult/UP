<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>无标题文档</title>
</head>

<body>
<script type="text/javascript">
    function jump() {
        location.href='?firstid=' + document.getElementById('first').value;
    }
</script>

<?php
function p($data) {
    echo '<pre>';
    print_r($data);
    exit();
}

$link = mysqli_connect('localhost','root','root','php4');
$sql = "select * from category where parentid=0";
$rs = mysqli_query($link,$sql);

$firstid = isset($_GET['firstid'])?$_GET['firstid']:'';     //获取提交的firstid
?>

<!-- 获取第一级 -->
<select id='first' onchange="jump()">
        <option value="">---请选择---</option>
    <?php
        while($rows = mysqli_fetch_assoc($rs)):
    ?>
        <option value="<?php echo $rows['id']?>"<?php echo $rows['id']==$firstid?'selected':'' ?>><?php echo $rows['name']?></option>
    <?php
		endwhile;
	?>
</select>

<!-- 获取第二级 -->
<?php
    $sql = "select * from category where parentid = $firstid";
    $rs = mysqli_query($link,$sql);
?>
<select id = "second">
    <option value="">---请选择---</option>
    <?php while($rows = mysqli_fetch_assoc($rs)): ?>
    <option value="<?php echo $rows['id'] ?>"><?php echo $rows['name'] ?></option>
    <?php endwhile; ?>
</select>

</body>
</html>