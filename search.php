<?php
	require_once ("template.php");
	require_once('connector.inc.php');
	
	$conn = dbConnect('pdo');

	$search =$_POST['search'];
	
	$sqlquery = "INSERT INTO d3_search (d3_user_id,text) VALUES (:d3_user_id, :text)";
		$statement = $conn->prepare($sqlquery);
		$statement->bindParam(":d3_user_id",$user_id);
		$statement->bindParam(":text",$search);
		$statement->execute();
		
		
	$content = '
		<h2>Du har søgt på '.$search.' </h2>
		<p>Søgefunktionen virker desværre ikke i øjeblikket. <br /> Vi arbejder på at få det fikset hurtigst muligt.</p>
	
	';
		
	$arguments = array();
	$arguments["extraHeaders"] = '<script type="text/javascript">
			setTimeout(\'window.location.href="index.php"\', 5000) /* 5 seconds */
        </script><noscript>
 		 <meta http-equiv="refresh" content="5;url=index.php">
		</noscript>
		';
	
	$arguments["content"] = $content;
	printPage ($arguments);



?>