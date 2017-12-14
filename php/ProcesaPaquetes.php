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
			
			$Folio = isset($_GET['Folio']) ? $_GET['Folio'] : ''; 
						 
			//Verificando la sesion del usuario
					
			
			$sql = "select pk_astm, paquete from astm.astm where tipo = 'L>R' and status = 0";
					
			$sqle = "";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$returnJs[]=$row;
					$sqle = $sqle . "update astm.astm set status = 2 where pk_astm = '{$row["pk_astm"]}';"
				}
				$result->free();
			}
			
			$respuesta = $conn->query($sql);
			
			echo json_encode($returnJs);
			$conn->close();
   // }
?>