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
document.write(" Select year ");
document.write("<FORM action = 'thesissitesort.php' method = 'POST'> <SELECT name = 'yr'>");
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
 Select Category <br>
<select name = "cat">
	
		<option value="all"> All </option> 
		<option value="Structural"> Structural </option> 
		<option value="Water"> Water </option>
		<option value="Soil"> Soil </option>
		</select>
		
		<input class ="go" type="submit" name="go" value="Go">
		</div>
</form>



<form action="thesissitesearch.php" method="POST">
 <input class="se" type="text" name="keyword" placeholder = "Title, Author, Keywords..."><br>
 
	<div class="search1">
	Search by:
	<select name="sch">
	<option value="all"> All </option> 
	<option value="title"> Title </option> 
	<option value="author"> Author </option>
	<option value="kwords"> Keywords </option>
	<option value="tcode"> Thesis Code </option>
	</select>
	</div>
	
	
</form>