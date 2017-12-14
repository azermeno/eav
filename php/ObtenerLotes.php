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
			
			$Condiciones = isset($_GET['Condiciones']) ? $_GET['Condiciones'] : ''; 
						 
			//Verificando la sesion del usuario
						
			$sql = "SELECT IdUnidad, IdLote, Fecha, E.Texto as Estado from Lotes as L left join Estados as E on E.TipoEstado = 'Lote' and L.Estado = E.Estado order by Fecha DESC;";
					
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