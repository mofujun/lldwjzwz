
<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";
$q=$_GET["q"];
$re = array();
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = "SELECT id FROM user WHERE id = '".$q."'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
		if(trim($row["id"])!==''){
		   echo $row["id"];
    };
		}
			
}
else{
				echo "cw";
			}
        
$conn->close();
?>