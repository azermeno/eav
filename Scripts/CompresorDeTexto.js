// function comprimirTexto(texto){
	// texto = texto.replace(/,:/g,'-').replace(/\s\s+/g, ' ');
	// texto = texto.replace(/AMON/g,'☺').replace(/APOB/g,'☻').replace(/CD4/g,'♥').replace(/CD8/g,'♦').replace(/KAP/g,'♣').replace(/CATU/g,'♠').replace(/NB12E/g,'•').replace(/NAFE/g,'◘');
	// texto = texto.replace(/LAC/g,'○').replace(/VAN/g,'◙');
	// return texto.trim();
// }

// function descomprimirTexto(texto){
	// texto = texto.replace(/☺/g,'AMON').replace(/☻/g,'APOB').replace(/♥/g,'CD4').replace(/♦/g,'CD8').replace(/♣/g,'KAP').replace(/♠/g,'CATU').replace(/•/g,'NB12E').replace(/◘/g,'NAFE');
	// texto = texto.replace(/○/g,'LAC').replace(/◙/g,'VAN');
	// return texto.trim();
// }


// diccionario = [
	// ['/☺/g','AMON'],
	// ['/☻/g','APOB'],
	// ['/♥/g','CD4'],
	// ['/♦/g','CD8'],
	// ['/♣/g','KAP'],
	// ['/♠/g','CATU'],
	// ['/•/g','NB12E'],
	// ['/◘/g','NAFE'],
	// ['/○/g','LAC'],
	// ['/◙/g','VAN']
// ];

function creaDiccionario(){
	var entrada;
	var diccionario = [];
	entrada = ['↓','Folio']; diccionario.push(entrada);	
	//---- Estudios del catálogo
	entrada = ['☺','AMON']; diccionario.push(entrada);
	entrada = ['☻','APOB']; diccionario.push(entrada);
	entrada = ['♥','CD4']; diccionario.push(entrada);
	entrada = ['♦','CD8']; diccionario.push(entrada);
	entrada = ['♣','KAP']; diccionario.push(entrada);
	entrada = ['♠','CATU']; diccionario.push(entrada);
	entrada = ['•','NB12E']; diccionario.push(entrada);
	entrada = ['◘','NAFE']; diccionario.push(entrada);
	entrada = ['○','LAC']; diccionario.push(entrada);
	entrada = ['◙','VAN']; diccionario.push(entrada);
	//---- digrafos y combinaciones propias del español
	entrada = ['♂','gu']; diccionario.push(entrada);
	entrada = ['♀','ch']; diccionario.push(entrada);
	entrada = ['♪','mb']; diccionario.push(entrada);
	entrada = ['♫','nv']; diccionario.push(entrada);
	//---- palabras y nombres usados comunmente 
	entrada = ['🍎','paciente']; diccionario.push(entrada);
	entrada = ['🍏','Guz']; diccionario.push(entrada);
	entrada = ['🌮','Hernández']; diccionario.push(entrada);
	entrada = ['🌯','García']; diccionario.push(entrada);
	entrada = ['🥗','Martínez']; diccionario.push(entrada);
	entrada = ['👱','López']; diccionario.push(entrada);
	entrada = ['👴','González']; diccionario.push(entrada);
	

	return diccionario;
}

/*-------------------------------------------------------------------
* Esta función comprime o descomprime el texto recibido
* 
* @param texto  es la cadena que se va a procesar
* @param accion 1: comprimir o undefined,  2: descomprimir
* --------------------------------------------------------------------*/
function compresionDeTexto(texto,accion){
	var diccionario = creaDiccionario();
	texto = texto.replace(/,:/g,'-').replace(/\s\s+/g, ' ');
	//---- Se inicalizan las variables para ajecutar como "COmprimir"
	var x = 1;
	var y =0;
	if(accion == 2){
		//---- Se cambian los valores de las variables para usarse como "descomprimir"
		x = 0;
		y = 1;
	}
	
	for(var i in diccionario){
		var expresion = diccionario[i][x];
		var estudio = new RegExp(expresion,"g");
		
		texto = texto.replace(estudio,diccionario[i][y]);
	}
	return texto.trim();
}




