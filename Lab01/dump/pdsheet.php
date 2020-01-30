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
				
				border: 2px solid black;
				width: 50%;
				text-align: center;
				
			}

			.table { margin: 0px auto; }


			a{
				text-decoration: none;
				color: black;
			}


</style>
	
<body>
	
	<nav role='navigation'>
	<div class="logo">
		<img src="img/Logo.png" width ="60px" height = "60px">
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
	
	<?php

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
	?>  <br><br><br>  <br><br><br>
	<h2 class="title"><i>PERSONAL INFORMATION</i></h2>

	    <table class="table">
			<td><?php echo "<a href='delete.php?id=$row[entry]'>delete" ?></td>
	      <tbody>
			
		
	          <td class="tbl">SURNAME</td>
	          <td colspan="1">
				<?php echo $row['lastname'] ?></td>
	          <td class="tbl">NAME EXTENSION</td>
	          <td colspan="1"><?php echo $row['extname'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">FIRSTNAME</td>
	          <td colspan="1"><?php echo $row['firstname'] ?></td>
	          <td class="tbl" rowspan="2">RESIDENTIAL ADDRESS</td>
	          <td rowspan="2"><?php echo $row['resadd'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">MIDDLENAME</td>
	          <td colspan="1"><?php echo $row['middlename'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">DATE OF BIRTH</td>
	          <td colspan="1"><?php echo $row['birthday'] ?></td>
	          <td class="tbl">ZIPCODE</td>
	          <td><<?php echo $row['reszipcode'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">PLACE OF BIRTH</td>
	          <td colspan="1"><?php echo $row['placebirth'] ?></td>
	          <td class="tbl">TELEPHONE NO.</td>
	          <td colspan="1"><?php echo $row['permtelno'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">SEX</td>
	          <td colspan="1"><?php echo $row['sex'] ?></td>
	          <td class="tbl">CITIZENSHIP</td>
	          <td colspan="1"><<?php echo $row['citizen'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl" rowspan="2">CIVIL STATUS</td>
	          <td colspan="1"><?php echo $row['civils'] ?>
	          <td class="tbl" rowspan="2"><?php echo $row['permadd'] ?></td>
	          <td rowspan="2" colspan="3"><input type="text" name="paddr"></td>
	        </tr>
	        <tr>
	        </tr>
	        <tr>
	          <td class="tbl">HEIGHT(m)</td>
	          <td colspan="1"><?php echo $row['height'] ?></td>
	          <td class="tbl">ZIPCODE</td>
	          <td colspan="1"><?php echo $row['permzipcode'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">WEIGHT(kg)</td>
	          <td colspan="1"><?php echo $row['weight'] ?></td>
	          <td class="tbl">TELEPHONE NO.</td>
	          <td colspan="1"><?php echo $row['restelno'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">BLOOD TYPE</td>
	          <td colspan="1"><?php echo $row['btype'] ?></td>
	           <td class="tbl" rowspan="2">E-MAIL ADDRESS</td>
	          <td colspan="1" rowspan="2"><?php echo $row['email'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">GSIS NO.</td>
	          <td colspan="1"><?php echo $row['gsisno'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">PAG-IBIG ID NO.</td>
	          <td colspan="1"><?php echo $row['pagibigno'] ?></td>
	          <td class="tbl">CELLPHONE NO.</td>
	          <td colspan="1"><?php echo $row['celno'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">PHILHEALTH NO.</td>
	          <td colspan="1"><?php echo $row['philno'] ?></td>
	          <td class="tbl">AGENCY EMPLOYEE NO.</td>
	          <td colspan="1"><?php echo $row['agencyno'] ?></td>
	        </tr>
	        <tr>
	          <td class="tbl">SSS NO.</td>
	          <td colspan="1"><?php echo $row['sssno'] ?></td>
	          <td class="tbl">T.I.N.</td>
	          <td colspan="1"><?php echo $row['tin'] ?></td>
	        </tr>
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
