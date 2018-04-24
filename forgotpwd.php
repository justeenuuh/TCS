<?php 
		if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "civilengg", "ce1907", "tcs");
		
		$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " Username = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " Email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from administrator " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
		}
		

?>
<html>

<link href="demo-style.css" rel="stylesheet" type="text/css">
<script>
function validate_forgot() {
	if(((document.getElementById("user-email").value == "")) {
		document.getElementById("validation-message").innerHTML = " Email is required!"
		return false;
	}
	return true
}
</script>

    <head>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.min.js">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="bootstrap.js">
	<link rel="stylesheet" href="bootstrap-grid.css">
	<link rel="stylesheet" href="bootstrap-grid.js">
	<link rel="stylesheet" href="bootstrap-grid.min.css">
	<link rel="stylesheet" href="bootstrap-grid.min.js">
	<link rel="stylesheet" href="bootstrap-reboot.css">
	<link rel="stylesheet" href="bootstrap-reboot.js">
	<link rel="stylesheet" href="bootstrap-reboot.min.css">
	<link rel="stylesheet" href="bootstrap-reboot.min.js">
	
	 <style>
            @font-face{
                font-family: 'Roboto Condensed';
                src: url('RobotoCondensed-Regular.ttf');
            }
           
		   p.ust {
			font-family: "Cinzel-Regular", Serif;
			color: white;
			font-style: normal;
			position: relative;
			bottom: 100px;
			font-size: 20px;
			}
			p.ce {
			font-family: "Cinzel-Regular", Serif;
			color: white;
			font-style: normal;
			position: relative;
			bottom: 120px;
			font-size: 24px;
			}
			p.es {
			font-family: "Cinzel-Regular", Serif;
			color: white;
			font-style: normal;
			position: relative;
			bottom: 137px;
			font-size: 18px;
			}

			img.logo {
				max-width: 100%;
				height: auto;
				width: auto;
			position: absolute;
			right: 1%;
			top: 1%;


			}
            @font-face{
                font-family: 'Roboto Condensed';
                src: url('RobotoCondensed-Regular.ttf');
            }
            


		button:hover {
			opacity: 0.8;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the image and position the close button */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container {
			padding: 1px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: block; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 60px;
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 50%; /* Could be more or less, depending on screen size */
			font-family: Trebuchet MS;
			
		}

		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 20px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 100%;
			}
		}
		
		.buttonlogin {
	border-radius: 4px;
	border: none;
    color: white;
    padding: 10px 10px;
    font-size: 14px;
    cursor: pointer;
	background-color: #3CB371;
	font-family: Trebuchet MS;
	
}
.buttonlogin:hover, .buttonlogin:focus {
				background-color: #2980B9;
			}
			
			select{
 margin-bottom: 1em;
  padding: .25em;
  border: 0;
  border-bottom: 2px solid currentcolor; 
  font-weight: bold;
  letter-spacing: .1em;
  border-radius: 0;
  &:focus, &:active {
    outline: 0;
    border-bottom-color: red;
  }
}
        </style>
        <meta charset="UTF-8">
		<body background="bg-2.png">
	<a href = "index.php"> <img src="UST.png" style="width:160px;height:160px;"> </a>
<center><p class="ust"> UNIVERSITY OF SANTO TOMAS </p>
<p class="ce"> CIVIL ENGINEERING DEPARTMENT </p>
<p class="es"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
<img class="logo" src="USTlogo.png" style="width:150px;height:150px;">

<div class="modal">
		<div class="container">
        <form class="modal-content" name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
        <div class="imgcontainer">
      <span onclick="location.href = 'index.php'" class="close" title="Close">&times;</span>
      <img src="fpwd.png" style="width:170px;height:170px;" alt="Avatar" class="avatar">
    </div>
<center>
		<legend>Just fill in your username and email and we'll help recover your password </legend>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>


	
	<div class="field-group">
		<div><label for="uname"><b>User Name</b> <font color="red"> * </font></label></div>
		<div><input type="text" name="user-name" id="user-name" class="input-field" required autofocus></div>
		
		<div><label for="email"><b>Email</b> <font color="red"> * </font></label></div>
		<div><input type="email" name="user-email" id="user-email" class="input-field" required ></div>
	</div>
	<br>
	<div class="field-group container" style="background-color:#EBF5FB">
		<div><input class="buttonlogin" type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
	</div>	
	</center>
</form>