<?php
	require_once ("template.php");

	$content = '
		<div id="food">
			<h3>Mad med D vitamin</h3>
			<p>Det er kun i animalske fødevarer at man finder D-vitamin. Især fede fisk som makrel, laks og ikke mindst torskelever er fulde af D-vitamin, og det anbefales at spise 200-300 gram om ugen. Kroppen er afhængig af D-vitamin, der blandt andet regulerer indholdet af kalcium i blodet og derfor styrker knogler og tænder. </p>
			<h4>Top 10 fødevare med masser ad D vitamin</h4>
			
			<ol>
				<li>Lever</li>
				<li>Laks</li>
				<li>Ål</li>
				<li>Røget torskerogn</li>
				<li>Ørred</li>
				<li>Hellefisk</li>
				<li>Sild</li>
				<li>Sardiner</li>
				<li>Makrel</li>
				<li>Rå æg</li>
			
			</ol>
			
			
			
		</div>
		<!--Indholdet på denne side er taget fra http://politiken.dk/forbrugogliv/livsstil/familieliv/ECE637544/8-raad-saadan-faar-du-nok-d-vitamin/
http://www.foodcomp.dk/v7/fvdb_foodnutrlist.asp?CompId=0023 -->
		';
	$arguments = array();
	$arguments["extraHeaders"] = '';
	
	$arguments["content"] = $content;
	printPage ($arguments);


?>