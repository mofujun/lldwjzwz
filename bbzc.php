<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";
 
 //��ȡpost������ֵ
$name= isset($_POST['username1']) ? htmlspecialchars($_POST['username1']) : '';
$pass= isset($_POST['password1']) ? htmlspecialchars($_POST['password1']) : '';
 
 
// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
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