<!DOCTYPE html>
<?php

/**
 * @project PainelAdm
 * @author Maickon Rangel
 * @date 02/07/2015
 * @contact maickon4developers@gmail.com
 * @version 1.0
 * @link https://github.com/maickon/PainelAdm
 *
 * header.php
 * Arquivo responsável pela apresentação de header do site.
 * Ele carrega o arquivo init.php, este arquivo carrega a função
 * __autoload($class_name). Com esta função as classes podem ser carregadas 
 * através do require_once no momento de sua instanciação.
 * Além disso o arquivo init.php carrega o arquivo config.php através do
 * require_once, neste arquivo conta a definição de todoas os termos necessários
 * para o sistema como links permanentes, nome de pastas, título do site, mensagens e etc.
 * 
 * Em seguida é declarado duas variáveis que são objetos. Um referente a tag e o outro representa 
 * uma conexão ativa com o banco de dados.
 */

require_once 'init.php';

//instancia um objeto tag para manipular as tags HTML via PHP
$tag  	= new Tags();
$con 	= new Conexao();

$tag->html('lang="pt-br"');
	$tag->head();
		$tag->meta('charset="utf-8"');
		$tag->meta('http-equiv="X-UA-Compatible" content="IE=edge"');
		$tag->meta('name="viewport" content="width=device-width, initial-scale=1"');
		//<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		$tag->meta('name="description" content="Painel administrativo"');
		$tag->meta('name="author" content="Global Net Sis"');
		
		$tag->link('rel="icon" href="'.IMGPATH.'adm.png"');
		
		//Titulo do site
		$tag->title();
			$tag->imprime(PROJECTTITLE);
		$tag->title;
		
		//<!-- Bootstrap core CSS -->
		$tag->link('href="'.CSSPATH.'bootstrap.min.css" rel="stylesheet"');
  		//<!-- Bootstrap theme -->
		$tag->link('href="'.CSSPATH.'bootstrap-theme.min.css" rel="stylesheet"');
		//<!-- index core CSS -->
		$tag->link('href="'.CSSPATH.'index.css" rel="stylesheet"');
		
		$tag->link('href="http://getbootstrap.com/examples/theme/theme.css"');
		
		//<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		//<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		$tag->script('src="'.JSPATH.'arquivo.js"');
		$tag->script;
		
		$tag->script('src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"');
		$tag->script;
		
		$tag->script('src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"');
		$tag->script;
		
		$tag->script('src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"');
		$tag->script;
		
		//<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		//<!--[if lt IE 9]>
		$tag->script('src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"');
		$tag->script;
		$tag->script('src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"');
		$tag->script;
		     
		//<![endif]-->
	$tag->head;