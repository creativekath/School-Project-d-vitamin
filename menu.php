<?php

function menu(){
	return '
	<div id="menu">
		
		<ul>
			<li><a href="index.php">Forside</a></li>
			<li><a href="vitaminD.php">D vitamin</a></li>
			<li><a href="article.php">Artikler</a></li>
			<li><a href="food.php">Mad</a></li>
			
			
			
		</ul>
		<form id="search" action="search.php" method="POST">
			<input type="text" name="search" value="Søg" />
		</form>
	</div>
	 ';
}
?>