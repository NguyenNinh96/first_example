<?php 
mysql_connect("localhost","root","") or die ("no connect");
mysql_select_db("vidu_1");
mysql_query("set names 'utf8'");
$sql = "select * from bang1";
$query = mysql_query($sql);
while($row = mysql_fetch_array($query)){
	echo $row["STT"]."-".$row["Name"]."-".$row["Age"]."<br>";
}
mysql_close();
?>