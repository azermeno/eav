<?php
			
				
			require_once 'configMySQL.php';
		
				
			$conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['pass'], $mysql_config['db']);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$conn->set_charset("utf8");
			$returnJs = array();						
				
			$sql = "select pk_astm, paquete from astm.astm where tipo = 'D>R' and status = 0;";
			echo $sql;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {				
				while($row = $result->fetch_assoc()){
					$frames = explode("\n", $row["paquete"]);					
					for ($i = 0; $i < count($frames) ; $i++) {
						if ( strpos($frames[$i], "P|") === 0){
							
							$datosp = explode("|", $frames[$i]);
							
						}
						if ( strpos($frames[$i], "O|") === 0){
							
							$datoso = explode("|", $frames[$i]);														
							
						}
						if ( strpos($frames[$i],"R|") === 0 ){
							
							$datosr = explode("|", $frames[$i]);														
							$sql = "update eav.lotes_muestras_estudios set resultado = '{$datosr[1]} Ref : {$datosr[2]}' where concat(concat(IdUnidad,IdLote),IdFolio) = '{$datosp[2]}' and IdEstudio = '{$datoso[1]}'";
							echo $sql;
							$conn->query($sql);					
						}						
					}
					$sql = "update astm.astm set status = 2 where pk_astm = '{$row["pk_astm"]}';";					
					$conn->query($sql);
				}
				$result->free();
			}			
			
			$returnJs = "Correcto";
			
			echo json_encode($returnJs);
			$conn->close();
   // }
?>