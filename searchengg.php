<?php
session_start();
ob_start();
require_once "config.php";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylenew.css">
<title>LIGHEME</title>
</head>



<body  bgcolor="white" style="text-align:justify" text="336666" >

<div class="search">
     &nbsp Enter Pdb Id , Uniprot Id , Pirsf Id , Resolution , Panther Id or Keyword
			<form autocomplete="off" action="searchengg.php" method="POST">
				<span class="search-field"><input type="text" name="search"  placeholder="Search here..." class="blink" /></span>
				<input type="submit" value="Go" class="search-button" />
			</form>
		</div>
	<br><br><br>
	<form method="post" action ="table.php">
	<input type ="submit" value="View all"/><a href="http://localhost/modify/homes.html"> Go Back</a></form><br><br>
	<?php
		if (isset($_POST['search']))
		{
		$names=$_POST['search'];
		
}
		$query="select * from hemprotein where PDB_ID='$names'||UNIPROT_ID='$names'||PANTHER_ID='$names'||RESOLUTION='$names'||PIRSF_ID='$names'||SCOP_FOLD like '% $names %'||SCOP_CLASS like '% $names %'";
		
		$result=mysql_query($query,$conn);
		
		
		while ($row = mysql_fetch_array($result)) 
		{
		
			   echo '<br><br>'," PIRSF_ID - ","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["PIRSF_ID"];
			    echo '<br>'," UNIPROT_ID - ","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["UNIPROT_ID"];
				 echo '<br>'," PDB_ID - ","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["PDB_ID"];
				  echo '<br>'," LIG_ID- ","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["LIG_ID"];
				   echo '<br>'," RESOLUTION - " ,"&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["RESOLUTION"];
				   echo '<br>'," PANTHER_ID - " ,"&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["PANTHER_ID"];
				    echo '<br>'," SCOP_CLASS - " ,"&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["SCOP_CLASS"];
					 echo '<br>'," SCOP_FOLD - "  ,"&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["SCOP_FOLD"];
					  echo '<br>'," SEQ - " ,"&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["SEQ"];
					   echo '<br>'," STRUCTURE  - ","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp",$row["STRUCTURE"];
					    
			}
?>
</div>

</body>
</html>