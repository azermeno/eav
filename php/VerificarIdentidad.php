<?php

  // if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        
		require_once 'configMySQL.php';
		
				
			$conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['pass'], $mysql_config['db']);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$conn->set_charset("utf8");
			$returnJs = array();			
			
			$Usuario = isset($_GET['Usuario']) ? $_GET['Usuario'] : ''; 
			$Contrasena = isset($_GET['Contrasena']) ? $_GET['Contrasena'] : ''; 
						 
			//Verificando la sesion del usuario
						
			$sql = "SELECT Editable from Usuarios where IdUsuario = '{$Usuario}' and Contrasena = '{$Contrasena}'";
					
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$returnJs[]=$row;
				}
				$result->free();
			}
						
			echo json_encode($returnJs);
			$conn->close();
   // }
?>