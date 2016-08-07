<html>
<title>Students Info</title>
<Head></head>

<body>
<?php
if(isset ($_POST['add'])){
	$conn=mysql_connect("localhost","root","");
	if(!$conn){
		echo " could not able to connec";
	}else{
		echo "Connected successfully!!";
	}
	
	mysql_select_db("mytest");
	$std_id=$_POST['std_id'];
	$student_name= $_POST['student_name'];
	$email= $_POST['email'];
	$subject=$_POST['subject'];
	
	$sql="INSERT INTO students (std_id,student_name,email,subject) VALUES('$std_id','$student_name','$email','$subject')";
	$exec=mysql_query($sql);
	echo "$exec";
	if(!$exec){
		echo "Could not enter the data";
	}else{
		echo "Entered the record successfully!!";
	}
	mysql_close();
}
?>
<form method="post" action="<?php $_PHP_SELF?>" >
			<table>
					<tr>
						<td width="100">Student ID:</td>
						<td><input name="std_id" type="text">
					</tr>
					<tr>
						<td width="100">Student Name:</td>
						<td><input name="student_name" type="text">
					</tr>
					<tr>
						<td width="100">Email:</td>
						<td><input name="email" type="text">
					</tr>
					<tr>
						<td width="100">Subject:</td>
						<td><input name="subject" type="text">
					</tr>
					<tr>
					<td width="100"></td>
					<td><input name="add" type="submit" value="submit"></td>
					</tr>
			</table>
</form>
<div class="menu">
<?php include 'menu.php';  ?>
</div>
</body>


</html>