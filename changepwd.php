<?php session_start(); ob_start(); require_once('mysqli_connect.php'); ?>
<!DOCTYPE html>		
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
	<link rel="stylesheet" href="css/w3.css">
	<script src="js/sweetalert.js"></script>
	<script src="js/alertify.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">

	<script type="text/javascript"> 
			function validate() {
		
				var x = document.getElementById("uname");
				var y = x.value;
				var a = document.getElementById("oldp");
				var j = a.value;
				var b = document.getElementById("newp");
				var c = b.value;
				var d = document.getElementById("conp");
				var e = d.value;
				
        
				if ((y == "") || (y == null) || (j == null) || (j == "") || (c == null) || (c == "") || (e == null) || (e == ""))
					
					{
               
                        swal("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
				
				var g = document.getElementById("newp");
                var h = g.value;
				var u = document.getElementById("conp");
                var v = u.value;
				if(h.length < 6 || v.length < 6)
				{
					 swal("Password must be 6 characters minimum.");
					 x.focus();
					 return false;
				}
			}
			</script>
	  <!-- Include jQuery -->
  <script src="jq.js"></script>

  <!-- Include jQuery Popup Overlay -->
  <script src="popup.js"></script>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
					<meta charset="UTF-8">
					<title> </title>
				</head>
				<body background="bg-2.png">
				<a href = "index.php"> <img src="UST.png" style="width:160px;height:160px;"> </a>
			<center><p class="ust"> UNIVERSITY OF SANTO TOMAS </p>
			<p class="ce"> CIVIL ENGINEERING DEPARTMENT </p>
			<p class="es"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
			<img class="logo" src="USTlogo.png" style="width:150px;height:150px;">
		
			<div class="modal">
  
 <form class="modal-content" name = "chpwd" method="POST" id = "chpwd" target="_top" onSubmit="return window.confirm('Are you sure you want to change your password?');">
    <div class="imgcontainer">
      <span onclick="window.location.href='thesisadmin.php';" class="close" title="Close">&times;</span>
      <img src="password.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	
	<div class="container">
	<center>
	
	
	<?php
			if(!isset($_SESSION['uname'])) 
			   {
				   header("Location:index.php");  
			   }
			   
			if(isset($_POST['chp']))
			{
			$username = $_POST['uname'];
			$password = $_POST['oldp'];
			$newpass = $_POST['newp'];
			$conpass = $_POST['conp'];
		//	$pass = password_hash($conpass, PASSWORD_DEFAULT);
			
			$one = "SELECT * FROM administrator WHERE Username = '$username' AND Password = '$password'";
			$bbeng = @mysqli_query($dbc, $one);
			$count = mysqli_num_rows($bbeng);
			if($count == 0)
			{	?>
				
				
				<div id="errors"> <font color = red> <?php $msg = "Username or Password is incorrect!"; echo $msg?></font></div>
				
			<?php 
			}
			
			elseif($count != 0 && $newpass == $conpass)
			{
				
				if($password != $conpass)
				{
				
				$pass = "UPDATE administrator SET Password = '$conpass' WHERE Username = '$username'";
				$word = @mysqli_query($dbc, $pass);
				
				$msg2 = "Password was changed successfully!";
				echo "<script type='text/javascript'> swal('$msg2');</script>";
				echo "<script>setTimeout(\"location.href = 'thesisadmin.php';\",1000);</script>";
				
				}
				
				else
				{ ?>
					
					<div id="errors"> <font color = red> <?php $msg4 = "New password must be different from the old password"; echo $msg4?></font></div>
					<?php
				}
				
			}
			
			else
			{ ?>
		
				<div id="errors"> <font color = red> <?php $msg3 = "New password must be same with Confirm password."; echo $msg3?></font></div>
				
				
				<?php
			}
			
			 mysqli_close($dbc);
			
			}
				
			?>
          
        <br>
       
                    <legend><b> Change Password: </b> </legend> 
					<label> <b> Username: </b> </label> <font color = red> * </font> <input type = "text" id = "uname" name = "uname" style="width:30%" autofocus required> <br>
                    <label> <b> Old Password: </b> </label> <font color = red> * </font> <input type = "password" id = "oldp" name = "oldp"  style="width:30%" placeholder="******" required> <br>
					<label> <b> New Password: </b> </label> <font color = red> * </font> <input type = "password" id = "newp" name = "newp"  title = "6 characters minimum" style="width:30%" placeholder="******" required> <br>
					<label> <b> Confirm Password: </b> </label> <font color = red> * </font> <input type = "password" id = "conp" name = "conp" title = "6 characters minimum" style="width:30%" placeholder="******" required> <br>
					

						 
        <br>
<center>
            <div class="container" style="background-color:#f1f1f1">
		<button class="buttonlogin" name="chp" type="submit" onclick = "return validate();"> Change </button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div>
	
	
       </body>
	   </html>