<!DOCTYPE html>

<html class=" js no-touch" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your page description here">
    <meta name="author" content="">
    <link href="css/test.css" rel="stylesheet">
</head>

<style>
			body{text-align: center;}
			
			table, th, td{
				
		
				width: 50%;
				text-align: center;
				
			}

			.table { margin: 0px auto; }

			table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

			a{ 
				color: #588c7e;
				
				text-decoration: none;
			
			}


</style>
	
<body>
	
	<nav role='navigation'>
	<div class="logo">
		<a href="Welcome.html"><img src="img/Logo.png" width ="60px" height = "60px"></a>
	</div>
	<ul>
	
		<li> <a href="Welcome.html">Welcome </a> 								</li>
		<li> <a href="Team.html">Team</a> 									</li>
		<li> <a href="Apply.html">Apply Now!</a> 							</li>
	</ul>
	
	</nav>
	
	<br> <br> <br> <br> 
	
	<?php
	$conn = mysqli_connect("localhost", "root", "", "datasheet");
		// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	$sql = "SELECT lastname, extname, firstname, middlename, placebirth, birthday, sex, civils, height, weight, btype, gsisno, pagibigno, philno, sssno, resadd, reszipcode, restelno, citizen, permadd, permzipcode, permtelno, email, celno, agencyno, tin, entry FROM records";
	$result = $conn->query($sql);
	?>
	  <br><br><br>  <br>
	<h2 class="title"><i>LIST OF APPLICANTS</i></h2><br><br>
	<?php

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
	?>

	    <table class="table">
			
	      <tbody>
			
		
	          <td class="tbl">
				<?php echo "<a href='pdsheet.php?id=$row[entry]'> $row[lastname]"   ?>
				<?php echo "<a href='pdsheet.php?id=$row[entry]'> $row[firstname]"  ?> 
				<?php echo "<a href='pdsheet.php?id=$row[entry]'> $row[middlename]"   ?> 
				</td>
				<td><?php echo "<a href='delete.php?id=$row[entry]'>delete" ?></td>
	        
	      </tbody>
	    </table>
			
	<?php											}
											} 
				else echo "Database is empty";

				$conn->close();

			?>
	</table>


	
</body>
</html>
