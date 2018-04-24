<?PHP session_start(); ob_start(); require_once('mysqli_connect.php'); ?>
<!DOCTYPE html>

<html>
    <head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta charset="UTF-8">
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
			  $('#br_popup').popup();
			
			});
	  </script>
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

        <style>
			
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
		

		* {
		  box-sizing: border-box;
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

				.login {
					position: absolute;
					top: 3%;
					right: 15%;
					
				}

				.se{
				position: absolute;
				bottom: 70%;
				left: 78%;
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

				.select-style {
					position: absolute;
					top: 24.2%;
					left: 10%;
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
					position: absolute;
					top: 25%;
					left: 19%;
					color: white;
				}

				.go {
					position: absolute;
					left: 100px;
					border: none;
					color: black;
					padding: 3px 10px;
					font-size: 12px;
					cursor: pointer;
					background-color: #f2f2f2;
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

						.reset:hover{
							color: white;
							box-shadow: 0 0 11px rgba(33,33,33,.2); 
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
						.no {
						font-family: Trebuchet MS;
						text-align: center;
						font-size: 16 px;
						color: white;
						font-weight: bold;
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

<button class="buttonlogin"  onclick="window.location.href='login.php';" style="width:auto;">Login as Administrator</button>
</div>
  
	<br>
	<br>

  <div id="id02" class="w3-modal">
    <form class="modal-content animate" method="POST" target = "_top">
      <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
      <img src="UST.png" style="width:150px;height:150px;" alt="Avatar" class="avatar">
    </div>
	
	<center>



      <div class="container2" style="background-color:#f1f1f1">
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
<select name = "cat">
	
		<option value="all"> ALL </option> 
		<option value="STRUCTURAL"> STRUCTURAL </option> 
		<option value="WATER"> WATER </option>
		<option value="SOIL"> SOIL </option>
		<option value="CONSTRUCTION"> CONSTRUCTION </option>
		<option value="TRANSPORTATION"> TRANSPORTATION </option>
		<option value="ENVIRONMENT"> ENVIRONMENT </option>
		</select>
		
		<input class ="go" type="submit" name="go" value="Go">
		</div>
		
		 
	<div class="search1">
	 <input class="se" type="text" name="keyword" placeholder = "Title, Author, Keywords..."><br>
	Search by:
	<select name="sch">
	<option value="all"> All </option> 
	<option value="title"> Title </option> 
	<option value="author"> Author </option>
	<option value="kwords"> Keywords </option>
	<option value="tcode"> Thesis Code </option>
	</select>
	</div>


	
	</div> 


	
	</div> 
	<input class="se" type="text" id = "ls" onkeyup="myFunction()" name="keyword" placeholder = "Search for titles.. "><br>
	</form>
	</form>
	
	
	<script>
		function myFunction() {
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("ls");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("tables");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td)		
			{
			  if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
				{
					tr[i].style.display = "";
				} 
			else 
				{
					tr[i].style.display = "none";
					
				}
			}       
		  }
		}
</script>


		
<?PHP		
		//PHP CODE FOR SORT AND SEARCH
		
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
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id ='tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							while($row = mysqli_fetch_array($response))
							{
								echo
								 "<tr>" .
								 "<td class = 'nw'> <center>" . $row['code'] . "</center> </td>" .
								"<td> <center>" .  $row['ttitle'] . "</center> </td>" .
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
							echo "</table> </center> <br>";
							
								
						 }
				}
				
				if($search == "all" && $keyword != null && $yr != "all" && $cat == "all")
				{
								
				
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND (ttitle LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%') ORDER BY ttitle asc";
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
							{
								echo
								 "<tr>" .
								 "<td class = 'nw'> <center>" .   $row['code'] . "</center> </td>" .
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
							echo "</table> </center> <br>";
							
								
						 }
				}
				
				if($search == "all" && $keyword != null && $yr == "all" && $cat != "all")
				{
								
				
					$query = "SELECT * FROM thesis WHERE category = '$cat' AND (ttitle LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%') ORDER BY ttitle asc";
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class= 'no'>No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
							{
								echo
								 "<tr>" .
								 "<td class = 'nw'> <center>" .   $row['code'] . "</center> </td>" .
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
							echo "</table> </center> <br>";
							
								 
						 }
				}
				
				if($search == "all" && $keyword != null && $yr != "all" && $cat != "all")
				{
								
				
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND (ttitle LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%') ORDER BY ttitle asc";
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'>No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id='tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							while($row = mysqli_fetch_array($response))
							{
								echo
								 "<tr>" .
								 "<td class = 'nw'> <center>" .   $row['code'] . "</center> </td>" .
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
							echo "</table> </center> <br>";
							
								
						 }
				}
				
				else if($keyword == null && $yr != "all" && $cat != "all")
				{
							
				
					$query = "SELECT * FROM thesis WHERE  year = '$yr' AND category = '$cat' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'>No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id='tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							while($row = mysqli_fetch_array($response))
							{
								echo
								 "<tr>" .
								 "<td class = 'nw'> <center>" .   $row['code'] . "</center> </td>" .
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
							echo "</table> </center> <br>";
							
								 
						 }
				}
				else if($keyword == null && $yr == "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE category = '$cat' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id='tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				else if($keyword == null && $yr != "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($keyword == null && $yr == "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis ORDER BY ttitle asc";
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'>No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				else if($search == "title" && $keyword != null && $yr == "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc " ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'>No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				else if($search == "title" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				else if($search == "title" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE category = '$cat' AND ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc " ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "title" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND ttitle LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc " ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
						 }
				}
				
				else if($search == "author" && $keyword != null && $yr == "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc " ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "author" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc " ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "author" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE category = '$cat' AND author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc " ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
			else if($search == "author" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND author LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc " ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
			
			else if($search == "kwords" && $keyword != null && $yr == "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
			
			else if($search == "kwords" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "kwords" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE category = '$cat' AND keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'><center> No results found.</p></center>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "kwords" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "tcode" && $keyword != null && $yr == "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "tcode" && $keyword != null && $yr != "all" && $cat == "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
			
			else if($search == "tcode" && $keyword != null && $yr == "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE category = '$cat' AND code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
				else if($search == "tcode" && $keyword != null && $yr != "all" && $cat != "all")
				{
					$query = "SELECT * FROM thesis WHERE year = '$yr' AND category = '$cat' AND code LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc" ;
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'><center> No results found. <p></center>";
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
							while($row = mysqli_fetch_array($response))
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
							echo "</table> </center> <br>";
		
						 }
				}
				
		}
		else if (isset($_POST['gosearch']))
		{
					$keyword = $_POST['keyword'];
					$query = "SELECT * FROM thesis WHERE ttitle LIKE '%" . $_POST['keyword'] . "%' OR category LIKE '%" . $_POST['keyword'] . "%'  OR location LIKE '%" . $_POST['keyword'] . "%'  OR author LIKE '%" . $_POST['keyword'] . "%' OR status LIKE '%" . $_POST['keyword'] . "%' OR keyword LIKE '%" . $_POST['keyword'] . "%' ORDER BY ttitle asc";
					$response = @mysqli_query($dbc, $query);
					$rowcount = mysqli_num_rows($response);
					
					if($rowcount == 0)
							{
								echo "<p class = 'no'> No results found. </p>";
							}
							
					else
					{						
							echo" <center> ";
							echo "<table id ='tables'>" ;
							echo "<th> Thesis Code </th>" ;
							echo "<th> Thesis Title </th>" ;
							
							echo "<th> Category </th>" ;
							echo "<th> Year </th>" ;
							echo "<th> Author/s </th>" ;
							
							echo "<th> Location </th>" ;
							echo "<th> Status </th>" ;
							echo "<th> </th>" ;
							while($row = mysqli_fetch_array($response))
							{
								echo
								 "<tr>" .
								 "<td class = 'nw'> <center>" . $row['code'] . "</center> </td>" .
								"<td> <center>" .  $row['ttitle'] . "</center> </td>" .
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
							echo "</table> </center> <br>";
							
								
						 }
			
		}



?>
	<br>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
</BODY>
</HTML>