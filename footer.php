<?php
	/**
	 * @project PainelAdm
	 * @author Maickon Rangel
	 * @date 02/07/2015
	 * @contact maickon4developers@gmail.com
	 * @version 1.0
	 * @link https://github.com/maickon/PainelAdm
	 * 
	 * footer.php
	 * Arquivo referente ao rodape do site. Ele exibe o rodepé através do objeto component
	 * especificando por parametro o nome 'footer'. O termo $parametros está definido no
	 * arquivo index.php junto com o objeto $tag.
	 * Além de exibir o rodapé, ele chama uns arquivos de script responsável pelos efeitos de
	 * menu responsivo.
	 * Mais abaixo é fechado a tag body e html.	
	 */
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