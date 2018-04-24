<?php session_start(); ob_start(); require_once('mysqli_connect.php');?>
<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
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
	  
	  <!-- Include jQuery -->
  <script src="jq.js"></script>

  <!-- Include jQuery Popup Overlay -->
  <script src="popup.js"></script>

  <script>
    $(document).ready(function() {

      // Initialize the plugin
      $('#my_popup').popup();
	  $('#edit_popup').popup();
	  $('#pwd_popup').popup();
	  $('#mail_popup').popup();

    });
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


			<script>
			// Get the modal
			var modal = document.getElementById('id04');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
			</script>
			
			<script>
			// Get the modal
			var modal = document.getElementById('id02');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
			</script>
			 

			<script>
			// Get the modal
			var modal = document.getElementById('id03');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
			</script> 
			
	<script>
		function liveSearch() {
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("ls");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("tables");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) {
			  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}       
		  }
		}
	</script>
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
               
                        alert("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
		}
	</script>

        <style>
		body{
			overflow:hidden;
		}
		.scroll
		{
			min-height: 67.5%;
			width: 26.5%;
			position: absolute;
			top: 162%;
			overflow: scroll;
		}
		.buttonborrow {
	border-radius: 4px;
	border: none;
    color: white;
    padding: 10px 10px;
    font-size: 14px;
    cursor: pointer;
	background-color: #3CB371;
	font-family: Trebuchet MS;
}
.buttonborrow:hover, .buttonborrow:focus {
				background-color: #2471A3;
			}

		
		
		button.s {
	
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 10px 0;
			border: none;
			cursor: pointer;
		   
			
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
			padding: 10px 10px;
		}

		.container2 {
			padding: 10px 10px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
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
			width: 25%; /* Could be more or less, depending on screen size */
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
		.add{
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
				
				
			 table {
			   margin-left: auto
			   margin-right: auto;
			   bottom: 10%;
			   left: 10%;
			   align: center;
			   vertical-align:center;
			
				position: absolute;
				border-collapse: collapse;
				
				width: 100%;
				
				display: block; 
				height: 400px;       /* Just for the demo          */
					overflow-y: auto;    /* Trigger vertical scroll    */
					overflow-x: auto;  /* Hide the horizontal scroll */
			}


			th, td {
				font-family: Trebuchet MS;
				text-align: center;
				padding: 5px;
				border-bottom: 1px solid #ddd
				}

			tr:nth-child(even){background-color: #f7f7f7}
			tr:nth-child(odd){background-color: #ffffff}

			tr:hover {background-color: #ddd;}
			th {
				background-color: #ece5e0;
				color: black;
				height: 5opx;
			}
			
			#tables {
							font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
							border-collapse: collapse;
							width: 85%;
							border-radius: 10px;
						}

						#tables td, #tables th {
							padding: 8px;
						}

						#tables tr:nth-child(even){background-color: #f2f2f2;}

						#tables tr:hover {background-color: #CFEBFE;}

						#tables th {
							padding-top: 12px;
							padding-bottom: 12px;
							text-align: center;
							background-color: #2471A3;
							color: white;
						}
					
								/* Dropdown Button */
					.dropbtn {
						border-radius: 4px;
						border: none;
						color: white;
						padding: 10px 10px;
						font-size: 14px;
						cursor: pointer;
						background-color: #3CB371;
						font-family: Trebuchet MS;			}
			/* Dropdown button on hover & focus */
			.dropbtn:hover, .dropbtn:focus {
				background-color: #2980B9;
			}

			/* The container <div> - needed to position the dropdown content */
			.dropdown {
				position: absolute;
	top: 3%;
	right: 15%;
			}

			/* Dropdown Content (Hidden by Default) */
			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
				font-family: Trebuchet MS;
				font-size: 14px;
				cursor: pointer;
			}

			/* Links inside the dropdown */
			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				cursor: pointer;
			}

			/* Change color of dropdown links on hover */
			.dropdown-content a:hover {background-color: #f1f1f1}

			/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
			.show {display:block;}
			
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

				.login {
					position: absolute;
					top: 3%;
					right: 18%;
					
				}


				.se{
				position: absolute;
				bottom: 70%;
				left: 74%;
				width: 100px;
				width: 15%;
				box-sizing: border-box;
				border: 2px solid #ccc;
				border-radius: 2px;
				font-size: 14px;
				background-color: white;
				padding: 10px 5px 5px 5px;
				border-radius: 4px;
				font-family: Trebuchet MS;
			   

}

				.buttonshow {
					border: none;
					color: white;
					padding: 10px 10px;
					font-size: 14px;
					cursor: pointer;
					background-color: #3CB371;
					font-family: Trebuchet MS;
				}


				.select-style {
					
					border: 1px solid #ccc;
					width: 120px;
					border-radius: 3px;
					overflow: hidden;
					background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
					color:white;
				}

				.select-style{
					padding: 5px 8px;
					width: 130%;
					border: none;
					box-shadow: none;
					background: transparent;
					background-image: none;
					-webkit-appearance: none;
				}

				.select-style, .categ select:focus {
					outline: none;
				}

				.categ {
					
					color: white;
				}

				.go {
					
					border: none;
					color: black;
					padding: 3px 10px;
					font-size: 12px;
					cursor: pointer;
					background-color: #f2f2f2;
				}

				.go:hover {background: #ddd;}

				.search1{
					
					
					color: #gfhg^666;
					position: center;
					font-size: 14px;
				}

				iframe {
				  display:block;
				  width:850px;
				  height:500px;
				  background-color: white;
				}


				.add {
					position: absolute;
					bottom: 69%;
					left: 57%;
				}

				.brrwr {
					position: absolute;
					bottom: 70%;
					left: 62%;
					border: none;
					color: white;
					padding: 10px 10px;
					font-size: 14px;
					cursor: pointer;
					background-color: #3CB371;
					font-family: Trebuchet MS;
					border-radius: 4px;
				}
				.brrwr:hover, .brwrr:focus {
				background-color: #2980B9;
			}


				button.s {
					background-color: #4CAF50;
					color: white;
					padding: 14px 20px;
					margin: 10px 0;
					border: none;
					cursor: pointer;
					
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
					display: none; /* Hidden by default */
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

				.home {
					position: absolute;
					bottom: 69%;
					left: 10%;
					color: white;
					font-family: Trebuchet MS;
					
				}

				.reset:hover{
					color: white;
					box-shadow: 0 0 11px rgba(33,33,33,.2); 
				}

				.advance {
					bottom: 70%;
					left: 75%;
					position: absolute;
					display: inline-block;
					box-sizing: border-box;
					margin: 0 auto;
					width: 20%;
					
					
				}
				.noresult {
				font-family: Trebuchet MS;
				text-align: center;
				font-size: 16 px;
				color: white;
				font-weight: bold;
			}
			
			.pagination {
    display: inline-block;
	position: absolute;
	top: 88%;
	right: 20%;
	align: center;
	vertical-align:center;
	
}

.pagination a {
    color: white;
	font-weight: bold;
	font-family: Trebuchet MS;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #2874A6;
    color: white;
    border-radius: 5px;
}

.pagination a:hover:not(.active) {
    background-color: #2874A6;
    border-radius: 5px;
}

#tables {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 85%;
	border-radius: 10px;
}

#tables td, #tables th {
    padding: 8px;
}

#tables tr:nth-child(even){background-color: #f2f2f2;}

#tables tr:hover {background-color: #CFEBFE;}

#tables th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #2471A3;
    color: white;
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
<div class = "home">
<a  href = "thesisadmin.php"> <img src="home.png" style="width:50px;height:50px;"> </a> <a class = "reset" href = "thesisadmin.php"> Home </a>
        </div>
		
		<div class="dropdown">
			  <button onclick="myFunction()" style="cursor:pointer" class="dropbtn"> Account </button>
			  <div id="myDropdown" class="dropdown-content">
			  
				<a onclick="window.location.href='changepwd.php';" style="width:auto;"> Change Password </a>
				<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" target = "_top">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="password.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<center>
                    <form name = "chpwd" method="POST" target="_top" action = "changepwd.php" onSubmit="return confirm('Are you sure you want to change your password?');">
        <br>
       
                    <legend><b> Change Password </b> </legend> 
					<label> <b> Username: </b> </label> <font color = red> * </font> <input type = "text" name = "uname" style="width:40%" autofocus required> <br>
                    <label> <b> Old Password: </b> </label> <font color = red> * </font> <input type = "password" name = "oldp" style="width:40%" placeholder="******" required> <br>
					<label> <b> New Password: </b> </label> <font color = red> * </font> <input type = "password" name = "newp" pattern=".{6,}" title="6 characters minimum"style="width:40%" placeholder="******" required> <br>
					<label> <b> Confirm Password: </b> </label> <font color = red> * </font> <input type = "password" name = "conp" pattern=".{6,}" title="6 characters minimum" style="width:40%" placeholder="******" required> <br>
					

						 
        <br>
<center>
            <div class="container" style="background-color:#f1f1f1">
		<button class="s" name="chp" type="submit" value="chp">Change</button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div> 
	
	
	<!-- PHP FOR CHANGE PASSWORD -->  
	
				
				
				<a onclick="window.location.href='changemail.php';" style="width:auto;"> Change Email </a>
				<div id="id02" class="modal">
  
  <form class="modal-content animate" method="POST" target = "_top">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="email.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<center>
                    <form name = "chem" method="POST" target="_top" action = "changemail.php" onSubmit="return confirm('Are you sure you want to change your email address?');">
        <br>
       
                    <legend><b> Change Email </b></legend> 
					<label> <b> Username: <font color = red> * </font> </b> </label> <input type = "text" name = "uname" style="width:40%" autofocus required> <br>
                    <label> <b> Old Email: <font color = red> * </font> </b> </label> <input type = "email" name = "olde" style="width:40%" placeholder="oldemail@gmail.com" required> <br>
					<label> <b> New Email: <font color = red> * </font> </b> </label> <input type = "email" name = "newe" style="width:40%" placeholder="newemail@gmail.com" required> <br>
					<label> <b> Confirm Email: <font color = red> * </font> </b> </label> <input type = "email" name = "cone" style="width:40%" placeholder="newemail@gmail.com" required> <br>
					

						 
        <br>
<center>
            <div class="container" style="background-color:#f1f1f1">
		<button class="s" name="che" type="submit" value="che">Change</button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div> 
	
	<!--PHP FOR CHANGE EMAIL-->

				
				<a href="logout.php"> Logout </a>
			  </div>
			</div>
		 

	<form>
	<div class="search1">
	 <input class="se" id = "ls" type="text" onkeyup="liveSearch()" name="keyword" placeholder = "Search for titles..."> <br>
	 </div> 
 </form>
 
			<div class="add">
			 <img src="add_1.png" onclick="window.location.href='addthesis.php';" style="width:50px;">
				<div id="id03" class="modal">
 
  <form class="modal-content animate" method="POST" target = "_top" action = "addthesis.php" onSubmit="return confirm('Are you sure you want to add the thesis?');">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="add.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<form name = "addt" target="_top" method="POST">
        <br>
        
					<center>
                  
					<b>Thesis Code:</b> <font color="red"> * </font> <input type = "text" id = "code" name = "code" style="width:15%" placeholder="0304-01" pattern = "[0-9-]*$" title = "Thesis code should be of the format: 1718-01" autofocus required> <br> <br>
                    <b>Complete Thesis Title:</b> <font color="red"> * </font> <input type = "text" id = "ttitle" name = "ttitle" style="width:80%" placeholder="An Analysis on the Suitability of Bulacan Marble Dust as Soil Stabilizer" required> 
					<br> <br>
					<b>Category: </b><font color="red"> * </font> <input type="text" id = "category" required name="category" style="text-transform: uppercase" placeholder = "STRUCTURAL"><br>
						 &nbsp; &nbsp;
						
						<div id ="div1"> </div>
					<b>Year: </b><font color="red"> * </font> <input type = "number" id = "year" name = "year" style="width:30%" placeholder="2005" min="2004" max="3000" required > <br> 
					<b>Author/s:</b> <font color="red"> * </font> <input type = "text" id = "author" name = "author"  style="width:50%" placeholder="Dela Cruz, Juan A." required > <br> <br>
					<b>Location:</b> <font color="red"> * </font> <input type = "text" id = "location" name = "location"  style="width:30%" placeholder="CEL7" required > <br> <br>
					<b>Keyword/s: </b><font color="red"> * </font> <input type = "text" id = "kword" name = "keyword"  style="width:30%" placeholder="marble, dust, stabilizer" required > <br> <br>
					</div>
				
        </center>
		
            <div class="container" style="background-color:#f1f1f1">
		<center>
            <button class="s" target="_top" name="adds" type="submit" value="adds" onclick = "return validate();">Add Thesis</button> &nbsp
			
        </center>
		</div>
        </form>
	
	</div>
	
	</div> 
	</div>
		 </form>
		
		 </div>
			<input class ="brrwr" type="button" onclick="location.href='borrowersite.php';" value = "View Borrower's List">
		<script>
							function myFunction() {
					document.getElementById("myDropdown").classList.toggle("show");
				}

				// Close the dropdown menu if the user clicks outside of it
				window.onclick = function(event) {
				  if (!event.target.matches('.dropbtn')) {

					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
					  var openDropdown = dropdowns[i];
					  if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					  }
					}
				  }
				}
		</script>
		<center>
	
		<br>
		</center>
		
		 
		 
	
	
	<br>
	     
</div>			

	
	<script src="js/main.js"></script>
		
<?PHP		
		//PHP CODE FOR SORT AND SEARCH
		if(!isset($_SESSION['uname']))
		{
			header("Location:index.php");
		}
		if(isset($_POST['go']))
		{
				date_default_timezone_set("ASIA/SINGAPORE");				
				
				$search = $_POST['sch'];
				$keyword = $_POST['keyword'];
				$yr = $_POST['yr'];
				
				if($_POST['cat'] == "Other")
				{
					$cat = $_POST['unique'];
				}
				else
				{
					$cat = $_POST['cat'];	
				}
				
				if($search == "all" && $keyword != null && $yr == "all" && $cat == "all")
				{
					
					$query = "SELECT * FROM thesis WHERE ttitle LIKE '%" . $_POST['keyword'] . "%' OR category LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR status LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $query);
					$number_of_results = mysqli_num_rows($result);
				
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th>  </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
					
			
									$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
											echo "</table> </center>";
											
								
						 }
				}
				
				if($search == "all" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$sql =  "SELECT * FROM thesis WHERE year = '$yr' AND (ttitle LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%') ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
									
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
						
							
								 
						 }
				}
				
				if($search == "all" && $keyword != null && $yr == "all" && $cat != "all")
				{
								
					$sql =  "SELECT * FROM thesis WHERE category = '$cat' AND (ttitle LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%') ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
								
						 }
				}
				
				if($search == "all" && $keyword != null && $yr != "all" && $cat != "all")
				{
								
					$sql =  "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND (ttitle LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%') ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
							$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
								
						 }
				}
				
				else if($keyword == null && $yr != "all" && $cat != "all")
				{
							
					$sql = "SELECT * FROM thesis WHERE  year = '$yr' AND category = '$cat' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
									$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				else if($keyword == null && $yr == "all" && $cat != "all")
				{
					
					$sql = "SELECT * FROM thesis WHERE category = '$cat' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				else if($keyword == null && $yr != "all" && $cat == "all")
				{
					
					$sql = "SELECT * FROM thesis WHERE year = '$yr' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($keyword == null && $yr == "all" && $cat == "all")
				{
					
					$sql = "SELECT * FROM thesis ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				else if($search == "title" && $keyword != null && $yr == "all" && $cat == "all")
				{
					
					$sql = "SELECT * FROM thesis WHERE ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				else if($search == "title" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$sql = "SELECT * FROM thesis WHERE year = '$yr' AND ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				else if($search == "title" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$sql = "SELECT * FROM thesis WHERE category = '$cat' AND ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($search == "title" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$sql = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
						 }
				}
				
				else if($search == "author" && $keyword != null && $yr == "all" && $cat == "all")
				{
					$sql ="SELECT * FROM thesis WHERE author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
									$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
								
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($search == "author" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$sql ="SELECT * FROM thesis WHERE year = '$yr' AND author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($search == "author" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$sql ="SELECT * FROM thesis WHERE category = '$cat' AND author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
			else if($search == "author" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$sql = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
			
			else if($search == "kwords" && $keyword != null && $yr == "all" && $cat == "all")
				{
					$sql = "SELECT * FROM thesis WHERE keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
			
			else if($search == "kwords" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$sql = "SELECT * FROM thesis WHERE year = '$yr' AND keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($search == "kwords" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$sql =  "SELECT * FROM thesis WHERE category = '$cat' AND keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								
									$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
						 }
							echo "</table> </center>";
							
				}
				}
				
				else if($search == "kwords" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$sql = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($search == "tcode" && $keyword != null && $yr == "all" && $cat == "all")
				{
					$sql = "SELECT * FROM thesis WHERE code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
									$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($search == "tcode" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$sql =  "SELECT * FROM thesis WHERE year = '$yr' AND code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		echo "</tr>" ;
						
							}
							echo "</table> </center>";
							
						 }
				}
			
			else if($search == "tcode" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$sql =  "SELECT * FROM thesis WHERE category = '$cat' AND code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
							echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
						
							}
							echo "</table> </center>";
							
						 }
				}
				
				else if($search == "tcode" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$sql =  "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $sql);
					$number_of_results = mysqli_num_rows($result);
					
					
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table  id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
							echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
												
									
								$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
									
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
						
							}
							echo "</table> </center>";
							
						 }
				}
				
		}
		else if (isset($_POST['gosearch']))
		{
					$query = "SELECT * FROM thesis WHERE ttitle LIKE '%" . $_POST['keyword'] . "%' OR category LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR status LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$result = @mysqli_query($dbc, $query);
					$number_of_results = mysqli_num_rows($result);
				
					if($number_of_results == 0)
							{
								echo "<p class = 'noresult'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id = 'tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th>  </th>" ;
							echo "<th> </th>" ;
							
							while($row = mysqli_fetch_array($result))
							{
								echo
									 "<tr>" .
									 "<td class='nw'> <center>" .   $row['code'] . "</center> </td>" .
									"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
									
									"<td> <center>" .  $row['category'] . "</center> </td>" .
									"<td> <center>" .  $row['year'] . "</center> </td>" .
									"<td> <center>" .  $row['author'] . "</center> </td>" .
									
									"<td> <center>" .  $row['location'] . "</center> </td>" .
									"<td> <center>" .  $row['status'] . "</center> </td>" ;
					
			
									$title = $row['ttitle'];
									$code = $row['code'];
									echo "<td> <center>" . "<form method = 'POST' action = 'delete.php' onSubmit='return confirm(\"Are you sure you want to delete thesis?\");' > 
									<button name='delete' class='buttonborrow' type='submit' value='" . $row['code']. "'> DELETE </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
										echo "<td> <center>" . "<form method = 'POST' action='editthesis.php' onSubmit='return confirm(\"Are you sure you want to edit thesis?\");'> 
										<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
											

									echo "</tr>" ;		
							}
											echo "</table> </center>";
											
								
						 }
		}
			
		



?> 
	<br>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
</BODY>
</HTML>