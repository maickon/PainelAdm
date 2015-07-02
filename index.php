<!DOCTYPE html>
<?php
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
		
		//<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		//<!--[if lt IE 9]>
		$tag->script('src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"');
		$tag->script;
		$tag->script('src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"');
		$tag->script;
		     
		//<![endif]-->
	$tag->head;
	
	$tag->body('role="document"');
		$parametros = array();
		$parametros['nomes']  = array('Home','Voltar','Sair');
		$parametros['links']  = array('?p=home','?p=voltar','?p=sair');
		$parametros['programer']  = PROGRAMER;
		$parametros['copy']  = COPY;
		new Components('menu', $parametros);

		$tag->div('class="container"');
			
			new Roteador(isset($_GET['acao']) ? $_GET['acao'] : '');
			
		$tag->div;
		
		new Components('footer', $parametros);
		
		
		
	//<!-- Bootstrap core JavaScript -->
	//================================================== 
    //<!-- Placed at the end of the document so the pages load faster -->
	$tag->script('src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"');
	$tag->script;
	
	$tag->script('src="http://getbootstrap.com/dist/js/bootstrap.min.js"');
	$tag->script;
	
	$tag->script('src="http://getbootstrap.com/assets/js/docs.min.js"');
	$tag->script;
	
	//<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	$tag->script('src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"');
	$tag->script;
		

	$tag->body;
$tag->html;
?>

