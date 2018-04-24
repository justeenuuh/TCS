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
	<link rel="stylesheet" href="css/w3.css">
		<script src="js/sweetalert.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
	
	<script type="text/javascript">
        function validate() {
		
				var x = document.getElementById("ttitle");
				var y = x.value;
				var a = document.getElementById("category");
				var j = a.value;
				var b = document.getElementById("year");
				var k = b.value;
				var c = document.getElementById("location");
				var l = c.value;
				var d = document.getElementById("author");
				var m = d.value;
				var e = document.getElementById("kword");
				var n = e.value;
				var f = document.getElementById("code");
				var o = f.value;
			
        
				if ((y == "") || (y == null) || (j == null) || (j == "") || (k == "") || (k == null) || (l == "") || (l == null) || (m == "") || (m == null) || (n == "") || (n == null) || (o == "") || (o == null))
					{
               
                        swal("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
		}
	</script>
	<style>
	
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
    padding: 10px 10px;
	border-radius: 4px;
	font-family: Trebuchet MS;
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
					margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
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
			
			.nw{
	overflow: hidden;
white-space: nowrap;
}
	.unselectable {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	cursor: default;
}

body{
			overflow:hidden;
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
			
			.addf {
				font-family: Trebuchet MS;
			}
        </style>
		
        <meta charset="UTF-8">
        <title> LIST OF THESIS </title>
    </head>
    <body background="bg-2.png">
<a href = "thesisadmin.php"> <img class="unselectable"src="UST.png" style="width:160px;height:160px;"> </a>
<center><p class="ust unselectable"> UNIVERSITY OF SANTO TOMAS </p>
<p class="ce unselectable"> CIVIL ENGINEERING DEPARTMENT </p>
<p class="es unselectable"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
<img class="logo unselectable" src="USTlogo.png" style="width:150px;height:150px;">
	
	<div class="modal">
  
  <form class="modal-content" name = "addt "method="POST" target = "_top" action = "addthesis.php" onSubmit="return confirm('Are you sure you want to add the thesis?');">
    <div class="imgcontainer">
      <span onclick="window.location.href='thesisadmin.php';" class="close" title="Close Modal">&times;</span>
      <img src="add.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<?php
		
            if(isset($_POST['adds']))
			{
              
				date_default_timezone_set("ASIA/SINGAPORE");
                $ttitle = $_POST['ttitle'];
				$code = $_POST['code'];
                $category = $_POST['category'];
				$year = $_POST['year'];
                $author = $_POST['author'];
				$loc = $_POST['location'];
				$kword = $_POST['keyword'];
				$status = "Available";
				if($ttitle !=''&& $category !=''&& $year !=''&& $author !='' && $status != '' && $kword != '' && $loc != '')
				{
					$validate = "Select * FROM thesis where ttitle = '$ttitle' OR code = '$code' ";
					$result = @mysqli_query($dbc, $validate);
					$check = mysqli_num_rows($result);
					if($check == 0)
					{
						$query = "INSERT INTO thesis(ttitle, code, category, year, author, status, keyword, location) VALUES('$ttitle','$code','$category','$year','$author','$status', '$kword', '$loc')";
						$response = @mysqli_query($dbc, $query);
						
						$msg = "Thesis entitled: $ttitle was successfully added!";
						echo "<script type='text/javascript'> swal('$msg');</script>";
						echo "<script>setTimeout(\"location.href = 'thesisadmin.php';\",1000);</script>";
					}
					else
					{ ?>
						<center>
						<div id="errors"> <font color = red> <?php $msg = "Thesis code/title already exist!"; echo $msg?></font></div>
						</center>
						
						<?php
					}
					
						
				}
                mysqli_close($dbc);
            }
        ?>
	
	
	
        
					<center>
                    <legend> Add Thesis </legend>
										
					<div class = "addf">
					<b>Thesis Code:</b> <font color="red"> * </font> <input type = "text"  id = "code" name = "code" style="width:15%" placeholder="0304-01" pattern = "[0-9-]*$" title = "Thesis code should be of the format: 1718-01" autofocus required> <br> <br>
                    <b>Complete Thesis Title:</b> <font color="red"> * </font> <input type = "text" id = "ttitle" name = "ttitle" style="width:80%" placeholder="An Analysis on the Suitability of Bulacan Marble Dust as Soil Stabilizer" required> 
					<br> <br>
					<b>Category: </b><font color="red"> * </font> <input type="text" required  id = "category" name="category" style="text-transform: uppercase" placeholder = "STRUCTURAL"><br>
						 &nbsp; &nbsp;
						
						<div id ="div1"> </div>
					<b>Year: </b><font color="red"> * </font> <input type = "number" id = "year" name = "year" style="width:30%" placeholder="2005" min="2004" max="3000" required > <br> 
					<b>Author/s:</b> <font color="red"> * </font> <input type = "text" id = "author" name = "author"  style="width:50%" placeholder="Dela Cruz, Juan A." required > <br> <br>
					<b>Location:</b> <font color="red"> * </font> <input type = "text" name = "location" id = "location" style="width:30%" placeholder="CEL7" required > <br> <br>
					<b>Keyword/s: </b><font color="red"> * </font> <input type = "text" id = "kword" name = "keyword"  style="width:30%" placeholder="marble, dust, stabilizer" required > <br> <br>
					</div>
				
        </center>
		
            <div class="container" style="background-color:#f1f1f1">
		<center>
            <button class="buttonlogin" target="_top" name="adds" type="submit"  value="adds" onclick = "return validate();"> Add Thesis </button> &nbsp
			
        </center>
		</div>
        </form>
	
	</div>
	
	</div> 
	
		 </form>
	
	
	
	</body>
	
	</html>