<?php

require ("menu.php");
require_once('connector.inc.php');
require_once('user_tracker.php');

function startPage (){
	return "<!DOCTYPE HTML>
			<html>";
}

function endPage (){
	return "</html>";
}

function upperPage ($extraHeaders, $title){
	$ret = '<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>'.$title.'</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/slideshow.css" type="text/css"/>
	<link rel="stylesheet" href="css/menu.css" type="text/css"/>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
	<script type="text/javascript">
	
		$(document).ready(function(){
			$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
		});
	</script>
	
	';
	
	$ret .= $extraHeaders.'
	</head>';
	
	return $ret;
}

function mainPage ($content){
	return '<body>
		<div id="wrapper">
			<div id="top">
				<div class="top-cont">
					<img src="images/logo.png" alt="D vitamin" height="95" width="186">
				</div>	
			</div>
			
			<div id="header">
				<div class="header-cont">
					'.menu().'
				</div>

			</div>
				
			<div id="content">
				'.$content.'
			</div>
			
			<div id="footer">
				<div class="footer-cont">
					<div class="mright">
						<p><b>Styrelsensundhed</b> - Axel Heides Gade 1 | 2300 København S | Telefon: 72 22 74 00	| E-mail: <a href="mailto:sst@sst.dk">sst@sst.dk</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>';
}

function printPage ($arguments){
	$extraHeaders = '';
	$title = 'Vitamin-D';
	
	if (!isset($arguments["content"])){
		die ("Error: no content given.");		
	}
	
	$content = $arguments["content"];
	
	if (isset($arguments["extraHeaders"])){
		$extraHeaders = $arguments["extraHeaders"];	
	}
	
	if (isset($arguments["title"])){
		$title = $arguments["title"];	
	}
	
	print startPage();
	print upperPage($extraHeaders, $title);
	print mainPage($content);
	print endPage();	
}



?>
