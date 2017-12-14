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
			
			$IdUnidad = isset($_GET['IdUnidad']) ? $_GET['IdUnidad'] : ''; 
			$IdLote = isset($_GET['IdLote']) ? $_GET['IdLote'] : ''; 			
													
			$sql = "select eav.lotes.IdUnidad as IdUnidad, eav.lotes.IdLote as IdLote, eav.lotes_muestras.IdFolio as IdFolio, eav.lotes_muestras.Folio_LIS as Folio_LIS, eav.lotes_muestras.Nombre as Nombre, eav.lotes_muestras_estudios.IdEstudio as IdEstudio from eav.lotes left join eav.lotes_muestras on eav.lotes.IdUnidad = eav.lotes_muestras.IdUnidad and lotes.IdLote = eav.lotes_muestras.IdLote left join eav.lotes_muestras_estudios on eav.lotes_muestras_estudios.IdFolio = lotes_muestras.IdFolio and eav.lotes_muestras_estudios.IdLote = eav.lotes.IdLote and eav.lotes_muestras_estudios.IdUnidad = eav.lotes.IdUnidad where eav.lotes.IdUnidad = '{$IdUnidad}' and eav.lotes.IdLote = '{$IdLote}' order by IdUnidad, IdLote, IdFolio";
			//echo $sql;
			error_log($sql);
			$result = $conn->query($sql);
			$IdFolio = "";
			$texto  = "";
			
			error_log($result->num_rows);
			if ($result->num_rows > 0) {				
				$texto = "H|EAV|DIAG" . '\n';
				while($row = $result->fetch_assoc()){					
					if ( $IdFolio !=$row["IdFolio"] )
					{
						$IdFolio = $row["IdFolio"];					
						$texto = $texto . "P|" . $row["Folio_LIS"] . "|" . $IdUnidad . $IdLote . $IdFolio . "|" . $row["Nombre"] . '\n'; 
					}
					$IdFolio = $row["IdFolio"];
					$texto = $texto . "O|" . $row["IdEstudio"] . '\n';					
				}
				$texto = $texto . "L|N";
				//echo $texto;
				$result->free();
			}
			
			$sql = "insert into astm.astm (tipo,paquete,status) VALUES('R>D','{$texto}','0')";
			
			$conn->query($sql);
			
			$returnJs = "Correcto";
			
			echo json_encode($returnJs);
			$conn->close();
   // }
?>