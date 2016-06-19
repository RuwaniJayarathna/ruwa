
<html>
<head></head>
<body>
<html>
<body>
<h1 align=center>Student Details </h1>
<form action="" method="post">
<table border=1>
<tr><td>Name </td>
	<td><input type="txt" name="st_name"></td>
	</tr>
	<tr><td>Telephone</td><td><input type="txt" name="st_tel"></td></tr>
	<tr><td>Student ID</td><td><input type="txt" name="st_id"></td></tr>
<tr><td>Course</td>
	<td> <select name="st_course">
	<option selected>Java</option>
	<option selected>Visual Basic</option>
	<option selected>Databasse</option>
	<option selected>Software Engineering</option>
	</select>
	</td>
</tr>
<tr> <td>Sex</td>
	<td> <input name="st_sex" type="radio" value="Male">Male
	<input name="st_sex" type="radio" value="Female">Female</td>
</tr>
</table>
<br>
	<input type="submit">
</form>

<?php
$name=$_POST["st_name"];
$tel=$_POST["st_tel"];
$id=$_POST["st_id"];
$course=$_POST["st_course"]; 
$sex=$_POST["st_sex"];
$linkz =mysqli_connect("localhost","root","") or die("Sorry Didnot"); 
mysqli_select_db($linkz,"Form") or die("No_DB_Found"); 
$sql = "INSERT INTO Student(st_name,st_tel,st_id,st_course,st_sex)
VALUES
('$name','$tel','$id','$course','$sex')";
mysqli_query($linkz,$sql); 
echo "Student ".$name." was entered."; 
echo "<hr>";
mysqli_close($linkz);
?>
</body>
</html>