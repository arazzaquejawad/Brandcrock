<?php
$databaseHost = 'localhost';
$databaseName = 'students';
$username = 'root';
$password = '';
$mysqli = mysqli_connect($databaseHost, $username, $password, $databaseName);

$stdid = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM studentsdata WHERE id = '$stdid';"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Form Submission View</title>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>
<style>
table{
	border-collapse: collapse;
}
td{
	border:1px solid black;
	color:red;
	font-size:25px;
	font-family: 'Inconsolata', monospace;
}
span{
	color:black;
	font-weight: bold;
}
</style>
<body>
<a href="registration_form.html">Submit another Form</a><br/><br/>

<h1 style = "text-decoration: underline;"> Student Form Data </h1>
<table style = "border:1px solid black;">
	<?php 
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>"."<span>Student Id:</span> ".$res['id']."</td>";	
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."<span>Student Name:</span>".$res['name']."</td>";	
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."<span>Father Name:</span>".$res['fathername']."</td>";	
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."<span>Class:</span>".$res['class']."</td>";	
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."<span>Gender:</span>".$res['gender']."</td>";	
			echo "</tr>";
			echo "<tr>";
			if($res['picpath'] != ""){
			echo "<td>"."<span>Photo:</span><br><img style = 'max-width:200px;max-height:200px;' src = '.".$res['picpath']."' /></td>";		
			}
			else{
				echo "<td>"."<span>Photo:</span> NO</td>";		
			}
			echo "</tr>";
			echo "<tr>";
			if($res['picpath'] != ""){
			echo "<td>"."<span>File Uploaded:</span> <a href= '.".$res['filepath']."'>View File</a></td>";		
			}
			else{
			echo "<td>"."<span>File Uploaded:</span> NO</td>";		
			}
			echo "</tr>";
		}
		$mysqli->close();
	?>
	</table>
</body>
</html>
