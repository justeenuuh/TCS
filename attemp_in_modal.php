<?php session_start(); ob_start(); require_once('mysqli_connect.php');?>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="modal_delete.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <!-- Include jQuery -->
  <script src="jq.js"></script>

  <!-- Include jQuery Popup Overlay -->
  <script src="popup.js"></script>
  
  <script type="text/javascript">
                $(document).ready(
					function(){
						$('id:submit').attr('disabled',true);
						$('input:file').change(
							function(){
								if ($(this).val()){
									$('input:submit').removeAttr('disabled'); 
								}
								else {
									$('input:submit').attr('disabled',true);
								}
							});
					});
            </script>
			
			
			<script type="text/javascript">
			$( document ).ready(function() {
				
				$("input[title=Title]").hide();
				
				  $('#cat').change(function() {
					
					var val = $(this).val();
					console.log(val);
					if(val=="Other")
					$("input[title=Title]").show();
					else
					 $("input[title=Title]").hide();
					});
			 });

		</script>
		
			 <script type="text/javascript">
                $(document).ready(function()
				{
					$("#sch option[value='title']").attr('disabled', true);
					$("#sch option[value='author']").attr('disabled', true);
					$("#sch option[value='kwords']").attr('disabled', true);
					$("#sch option[value='tcode']").attr('disabled', true);
					$("input[name=gosearch]").attr('disabled',true);
					$("input[name=keyword]").keyup(function()
					{
						if($(this).val().length != 0 )
						{
							$("#sch option[value='title']").attr('disabled', false);
							$("#sch option[value='author']").attr('disabled', false);
							$("#sch option[value='kwords']").attr('disabled', false);
							$("#sch option[value='tcode']").attr('disabled', false);
							$("input[name=gosearch]").attr('disabled',false);
						}
						else
						{
							$("#sch option[value='title']").attr('disabled', true);
							$("#sch option[value='author']").attr('disabled', true);
							$("#sch option[value='kwords']").attr('disabled', true);
							$("#sch option[value='tcode']").attr('disabled', true);
							$("input[name=gosearch]").attr('disabled',true);
						}
					})
				});
            </script>
			
			
		
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
// Get the modal
var modal = document.getElementById('id05');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
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
		
		
		button.s {
	
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 10px 0;
		border: none;
		cursor: pointer;
	   
		
		}

		.add{
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
	border-radius: 4px;
	font-family: Trebuchet MS;
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
					width: 30%; /* Could be more or less, depending on screen size */
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
		
		
            table {
			   margin-left: auto
			   margin-right: auto;
			   bottom: 10%;
			   left: 10%;
			   align: center;
			   vertical-align:center;
			
				position: absolute;
				border-collapse: collapse;
				
				width: 80%;
				
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
			
					 	/* Dropdown Button */
			.dropbtn {
				border: none;
				color: white;
				padding: 10px 10px;
				font-size: 14px;
				cursor: pointer;
				background-color: #3CB371;
				font-family: Trebuchet MS;
				border-radius: 4px;
			}
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
			.dropdown-content a:hover {background-color: #AED6F1}

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
				left: 64%;
				width: 100px;
				width: 15%;
				box-sizing: border-box;
				border: 2px solid #ccc;
				border-radius: 2px;
				font-size: 14px;
				background-color: white;
				padding: 10px 5px 5px 5px;
				border-radius: 4px;
			   

			}

			.buttonshow {
				border: none;
				color: white;
				padding: 10px 10px;
				font-size: 14px;
				cursor: pointer;
				background-color: #3CB371;
				font-family: Trebuchet MS;
				border-radius: 4px;
			}
			.buttonshow:hover, .buttonshow:focus {
							background-color: #2980B9;
						}

			.go {
				
				border: none;
				color: white;
				padding: 10px 10px;
				font-size: 14px;
				cursor: pointer;
				background-color: #3CB371;
				font-family: Trebuchet MS;
				width: 60px;
				border-radius: 4px;
			}

			.go:hover {background: #ddd;}

			.srch2 {
			position: absolute;
			border: none;
			color: white;
			padding: 10px 10px;
			font-size: 14px;
			cursor: pointer;
			background-color: #3CB371;
			font-family: Trebuchet MS;
			width: 60px;
			top: 24.5%;
			right: 15.5%;
			border-radius: 4px;
			
		}

		.srch2:hover {background-color: #2980B9}

			.search1{
				
				font-family: Trebuchet MS;
				color: #gfhg^666;
				position: center;
				font-size: 20px;
				border-radius: 4px;
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
				left: 47%;
			}

			.brrwr {
				position: absolute;
				bottom: 70%;
				left: 52%;
				border: none;
				color: white;
				padding: 10px 10px;
				font-size: 14px;
				cursor: pointer;
				background-color: #3CB371;
				font-family: Trebuchet MS;
				border-radius: 4px;
			}
			.brrwr:hover, .brrwr:focus {
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
				cursor: pointer;
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

			.ie {
				position: absolute;
				bottom: 8%;
				left: 67%;
				color: black;
				font-family: Trebuchet MS;
			}

			.iesubmit{
				position: absolute;
				bottom: 8%;
				left: 91%;

				font-family: Trebuchet MS;
			}

			.e{
				position: absolute;
				padding: 10px;
				bottom: 3%;
				left: 10%;
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
				left: 80%;
				position: absolute;
				display: inline-block;
				box-sizing: border-box;
				margin: 0 auto;
				width: 20%;
				
				
			}

			.addf {
				font-family: Trebuchet MS;
			}

			.rounded {
			   -webkit-border-radius: 20px;
			   -moz-border-radius: 20px;
			   border-radius: 20px;
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

			.pagination {
			   display: inline-block;
				position: absolute;
				top: 91%;
				right: 20%;
				align: center;
				vertical-align:center;
				
			}

			.pagination a {
				color: white;
				font-weight: bold;
				font-family: Trebuchet MS;
				float: left;
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
			.center {
				text-align: center;
			}
			.add1 {
				border-radius: 4px;
				border: none;
				color: white;
				padding: 10px 10px;
				font-size: 14px;
				cursor: pointer;
				background-color: #3CB371;
				font-family: Trebuchet MS;
				
			}
			.add1:hover, .adds:focus {
							background-color: #2980B9;
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
			  <button onclick="myFunction()" style="cursor:pointer" class="unselectable dropbtn"> Account </button>
			  <div id="myDropdown" class="dropdown-content">
			  
				<a onclick="window.location.href='changepwd.php';" style="width:auto;"> Change Password </a>
				<div id="id01" class="modal">
  
 <form class="modal-content animate" name = "chp" id = "chp" method="POST" target="_top" action = "changepwd.php" onSubmit="return confirm('Are you sure you want to change your password?');">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="password.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<center>
           <script> 
function val() {
		
				var x = document.getElementById("uname");
				var y = x.value;
				var a = document.getElementById("oldp");
				var j = a.value;
				var b = document.getElementById("newp");
				var c = b.value;
				var d = document.getElementById("conp");
				var e = d.value;
				
				var f = document.getElementById("olde");
				var g = f.value;
				var h = document.getElementById("newe");
				var i = h.value;
				var k = document.getElementById("cone");
				var l = k.value;
        
				if ((y == "") || (y == null) || (j == null) || (j == "") || (c == null) || (c == "")) || (e == null) || (e == "")
					|| (g == null) || (g == "") || (i == null) || (i == "") || (l == null) || (l == "")
					{
               
                        alert("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
			</script>
        <br>
       
                    <legend><b> Change Password: </b> </legend> 
					<label> <b> Username: </b> </label> <font color = red> * </font> <input type = "text" name = "uname" style="width:40%" autofocus required> <br>
                    <label> <b> Old Password: </b> </label> <font color = red> * </font> <input type = "password" name = "oldp"  style="width:40%" placeholder="******" required> <br>
					<label> <b> New Password: </b> </label> <font color = red> * </font> <input type = "password" name = "newp" pattern=".{6,}" title = "6 characters minimum" style="width:40%" placeholder="******" required> <br>
					<label> <b> Confirm Password: </b> </label> <font color = red> * </font> <input type = "password" name = "conp"  pattern=".{6,}" title = "6 characters minimum" style="width:40%" placeholder="******" required> <br>
					

						 
        <br>
<center>
            <div class="container" style="background-color:#f1f1f1">
		<button class="buttonlogin" name="chp" type="submit" value="chp" >Change</button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div> 
	
	
	<!-- PHP FOR CHANGE PASSWORD -->  
	
				
				
				<a onclick="window.location.href='changemail.php';" style="width:auto;"> Change Email </a>
				<div id="id02" class="modal">
  
  <form class="modal-content animate" name = "chem" method="POST" target="_top" action = "changemail.php" onSubmit="return confirm('Are you sure you want to change your email address?');">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="email.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<center>
                
        <br>
       
                    <legend><b> Change Email </b></legend> 
					<label> <b> Username: <font color = red> * </font> </b> </label> <input type = "text" name = "uname" style="width:40%" autofocus required> <br>
                    <label> <b> Old Email: <font color = red> * </font> </b> </label> <input type = "email" name = "olde" style="width:40%" placeholder="oldemail@gmail.com" required> <br>
					<label> <b> New Email: <font color = red> * </font>  </b> </label> <input type = "email" name = "newe" style="width:40%" placeholder="newemail@gmail.com" required> <br>
					<label> <b> Confirm Email: <font color = red> * </font> </b> </label> <input type = "email" name = "cone" style="width:40%" placeholder="newemail@gmail.com" required> <br>
					

						 
        <br>
<center>
            <div class="container" style="background-color:#f1f1f1">
		<button class="buttonlogin" name="che" type="submit" value="che" >Change</button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div> 
	
	<!--PHP FOR CHANGE EMAIL-->
	
				
				<a href="logout.php"> Logout </a>
			  </div>
			</div>
		
		
 
  <div class="advance">
 
  <center><button style="cursor:pointer" onclick="document.getElementById('id04').style.display='block'" class="buttonshow unselectable">Search Options</button></center>

  <div id="id04" class="modal">
    <form class="modal-content animate" method="POST" target = "_top">
      <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close">&times;</span>
      <img src="filter.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<center>

      <center>
	  <form></form>
<SCRIPT LANGUAGE="JavaScript">

<!-- 
var time = new Date();
var year = time.getYear();
if (year < 1900) {
year = year + 1900;
}
var date = year - 15; /*change the '101' to the number of years in the past you want to show */
var future = year + 20; /*change the '100' to the number of years in the future you want to show */ 
document.write("<div class='select-style'>");
document.write("Year:");
document.write("<FORM action = 'adminsitesort.php' method = 'POST'> <SELECT name = 'yr'>");
document.write("<option value='all'> All </option>");
do {
date++;

document.write ("<OPTION value=\"" +date+"\">" +date+ "");
}
while (date < future)
document.write ("</SELECT>");
//   -->

</script>
</div>


<div class="categ">
 Category: <br>
<select name = "cat" id="cat">
	
		<option value="all"> ALL </option> 
		<option value="STRUCTURAL"> STRUCTURAL </option> 
		<option value="WATER"> WATER </option>
		<option value="SOIL"> SOIL </option>
		<option value="CONSTRUCTION"> CONSTRUCTION </option>
		<option value="TRANSPORTATION"> TRANSPORTATION </option>
		<option value="ENVIRONMENT"> ENVIRONMENT </option>
		<option value="Other"> OTHERS </option>
		</select>
			<input title="Title" placeholder="HYDRAULICS" name = "unique" id="Title_fa564e0f-0c70-4ab9-b863-0177e6ddd247_$TextField" type="text" autofocus >
		 <br>
	
	Search by:<br>
	<select name="sch" id = "sch">
	<option value="all"> All </option> 
	<option value="title" disabled> Title </option> 
	<option value="author" disabled> Author </option>
	<option value="kwords" disabled> Keywords </option>
	<option value="tcode" disabled> Thesis Code </option>
	</select>
	
	</div>

	<div class="container" style="background-color:#f1f1f1">
	<input style="cursor:pointer" class ="go" type="submit" name="go" value="Apply">
		</div>
	
	</div> 
</center>

	
	</div> 
	<div class="search1">
	 <input class="se" type="text" id = "srch" name="keyword" placeholder = "Title, Author, Keywords..."><br>
	 <input class ="srch2" type="submit" name="gosearch" value="Go" disabled>
	 </div>

 </form>
 
 
			</div>
			</div>
			
			<div class="add">
			 <img src="add_1.png" onclick="window.location.href='addthesis.php';" style="width:50px;" >
				
		 </div>
		 <!--PHP FOR ADD THESIS-->
		
		 
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
	<?php	
	
		 if(!isset($_SESSION['uname'])) 
       {
           header("Location:index.php");  
       }
	   else
	   {
	
				date_default_timezone_set("ASIA/SINGAPORE");
                
				$results_per_page = 15;
				$range_per_page= 5;
				
				if (!isset($_GET['page'])) {
					$page = 1;
				} else {
					$page = $_GET['page'];
				}
				$this_page_first_result = ($page-1)*$results_per_page;;
				
				$sql =  "SELECT * FROM thesis ORDER BY ttitle asc";
				$result = @mysqli_query($dbc, $sql);
				$number_of_results = mysqli_num_rows($result);
				$number_of_pages = ceil($number_of_results/$results_per_page);
				
				if ($page>$number_of_pages) {
					$page == $number_of_pages;
				}
				if ($page<1){
					$page=1;
				}
				
				$query =  "SELECT * FROM thesis ORDER BY ttitle asc LIMIT " . $this_page_first_result . ',' .$results_per_page ;
				$response = @mysqli_query($dbc, $query);
			
				echo "<center> <table id='tables'>" ;
				echo "<th> Thesis Code </th>" ;
				echo "<th> Thesis Title </th>" ;
				
				echo "<th> Category </th>" ;
				echo "<th> Year </th>" ;
				echo "<th> Author/s </th>" ;
				
				echo "<th> Location </th>" ;
				echo "<th> Status </th>" ;
				echo "<th> </th>" ;
				echo "<th> </th>" ;
				while ($row = mysqli_fetch_array($response))
				{
									
					echo
					 " <tr>" .
					 "<td class = 'nw'> <center>" .   $row['code'] . "</center> </td>" .
					"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
					
					"<td> <center>" .  $row['category'] . "</center> </td>" .
					"<td> <center>" .  $row['year'] . "</center> </td>" .
					"<td> <center>" .  $row['author'] . "</center> </td>" .
					
					"<td> <center>" .  $row['location'] . "</center> </td>" .
					"<td> <center>" .  $row['status'] . "</center> </td>" ;
					
									$title = $row['ttitle'];
									$code = $row['code'];
									echo "<div class='containers'>";
									echo "<td> <center>" . "<button name='delete'class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'> DELETE </button>" . "</center> </td>";
										echo "<div id='myModal' class='modal fade' role='dialog'>";
										echo "<div class='modal-dialog'>";
										echo "<div class='modal-content'>";
										echo "<div class='modal-header'>";
										echo "<button type='button' class='close' data-dismiss='modal'>&times;</button> </div>";
										echo "<div class='modal-body'>";
											echo  "<form method = 'POST' action = 'delete.php'>";
											echo "Are you sure you want to delete this thesis?";
											echo "Once deleted, it can no longer be recovered.";
											echo "<input type = 'hidden' name = 'title' value = '$title' >";
											echo "<input type = 'hidden' name = 'code' value = '$code' >";
										 echo " </div>";
										 echo "<div class='modal-footer'>";
										 echo "<button type='submit' class='buttonborrow' value='" . $row['code']. "' > YES </button>"; ?>
										 <button type='button' class='buttonborrow' onclick="window.location.href='thesisadmin.php';"> NO  </button>";
										 <?PHP
										 echo "</form>";
										 echo "</div>";
										echo "</div>";
										echo "</div>";
									echo "</div>";
									echo "</div>";	
										
							
						echo "<td> <center>" . "<form class ='edit_popup_open' action='editthesis.php' method = 'POST'> 
						<button name='edit' class='buttonborrow' type='submit' value='" . $row['code']. "'> EDIT </button> </form>" . "</center> </td>";
						
								if(isset($_POST["edit"])){
								require_once('mysqli_connect.php');		
								
								echo "<div id='edit_popup'><iframe src='editthesis.php' width='497' height='298' seamless=''></iframe>";

		 
								echo "<button class='edit_popup_close'>Close</button>";

								echo"</div>";
								
						}
								
							
						
					echo "</tr> " ;			
				}
				echo "</table> </center>";
                mysqli_close($dbc);
				echo "<div class='center'>";
				echo "<div class='pagination'>";
				
				if ($page>1) {
					echo " <a href='thesisadmin.php?page=1'>First</a> ";
					$prevpage = $page - 1;
					 echo " <a href='thesisadmin.php?page=$prevpage'>Prev</a> ";
				}
				
				for ($i=$page-$range_per_page;$i<(($page+$range_per_page)+1);$i++) {
					if ($i==$page){
						echo "<a class='active'>". $i ."</a>";
					}
					else if ($i>0 && $i<=$number_of_pages) {
						if ($i == $page) {
							echo " [<b>$i</b>] ";
						}
						else {
							echo '<a href="thesisadmin.php?page=' .$i. '">' .$i. '</a> ';
						}
					}
					
				}
				if ($page != $number_of_pages) {
					$nextpage = $page + 1;
					echo " <a href='thesisadmin.php?page=$nextpage'>Next</a> ";
					echo " <a href='thesisadmin.php?page=$number_of_pages'>Last</a> ";
				}
				
				echo "</div>";
				echo "</div>";
	   }
        ?>
		<br>
		</center>
		
		 
		 
	
	
	<br>
	
	<button class="buttonlogin e" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Import/Export Thesis List</button>
  
  <div id="id05" class="modal">
  
  <div class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close">&times;</span>
      <img src="ie.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container">
	<center>
	<form action="import.php" method = "POST" enctype="multipart/form-data">
	<legend> Import a file </legend>
	<h5> To import thesis information to the table, the file must be of type .csv </h5>
	
  <b>Upload .csv file: </b> <input type="file" name="file" id="file" class="input-large" accept=".csv" /> 
  
  <input class="buttonborrow" type="submit" id="submit" name="Import" disabled="disabled" value="Import File"/>
					   
 	 </form>
	<br>
	
		<legend> Export a file </legend>
		<h5> This will convert and save the list of thesis that is currently in the system to a .csv file </h5>
		 <form action="import.php" method="post" name="upload_excel"  enctype="multipart/form-data">
                                <input class = "buttonborrow" type="submit" name="Export" value="Export File"/>
            </form>        
</div>	
</div>		
</center>
	</div>
	</div>
	<script src="js/main.js"></script>
		   </body>
    <!--2NIpGQzTom7IpiTl-->
</html>
