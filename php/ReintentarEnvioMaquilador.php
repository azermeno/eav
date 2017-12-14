<?php

  // if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        
		require_once 'configMySQL.php';
		
		session_start();
				
			$conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['pass'], $mysql_config['db']);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$conn->set_charset("utf8");
			$returnJs = array();			
			
			//$Lote = isset($_GET['Lote']) ? $_GET['Lote'] : ''; 
						 
			//Verificando la sesion del usuario
			
			return "Se reintentó";
						
			echo json_encode($returnJs);
			$conn->close();
   // }
?>