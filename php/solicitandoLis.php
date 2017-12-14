
<?php

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        
		require_once 'configMySQLASTM.php';
			
		
		$conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['pass'], $mysql_config['db']);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$conn->set_charset("utf8");
			
			$returnJs = array();
			$returnJs['msj'] = true;
			//$paquete = isset($_GET['paquete']) ? $conn->real_escape_string(str_replace('$','\n',$_GET['paquete'])) : '';
			$FolioLIS = isset($_GET['FolioLIS']) ? $conn->real_escape_string($_GET['FolioLIS']) : '';
			$FolioMaq = isset($_GET['FolioMaq']) ? $conn->real_escape_string($_GET['FolioMaq']) : '';
			
			$paquete = "H|LIS|EAV$" . "Q|" . $FolioLIS . "|" . $FolioMaq . "$" . "L|N" ;						  			
			// error_log($paquete);
			$paquete = str_replace('$','\n',$paquete) ;
			// error_log($paquete);
			
			$sql = "INSERT INTO astm.astm (tipo, paquete, status) VALUES ('R>L','{$paquete}', 0);";
			// error_log($sql);
			
			$conn->query($sql);
		
			if($conn->affected_rows != 1){
				$returnJs['msj'] = false;
			}
			
			
			
			$conn->close();
			
			echo json_encode($returnJs);
			
	}
?>