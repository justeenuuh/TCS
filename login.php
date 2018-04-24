<?php session_start(); ob_start(); require_once('mysqli_connect.php'); ?>
	<html>
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
	<script src="js/sweetalert.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
	
	<script type="text/javascript">
        function validate() {
		
				var x = document.getElementById("uname");
				var y = x.value;
				var a = document.getElementById("pword");
				var j = a.value;
				
        
				if ((y == "") || (y == null) || (j == null) || (j == ""))
					{
               
                        swal("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
		}
	</script>
	
	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>
		
		

	
        <style>
		
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
			width: 40%; /* Could be more or less, depending on screen size */
			
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
		
 

	</head>
	<body background="bg-2.png">
<a href = "thesisadmin.php"> <img class="unselectable"src="UST.png" style="width:160px;height:160px;"> </a>
<center><p class="ust unselectable"> UNIVERSITY OF SANTO TOMAS </p>
<p class="ce unselectable"> CIVIL ENGINEERING DEPARTMENT </p>
<p class="es unselectable"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
<img class="logo unselectable" src="USTlogo.png" style="width:150px;height:150px;">


	<div class="modal">
		<div class="container">
        <form class="modal-content" method="POST" target = "_top">
        <div class="imgcontainer">
      <span onclick="location.href = 'index.php'" class="close" title="Close">&times;</span>
      <img src="login.png" style="width:170px;height:170px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<center>
	
	  <?php
	if(isset($_SESSION['uname'])) 
			   {
				   header("Location:thesisadmin.php");  
			   }
			   
		if(isset($_POST['submit'])){
			$check = "SELECT * FROM administrator WHERE Username='" . $_POST['uname'] . "' AND Password='". $_POST['pword'] . "' ";
			$checkaction = @mysqli_query($dbc, $check);
			$count = mysqli_num_rows($checkaction);
			if($count != 0){
				header("Location: thesisadmin.php");
				$_SESSION['uname'] = $_POST['uname'];
				$_SESSION['pword'] = $_POST['pword'];
			}
			else{
						
			
	?>
					<div id="errors"> <font color = red> <?php $msg = "Username or Password is incorrect!"; echo $msg?></font></div>
					<?php 
					}
		}
		
					
					?>
                    <legend> Login as Administrator </legend> 
		<label><b>Username </b></label> <font color = red> * </font>
		<input type="text" name="uname" placeholder="Enter username" id = "uname" size = "20" autofocus required><br><br>
		<label><b>Password </b></label> <font color = red> * </font>
		<input type="password" name="pword" placeholder="Enter password" id = "pword" size = "20" required><br><br>
		
		<div class="container" style="background-color:#EBF5FB">

		<script>
		$("#buttonlogin").modal.style.display('block');
		</script>
		
		<button  id = "buttonlogin" class="buttonlogin" type="submit" name="submit" onclick = "return validate();" > Login</button>
	
		<br>
		<a href = "forgotpwd.php" > Forgot Password </a>
		</div>
		</center>
	</form>
	
	</div>
	</div>
	</div> 
	
	<br>
	<br>	
 
	
	<br>
	</body>
	</html>