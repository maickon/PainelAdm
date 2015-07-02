<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'login'):
	if(isset($_POST['login'])):
		if(empty($_POST['login'])):
			$erro[] = 'Informe o seu login.';
		endif;
	else:
		$erro[] = 'Informe o seu login.';
	endif;
	
	if(isset($_POST['senha'])):
		if(empty($_POST['senha'])):
			$erro[] = 'Informe a senha.';
		endif;
	else:
		$erro[] = 'Informe sua senha.';
	endif;
endif;

if(!isset($erro)):
	$login = mysql_real_escape_string(addslashes(htmlentities($_POST['login'])));
	$senha = mysql_real_escape_string(addslashes(htmlentities($_POST['senha'])));
	$connect = new Crud();
	$usuario = $connect->buscar_usuario('usuario', $login, $senha);
	if($usuario):
		$sessao = new Sessao();
		$sessao->setVar('login', $usuario->login_usuario);
		$sessao->setVar('senha', $usuario->senha_usuario);
		header("Location: {BASE_PATH.PAINEL_PATH}");
		exit;
	else:
		$erro[] = 'Usuário e/ou senha inválidos.';
	endif;
endif;
echo 'Ola maickon!';