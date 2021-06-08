<?php
header("Content-Type:text/html;charset=utf-8");
$link=@mysqli_connect('localhost','root','','stu','3306') or die("连接数据库失败");
mysqli_set_charset($link,"utf8");
?>