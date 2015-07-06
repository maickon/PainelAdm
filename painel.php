<?php
require_once 'init.php';
$sessao = new Sessao();
$login = $sessao->getVar('login');
$pass = $sessao->getVar('senha');
if(!isset($login) || !isset($pass)):
	header("Location: ".BASE_PATH);
	exit;
endif;

if(isset($_GET['logoff']) and $_GET['logoff'] == 'true'):
	require_once 'init.php';
	$sessao->destroy();
	header("Location: ".BASE_PATH);
endif;

require_once 'header.php';
	
$parametros = array();
$parametros['nomes']  = array('Home','Voltar','Sair');
$parametros['links']  = array(BASE_PATH,'javascript:history.go(-1)','?logoff=true');
$parametros['programer']  = PROGRAMER;
$parametros['copy']  = COPY;
new Components('menu', $parametros);
global $tag;

$tag->div('class="container white"');
	$tag->h1();
		$tag->imprime('Painel Administrativo');
	$tag->h1;
	$tag->hr();
	$tag->p();
		$tag->smal();
			$tag->imprime('Ol�','encode');
			$tag->b();
				$tag->imprime($login);
			$tag->b;
		$tag->smal;
	$tag->p;
	
	$tag->p();
		$tag->smal();
			$tag->imprime('Boa tarde, hoje � Sexta-feira, 03 de julho de 2015','encode');
		$tag->smal;
	$tag->p;

	$parametros['nomes'] 	= array(utf8_encode('An�ncios'),'Banners','Categorias','Cidades','Clientes','Galeria de Fotos','Patrocinadores','Subcategorias',utf8_encode('V�deos'));
	$parametros['links']  	= array(ANUNCIOPATH,BANNERPATH,CATPATH,CIDADEPARH,CLIENTEPATH,GALERIASPATH,PATROCINADORESPATH,SUBPATH,VIDEOSPATH);
	$parametros['title']  	= array(utf8_encode('An�ncios'),'Banners','Categorias','Cidades','Clientes','Galeria de Fotos','Patrocinadores','Subcategorias','V�deos');
	$parametros['content']  = array(ANUNCIOPATHINDEX,BANNERPATHINDEX,CATPATHINDEX,CIDADEPARHINDEX,CLIENTEPATHINDEX,GALERIASPATHINDEX,PATROCINADORESPATHINDEX,SUBPATHINDEX,VIDEOSPATHINDEX);
	new Components('painel', $parametros);	
	
$tag->div;

require_once 'footer.php';