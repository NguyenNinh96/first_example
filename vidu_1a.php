<?php echo "hello world <br>"; 

$username = "root";
$password = "";
$host = "localhost";
$database = "vidu_1";
$connection = new mysqli($host, $username, $password, $database);
//mysql_query("set names 'utf8'");
$sql = "select * from bang1";
$query = $connection->query($sql);

while($row = $query->fetch_assoc()){
	echo $row["STT"]."-".$row["Name"]."-".$row["Age"]."<br>";
}
?>