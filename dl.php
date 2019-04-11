<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";

//获取post传来的值
$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
$pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT id FROM user WHERE id = '".$id."' AND password='".$pass."' ";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // $result->num_rows>0用与检查查询结果是否为空
    while($row = $result->fetch_assoc()) {
		if(trim($row["id"])!=''){
			echo "cg";
		}
			
        
    }
}
else{
				echo "cw";
			}
 
$conn->close();
?>