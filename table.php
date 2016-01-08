<html>
<head>
<link href="newyorklasik_style2.css" rel="stylesheet" type="text/css" />
<title>LigHEM</title>



<style>
div#wrapper{
	background: url(images/newyorklasik_body_top.jpg) no-repeat center center fixed; 
	margin: -8px -8px -8px -8px; 
	-webkit-background-size: cover; 
	-moz-background-size: cover; 
	-o-background-size: cover; 
	background-size: cover;
}
.dotted {
	border: 1px dotted #000000;
	border-style: none none dotted;
	color: #fff; 
	background-color: #fff; 
}





				
div#content{
	font-family: Times New Roman;
	width:80%; 
	height:auto;
	margin: auto;
	background-color: white;
}

div#top{
	font-size:40px; 
	font-variant: small-caps; 
	color:black; 
	padding:20px;
}
div#middle{
	padding:20px;

}
div#middle img{
	
}
div#footer{
	background: #260408;
 	
	width:100%; 
	height:50px;
}



.dbtable th {
	 background:#aaa; 
	 padding:5px; 
	 border-left:1px solid #ccc; 
	 border-top:1px solid #ccc;
}
.dbtable td {
	padding:5px; 
	border-left:1px solid #ccc; 
	border-top:1px solid #ccc;
}
</style>
<body>
<div id="wrapper" >
	</div>
	
	<?php
	$db=mysqli_connect("localhost","root","","lighem");
	if (mysqli_connect_errno($db))
	  {
	  echo "Failed to connect to MySQL: ". mysqli_connect_error() ;
	  }
	?>
	<div id="content" >
		<div id="top" ><img src="images/por1.png"  style="float: left; width: 70px; height: 70px; border:1px solid darkgray;  " >Heme Proteins<hr class="dotted">
		</div>
		<div id="middle" style=" height:auto; min-height:60%">
		
		
		<?php
		$result = mysqli_query($db,"SELECT * FROM hemprotein") or die('cannot show tables');
		
		echo '<table class="dbtable" border="2px" width="auto" height="auto" cellpadding="10px" align="center"  >
		<div id="newyorklasik_wrapper">
	<div id="newyorklasik_menu">
        
            <ul>
                <li><a href="http://localhost/modify/homes.html">Home</a></li>
		<li><a href="http://localhost/modify/overview.html">Overview</a></li>
		<li><a href="http://localhost/modify/searchengg.php">Proteins</a></li>
		<li><a href="http://localhost/modify/contact.html">Contact Us</a></li>
            </ul>    	
        
        </div> 
    
    </div> 
	<tr><th>PIRSF_ID</th>
		<th>UNIPROT_ID</th><th>PDB_ID</th><th>LIG_ID</th><th>RESOLUTION</th><th>PANTHER_ID</th><th>SCOP_CLASS</th><th>SCOP_FOLD</th><th>SEQ</th><th>STRUCTURE</th></tr>';
		while($row = mysqli_fetch_array($result)) 
		{			
			echo "<tr>";
			echo "<td width=100>",$row['PIRSF_ID'],"</td>";
			echo "<td width=100>",$row['UNIPROT_ID'],"</td>";
			echo "<td>",$row['PDB_ID'],"</td>";
			echo "<td >",$row['LIG_ID'],"</td>";
			echo "<td >",$row['RESOLUTION'],"</td>";
			echo "<td width=100>",$row['PANTHER_ID'],"</td>";
			echo "<td width=300>",$row['SCOP_CLASS'],"</td>";
			echo "<td width=400 >",$row['SCOP_FOLD'],"</td>";
			echo "<td width=50>",$row['SEQ'],"</td>";
			echo "<td width=50>",$row['STRUCTURE'],"</td>";
						
			echo "</tr>";
		}
		echo "<br><br>";
		
		
		mysqli_close($db);
		?>
		</table>
		</div>
		<br><br>
		<hr class="dotted">
		<br><br>
		</div>
		
	</div>
	<div id="footer" style="background: #C0C0C0; width:100%; height:50px; font-size:20; font-style: bold;">
	<center>for more information mail to : shbz_cool@yahoo.com</center>
	</div>
	

</body>
</html>