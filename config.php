<?php

//Definindo constantes para os caminhos base
define(CLASSPATH, "class/");
define(JSPATH, "js/");
define(CSSPATH, "css/");
define(IMGPATH, "img/");

// Retorna o domínio do servidor
define(SERVER_NAME,$_SERVER['SERVER_NAME']); //127.0.0.1

// Retorna o path do arquivo onde está sendo executado
define(PHP_SELF,$_SERVER['PHP_SELF']); //PainelAdm/index.php

// Retorna o path do pasta onde está sendo executado
define(DOCUMENT_ROOT,$_SERVER['DOCUMENT_ROOT']); //C:/xampp/htdocs

// Retorna o path do arquivo onde está sendo executado o script
define(SCRIPT_FILENAME,$_SERVER['SCRIPT_FILENAME']); //C:/xampp/htdocs/PainelAdm/index.php

// Retorna o path e nome do arquivo que está executando
define(SCRIPT_NAME,$_SERVER['SCRIPT_NAME']); ///PainelAdm/index.php
	
$path = $_SERVER['SCRIPT_FILENAME'];
$path_parts = pathinfo($path);
// retorna o path absoluto do diretório no servidor
define(DIRNAME,$path_parts['dirname']); //C:/xampp/htdocs/PainelAdm

// retorna o nome do arquivo com extensão
define(BASENAME,$path_parts['basename']); //index.php

// retorna a extensão do arquivo
define(EXTENSION,$path_parts['extension']); //php

// retorna o nome do arquivo sem extensão
define(FILENAME,$path_parts['filename']); //index

//Actions - links de ação do sistema
define(ACTION_LOGIN, "/functions/login.php");

//File - Links de arquivos do sistemas
define(LOGIN_VALIDATION_PATH, 'functions/login.php');
define(HOME_PATH, 'home.php');
define(PAINEL_PATH, 'painel.php');
define(BASE_PATH, 'http://127.0.0.1/PainelAdm/');

//Links do painel administrativo
define(ANUNCIOPATH, 'anuncios');
define(BANNERPATH, 'banner');
define(CATPATH, 'categorias');
define(CIDADEPARH, 'cidades');
define(CLIENTEPATH, 'clientes');
define(GALERIASPATH, 'galerias');
define(PATROCINADORESPATH, 'patrocinadores');
define(SUBPATH, 'subcategorias');
define(VIDEOSPATH, 'videos');

//Usuário e senha do banco de dados
define(USER, "root");
define(PASS, "");
define(DBNAME, "guianet");
define(HOST, "localhost");

//Nome/Título do site/projeto
define(PROJECTTITLE, "Painel Administrativo");
define(PROGRAMER, 'Desenvolvido por <a href="http://www.globalnetsis.com.br/">Globalnetsis</a> todos os direitos reservados');
define(COPY, "&copy 2015");

