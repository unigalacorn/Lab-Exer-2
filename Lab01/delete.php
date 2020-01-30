<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "datasheet";
		$url='view.php';

	$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
		
			die("Connection failed: " . $conn->connect_error);
		
		}
		
			$id = $_GET['id'];
			$res= mysqli_query($conn, "SELECT * FROM records WHERE entry='$id'");
					if($res === FALSE) 
						die(mysqli_error($conn)); 
			$sql="SELECT * FROM records";
			if ($result=mysqli_query($conn,$sql)){
				$rowcount=mysqli_num_rows($result);
				}
			
			$row= mysqli_fetch_array($res);
		
		
				$id		 =$_GET['id'];
				$sql     = "DELETE FROM records WHERE entry='$id'";
	
				$res 	 = mysqli_query($conn, $sql) 
			                                or die("Could not update  ".mysqli_error($conn));
											
			while($id<$rowcount){
					$sql	 ="UPDATE records SET entry=$id WHERE entry=$id+1";
					$res 	 = mysqli_query($conn, $sql) 
			                                or die("Could not update  ".mysqli_error($conn));
					$id++;
					}
				
				echo "<meta http-equiv='refresh' content='0;url=view.php'>";

		if ($conn->query($sql) === TRUE) {
							$message = "Record deleted successfully!";
							echo "<script type='text/javascript'>alert('$message');</script>";
							echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
							exit();} 
		else {
							$conn->close();
							$message = "Error in deletion!";
							echo "<script type='text/javascript'>alert('$message');</script>";
							echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
		}
?>