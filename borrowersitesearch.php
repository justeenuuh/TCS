<?php session_start(); ob_start(); require_once('mysqli_connect.php'); require_once('fetch.php'); ?>
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
	
	  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="js/bootstrap.min.js"></script>
	
        <style>
			/* Dropdown Button */
			.dropbtn {
				border: none;
    color: white;
    padding: 10px 10px;
    font-size: 14px;
    cursor: pointer;
	background-color: #3CB371;
	font-family: Trebuchet MS;
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
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				text-align: center;
				padding: 8px;
				border-bottom: 1px solid #ddd
				}

			tr:nth-child(even){background-color: #f2f2f2}
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
			
			.noresult {
				font-family: Trebuchet MS;
				text-align: center;
				font-size: 16 px;
				color: white;
				font-weight: bold;
			}
			p.ust {
font-family: "Cinzel-Regular", Serif;
color: white;
font-style: normal;
position: relative;
bottom: 102px;
font-size: 20px;
}
p.ce {
font-family: "Cinzel-Regular", Serif;
color: white;
font-style: normal;
position: relative;
bottom: 116px;
font-size: 24px;
}
p.es {
font-family: "Cinzel-Regular", Serif;
color: white;
font-style: normal;
position: relative;
bottom: 129px;
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

		.se{
			position: absolute;
			bottom: 70%;
			left: 75%;
			width: 100px;
			width: 15%;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 2px;
			font-size: 14px;
			background-color: white;
			padding: 10px 5px 5px 5px;
			font-family: Trebuchet MS;
		}

		.search1{
	
	font-family: Trebuchet MS;
	color: #gfhg^666;
	position: center;
	font-size: 20px;
	border-radius: 4px;
}

		.tlist {
			position: absolute;
			top: 30%;
			left:10%;
		}

		.brrwr {
			position: absolute;
			top: 30%;
			right:10%;
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
		
		.pagination {
				display: inline-block;
				position: absolute;
				top: 600px;
				bottom: 700px;
				
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
				background-color: #AED6F1;
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
									
									.nw{
	overflow: hidden;
white-space: nowrap;
}

.container2 {
				padding: 10px 10px;
			}

        </style>
        <meta charset="UTF-8">
        <title> LIST OF BORROWERS </title>
    </head>
    <body background="bg-2.png">
<a href = "thesisadmin.php"> <img src="UST.png" style="width:160px;height:160px;"> </a>
<center><p class="ust"> UNIVERSITY OF SANTO TOMAS </p>
<p class="ce"> CIVIL ENGINEERING DEPARTMENT </p>
<p class="es"> ESPAÑA BLVD, MANILA, PHILIPPINES</p></center>
<img class="logo" src="USTlogo.png" style="width:150px;height:150px;">
<div class = "home">
<a  href = "borrowersite.php"> <img src="home.png" style="width:50px;height:50px;"> </a> <a class = "reset" href = "borrowersite.php" style="color:white;"> Borrower's List </a>
        </div>
       
  <div class="dropdown">
			  <button class = "buttonborrow"onclick="myFunction()" style="cursor:pointer" class="dropbtn"> Account </button>
			  <div id="myDropdown" class="dropdown-content">
				<a onclick="window.location.href='changepwd.php';" style="width:auto;"> Change Password </a>
				<div id="id01" class="modal">
  
  <form class="modal-content animate" name="chpwd" method="POST" action="changepwd.php" target = "_top" onSubmit="return confirm('Are you sure you want to change your password?');">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="password.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container2">
	<center>
        <br>
       
                    <legend><b> Change Password </b> </legend> 
					<label> <b> Username: </b> </label> <font color = red> * </font> <input type = "text" name = "uname" style="width:40%" autofocus required> <br>
                    <label> <b> Old Password: </b> </label> <font color = red> * </font> <input type = "password" name = "oldp" style="width:40%" placeholder="******" required> <br>
					<label> <b> New Password: </b> </label> <font color = red> * </font> <input type = "password" name = "newp" style="width:40%" placeholder="******" required> <br>
					<label> <b> Confirm Password: </b> </label> <font color = red> * </font> <input type = "password" name = "conp" style="width:40%" placeholder="******" required> <br>
					

						 
        <br>
<center>
            <div class="container2" style="background-color:#f1f1f1">
		<button class="s" name="chp" type="submit" value="chp">Change</button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div> 
	
	
	<!-- PHP FOR CHANGE PASSWORD -->  
				
				<a onclick="window.location.href='changemail.php';" style="width:auto;"> Change Email </a>
				<div id="id02" class="modal">
  
  <form class="modal-content animate" name="chem" method="POST" target = "_top" action="changemail.php" onSubmit="return confirm('Are you sure you want to change your email address?');">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="email.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<div class="container2">
	<center>
                    
        <br>
       
                    <legend><b> Change Email: </b></legend> 
					<label> <b> Username: <font color = red> * </font> </b> </label> <input type = "text" name = "uname" style="width:40%" autofocus required> <br>
                    <label> <b> Old Email: <font color = red> * </font> </b> </label> <input type = "text" name = "olde" style="width:40%" placeholder="******" required> <br>
					<label> <b> New Email: <font color = red> * </font> </b> </label> <input type = "text" name = "newe" style="width:40%" placeholder="******" required> <br>
					<label> <b> Confirm Email: <font color = red> * </font> </b> </label> <input type = "text" name = "conp" style="width:40%" placeholder="******" required> <br>
					

						 
        <br>
<center>
            <div class="container2" style="background-color:#f1f1f1">
		<button class="buttonborrow" name="che" type="submit" value="che">Change</button>
		</div>
        </center>
        </form>
	
	</div>
	
	</div> 
	
	<!--PHP FOR CHANGE EMAIL-->
	
				<a href="logout.php"> Logout </a>
			  </div>
			</div>
			
			
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
 
		
		
		 
		<?php
				if(!isset($_SESSION['uname'])) 
				   {
					   header("Location:index.php");  
				   }
				
				date_default_timezone_set("ASIA/SINGAPORE");
				
				if(isset($_POST['keyword']))
				{					
                $query = "SELECT * FROM borrower WHERE BorrowerID LIKE '%" . $_POST['keyword'] . "%' OR Last LIKE '%" . $_POST['keyword'] . 
				"%' OR First LIKE '%" . $_POST['keyword'] . "%' OR StudNo LIKE '%" . $_POST['keyword'] . "%' OR YrSec LIKE '%" 
				. $_POST['keyword'] . "%' OR GroupNo LIKE '%" . $_POST['keyword'] . "%'  OR MobileNo LIKE '%" . $_POST['keyword'] 
				. "%' OR code LIKE '%" . $_POST['keyword'] . "%' OR Date LIKE '%" 
				. $_POST['keyword'] . "%' OR TimeB LIKE '%" . $_POST['keyword'] . "%' OR TimeR LIKE '%" 
				. $_POST['keyword'] . "%' OR Status LIKE '%" . $_POST['keyword'] . "%' ORDER BY Status asc, BorrowerID desc";
				$response = @mysqli_query($dbc, $query);
				$rowcount = mysqli_num_rows($response);
				if($rowcount == 0)
				{
					echo "<p class = 'noresult'> No results found. </p>";
				}
				
				else
				{
				echo "<center> <table id='tables'>" ;
				echo "<th> Borrower's ID </th>" ;
				echo "<th> Thesis Code </th>" ;
				echo "<th> Last Name </th>" ;
				echo "<th> First Name </th>" ;
				echo "<th> Student no. </th>" ;
				echo "<th> Yr. & Sec. </th>" ;
				echo "<th> Group No. </th>" ;
				echo "<th> Mobile No. </th>" ;
				echo "<th> Date </th>" ;
				echo "<th> Time Borrowed </th>" ;
				echo "<th> Time Returned </th>" ;
				echo "<th> Status </th>" ;
				echo "<th>          </th>" ;
				echo "<th>  </th>" ;
				echo "<th>  </th>" ;
				
		
				while($row = mysqli_fetch_array($response))
				{

					echo
					 "<tr>" .
					"<td> <center>" .   $row['BorrowerID'] . "</center> </td>" .
					"<td> <center><a href = '#' class = 'hover' id = '" .   $row['code'] . "'  value =  '" .   $row['code'] . "' > " . $row['code'] . "</a> </center> </td>" .
					"<td> <center>" .   $row['Last'] . "</center> </td>" .
					"<td> <center>" .  $row['First'] . "</center> </td>" .
					"<td> <center>" .  $row['StudNo'] . "</center> </td>" .
					"<td> <center>" .  $row['YrSec'] . "</center> </td>" .
					"<td> <center>" .  $row['GroupNo'] . "</center> </td>" .
					"<td> <center>" .  $row['MobileNo'] . "</center> </td>" .
					"<td class='nw'> <center>" .  $row['Date'] . "</center> </td>" .
					"<td> <center>" .  date("G:i:s", strtotime($row['TimeB'])) . "</center> </td>" .
					"<td> <center>" .  $row['TimeR'] . "</center> </td>" .
					"<td> <center>" .  $row['Status'] . "</center> </td>";

					if($row['Status'] == "Borrowed")
					{
						$id = $row['BorrowerID'];
						$code = $row['code'];
						echo "<td> <center>" . "<form method = 'POST' action = 'process.php' onSubmit='return confirm(\"Are you sure this thesis has been returned?\");' > 
						<button class = 'buttonborrow' name='returned' onclick='window.location.reload()' type='submit' value='$id'> RETURN </button>
						<input type = 'hidden' name = 'id' value = '$id' >
						<input type = 'hidden' name = 'code' value = '$code' >
						</form>" . "</center> </td> ";
						echo "<td> <center> </center> </td>" ;
						echo "<td> <center> </center> </td>" ;						
					}
					
					else
					{
						echo "<td> <center> </center> </td>" ;
						echo "<td> <center> </center> </td>" ;
						echo "<td> <center> </center> </td>" ;
					}
					
					
					echo "</tr>" ;
				}  
				echo "</table> </center>";
				
					
				mysqli_close($dbc); 
				}   
				}
        ?>
	
	<br>
		<div class = "search1">
		 <input class="se" id = "ls" type="text" onkeyup="liveSearch()" name="keyword" placeholder = "Search for Thesis Code..."> <br>
		</div>
    </body>
	
	<script>
 $(document).ready(function(){

  $('.hover').tooltip({
   title: fetchData,
   html: true,
   placement: 'right'
  });

  function fetchData()
  {
   var fetch_data = '';
   var element = $(this);
   var id = element.attr('id');
   $.ajax({
    url:"fetch.php",
    method:"POST",
    async: false,
    data:{id:id},
    success:function(data)
    {
     fetch_data = data;
    }
   });   
   return fetch_data;
  }
 });
</script>
    <!--2NIpGQzTom7IpiTl-->
</html>