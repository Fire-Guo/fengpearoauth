<?php
ini_set("display_errors", "On");
error_reporting(E_ALL);
ini_set("display_errors", "On");  
error_reporting(E_ALL);
header('content-type:text/html;charset=utf-8');
//接受客户端的数据：
$name = $_POST["username"];
$pwd = $_POST["password"];
//操作数据库：
//连接数据源：
$db = mysqli_connect("localhost","root","123456","root");
//编写sql语句：
$sql = "INSERT INTO `account`( `username`, `password`) VALUES ('$name','$pwd')";
//执行sql语句：
$res = mysqli_query($db,$sql);
//返回数据：
if($res){
    echo"<script>alert('注册成功！');location.href = 'successful.php';</script>";
}else{
    echo"<script>alert('注册失败！');</script>";
}

?>
