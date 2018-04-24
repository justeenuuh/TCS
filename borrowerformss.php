<?php session_start(); ob_start(); require_once('mysqli_connect.php'); ?>
<!DOCTYPE html>
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
        
				var x = document.getElementById("first");
				var y = x.value;
				var a = document.getElementById("last");
				var j = a.value;
				var b = document.getElementById("studno");
				var k = b.value;
				var c = document.getElementById("yrsec");
				var l = c.value;
				var d = document.getElementById("groupno");
				var m = d.value;
				var e = document.getElementById("mobileno");
				var n = e.value;
				var f = document.getElementById("check").checked;
			
				if ((y == "") || (y == null) || (j == null) || (j == "") || (k == "") || (k == null) || (l == "") || (l == null) || (m == "") || (m == null) || (n == "") || (n == null)) {
               
                        swal("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
				if(f === false)
				{
					swal("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				}
			
				var x = document.getElementById("studno");
                var y = x.value;
                //y = y.replace(/^\d{10}$/,"");
                //if ((y == "") || (y == null)) {
                var re5digit=/^\d{10}$/
                if (document.br.studno.value.search(re5digit)==-1) {
                        swal("Student Number should consist of 10 digits only");
                        x.focus();
                        return false;
                }
                var x = document.getElementById("mobileno");
                var y = x.value;
                //y = y.replace(/^\d{10}$/,"");
                //if ((y == "") || (y == null)) {
                var re5digit=/^\d{11}$/
                if (document.br.mobileno.value.search(re5digit)==-1) {
                        swal("Mobile Number should consist of 11 digits only");
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

.title{
	margin: auto 5px auto 5px;
	font-size: 16px;
}
        </style>
        <meta charset="UTF-8">
        <title> BORROWER'S FORM </title>
    </head>
    <body background="bg-2.png">
	<a href = "index.php"> <img src="UST.png" style="width:160px;height:160px;"> </a>
	<center><p class="ust"> UNIVERSITY OF SANTO TOMAS </p>
	<p class="ce"> CIVIL ENGINEERING DEPARTMENT </p>
	<p class="es"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
	<img class="logo" src="USTlogo.png" style="width:150px;height:150px;">
       
        <div class="modal">
		<div class="container">
        <form class="modal-content" name="br" id="br" method="POST" target = "_top" onSubmit="return confirm('Borrow thesis entitled <?php echo $_POST['title']; ?>?');">
        <div class="imgcontainer">
      <span onclick="location.href = 'index.php'" class="close" title="Close">&times;</span>
      <img src="b.png" style="width:170px;height:170px;" alt="Avatar" class="avatar">
    </div>
		
		<br>
        <center>
              <fieldset>
                    <legend> Borrower Form </legend> 
					
					<p> Please follow the specified format. </p>
					
                    <label> <b> Full Name </b> <font color="red"> * </font> </label> 
					<br><input type = "text" id = "first" name = "first" style="width:20%" placeholder="Juan" pattern = "[a-zA-Z\s]{1,}" title = "Name should consist of letters only." autofocus required> &nbsp;
                  	<input type = "text" name = "last" id = "last" pattern = "[^0-9]+" style="width:20%" placeholder="Dela Cruz" pattern = "[a-zA-Z\s]{1,}" title = "Name should consist of letters only." required  > <br>
					<br><label> <b> Student no. </b> <font color="red"> * </font> </label>
					&nbsp; <input type = "text"  id="studno" name = "studno" maxlength = 10 style="width:20%"  placeholder="2015081300"  title = "Student number should consist of 10 digits only." required> &nbsp;
					    <label><b> Yr & Section: </b><font color="red"> * </font></label>&nbsp <input type = "text" id = "yrsec" style="width:15%" placeholder = "5CE-A" name = "yrsec" required> <br>
						<label><b>Thesis Group No:</b></label> <font color="red"> * </font> <input type = "text" id = "groupno" name = "groupno" style="width:35%" placeholder="Write N/A if not applicable" required> <br>  
                      <label><b>Mobile No:<b></label> <font color="red"> * </font> <input id = "mobileno"  type = "text" name = "mobileno" maxlength = 11 style="width:30%" placeholder="09171234567" title = "Mobile number should consist of 11 digits only." required> 
					<br>  <font color = "red"> * </font> <input type = "checkbox" id = "check" name = "check" required> <font size = 1 > I hereby agree to abide by the terms and conditions as provided in the Student Handbook <br> PPS NO. 1027 Code of Conduct and Discipline. I understand that any acts of dishonesty particularly Plagiarism <br> may be sanctioned depending on the gravity of the case even to the extent of dismissal. </font> <br> <br>
			</fieldset>
        </center>
					 <input type = 'hidden' name = 'title1' value = "<?php echo $_POST['title']; ?>" >
					 <input type = 'hidden' name = 'code1' value = "<?php echo $_POST['code']; ?>" >
					  
					 <center>
		<div class="container" style="background-color:#EBF5FB">
		<br>
            <button class="submit buttonlogin" name="submit" type="submit" value="submit" onclick = "return validate();"> Borrow </button> 
			<button class="submit buttonlogin" name="cancel" type="button" value="cancel" onclick="window.location.href='index.php';"> Cancel </button> 
        
		<br>
		
		</div>
		</center>
        </form>
       
        </div>
        </div>
		</div>
		</div>
        
       
	   <?php
            if(isset($_POST['submit']))
			{
				
				date_default_timezone_set("ASIA/SINGAPORE");
				
                $first = $_POST['first'];
                $last = $_POST['last'];
				$studno = $_POST['studno'];
                $yrsec = $_POST['yrsec'];
                $groupno = $_POST['groupno'];
				$mobileno = $_POST['mobileno'];
				$title = $_POST['title1'];
				$code = $_POST['code1'];
				$date = date("Y-m-d");
				$timeB = date("h:i:s A");
				$timeR = "---";
				$status = "Borrowed";
				
				
                $query = "INSERT INTO borrower(First, Last, StudNo, YrSec, GroupNo, MobileNo, code, thesistitle, Date, TimeB, TimeR, Status) VALUES('$first','$last','$studno','$yrsec','$groupno','$mobileno','$code', '$title', '$date','$timeB','$timeR','$status')";
                $response = @mysqli_query($dbc, $query);
				
				$query1 = "UPDATE thesis SET status = 'Borrowed' WHERE code = '$code'";
				$responses = @mysqli_query($dbc, $query1);
				
				
				
				$msg = "Thesis entitled: $title was successfully borrowed!";
				echo "<script type='text/javascript'> swal('$msg');</script>";
				echo "<script>setTimeout(\"location.href = 'index.php';\",4000);</script>";
				
                mysqli_close($dbc);
            }
			
            
        ?>

        

    </body>
    <!--2NIpGQzTom7IpiTl-->
</html>