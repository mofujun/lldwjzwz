<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";

//获取post传来的值
$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
$dhhm = isset($_POST['dh']) ? htmlspecialchars($_POST['dh']) : '';

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT password FROM user WHERE id = '".$id."' AND tel='".$dhhm."' ";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
		if($row["password"]!=''){
			echo $row["password"];
		}
			/*else{
				echo "cw";
			}*/
        
    }
}
else{
	echo "未查询到结果";
}
$conn->close();
?>