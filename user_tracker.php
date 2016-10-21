<?php
	require_once('connector.inc.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	
	$conn = dbConnect('pdo');
	$sqlquery = "SELECT id FROM d3_user WHERE ip_number=:ip"; //Here we use a ? as a safty precaution and to get into the habit of using prepared statement. This makes unsafe user input safer
		$statement = $conn->prepare($sqlquery);
		$statement->bindParam(":ip",$ip);
		$statement->execute();
		
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	
	if ($result) {
		
		$user_id = $result['id'];
	//echo "Bruger fandtes. id $USER_ID";
	// Brugeren er i databasen. Han har id $result['id']	
		
	} else {
	// Brugeren er ny (ikke fundet i databasen).
	// Opret ham (med INSERT)
		$sqlquery = "INSERT INTO d3_user (ip_number) VALUES (:ip)";
			$statement = $conn->prepare($sqlquery);
			$statement->bindParam(":ip",$ip);
			$statement->execute();
		
		$sqlquery = "SELECT id FROM d3_user WHERE ip_number=:ip"; //Here we use a ? as a safty precaution and to get into the habit of using prepared statement. This makes unsafe user input safer
			$statement = $conn->prepare($sqlquery);
			$statement->bindParam(":ip",$ip);
			$statement->execute();
			
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		$user_id = $result['id'];
		//echo "Bruger fandtes IKKE. id $USER_ID";
	}

?>