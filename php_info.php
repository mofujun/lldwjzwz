
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myDB";
 
// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
} 
 
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // �������
    while($row = $result->fetch_assoc()) {
	echo "Ī����";
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 ���";
}
$conn->close();
?>
