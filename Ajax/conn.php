<?php
$link = mysqli_connect('localhost','root','root');
mysqli_select_db($link,'chat');
mysqli_query($link,'set names UTF8');