<?php
	require_once ("template.php");
	require_once('connector.inc.php');
	
	$conn = dbConnect('pdo');
	
	if (isset($_GET['id'])) { 
		$qr_id = $_GET['id'];

		$sqlquery = "SELECT * FROM d3_qr WHERE id=:id";
			$statement = $conn->prepare($sqlquery);
			$statement->bindParam(":id",$qr_id);
			$statement->execute();
			
			$qr = $statement->fetch(PDO::FETCH_ASSOC);
				if (!$qr) {
					header("Location: index.php");
					die();
				}
				
			$url = $qr['URL'];
	
		$sqlquery = "INSERT INTO d3_scan (d3_user_id,d3_qr_id) VALUES (:d3_user_id, :d3_qr_id)";
			$statement = $conn->prepare($sqlquery);
			$statement->bindParam(":d3_user_id",$user_id);
			$statement->bindParam(":d3_qr_id",$qr_id);
			$statement->execute();
			
			header("Location: $url");

	} else {
		header("Location: index.php");
	}
?>