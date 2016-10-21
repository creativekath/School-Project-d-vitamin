<?php
	require_once('connector.inc.php');

	function track_article($conn, $user_id, $article_id) {
		$sqlquery = "INSERT INTO d3_read (d3_user_id, d3_article_id) VALUES (:user_id, :article_id)";
			$statement = $conn->prepare($sqlquery);
			$statement->bindParam(":user_id",$user_id);
			$statement->bindParam(":article_id",$article_id);
			$statement->execute();
			
	}


?>