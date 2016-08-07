<html>
<title>Student Info</title>
<body>
<?php

$conn= mysql_connect("localhost","root","");
if(!$conn){
	echo "Unable to connect to Database";
}else{
	echo "Connected to database";
}
mysql_select_db("mytest");
$sql= "SELECT * FROM students";
$result=mysql_query($sql);
mysql_close();
?>

<table width="500" border="1" cellpadding="2" cellspacing="2">
	<tr>
	<th> Student Id</th>
	<th> Student name</th>
	<th> Email </th>
	<th> Subject</th>
	</tr>
	
<?php
while($studinfo= mysql_fetch_assoc($result)){
	
	echo "<tr>";
	echo "<td>".$studinfo['std_id']."</td>";
	echo "<td>".$studinfo['student_name']."</td>";
	echo "<td>".$studinfo['email']."</td>";
	echo "<td>".$studinfo['subject']."</td>";
	echo "</tr>";
}

?>

</table>

<div class="menu">
<?php include 'menu.php';  ?>
</div>
</body>

</html>