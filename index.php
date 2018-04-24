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
	
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
<script type="text/javascript">
        function validate() {
		
				var x = document.getElementById("uname");
				var y = x.value;
				var a = document.getElementById("pword");
				var j = a.value;
				
        
				if ((y == "") || (y == null) || (j == null) || (j == "")) 
					{
               
                        alert("Please fill out all the fields with asterisk (*)");
                        x.focus();
                        return false;
				
				}
		}
	</script>
 
  <!-- Include jQuery -->
  <script src="jq.js"></script>

  <!-- Include jQuery Popup Overlay -->
  <script src="popup.js"></script>
  
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
  
  <script>
// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id03');
var modal = document.getElementById('id05');

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
        <style>
		
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

		.srch2:hover {background-color: #2980B9;}

	
            body {
				overflow: hidden;
				
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
			.buttonapply {
				border-radius: 4px;
				border: none;
				color: white;
				padding: 10px 8px;
				font-size: 14px;
				cursor: pointer;
				background-color: #2E86C1;
				font-family: Trebuchet MS;
			}
			.buttonapply:hover, .buttonapply:focus {
							background-color: #2980B9;
						}

			.login {
				position: absolute;
				top: 3%;
				right: 15%;
			}
			.login:hover, .login:focus {
							background-color: #2980B9;
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

			.search1{
				
				font-family: Trebuchet MS;
				color: #gfhg^666;
				position: center;
				font-size: 20px;
				border-radius: 4px;
			}

			iframe {
			  display:block;
			  width:600px;
			  height:400px;
			  background-color: white;
			  overflow:hidden;
			  scrolling: no;
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
				font-family: Trebuchet MS;
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


			/* The container */
			.check {
				display: block;
				position: relative;
				padding-left: 35px;
				margin-bottom: 12px;
				cursor: pointer;
				font-size: 22px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			/* Hide the browser's default checkbox */
			.check input {
				position: absolute;
				opacity: 0;
				cursor: pointer;
			}

			/* Create a custom checkbox */
			.checkmark {
				position: absolute;
				top: 0;
				left: 0;
				height: 25px;
				width: 25px;
				background-color: #eee;
			}

			/* On mouse-over, add a grey background color */
			.check:hover input ~ .checkmark {
				background-color: #ccc;
			}

			/* When the checkbox is checked, add a blue background */
			.check input:checked ~ .checkmark {
				background-color: #2196F3;
			}

			/* Create the checkmark/indicator (hidden when not checked) */
			.checkmark:after {
				content: "";
				position: absolute;
				display: none;
			}

			/* Show the checkmark when checked */
			.check input:checked ~ .checkmark:after {
				display: block;
			}

			/* Style the checkmark/indicator */
			.check .checkmark:after {
				left: 9px;
				top: 5px;
				width: 5px;
				height: 10px;
				border: solid white;
				border-width: 0 3px 3px 0;
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
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
<a  href = "index.php"> <img src="home.png" style="width:50px;height:50px;"> </a> <a class = "reset" href = "index.php"> Home </a>
        </div>

	<div class="login">

<button class="buttonlogin" onclick="window.location.href='login.php';" style="width:auto;">Login as Administrator</button>
</div>
  
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="login.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
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
					<div id="errors"><?php $msg = "Username or Password is incorrect!"; echo $msg?></div>
					<?php 
					}
		}
					
					?>
                    <legend> Please fill out all the information</legend> 
		<label><b>Username </b></label> <font color = red> * </font>
		<input type="text" name="uname" placeholder="Enter username" id = "uname" size = "20" autofocus required><br><br>
		<label><b>Password </b></label> <font color = red> * </font>
		<input type="password" name="pword" placeholder="Enter password" id = "pword" size = "20" required><br><br>
		
		<div class="container" style="background-color:#EBF5FB">

		<script>
		$("#buttonlogin").modal.style.display('block');
		</script>
		
		<button  id = "buttonlogin" class="buttonlogin" type="submit" name="submit" onclick= "return validate(); "> Login</button>
	
		<br>
		<a href = "forgotpwd.php" > Forgot Password </a>
		</div>
		</center>
	</form>
	
	</div>
	
	</div> 
	
	<br>
	<br>	
 
  <div class="advance">
 
  <center><button onclick="document.getElementById('id02').style.display='block'" class="buttonshow">Search Options</button></center>

  <div id="id02" class="modal">
    <form class="modal-content animate" method="POST" target = "_top">
      <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
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
document.write("<FORM action = 'indexsitesort.php' method = 'POST'> <SELECT name = 'yr'>");
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
		
		
		</div>
		
		 Search by:<br>
	<select name="sch" id = "sch">
	<option value="all"> All </option> 
	<option value="title" disabled> Title </option> 
	<option value="author" disabled> Author </option>
	<option value="kwords" disabled> Keywords </option>
	<option value="tcode" disabled> Thesis Code </option>
	</select>
	
	
	
	<div class="container" style="background-color:#EBF5FB">
<input style="cursor:pointer" class ="go" type="submit" name="go" value="Apply">

	
	</div> 


	
	</div> 
    </div>
	
	<div class="search1">
	 <input class="se" type="text" name="keyword" placeholder = "Title, Author, Keywords..."><br>
	 <input class ="srch2" type="submit" name="gosearch" value="Go" disabled>
	</div>
	</form>
  </div>
</div>
  


	

  <center>


		
		<?php	
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
				while ($row = mysqli_fetch_array($response)) {
					echo
					"<tr>" .
					"<td class = 'nw'> <center>" .  $row['code'] . "</center> </td>" .
					"<td> <center>" .   $row['ttitle'] . "</center> </td>" .
					
					"<td> <center>" .  $row['category'] . "</center> </td>" .
					"<td> <center>" .  $row['year'] . "</center> </td>" .
					"<td> <center>" .  $row['author'] . "</center> </td>" .
					
					"<td> <center>" .  $row['location'] . "</center> </td>" .
					"<td> <center>" .  $row['status'] . "</center> </td>" ;
					if($row['status'] == "Available")
					{
							$title = $row['ttitle'];
							$code = $row['code'];
						echo "<td> <center>" . "<form method = 'POST' action = 'borrowerformss.php' > 
									<button class='buttonborrow'  name='borrow' type='submit' value='" . $row['code']. "'> BORROW </button>" . "</center> </td>";
										echo "<input type = 'hidden' name = 'title' value = '$title' >";
										echo "<input type = 'hidden' name = 'code' value = '$code' >";
									echo "</form>";
							
					}
					else
					{
						echo "<td> <center> </center> </td>" ;
					}
					
					
					echo "</tr>" ;
			
				}
				echo "</table> </center>";
                mysqli_close($dbc);

				echo "<div class='pagination'>";
				
				if ($page>1) {
					echo " <a href='index.php?page=1'>First</a> ";
					$prevpage = $page - 1;
					 echo " <a href='index.php?page=$prevpage'>Prev</a> ";
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
							echo '<a href="index.php?page=' .$i. '">' .$i. '</a> ';
						}
					}
					
				}
				if ($page != $number_of_pages) {
					$nextpage = $page + 1;
					echo " <a href='index.php?page=$nextpage'>Next</a> ";
					echo " <a href='index.php?page=$number_of_pages'>Last</a> ";
				}
				echo "</div>";
				echo "</div>";
				
			
        ?> 
		<br>
		</center>
		
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
		
    </body>
    <!--2NIpGQzTom7IpiTl-->
</html>