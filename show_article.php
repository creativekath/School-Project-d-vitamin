<?php
	require_once ("template.php");
	require_once('connector.inc.php');
	require_once('article_tracker.php');
	
	$conn = dbConnect('pdo');

//This code is for articles to be called
	
	if (isset($_GET['id'])) { 
		$article_id = $_GET['id'];
		
		$sqlquery = "SELECT * FROM d3_article WHERE id=:id";
		$statement = $conn->prepare($sqlquery);
		$statement->bindParam(":id",$article_id);
		$statement->execute();
		
		$article = $statement->fetch(PDO::FETCH_ASSOC);
	
		if (!$article){	
			header("Location: article.php");
			die();	
		}

  	} else {
		$sqlquery = "SELECT * FROM d3_article ORDER BY date_of_upload DESC LIMIT 1";
		$statement = $conn->prepare($sqlquery);
		$statement->execute();
		
		$article = $statement->fetch(PDO::FETCH_ASSOC);
		
		$article_id = $article['id'];
	}

	track_article ($conn, $user_id, $article_id);


//This code is for the comments to be stored in the database
	
	$error_message = "";
	
	 if (isset($_POST['submit'])) {
		$submit=$_POST['submit'];
		$name=htmlentities($_POST['name'],ENT_COMPAT,"UTF-8");
		$comment=htmlentities($_POST['comment'],ENT_COMPAT,"UTF-8");

		if($name&&$comment)
			{
			$sqlquery = "INSERT INTO d3_comment (name,comment,d3_user_id,d3_article_id) VALUES (:name, :comment, :d3_user_id, :d3_article_id)";
			$statement = $conn->prepare($sqlquery);
			$statement->bindParam(":name",$name);
			$statement->bindParam(":comment",$comment);
			$statement->bindParam(":d3_user_id",$user_id);
			$statement->bindParam(":d3_article_id",$article_id);
			$statement->execute();
			}
			else
			{
				$error_message = "Vær venlig at udfylde alle felter";
			}
		
		}

	$content = '<div class="article"><h1>'.$article['title'].'</h1><p>'.$article['date_of_publish'].'<br />'.$article['author_name'].'<br />'.htmlentities($article['text'],ENT_COMPAT,"UTF-8").'</p></div>';



	$content .= '
	
				
		<form action="'.$_SERVER['REQUEST_URI'].'" method="POST">
				Navn <input type="text" name="name" /><br /><br />
				Skriv en kommentar <br /><textarea name="comment" cols="25" rows="7"></textarea><br /><br />
				<input type="submit" name="submit" value="Send" /><br />
			
		</form>
		<br />'.$error_message.'
		<hr class="hrcomment1"/>
		
		';
		
		
	$sqlquery = "SELECT name,comment,d3_comment.date FROM d3_comment INNER JOIN d3_aprovel ON d3_comment.id = d3_aprovel.d3_comment_id WHERE aprovel='y' AND d3_article_id=:article_id ORDER BY d3_comment.date DESC";
		$statement = $conn->prepare($sqlquery);
			$statement->bindParam(":article_id",$article_id);
			$statement->execute();
	
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		
		$content .= '<p>'.$row['name'].' - ('.$row['date'].')<br /><br />'.$row['comment'].'</p><hr class="hrcomment2"/>';
		
	}
		
	$arguments = array();
	$arguments["extraHeaders"] = '';
	
	$arguments["content"] = $content;
	printPage ($arguments);


?>