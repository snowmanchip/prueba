<?php
//Revisa si cada variable tiene un valor
function filled_out($form_vars) {
	
	foreach ($form_vars as $key => $value) {
		if (!isset($key) || ($value =='')) {
			return false;
		}
	}
	return true;
}

//Revisamos si el correo tiene una dirección válida
function valid_email($adress){
	if (filter_var($adress, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $adress)){
		return true;
	}
	else {
		return false;
	}
}
//Comentario prueba
?>