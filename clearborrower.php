<?
	if(isset($_POST['clear']))
					{
						$query = "DELETE FROM BORROWER WHERE 1";
						$res = @mysqli_query($dbc, $query);
						header("location: borrowersite.php");
					}
?>