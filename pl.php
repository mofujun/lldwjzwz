<?php
header("Access-Control-Allow-Origin: *");
header("content-type:text/html;charset=utf-8"); 
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";

//获取post传来的值
$pln = isset($_POST['hqnr']) ? htmlspecialchars($_POST['hqnr']) : '';
//$pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';
$tim=date("Y-m-d H:i:s",time()+7*3600);
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = "INSERT INTO plnr (text, time)
VALUES ('$pln','$tim')";
 
if ($conn->query($sql) === TRUE) {
    echo $pln;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>