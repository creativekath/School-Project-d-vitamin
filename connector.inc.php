<?php

// reusable database connector
	function dbConnect($connectionType) {
		$host = 'host';
		$db = 'database';
		$user = 'user';
		$pw = '*'';
		
		if ($connectionType == 'mysqli') {
			return new mysqli($host, $user, $pw, $db);
			
		}	else if ($connectionType=='pdo') {
			try{
				
			return new PDO("mysql:host=localhost;dbname=vitamin_d;charset=utf8", $user,$pw);
		}	catch(PDOException $e){
				
			echo $e->getMessage().' database i udu pdo';
			exit;
			}
		}
	}
?>