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
			
			$Folio = isset($_GET['Folio']) ? $_GET['Folio'] : ''; 
			$FolioMaq = isset($_GET['FolioMaq']) ? $_GET['FolioMaq'] : ''; 
						 
			//Verificando la sesion del usuario
					
			$texto = "H|EAV|LIS" . '\n' ;
			$texto = $texto . "Q|" . $Folio . '|'. $FolioMaq .'\n';
			$texto = $texto . "L|N" . '\n';
					
			$sql = "INSERT INTO astm.astm (Algo, Paquete, LO que poner por defualt ) VALUES ('Algo','{$texto}','Los defaults')";
					
			$respuesta = $conn->query($sql);
					if ( $respuesta )
						$returnJS = "true";
					else
						$returnJS = "false";
						
			echo json_encode($returnJs);
			$conn->close();
   // }
?>