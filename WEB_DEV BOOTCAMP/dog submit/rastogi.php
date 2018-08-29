<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
<center><p><em><strong>User Information</strong></em></p></center>
<?php
$name=$_POST['myname'];
$email=$_POST['Email'];
$passwd=$_POST['Password'];
$dogname=$_POST['mydogname'];
$breed=$_POST['breed'];
$content=$_POST['paragraph'];
echo "<table border=1>";
	echo "<tr>";
		echo "<th>"."Name"."</th>";
		echo "<th>"."Email"."</th>";
		echo "<th>"."Password"."</th>";
		echo "<th>"."Dog Name"."</th>";
		echo "<th>"."Breed"."</th>";
		echo "<th>"."Content"."</th>";
		
	echo "</tr>";

	echo "<tr>";
		echo "<td>".$name."</td>";
		echo "<td>".$email."</td>";
		echo "<td>".$passwd."</td>";
		echo "<td>".$dogname."</td>";
		echo "<td>".$breed."</td>";
		echo "<td>".$content."</td>";
	echo "</tr>";
	
echo "</table>";
?>
</body>
</html>