<?php
$databaseHost = 'localhost';
$databaseName = 'students';
$username = 'root';
$password = '';

$mysqli = mysqli_connect($databaseHost, $username, $password, $databaseName);
?>

<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$uploadOk = 1;

if(isset($_POST['Submit'])) {	
	$regid = mysqli_real_escape_string($mysqli, $_POST['roll']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$class = mysqli_real_escape_string($mysqli, $_POST['class']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	
	$pp = $_FILES['pic']['tmp_name'];
	$pp_name = $_FILES['pic']['name'];
	$pp_path = "/uploads/pictures/".$regid."_".$pp_name;
	$pp_type = '';
	if($pp != ""){
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
    $pp_type = finfo_file($finfo, $pp);
	}
	else{
		$pp_path = "";
	}
	
	$file = $_FILES['docx']['tmp_name'];
	$file_name = $_FILES['docx']['name'];
	$file_path = "/uploads/files/".$regid."_".$file_name;
	$file_type = '';	
	if($file != ""){
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
    $file_type = finfo_file($finfo, $file);
	}
	else{
		$file_path = "";
	}
	
	$result = mysqli_query($mysqli, "INSERT INTO studentsdata(id,name,fathername,class,gender,picpath,filepath) VALUES('$regid','$name','$fname','$class','$gender','$pp_path','$file_path')");
	if($result){
		echo "<script>alert('Form Successfully Submitted !')</script>";
			
			if( strpos( $pp_type, "image/" ) !== false) {
			move_uploaded_file($pp, SITE_ROOT.$pp_path);
			}
			
			if((strpos( $file_type, "msword" ) !== false) || (strpos( $file_type, "pdf" ) !== false)) {
			move_uploaded_file($file, SITE_ROOT.$file_path);
			}
	
	header("Location:viewform.php?id=".$regid);
	}
	else{
		echo "<script>alert('Record with this registration id already exists !')</script>";
		header("Location:registration_form.html");
	}
	$mysqli->close();
}
?>