<?php session_start(); ob_start(); require_once('mysqli_connect.php');
		if(isset($_POST["Export"])){
		date_default_timezone_set("ASIA/SINGAPORE");
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename= '. date('m-d-Y_h:i a') . '_borrowerslist.csv');  
	  $time = date("h:i:s a");
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Borrower ID', 'Thesis Code', 'Thesis Title', 'Last Name', 'First Name', 'Student No.', 'Yr & Sec', 'Group No', 'Mobile No.', 'Date', 'Time Borrowed', 'Time Returned', 'Status'));  
      $query = "SELECT * from borrower ORDER BY Status ASC";  
      $result = mysqli_query($dbc, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
	 if(fputcsv)
	 {
		 echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully exported.\");
						window.location = \"borrowersite.php\"
					</script>";
	 }
	
 }  
 


?>