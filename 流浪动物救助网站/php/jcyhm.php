
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

$sql = "SELECT id FROM user WHERE id = '".$q."'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo $row["id"];
    }
}
$conn->close();
?>