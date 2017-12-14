<?php

	$Codigo = isset($_GET['Codigo']) ? $_GET['Codigo'] : ''; 
	//echo $Codigo;
	$fp = fsockopen("127.0.0.1", 9100, $errno, $errstr, 30);
	if (!$fp) {
		echo "$errstr ($errno)<br />\n";
	} else {
		//fwrite($fp, "You message");
		fwrite($fp, "^XA^MMC^XZ");
		fwrite($fp, "^XA^JUS^XZ");
		fwrite($fp, "~SD30");
		fwrite($fp, "~TA000");
		fwrite($fp, "~JSB");
		fwrite($fp, "^XA");
		fwrite($fp, "^SZ2");
		fwrite($fp, "^PW639");
		fwrite($fp, "^LL3197");
		fwrite($fp, "^PON");
		fwrite($fp, "^PR6,6");
		fwrite($fp, "^PMN");
		fwrite($fp, "^MNV");
		fwrite($fp, "^LS0");
		fwrite($fp, "^MTD");
		fwrite($fp, "^MMC,N");
		fwrite($fp, "^MPE");
		fwrite($fp, "^XZ");
		fwrite($fp, "^XA^JUS^XZ");
		fwrite($fp, $Codigo);
		
		//fwrite($fp, "^XA^JMA^FS^FX Encabezado, logo y datos generales^CF0,60^CI28^FO20,50^GFA,3266,3266,23,,gH07F,gG01FFC,gG07IF,g01JFC,g07KF,Y01LFC,Y07MF,X01NFC,X07OF,W01PFC,W07QF,V01RFC,V07SF,U01TFC,U07UF,T01VFC,T07WF,S01XFC,S0gF,R03gFC,R0gHF,Q03gHFC,Q0gJF,P03MFEN03MFC,P07MFP0NF,P0MFEP07MF8,O01MFEP03MFC,O01MFCOFC3MFC,O03WFE1MFC,O03NF7NFE1MFC,O03MFC7OF1MFC,:O03MF87OF0MFC,O03MF8PF0MFC,O03MF8PF8MFC,O03MF0PF8MFC,:O03MF1PF87LFC,O03MF1PFC7LFC,O03LFE1PFC7LFC,:O03LFE3PFC3LFC,:O03LFC3PFE3LFC,:O03LFC7PFE1LFC,:O03LFC7QF1LFC,O03LF87QF1LFC,O03LF8RF0LFC,:O03LF8RF8LFC,O03LF0RF8LFC,:O03LF1RF8LFC,O03LF1RF9LFC,O03LF1SF7KFC,O03LF0RFE7KFC,O03LFT0LFC,O03LF8S0LFC,O03LFCR03LFC,O03MF8Q0MFC,O03gLFC,O03RFC3RFC,O03LFC0EJ03FCI01LFC,O03LF038J03F8J0LFC,O03KFE07K07F8J07KFC,O03KFC0CK0FF8J03KFC,O03KF81RFC1KFC,O03KF03RFE0KFC,O03JFE07SF07JFC,O03JFC0TF83JFC,O03JF81TFC1JFC,O03JF03TFE1JFC,O03JF07UF17IFC,O03IFE0WF7IFC,O03IFE0VFC7IFC,O03IFEX07IFC,O03JFX07IFC,O03JF8W0JFC,O03JFCV03JFC,O03gLFC,:::O01gLFC,:O01gLF8,P0gLF8,P07gKF,P01gJFC,Q07gHFE,Q01gHF8,R03gFE,S0gF8,S03XFC,T0XF,T01VFC,U07UF,U01TF8,V03RFE,W0RF8,W03PFE,X0PF,X01NFC,Y07MF,Y01LFC,g07JFE,gG0JF8,gG03FFE,gH0FF,gH01C,,:U08,T018g03,T03gG0E,,3F33F87E3F0C10FDFF20F83003F83F00C0C1F30641F0F87F33FCFE7F9E19FDFF33F87803FC7F01E1E3FB0CC7F3FC60330CC0619E198018330078030C6001E1E6018CC6030CC0330CC0619B19801833004803066001A1660198C60306C0330CC0619B1980183200CC03066001B36600D8CC0306C033F8FE63J9FC183600CC03067F01B367F0F0CC0606C033FCFC7F1I9F8183600CC03067E019367F0F0CC0606C0330CC06318D980183601FE030660019A6600D8CC0306C0330CC06198D98018330186030660019E660198C6030660330CC06198798018330102030C60019E66018CC6030C7F33FCFE609879FC1833FB0303FC7F018C63F30EC7F3FC3F33F87E20C830FC1021FB0303F83F018023FB0643F1F8Q01,Q02,98479E3E20823F47C6I07C21F0CK0CI07861I0789C48332271C70C6C06I0467118CI0C0EI0C0630C6C49448212371450C680AI0425108AI0C0AI080B30C6C69648212371450C6809I04251192I0C12I0C0930C6C2924F213E6B488C6809I07C89F12I0C13I078930C6C2934821264A4F8C681FI078F931FI0C1FJ0DFB0C6C2914821224E488C68108004189121I0C21J050B0C6C691C8332346504C6C1080041050A1I0C218I0D09044C490C81E2140504047E080041050A08007E0800FA01E7C7C^FS^FO210,50^FD Cibernética. ^FS^CF0,40^FO210,100^FD Ticket de envío de muestras ^FS^FO210,135^FD 26/10/2017 ^FS^FO210,170^FD HGR 046 GUADALAJARA, JALISCO ^FS^FO50,250^GB550,12,1^FS^FX --------------------------------------------------------------^FX Segunda sección, listado de muestras.^FO220,280^FD Lote L-FU000 ^FS^CFA,30^FO50,360 ^FD Folio: FU000^FS^FO50,400^FD Mildred Rojo ^FS^FO50,440^FD CORET  ADENO  BBLCR ^FS^FO50,510 ^FD Folio: FU001^FS^FO50,550^FD Enrique Serna ^FS^FO50,590^FD ELSUD  PRB5 ^FS^FO50,660 ^FD Folio: FU002^FS^FO50,700^FD Alfreds Futterkiste ^FS^FO50,740^FD AHIGM ^FS^FO50,810 ^FD Folio: FU003^FS^FO50,850^FD Pédro Páramo ^FS^FO50,890^FD CD4  CISC  IL1 ^FS^FO50,960 ^FD Folio: FU004^FS^FO50,1000^FD Francisco Chang ^FS^FO50,1040^FD NAFE  B2  ACPM ^FS^FO50,1110 ^FD Folio: FU005^FS^FO50,1150^FD José Agustín ^FS^FO50,1190^FD ANSDE  BGM ^FS^FX --------------------------------------------------------------^FX Tercera sección, Código QR^FO50,1260^BQN,2,10^FD   Cibernética 26/10/2017 Unidad: HGR 046 GUADALAJARA, JALISCOLote L-FU000FU000Mildred Rojo CORET CORET  ADENO CORET  ADENO  BBLCR  FU001Enrique Serna ELSUD ELSUD  PRB5  FU002Alfreds  E5314F^FS^^FO50,1860^BQN,2,10^FD   utterkiste AHIGM  FU003Pédro Páramo CD4 CD4  CISC CD4  CISC  IL1  FU004Francisco Chang NAFE NAFE  B2 NAFE  B2  ACPM  FU005José Agustín ANSDE ANSDE  BGM                             E5314F^FS^^FX --------------------------------------------------------------^FX Cuarta sección, firma de validación^FO20,2460^FD Valido que la información ^FS^FO20,2500^FD contenida en este ticket ^FS^FO20,2540^FD coincide con las muestras y^FS^FO20,2580^FD estudios enviados a ^FS^FO20,2620^FD laboratorios Diagnomol ^FS^FO110,2730^FD __________________^FS^FO110,2780^FD Q.F.B Juan Pérez ^FS Valido que la información , contenida en este ticket , coincide con las muestras y, estudios enviados a , laboratorios Diagnomol ^XZ");
		//fwrite($fp, "^XA");
		//fwrite($fp, "^FX --------------------------------------------------------------^FX Segunda sección, listado de muestras.^FO220,280^FD Lote L-FU000 ^FS^CFA,30^FO50,360 ^FD Folio: FU000^FS^FO50,400^FD José Emilio Pacheco ^FS^FO50,440^FD EORI ^FS^FO50,510 ^FD Folio: FU001^FS^FO50,550^FD José Emilio Pacheco ^FS^FO50,590^FD 23270 ^FS^FO50,660 ^FD Folio: FU002^FS^FO50,700^FD Juan Rulfo ^FS^FO50,740^FD LA ^FS^FO50,810 ^FD Folio: FU003^FS^FO50,850^FD Giovanni López ^FS^FO50,890^FD CORET ^FS^FO50,960 ^FD Folio: FU004^FS^FO50,1000^FD Jaime Sabines ^FS^FO50,1040^FD PCA  KAP  INH ^FS^FO50,1110 ^FD Folio: FU005^FS^FO50,1150^FD Mariano Azuela ^FS^FO50,1190^FD EHEM ^FS");
		/*fwrite($fp, "^FX Top section with company logo, name and address.");
		fwrite($fp, "^CF0,60");
		fwrite($fp, "^FO50,50^GB100,100,100^FS");
		fwrite($fp, "^FO75,75^FR^GB100,100,100^FS");
		fwrite($fp, "^FO88,88^GB50,50,50^FS");
		fwrite($fp, "^FO220,50^FDFranco loves Jacob^FS");
		fwrite($fp, "^CF0,40");
		fwrite($fp, "^FO220,100^FD1000 Shipping Lane^FS");
		fwrite($fp, "^FO220,135^FDShelbyville TN 38102^FS");
		fwrite($fp, "^FO220,170^FDUnited States (USA)^FS");
		fwrite($fp, "^FO50,250^GB700,1,3^FS");
		fwrite($fp, "^FX Second section with recipient address and permit information.");
		fwrite($fp, "^CFA,30");
		fwrite($fp, "^FO50,300^FDJohn Doe^FS");
		fwrite($fp, "^FO50,340^FD100 Main Street^FS");
		fwrite($fp, "^FO50,380^FDSpringfield TN 39021^FS");
		fwrite($fp, "^FO50,420^FDUnited States (USA)^FS");
		fwrite($fp, "^CFA,15");
		fwrite($fp, "^FO600,300^GB150,150,3^FS");
		fwrite($fp, "^FO638,340^FDPermit^FS");
		fwrite($fp, "^FO638,390^FD123456^FS");
		fwrite($fp, "^FO50,500^GB700,1,3^FS");
		fwrite($fp, "^FX Third section with barcode.");
		fwrite($fp, "^BY5,2,270");
		fwrite($fp, "^FO175,550^BC^FD1234567890^FS");
		fwrite($fp, "^FX Fourth section (the two boxes on the bottom).");
		fwrite($fp, "^FO50,900^GB700,250,3^FS");
		fwrite($fp, "^FO400,900^GB1,250,3^FS");
		fwrite($fp, "^CF0,40");
		fwrite($fp, "^FO100,960^FDShipping Ctr. X34B-1^FS");
		fwrite($fp, "^FO100,1010^FDREF1 F00B47^FS");
		fwrite($fp, "^FO100,1060^FDREF2 BL4H8^FS");
		fwrite($fp, "^CF0,190");
		fwrite($fp, "^FO485,965^FDCA^FS");
		//fwrite($fp, "^CN");*/
		//fwrite($fp, "^XZ");				
		fclose($fp);
		
	}
 /* if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        
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
  }*/
?>