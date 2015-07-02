<?php
/**
 * @project PainelAdm
 * @author Maickon Rangel
 * @date 02/07/2015
 * @contact maickon4developers@gmail.com
 * @version 1.0
 * @link https://github.com/maickon/PainelAdm
 *
 * roteador.class.php
 * Classe responsбvel por rotear as pбginas do 
 * sistema, ela aceita um solicitaзгo de aзгo que normalmente
 * й uma variбvel via $_GET com o nome de 'acao' cada tipo de 
 * valor armazenado na variбvel aзгo vai levar para uma pбgina 
 * especнfica dentro do sistem.
 **/
class Roteador{

	function __construct($acao){
		$this->rotear_pagina($acao);
	}

	function rotear_pagina($acao){
		switch($acao):
			case end(explode('=', ACTION_LOGIN)):require LOGIN_VALIDATION_PATH;
			break;
			
			case ' ':require SERVER_NAME.PHP_SELF;
			break;
				
			default: require HOME_PATH;
			break;
		endswitch;
	}
}
?>