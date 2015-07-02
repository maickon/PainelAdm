<?php
/**
 * @project PainelAdm
 * @author Maickon Rangel
 * @date 02/07/2015
 * @contact maickon4developers@gmail.com
 * @version 1.0
 * @link https://github.com/painelAdm
 * 
 * require_once 'config.php';
 * Chama o arquivo de configura��o
 **/
require_once 'config.php';

/*
 * function __autoload()
 * Chama um arquivo de classe de forma autom�tica
 * no momento em que um objeto � instanciado
 * @class_name = nome do arquivo de classe. Este nome tem
 * que ser igual ao nome da classe.
 * CLASSPATH = Constante definida no arquivo config.php. Esta constante
 * cont�m o nome da pasta onde se encontram as classes.
 */
function __autoload($class_name){
	require_once CLASSPATH.$class_name.'.class.php';
}