<?php
	require_once ("template.php");

	$content = '
		<div id="vitamin-d">
			<h3>D vitamin</h3>
			
			<p>10ug (400 IE) D vitamin dgl. anbefales til:</p>
			<ul>
				<li>Børn 0 – 2 år (Ddråber*)</li>
				<li>Gravide</li>
			</ul>
			<br />
			<p><b>Øvre sikre grænse for indtag.</b> <br /> Den øvre sikre grænse for dagligt indtag er fastsat til 25ug for børn op til 10 år og 50ug for voksne (inkl. gravide og ammende) samt børn fra 11 år. Højere doser kan tolereres i kortere tid, hvis det anbefales af lægen med henblik på behandling af Dvitaminmangel.</p>
			
			<p>*En multivitamintablet til børn indeholder 10ug D vitamin. Hvis forældrene ønsker at give barnet en
multivitamintablet (tidligst fra 1 ½ års alderen på grund af risiko for fejlsynkning), dækker det behovet
og barnet skal ikke have Ddråber.</p>
			
			
			<p>Hvis du ønsker at vide mere omkring D vitamin, så kan du læse nogle af <a href="article.php">artiklerne</a> her på siden</p>
			
		</div>	
		
		';
	$arguments = array();
	$arguments["extraHeaders"] = '';
	
	$arguments["content"] = $content;
	printPage ($arguments);


?>