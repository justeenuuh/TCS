<?php
require_once('mysqli_connect.php'); 

$uname = $_POST['user-name'];
$email = $_POST['user-email'];

$sql = "SELECT * FROM administrator WHERE Username = '$uname' AND Email = '$email'";
$res = mysqli_query($dbc, $sql);
$count = mysqli_num_rows($res);
if($count == 1)
{
	$r = mysqli_fetch_assoc($res);
	$password = $r['Password'];
	$to = $r['Email'];
	$subject = "Your Password";
	$txt = "(Please change your password immediately and delete this message.) Use This this as your password: " . $password;
	$headers = "From: SeFlower@gmail.com" . "\r\n" .
	"CC: SeFlower@gmail.com";
}
if(!mail($to,$subject,$txt,$headers)) {
	$error_message = 'Problem in Sending Password Recovery Email';
	echo "<script type='text/javascript'> alert('$error_message');</script>";
	echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
	
} else {
	$success_message = 'Please check your email to reset password!';
	echo "<script type='text/javascript'> alert('$success_message');</script>";
	echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
}



?>
