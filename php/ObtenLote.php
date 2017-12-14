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
			
			$Lote = isset($_GET['Lote']) ? $_GET['Lote'] : ''; 
						 
			//Verificando la sesion del usuario
						
			$sql = "SELECT LM.IdUnidad as IdUnidad, LM.IdLote as IdLote, LM.IDFolio as IdFolio, Folio_LIS, LM.Nombre as Nombre, Edo.Texto as Estado, E.Abreviatura as Abreviatura FROM `lotes_muestras` as LM LEFT JOIN `lotes_muestras_estudios` as LME ON LM.IdUnidad = LME.IdUnidad AND LM.IdLote = LME.IdLote AND LM.IdFolio = LME.IdFolio LEFT JOIN Estudios as E ON E.IdUnidad = LM.IdUnidad and E.IdEstudio = LME.IdEstudio LEFT JOIN Estados as Edo ON Edo.Estado = LM.Estado AND Edo.TipoEstado = 'Tubo' WHERE concat(LM.IdUnidad,LM.IdLote) = '{$Lote}'";
					
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