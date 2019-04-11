<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";
 
 //获取post传来的值
$name= isset($_POST['username1']) ? htmlspecialchars($_POST['username1']) : '';
$pass= isset($_POST['password1']) ? htmlspecialchars($_POST['password1']) : '';
 
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO  user(id,password)
VALUES ('$name','$pass')";
 
if ($conn->query($sql) === TRUE) {
    echo "succes";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>