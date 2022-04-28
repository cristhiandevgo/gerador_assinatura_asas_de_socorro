function somente_numero(campo){
	var digits="0123456789()-/";
	var campo_temp;
		for (var i=0;i<campo.value.length;i++){
				campo_temp=campo.value.substring(i,i+1);
				if (digits.indexOf(campo_temp)==-1){
						campo.value = campo.value.substring(0,i);
				}
		}
}

function codigoArea(campo){
	var digits="0123456789";
	var campo_temp;
		for (var i=0;i<campo.value.length;i++){
				campo_temp=campo.value.substring(i,i+1);
				if (digits.indexOf(campo_temp)==-1){
						campo.value = campo.value.substring(0,i);
						alert("Somente Números!")
				}
		}
}

if(navigator.appName=="Microsoft Internet Explorer"){
	alert("Navegador não suportado.\nUtilize o Google Chrome ou o Mozilla Firefox.");
	window.location.assign("http://www.google.com/chrome");
}
