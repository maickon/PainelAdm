<?php 
global $tag;

$tag->script('type="text/javascript" src="tinymce/tinymce.min.js"');
$tag->script;

$tag->script('type="text/javascript"');
	$tag->imprime('
			tinymce.init({
			    selector: "textarea",
			    plugins: [
			        "advlist autolink lists link image charmap print preview anchor",
			        "searchreplace visualblocks code fullscreen",
			        "insertdatetime media table contextmenu paste"
			    ],
			    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
			});
	
	');
$tag->script;

$tag->div();
	$tag->h1();
		$tag->imprime('Cadastrar');
	$tag->h1;
	
	$tag->form('class=""');
		$tag->div('class="form-group"');
			$tag->label('for="inputTitulo"');
				$tag->imprime('Título');
			$tag->label;
	        $tag->input('type="text" class="form-control" id="inputTitulo" placeholder="Título"');
	    $tag->div;
        
	    $tag->div('class="form-group"');
		    $tag->label('for="textDescricao"');
	        	$tag->imprime('Descrição');
	        $tag->label;
	    	$tag->textarea('name="content" style="width:100%"');
	    	$tag->textarea;
		$tag->div;
			
		$tag->label('for="textDescricao"');
			$tag->imprime('Escolha uma categoria');
		$tag->label;
		$tag->select('class="form-control"');
			$tag->option();
				$tag->imprime('Opção 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Opção 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Opção 1');
			$tag->option;
		$tag->select();
		
		$tag->label('for="textDescricao"');
			$tag->imprime('Escolha uma sub categoria');
		$tag->label;
		$tag->select('class="form-control"');
			$tag->option();
				$tag->imprime('Opção 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Opção 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Opção 1');
			$tag->option;
		$tag->select();
		
		$tag->label('for="textDescricao"');
			$tag->imprime('Escolha um cliente');
		$tag->label;
		$tag->select('class="form-control"');
			$tag->option();
				$tag->imprime('Cliente 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Cliente 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Cliente 1');
			$tag->option;
		$tag->select();
		
		$tag->label('for="textDescricao"');
			$tag->imprime('Escolha um plano');
		$tag->label;
		$tag->select('class="form-control"');
			$tag->option();
				$tag->imprime('Plano 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Plano 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Plano 1');
			$tag->option;
		$tag->select();
		
		
		$tag->label('for="textDescricao"');
			$tag->imprime('Escolha uma cidade');
		$tag->label;
		$tag->select('class="form-control"');
			$tag->option();
				$tag->imprime('Cidade 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Cidade 1');
			$tag->option;
			
			$tag->option();
				$tag->imprime('Cidade 1');
			$tag->option;
		$tag->select();
		
		$tag->div('class="form-group"');
			$tag->label('for="inputTitulo"');
				$tag->imprime('Data de Início');
			$tag->label;
	        $tag->input('type="text" class="form-control" id="datepicker" placeholder="Data de Início"');
	    $tag->div;
	    
	    $tag->div('class="form-group"');
			$tag->label('for="inputTitulo"');
				$tag->imprime('Data de Expiração');
			$tag->label;
	        $tag->input('type="text" class="form-control" id="datepicker" placeholder="Data de Expiração"');
	    $tag->div;
	    
	    $tag->div('class="form-group"');
			$tag->label('for="inputTitulo"');
				$tag->imprime('Data de Vencimento');
			$tag->label;
	        $tag->input('type="text" class="form-control" id="datepicker" placeholder="Data de Vencimento"');
	    $tag->div;
	    
	    $tag->div('class="form-group"');
			$tag->label('for="inputTitulo"');
				$tag->imprime('Palavra-chave <i>(insira as palavras entre vírgulas)</i>');
			$tag->label;
	        $tag->input('type="text" class="form-control" id="palavraChave" placeholder="Palavra Chave"');
	    $tag->div;
	    
	$tag->div;
$tag->div;

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Referência do arquivo JS do plugin após carregar o jquery -->
      <!-- Datepicker -->
      <script src="js/bootstrap-datepicker.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



	