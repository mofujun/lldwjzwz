<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";

//获取post传来的值
$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
$pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';
$dhhm = isset($_POST['hm']) ? htmlspecialchars($_POST['hm']) : '';

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO user (id, password,tel)
VALUES ('$id','$pass','$dhhm')";
 
if ($conn->query($sql) === TRUE) {
    echo "cg";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>