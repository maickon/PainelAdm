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
 * Chama o arquivo de configuração
 **/
require_once 'config.php';

/**
 * function __autoload()
 * Chama um arquivo de classe de forma automática
 * no momento em que um objeto é instanciado
 * @class_name = nome do arquivo de classe. Este nome tem
 * que ser igual ao nome da classe.
 * CLASSPATH = Constante definida no arquivo config.php. Esta constante
 * contém o nome da pasta onde se encontram as classes.
 */
function __autoload($class_name){
	//verifica se existe o arquivo
	if(file_exists(CLASSPATH.$class_name.'.class.php')):
		//se o arquivo existe, ele sera cerregado
		require_once CLASSPATH.$class_name.'.class.php';
	else:
		//se o arquivo não existe, provavelmene ele não está sendo carregado da pasta raiz
		//por isso será necessário voltar um diretório, por isso os ../
		require_once '../config.php';
		//verifica se o arquivo existe voltando um diretório
		if(file_exists('../'.CLASSPATH.$class_name.'.class.php')):
			//se existe carrega
			require_once '../'.CLASSPATH.$class_name.'.class.php';
		else:
			//se não conseguir carregar, exibe uma mensagem de erro
			echo '<div class="alert alert-danger" role="alert">';
				echo 'Arquivo de classe não encontrado.';
			echo '</div>';
		endif;
	endif;
		
}