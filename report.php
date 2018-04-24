<?php session_start(); ob_start(); require_once('mysqli_connect.php'); require_once('fetch.php');?>
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
  
  <form class="modal-content" method="POST" target = "_top">
    <div class="imgcontainer">
      <span onclick="window.location.href='borrowersite.php'" class="close" title="Close Modal">&times;</span>
      <img src="report.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	
	<?php 
		date_default_timezone_set("ASIA/SINGAPORE");
		$query =  "SELECT * FROM borrower where Date = CURDATE()";
		$response = @mysqli_query($dbc, $query);
		$rowcount = mysqli_num_rows($response);
		$sql =  "SELECT BorrowerID, code, Last, First, MobileNo, TimeB FROM borrower where Date = CURDATE() AND Status = 'Returned'";
		$ret = @mysqli_query($dbc, $sql);
		$count = mysqli_num_rows($ret);
		$sqli =  "SELECT * FROM borrower where Date = CURDATE() AND Status = 'Borrowed'";
		$bor = @mysqli_query($dbc, $sqli);
		$counter = mysqli_num_rows($bor);
			if($rowcount == 0)
			{
				echo "<p class = 'noresult'> No borrowers for today! </p>";
			}
			else
			{
				echo "<p> Daily report of borrowers for " . date("Y-m-d") . " , " .  date("h:i:s a");
				echo "<p> Total number of borrowers: " . $rowcount;
				
				echo "<p> Total number of thesis that are still borrowed: " . $counter;
				if($counter != 0)
				{
					echo "<p> <font color = red> Please contact the students regarding the thesis they borrowed before closing hours. </font>";
					echo "<center> <table id='tables'>" ;
					echo "<th> Borrower's ID </th>" ;
					echo "<th> Thesis Code </th>" ;
					echo "<th> Last Name </th>" ;
					echo "<th> First Name </th>" ;
					echo "<th> Mobile No. </th>" ;
					echo "<th> Time Borrowed </th>";
							
					while($row = mysqli_fetch_array($bor))
					{
						echo
						 "<tr>" .
						"<td> <center>" .   $row['BorrowerID'] . "</center> </td>" .
						"<td> <center><a href = '#' class = 'hover' id = '" .   $row['code'] . "'  value =  '" .   $row['code'] . "' > " . $row['code'] . "</a> </center> </td>" .
						"<td> <center>" .   $row['Last'] . "</center> </td>" .
						"<td> <center>" .   $row['First'] . "</center> </td>" .
						"<td> <center>" .  $row['MobileNo'] . "</center> </td>" .
						"<td> <center>" .  $row['TimeB']. "</center> </td> ";
					}
					echo "</table> </center>";
				
				}
				
				
				
			}
				

?>
	
	</div>
	</div>
	</div>