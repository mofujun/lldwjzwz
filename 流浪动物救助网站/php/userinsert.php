<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";

//��ȡpost������ֵ
$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
$pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';

// ��������
$conn = new mysqli($servername, $username, $password, $dbname);

// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO user (id, password)
VALUES ('$id','$pass')";
 
if ($conn->query($sql) === TRUE) {
    echo "is succcuse";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>