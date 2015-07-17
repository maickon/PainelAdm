<?php 
	/**
	 * index.php
	 * renderiza o arquivo de cabeçalho header.php
	 * Depois verificar se existe alguma variável via $_GET chamada 'e' de erro.
	 * Se ela existir, significar que existem erros para serem exibidos na tela.
	 * A variável 'e' é uma única string dividida por '_' caso contenha mais de
	 * uma mensagem de erro. A string e dividia e armazenada na variável $erro.
	 * Esta variável é um array contendo os tipos de erros que foram divididos 
	 * pelo '_'. Após isso cada mensagem é exibida na tela através do laço 
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

