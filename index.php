<?php 
	/**
	 * index.php
	 * renderiza o arquivo de cabe�alho header.php
	 * Depois verificar se existe alguma vari�vel via $_GET chamada 'e' de erro.
	 * Se ela existir, significar que existem erros para serem exibidos na tela.
	 * A vari�vel 'e' � uma �nica string dividida por '_' caso contenha mais de
	 * uma mensagem de erro. A string e dividia e armazenada na vari�vel $erro.
	 * Esta vari�vel � um array contendo os tipos de erros que foram divididos 
	 * pelo '_'. Ap�s isso cada mensagem � exibida na tela atrav�s do la�o 
	 * foreach como uma msg de erro.
	 *
	 */

	if(isset($_GET['logoff']) and $_GET['logoff'] == 'true'):
		require_once 'init.php';
		$sessao = new Sessao();
		$sessao->destroy();
		header("Location: ".BASE_PATH);
	endif;
	require_once 'header.php';

	if(isset($_GET['e'])):
		$tag->div('class="row"');
			$tag->div('class="col-sm-4 col-sm-offset-4"');
				$tag->div('class="alert alert-danger alert-dismissible"  role="alert"');
					$erro = explode('_', $_GET['e']);
					foreach($erro as $msg):
						$tag->imprime($msg,'encode');
					endforeach;
				$tag->div;
			$tag->div;
		$tag->div;
	endif;
	

	$tag->body('role="document"');
		$parametros = array();
		$parametros['nomes']  = array('Home','Voltar','Sair');
		$parametros['links']  = array(BASE_PATH,'#','?logoff=true');
		$parametros['programer']  = PROGRAMER;
		$parametros['copy']  = COPY;
		new Components('menu', $parametros);

		$tag->div('class="container"');
			
			new Roteador(isset($_GET['acao']) ? $_GET['acao'] : '');
			
		$tag->div;
		
	require_once 'footer.php';
?>

