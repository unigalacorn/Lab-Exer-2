<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "datasheet";
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
		
			die("Connection failed: " . $conn->connect_error);
		
		}
		$sql="SELECT * FROM records";
		
	if ($result=mysqli_query($conn,$sql)){

	$rowcount=mysqli_num_rows($result);
	}
	 
	$lastname	 = $_POST['sname'];	
	$extname	= $_POST['ex'];
	$firstname	= $_POST['fname'];
	$midlename	= $_POST['mname'];
	$birthday	= $_POST['bday'];
	$placebirth	= $_POST['place'];
	$sex		= $_POST['gender'];
	$civils		= $_POST['stat'];
	$height		= $_POST['height'];
	$weight		= $_POST['weight'];
	$btype		= $_POST['type'];
	$gsisno		= $_POST['gsis'];
	$pagibigno	= $_POST['pagibig'];
	$philno		= $_POST['phil'];
	$sssno		= $_POST['sss'];
	$resadd		= $_POST['addr'];
	$reszipcode	= $_POST['zip'];
	$restelno	= $_POST['tel'];
	$citizen	= $_POST['citi'];
	$permadd	= $_POST['paddr'];
	$permzipcode= $_POST['pzip'];
	$permtelno	= $_POST['ptele'];
	$email		= $_POST['email'];
	$celno		= $_POST['cell'];
	$agencyno	= $_POST['agency'];
	$tin		= $_POST['tin'];
	$entry    	= $rowcount;
	
	$sql = "INSERT INTO records VALUES ('$lastname', '$extname', '$firstname', '$midlename', '$birthday', '$placebirth' , '$sex', '$civils', '$height', '$weight', '$btype', '$gsisno', '$pagibigno', '$philno', '$sssno', '$resadd', '$reszipcode', '$restelno', '$citizen', '$permadd', '$permzipcode', '$permtelno','$email', '$celno','$agencyno', '$tin', '$entry')";	
	
		if ($conn->query($sql) === TRUE) {
			
			 echo "<script type=\"text/javascript\">window.alert('Registration Complete');
					window.location.href = '/lab01/Welcome.html';</script>"; 
			
		} 
		
		else {
		
			echo "<script type=\"text/javascript\">window.alert('Registration Failed, Please Try Again');
					window.location.href = '/lab01/Apply.html';</script>"; 
			
		}
	$conn->close();
	
?>