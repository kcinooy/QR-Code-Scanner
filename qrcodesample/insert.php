<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'qrcodedb');

if($conn->connect_error){
	die("Connection Failed" .$conn->connect_error);

}
if(isset($_POST['text'])){

$text =$_POST['text'];

$sql = "INSERT INTO attendance(STUDENTID, TIMEIN) VALUES ('$text',NOW())";
if($conn->query($sql) ===TRUE){
	$_SESSION['success'] = 'Attendance Added Successfully';
}else {
		$_SESSION['error'] = $conn->error;
}
header("location: index.php");
}
$conn->close();
?>