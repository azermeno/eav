function imprimeLote(){
	var varIdUnidad = LoteGlobal.substring(0,2);
	var varIdLote = LoteGlobal.substring(2,5);
	var caracteresPorQR = 180;
	var posicionlote;
	var posicionDeImpresionX = 100;
    for ( var mvclote in MVCLotes )
	{
		if ( MVCLotes[mvclote][1] == varIdUnidad && MVCLotes[mvclote][2] == varIdLote )
		{
			posicionlote = mvclote;
			break;
		}				
	}
	var textoParaQR = MVCLotes[posicionlote][0] + " "+ varIdUnidad + varIdLote;
	var encabezado = "^XA" +
		"^FX Encabezado, logo y datos generales" +
		"^CF0,60" +
		"^CI28" +
		"^FO230,50^GFA,3266,3266,23,,gH07F,gG01FFC,gG07IF,g01JFC,g07KF,Y01LFC,Y07MF,X01NFC,X07OF,W01PFC,W07QF,V01RFC,V07SF,U01TFC,U07UF,T01VFC,T07WF,S01XFC,S0gF,R03gFC,R0gHF,Q03gHFC,Q0gJF,P03MFEN03MFC,P07MFP0NF,P0MFEP07MF8,O01MFEP03MFC,O01MFCOFC3MFC,O03WFE1MFC,O03NF7NFE1MFC,O03MFC7OF1MFC,:O03MF87OF0MFC,O03MF8PF0MFC,O03MF8PF8MFC,O03MF0PF8MFC,:O03MF1PF87LFC,O03MF1PFC7LFC,O03LFE1PFC7LFC,:O03LFE3PFC3LFC,:O03LFC3PFE3LFC,:O03LFC7PFE1LFC,:O03LFC7QF1LFC,O03LF87QF1LFC,O03LF8RF0LFC,:O03LF8RF8LFC,O03LF0RF8LFC,:O03LF1RF8LFC,O03LF1RF9LFC,O03LF1SF7KFC,O03LF0RFE7KFC,O03LFT0LFC,O03LF8S0LFC,O03LFCR03LFC,O03MF8Q0MFC,O03gLFC,O03RFC3RFC,O03LFC0EJ03FCI01LFC,O03LF038J03F8J0LFC,O03KFE07K07F8J07KFC,O03KFC0CK0FF8J03KFC,O03KF81RFC1KFC,O03KF03RFE0KFC,O03JFE07SF07JFC,O03JFC0TF83JFC,O03JF81TFC1JFC,O03JF03TFE1JFC,O03JF07UF17IFC,O03IFE0WF7IFC,O03IFE0VFC7IFC,O03IFEX07IFC,O03JFX07IFC,O03JF8W0JFC,O03JFCV03JFC,O03gLFC,:::O01gLFC,:O01gLF8,P0gLF8,P07gKF,P01gJFC,Q07gHFE,Q01gHF8,R03gFE,S0gF8,S03XFC,T0XF,T01VFC,U07UF,U01TF8,V03RFE,W0RF8,W03PFE,X0PF,X01NFC,Y07MF,Y01LFC,g07JFE,gG0JF8,gG03FFE,gH0FF,gH01C,,:U08,T018g03,T03gG0E,,3F33F87E3F0C10FDFF20F83003F83F00C0C1F30641F0F87F33FCFE7F9E19FDFF33F87803FC7F01E1E3FB0CC7F3FC60330CC0619E198018330078030C6001E1E6018CC6030CC0330CC0619B19801833004803066001A1660198C60306C0330CC0619B1980183200CC03066001B36600D8CC0306C033F8FE63J9FC183600CC03067F01B367F0F0CC0606C033FCFC7F1I9F8183600CC03067E019367F0F0CC0606C0330CC06318D980183601FE030660019A6600D8CC0306C0330CC06198D98018330186030660019E660198C6030660330CC06198798018330102030C60019E66018CC6030C7F33FCFE609879FC1833FB0303FC7F018C63F30EC7F3FC3F33F87E20C830FC1021FB0303F83F018023FB0643F1F8Q01,Q02,98479E3E20823F47C6I07C21F0CK0CI07861I0789C48332271C70C6C06I0467118CI0C0EI0C0630C6C49448212371450C680AI0425108AI0C0AI080B30C6C69648212371450C6809I04251192I0C12I0C0930C6C2924F213E6B488C6809I07C89F12I0C13I078930C6C2934821264A4F8C681FI078F931FI0C1FJ0DFB0C6C2914821224E488C68108004189121I0C21J050B0C6C691C8332346504C6C1080041050A1I0C218I0D09044C490C81E2140504047E080041050A08007E0800FA01E7C7C^FS" +
		"^FO" + posicionDeImpresionX + ",250^FD Cibernética. ^FS" +
		"^CF0,40" +
		"^FO" + posicionDeImpresionX + ",300^FD Ticket de envío de muestras ^FS" +
		"^FO" + posicionDeImpresionX + ",335^FD " + MVCLotes[posicionlote][0] + " ^FS" +
		"^FO" + posicionDeImpresionX + ",370^FD " + $('#identificacionDeUnidad').text() + " ^FS" +
		"^FO" + posicionDeImpresionX + ",450^GB550,12,1^FS";
	
	var SegundaSeccion = "^FX --------------------------------------------------------------" +
		"^FX Segunda sección, listado de muestras." +
		"^FO220,480^FD Lote " + varIdUnidad + varIdLote + " ^FS" +
		"^CFA,30";
	
	var posicionDeImpresion = 560;//360 //posición de inicio de la información de los tubos
	var imprimirEstudios;
	var contadorestudiosi = 1;
	for ( var mvctubo in MVCLotes[posicionlote][4] )
	{
		if ( MVCLotes[posicionlote][4][mvctubo][5] == 'Enviado' )
		{
			textoParaQR += " " + MVCLotes[posicionlote][4][mvctubo][1] + "," + MVCLotes[posicionlote][4][mvctubo][2] + ",";
			SegundaSeccion += "^FO" + posicionDeImpresionX + "," + posicionDeImpresion + " ^FD Folio: " + varIdUnidad + varIdLote + MVCLotes[posicionlote][4][mvctubo][1] + "^FS";
			posicionDeImpresion += 40;
			SegundaSeccion += "^FO" + posicionDeImpresionX + "," + posicionDeImpresion + "^FD " + MVCLotes[posicionlote][4][mvctubo][2] + " ^FS";				
			posicionDeImpresion += 40;
			imprimirEstudios = "";
			var contadorestudiosi = 1;
			for ( var mvcestudio in MVCLotes[posicionlote][4][mvctubo][4] )
			{
				if ( MVCLotes[posicionlote][4][mvctubo][4][mvcestudio][1] == 'Enviado' )
				{
					contadorestudiosi++;
					textoParaQR += ":" + MVCLotes[posicionlote][4][mvctubo][4][mvcestudio][0];					
					imprimirEstudios += MVCLotes[posicionlote][4][mvctubo][4][mvcestudio][0] + "   ";
					if ( contadorestudiosi%4 == 0 )
					{
						SegundaSeccion += "^FO" + posicionDeImpresionX + "," + posicionDeImpresion + "^FD " + imprimirEstudios.trim() + " ^FS";						
						posicionDeImpresion += 40;
						imprimirEstudios = "";
					}
				}
			}
			if ( imprimirEstudios == "" )
			{				
				posicionDeImpresion += 30;
			} else {
				SegundaSeccion += "^FO" + posicionDeImpresionX + "," + posicionDeImpresion + "^FD " + imprimirEstudios.trim() + " ^FS";
				posicionDeImpresion += 70;
			}							
		}
	}
		
	var textoDividido = textoParaQR.match(/(.|[\r\n]){1,180}/g);
	var terceraSeccion = "^FX --------------------------------------------------------------" +
		"^FX Tercera sección, Código QR";
	var codigosQR = "";
	for(var i in textoDividido){

		if(textoDividido[i].length === caracteresPorQR){
			codigosQR += "^FO" + posicionDeImpresionX + "," + posicionDeImpresion + "^BQN,2,10^FD   " + textoDividido[i].replace(/\n/g," ") + " E5314F^FS^";
		}
		else{
			//variable que contiene 180 rspacios en blanco para el ajuste de qr
			var ajuste = "                                                                                                                                                                                                        ";
			var text = textoDividido[i].replace(/\n/g," ");
			var ultimoQR = (text + ajuste).substring(1, caracteresPorQR);
			codigosQR += "^FO" + posicionDeImpresionX + "," + posicionDeImpresion + "^BQN,2,10^FD   " + ultimoQR + " E5314F^FS^";
		}		
		posicionDeImpresion += 600;
		// Deter ciclo para crear un solo QR
		break;
	}
	terceraSeccion += codigosQR;
	
	var cuartaSeccion = "^FX --------------------------------------------------------------" +
		"^FX Cuarta sección, firma de validación"; 
		// "^FO20," + posicionDeImpresion + "^FD Valido que la información  ^FS";
		
	var leyendaDeValidacion = [" Valido que la información "," contenida en este ticket "," coincide con las muestras y"," estudios enviados a "," laboratorio "]
	for(var i in leyendaDeValidacion){
		cuartaSeccion += "^FO20," + posicionDeImpresion + "^FD" + leyendaDeValidacion[i] + "^FS";
		posicionDeImpresion += 40;
	}

	posicionDeImpresion += 70; //para completar una diferencia de 110 respecto de la línea anterior
	cuartaSeccion += "^FO110," + posicionDeImpresion + "^FD __________________^FS";
	posicionDeImpresion += 50;
	cuartaSeccion += "^FO110," + posicionDeImpresion + "^FD Q.F.B Juan Pérez ^FS";
	
	posicionDeImpresion += 50;
	cuartaSeccion += "^FO110," + posicionDeImpresion + "^FD . ^FS";
	
	var codigoZPL = encabezado + SegundaSeccion + terceraSeccion +  cuartaSeccion + leyendaDeValidacion + "^XZ";
	
	// alert(codigoZPL);
	$.ajax({
				  async:true, 
				  method: "POST",
				  url: "php/ImprimirLote.php?Codigo="+codigoZPL,
				  dataType: "json",						  
				}).done(function(data){					
					  //data.forEach(function(entry){						  
					//	  if entry.Correcto						  
					  // });						 
					}).fail(function(error){					  
						alert("Por el momento no esta disponible el servicio, intente m\u00E1s tarde");					  
					});
			return true;	
}