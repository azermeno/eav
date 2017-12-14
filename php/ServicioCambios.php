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
			
			//$Lote = isset($_GET['Lote']) ? $_GET['Lote'] : ''; 
						 
			//Verificando la sesion del usuario
			
			$tiempoEstado3 = "1000";
			$tiempoEstado4 = "2000";
			
		    $sql = "UPDATE Lotes set Estado = 30 where now() - Fecha > $tiempoEstado3 and estado > 10;";
			
			//echo $sql;
			
			$respuesta = $conn->query($sql);					
					
			$sql = "UPDATE Lotes_muestras set Estado = 30 where IdLote in ( Select IdLote from lotes where now() - Fecha > $tiempoEstado3 ) and estado > 10 ;";
			
			//echo $sql;
			
			$respuesta = $conn->query($sql);					
			
			$sql = "UPDATE Lotes set Estado = 70 where now() - Fecha > $tiempoEstado4  and estado > 10;";
			
			
			//echo $sql;
			
			
			$respuesta = $conn->query($sql);					
			
			$sql = "UPDATE Lotes_muestras set Estado = 70 where IdLote in ( Select IdLote from lotes where now() - Fecha > $tiempoEstado4 )  and estado > 10;";
			
			//echo $sql;
			
			$respuesta = $conn->query($sql);					
			
			$sql = "SELECT l.IdUnidad as IdUnidad, l.IdLote as IdLote, lm.IdFolio as IdFolio ,EL.Texto as Estado, ELM.Texto as EstadoM FROM `lotes` as l left join lotes_muestras as lm on l.IdUnidad = lm.IdUnidad and l.IdLote = lm.IdLote left join estados as EL on EL.TipoEstado = 'Lote' and EL.Estado = l.estado left join estados as ELM on ELM.TipoEstado = 'Tubo' and ELM.Estado = lm.Estado;";
					
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