<?php session_start(); ob_start(); require_once('mysqli_connect.php');
	$title = null;
	$code = null;
	$categ = null;
	$yr = null;
	$author = null;
	$kword = null;
	$status = null;
	
	$test = $_POST['edit'];
	$test2 = $test;
	
	$select = "SELECT * FROM thesis WHERE code='" . $test . "'";
	$selectaction = @mysqli_query($dbc, $select);
	while($item = mysqli_fetch_array($selectaction)){
		$title =  $item['ttitle'];
		$code =  $item['code'];
		$categ =  $item['category'];
		$yr =  $item['year'];
		$author =  $item['author'];
		$kword = $item['keyword'];
		$status =  $item['status'];
		$location = $item['location'];
	}
?>
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
        
				if ((y == "") || (y == null) || (j == null) || (j == "") || (k == "") || (k == null) || (l == "") || (l == null) || (m == "") || (m == null) || (n == "") || (n == null))
					{
               
                        swal("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
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
        <title> Edit Thesis </title>
    </head>
     <body background="bg-2.png">
	<a href = "index.php"> <img src="UST.png" style="width:160px;height:160px;"> </a>
	<center><p class="ust"> UNIVERSITY OF SANTO TOMAS </p>
	<p class="ce"> CIVIL ENGINEERING DEPARTMENT </p>
	<p class="es"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
	<img class="logo" src="USTlogo.png" style="width:150px;height:150px;">

<div class="modal">
		<div class="container">
        <form class="modal-content" method="POST" onSubmit="return confirm('Are you sure you want to save the changes?');">
        <div class="imgcontainer">
   
      <img src="edit.png" style="width:160px;height:160px;" alt="Avatar" class="avatar">
    </div>
  
        
        <br>
        <center>
		<fieldset>
                    <legend> Please fill out all the information </legend> 
					
                    <label> <b> Complete Thesis Title: </b> </label> <font color="red"> * </font><br> <input id = "ttitle" type = "text" name = "ttitle" style="width:95%"  value="<?php echo $title; ?>" autofocus required> <br>
					  <label> <b> Specialization/Category: </b> </label> <font color="red"> * </font> <input type = "text" id = "category" name="category" value="<?php echo $categ; ?>" required> <br>
						<label> <b>Year: </b> </label> <font color="red"> * </font> <input min = 2004 max = 3000 type = "number" id = "year" name = "year"  value="<?php echo $yr; ?>" required > <br> 
						<label> <b>Author/s : </b> </label> <font color="red"> * </font> <input type = "text" id = "author" pattern = "[^0-9]+" name = "author" value="<?php echo $author; ?>" required > <br> 
						<label> <b>Location:</b> </label> <font color="red"> * </font> <input type = "text" name = "location" id = "location" value="<?php echo $location; ?>" placeholder="Shelf 1" required > <br> 
						<label> <b>Keyword/s : </b> </label> <input type = "text" id = "kword" required name = "kword"  value="<?php echo $kword; ?>"> <br> 
						</fieldset>
						<input type="hidden" name = "secret" value = "<?php echo $test; ?>" >
					   
        </center>
        <br>

        <center>
		<div class="container" style="background-color:#EBF5FB"><br>
            <button class="save buttonlogin" name="submit" type="submit" value="submit" onclick = "return validate();" style="width:10%; margin-top: -2px;">Save</button> 
			 <input class = "buttonlogin" type="button" onclick="window.location.href='thesisadmin.php';" value = "Cancel"> <br> </form>
			</div>
			</div>
		</center>
		<?php
			if(!isset($_SESSION['uname'])) 
			   {
				   header("Location:index.php");  
			   }
            if(isset($_POST['submit']))
			{
				date_default_timezone_set("ASIA/SINGAPORE");
					
                $editt = $_POST['ttitle'];
				$editc = $_POST['secret'];
                $editcat = $_POST['category'];
				$edity = $_POST['year'];
                $edita = $_POST['author'];
				$editk = $_POST['kword'];
				$editl = $_POST['location'];
				
				$wow = "UPDATE thesis SET ttitle = '$editt', category = '$editcat', year = '$edity', author = '$edita', keyword = '$editk', location = '$editl' WHERE code = '$editc'";
				$bbeng = @mysqli_query($dbc, $wow);
			
                mysqli_close($dbc);
				header("Location: thesisadmin.php");
				
            }
            
        ?>
        </div>
        </div>

       
		
		
    </body>
    <!--2NIpGQzTom7IpiTl-->
</html>