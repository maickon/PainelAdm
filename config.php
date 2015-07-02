<?php
//Definindo constantes para os caminhos base
define(CLASSPATH, "class/");
define(JSPATH, "js/");
define(CSSPATH, "css/");
define(IMGPATH, "img/");

// Retorna o domнnio do servidor
define(SERVER_NAME,$_SERVER['SERVER_NAME']); //127.0.0.1

// Retorna o path do arquivo onde estб sendo executado
define(PHP_SELF,$_SERVER['PHP_SELF']); //PainelAdm/index.php

// Retorna o path do pasta onde estб sendo executado
define(DOCUMENT_ROOT,$_SERVER['DOCUMENT_ROOT']); //C:/xampp/htdocs

// Retorna o path do arquivo onde estб sendo executado o script
define(SCRIPT_FILENAME,$_SERVER['SCRIPT_FILENAME']); //C:/xampp/htdocs/PainelAdm/index.php

// Retorna o path e nome do arquivo que estб executando
define(SCRIPT_NAME,$_SERVER['SCRIPT_NAME']); ///PainelAdm/index.php
	
$path = $_SERVER['SCRIPT_FILENAME'];
$path_parts = pathinfo($path);
// retorna o path absoluto do diretуrio no servidor
define(DIRNAME,$path_parts['dirname']); //C:/xampp/htdocs/PainelAdm

// retorna o nome do arquivo com extensгo
define(BASENAME,$path_parts['basename']); //index.php

// retorna a extensгo do arquivo
define(EXTENSION,$path_parts['extension']); //php

// retorna o nome do arquivo sem extensгo
define(FILENAME,$path_parts['filename']); //index

//Actions - links de aзгo do sistema
define(ACTION_LOGIN, "?acao=login");

//File - Links de arquivos do sistemas
define(LOGIN_VALIDATION_PATH, 'functions/login.php');
define(HOME_PATH, 'home.php');
define(PAINEL_PATH, 'painel.php');
define(BASE_PATH, 'PainelAdm/');

//Usuбrio e senha do banco de dados
define(USER, "root");
define(PASS, "");
define(DBNAME, "guianet");
define(HOST, "localhost");

//Nome/Tнtulo do site/projeto
define(PROJECTTITLE, "Painel Administrativo");
define(PROGRAMER, "Global Net Sis");
define(COPY, "&copy 2015");

