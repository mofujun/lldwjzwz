
<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "yhm";
$q=$_GET["q"];
$re = array();
// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
} 
$sql = "SELECT id FROM user WHERE id = '".$q."'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // �������
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