<?php
	require_once ("template.php");
	require_once('connector.inc.php');
	
	$conn = dbConnect('pdo');

//This code is for articles to be set into a list of links on the main article page
	
	$content = '<div class="article-link"><ul>'."\n";
	
	$sqlquery = "SELECT id, author_name, title FROM d3_article ORDER BY date_of_upload DESC";
		$statement = $conn->prepare($sqlquery);
		$statement->execute();
		
		while ($article = $statement->fetch(PDO::FETCH_ASSOC)) {
			$content .= '<li><a href="show_article.php?id='.$article['id'].'">'.$article['title'].'</a> af '.$article['author_name'].'</li>'."\n";
		
		}
		
		$content .= '</ul></div>';
		
		
	$arguments = array();
	$arguments["extraHeaders"] = '';
	
	$arguments["content"] = $content;
	printPage ($arguments);


?>