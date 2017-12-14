<?php

  //if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        
		require_once 'configMySQL.php';
		
		session_start();
				
			$conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['pass'], $mysql_config['db']);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$conn->set_charset("utf8");
			//$conn->real_escape_string();
			$returnJs = "";			
			
			
			$Lote = isset($_GET['Lote']) ? $_GET['Lote'] : ''; 
			$Estado = isset($_GET['Estado']) ? $_GET['Estado'] : '';
			//$Estado = "En Captura";		
			//Verificando la sesion del usuario
			
			//$conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
			if ( strcmp($Estado , "En Captura") !== 0 )
			{
				$ValorEstado = "2";
			} else
			{
				$ValorEstado = "1";
			}
			$ValorEstado = $Estado;
			$respuesta = false;
			$Pacientes = explode("~", $Lote);
			$ActualizaLote = false;
			$sql = "";
			$contador = 1;
			$IdUnidad = "AlgunValor";
			$IdLote = "AlgunValor";
			$returnJs = $returnJs ."Recibi de Lote " . $Lote;
			$returnJs = $returnJs ."Recibi de Estado " . $Estado;
			foreach ($Pacientes as $Paciente) {
								
			    $DatosPaciente = explode(",", $Paciente );
				$returnJs = $returnJs . "<br><br>El número de elementos en el array es: " . count($DatosPaciente);
				if ( count($DatosPaciente) > 3 )
				{
					
				$IdUnidad = substr($DatosPaciente[1],0,2);
				$returnJs = $returnJs . $IdUnidad;
				$IdLote = substr($DatosPaciente[1],2,3);
				$returnJs = $returnJs . $IdLote;
					
				if ( !$ActualizaLote )
				{					
					$sql = "INSERT INTO lotes ( IdUnidad, IdLote, Fecha, Estado ) VALUES ( '{$IdUnidad}','{$IdLote}',NOW(),'{$ValorEstado}') ON DUPLICATE KEY UPDATE Estado = '{$ValorEstado}';";		
					$returnJs = $returnJs . "<br><br>";
					$returnJs = $returnJs . $sql;
					$respuesta = $conn->query($sql);
					if ( !$respuesta )
						break;
					$sql = "DELETE FROM lotes_muestras WHERE IdUnidad = '{$IdUnidad}' and IdLote = '{$IdLote}';";
					$returnJs = $returnJs . "<br><br>";
					$returnJs = $returnJs . $sql;
					$respuesta = $conn->query($sql);
					if ( !$respuesta )
						break;	
					$sql = "DELETE FROM lotes_muestras_estudios WHERE IdUnidad = '{$IdUnidad}' and IdLote = '{$IdLote }';";
					$returnJs = $returnJs . "<br><br>";
			        $returnJs = $returnJs .$sql;
					$respuesta = $conn->query($sql);
					if ( !$respuesta )
						break;		
					$ActualizaLote = true;
				}
				$DatosEstudio = explode("!", $DatosPaciente[3]);
				$IDfolio = substr($DatosPaciente[1],5,3);
				$FolioLIS = $DatosPaciente[0];
				$Nombre = $DatosPaciente[2];
				$sql = "INSERT INTO lotes_muestras (IdUnidad, IdLote, IdFolio, Folio_LIS, Nombre, Estado) VALUES ( '{$IdUnidad}','{$IdLote}','{$IDfolio}','{$FolioLIS}','{$Nombre}','{$ValorEstado}' );";
				$returnJs = $returnJs . "<br><br>";
				$returnJs = $returnJs . $sql;
				$respuesta = $conn->query($sql);
				if ( !$respuesta )
					break;
				foreach ($DatosEstudio as $Estudio)
				{	
					if ( $Estudio !== "" ){
					$sql = "INSERT INTO lotes_muestras_estudios ( IdUnidad, IdLote, IdFolio, IdEstudio, Resultado, Estado ) SELECT '{$IdUnidad}','{$IdLote}','{$IDfolio}',IdEstudio, '', '{$ValorEstado}' from estudios where IdUnidad = '{$IdUnidad}' and Abreviatura = '{$Estudio}';";
					$returnJs = $returnJs . "<br><br>";
					$returnJs = $returnJs . $sql;
					$respuesta = $conn->query($sql);
					if ( !$respuesta )
						break;
					}
				}	
				if ( !$respuesta ){
					break;
				}				
				$sql = "delete from lotes_muestras where concat(IdFolio,IdLote) not in ( Select distinct(concat(IdFolio,IdLote)) from lotes_muestras_estudios );";
				$respuesta = $conn->query($sql);
				if ( !$respuesta )
					break;
				}
			}
			/*if ( !$respuesta )
			{
				$conn->rollback();
			}
			else
			{
				$conn->commit();
			}			
*/
			$returnJs = $returnJs . $respuesta;
			if ( $respuesta )
				$returnJs = "1";
			else
				$returnJs = "0";
			// error_log(print_r(arreglo , true));
			//realescapestring
			
			echo json_encode($returnJs);
			$conn->close();
    //}
?>