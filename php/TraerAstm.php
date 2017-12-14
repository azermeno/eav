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
			
			$FolioLIS = isset($_GET['FolioLIS']) ? $_GET['FolioLIS'] : ''; 
			// error_log("chek");
			 $sql = " Select pk_astm,paquete from astm where status = 0 and tipo = 'L>R'";
			// error_log($sql);
			$result = $conn->query($sql);
			//error_log($$result->num_rows);
			if ($result->num_rows > 0) {
				
				while($temp = $result->fetch_assoc()) {
				    $returnJs[] = $temp;
				    // Desactivar para: inglés
					// $sql = "update astm.astm set status = 2 where pk_astm = '{$temp['pk_astm']}';";	
					// error_log($sql);
					// $conn->query($sql);
				}
				
			}
			
			$result->free();
			
			$conn->close();
			
			echo json_encode($returnJs);
			
	}
?>