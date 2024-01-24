<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pankaew_ex3";

// Create connection สร้างการเชื่อมต่อ
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection ตรวจสอบการเชื่อมต่อ
if ($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
}

// Read all row from database table อ่านข้อมูลทั้งตาราง
$sql = "SELECT * FROM pankaew_ex3";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query : " . $connection->error);

}

// Read data of each row 
while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        <td>$row[address]</td>
        <td>$row[created_at]</td>

    
    </tr>
    
    ";
}
?>
