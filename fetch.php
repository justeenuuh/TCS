<?php require_once('mysqli_connect.php');
if(isset($_POST['id']))
{
 $output = '';
 $query = "SELECT * FROM thesis WHERE code='".$_POST['id']."'";
 $result = mysqli_query($dbc, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output = '
  <p>
  <p><label>Title : "'.$row['ttitle'].'"</label></p>
  ';
 }
 echo $output;
}
?>