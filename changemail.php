<?php session_start(); ob_start(); require_once('mysqli_connect.php'); ?>

<html>
    <head>
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
				var a = document.getElementById("olde");
				var j = a.value;
				var b = document.getElementById("newe");
				var c = b.value;
				var d = document.getElementById("cone");
				var e = d.value;
        
				if ((y == "") || (y == null) || (j == null) || (j == "") || (c == null) || (c == "") || (e == null) || (e == ""))
					{
               
                        swal("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
		}
	</script>
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
				</head>
				<body background="bg-2.png">
				<a href = "index.php"> <img src="UST.png" style="width:160px;height:160px;"> </a>
			<center><p class="ust"> UNIVERSITY OF SANTO TOMAS </p>
			<p class="ce"> CIVIL ENGINEERING DEPARTMENT </p>
			<p class="es"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
			<img class="logo" src="USTlogo.png" style="width:150px;height:150px;">
			
			<div class="modal">
  
  <form class="modal-content" name = "chem" method="POST" target="_top" action = "changemail.php" onSubmit="return confirm('Are you sure you want to change your email address?');">
    <div class="imgcontainer">
      <span onclick="window.location.href='thesisadmin.php';" class="close" title="Close Modal">&times;</span>
      <img src="email.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<center>
                
				<?php
			
			if(!isset($_SESSION['uname'])) 
			   {
				   header("Location:index.php");  
			   }
			
			if(isset($_POST['che']))
			{
			$username = $_POST['uname'];
			$email = $_POST['olde'];
			$newemail = $_POST['newe'];
			$conemail = $_POST['cone'];
			
			$one = "SELECT * FROM administrator WHERE Username = '$username' AND Email = '$email'";
			$bbeng = @mysqli_query($dbc, $one);
			$count = mysqli_num_rows($bbeng);
			if($count == 0)
			{ ?>
				<div id="errors"> <font color = red> <?php $msg = "Username or Password is incorrect!"; echo $msg?></font></div>
				
				<?php
			}
			else if($count != 0 && $newemail == $conemail)
			{
				
				if($email != $conemail)
				{
				
				$pass = "UPDATE administrator SET Email = '$conemail' WHERE Username = '$username'";
				$word = @mysqli_query($dbc, $pass);
				
				
				$msg2 = "Email was changed successfully!";
				echo "<script type='text/javascript'> swal('$msg2');</script>";
				echo "<script>setTimeout(\"location.href = 'thesisadmin.php';\",1500);</script>";                        
				
				?>
				<?php
				}
				else
				{?>
			
					<div id="errors"> <font color = red> <?php $msg4 = "New email must be different from the old email"; echo $msg4?></font></div>
					
					<?php
				}
				
			}
			else
			{ ?>
		
		<div id="errors"> <font color = red> <?php $msg3 = "Please double check the Username or Email!"; echo $msg3?></font></div>
				
				<?php
			}
			
			 mysqli_close($dbc);
			
			}
				
			?>
				
				
				
				
        <br>
       
                     <legend><b> Change Email </b></legend> 
					<label> <b> Username: <font color = red> * </font> </b> </label> <input type = "text" id = "uname" name = "uname" style="width:40%" autofocus required> <br>
                    <label> <b> Old Email: <font color = red> * </font> </b> </label> <input type = "email" id = "olde" name = "olde" style="width:40%" placeholder="oldemail@gmail.com" required> <br>
					<label> <b> New Email: <font color = red> * </font>  </b> </label> <input type = "email" id = "newe" name = "newe" style="width:40%" placeholder="newemail@gmail.com" required> <br>
					<label> <b> Confirm Email: <font color = red> * </font> </b> </label> <input type = "email" id = "cone" name = "cone" style="width:40%" placeholder="newemail@gmail.com" required> <br>
					

						 
        <br>
<center>
            <div class="container" style="background-color:#f1f1f1">
		<button class="buttonlogin" name="che" type="submit" onclick = "return validate();"> Change </button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div> 
	
			
			
       </body>
	   </html>