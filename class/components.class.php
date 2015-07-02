<?php

/**
 * @project PainelAdm
 * @author Maickon Rangel
 * @date 02/07/2015
 * @contact maickon4developers@gmail.com
 * @version 1.0
 * @link https://github.com/maickon/PainelAdm
 *
 * components.class.php
 * Instancia um tipo de componente para adicionar ao site
 * o componente pode ser um menu ou um rodap�
 * 
 * Este arquivo possui tr�s classes:
 * A classe components que define qual componente instanciar.
 * A classe menu bar que cria um menu baseado no framework twitter bootstrap
 * A classe footer bar que define um rodap� para o site
 **/

class Components{
	
	/**
	 * 
	 * @param componente $component
	 * o parametro vai definir qual tipo de componente ser� instanciado.
	 * ele pode ser footer = redap� ou menu para criar a barra de menu do site
	 */
	function __construct($component, $parametros = null){
		global $tag;
		switch($component):
			case 'menu': new MenuBar($parametros['nomes'], $parametros['links']);
			break;
		
			case 'footer': new FooterBar($parametros['nomes'], $parametros['links'], $parametros['programer'], $parametros['copy']);
			break;
			
			case 'login': new Login($parametros['img']);
			break;
			
			default: $tag->imprime('<div class="alert alert-danger" role="alert">Par�meto inv�lido!</div>','encode');
		endswitch;
	}
}

class MenuBar{

	private $site_name; //nome do site
	private $menus; //lista de menus 
	private $links; //lista de links para cada menu
	private $login; //tela de login
	private $tag;
	/*
		M�todo construtor __construct()
		Respons�vel por inicializar dois arrays,
		um contendo as refer�ncias para os nomes de cada menu
		e outra para cada link deste menu.
		@param $site_name = nome do site
		@param $menus = array contendo o nome de todos os menus
		@param $links = array contendo todos os links
	*/

	public function __construct(array $nomes, array $links){
		global $tag;
		$this->tag = $tag;
		$this->site_name = PROJECTTITLE;
		$this->menus = $nomes;
		$this->links = $links;
		$this->show();
	}

	/*
		M�todo logo()
		Escolhe uma classe css dentro de uma lista de
		classe de forma aleat�ria.
	*/

	function menu_bar(){
		$this->tag->nav('class="navbar navbar-inverse navbar-fixed-top""');
			$this->tag->div('class="container"');
				$this->tag->div('class="navbar-header"');
					$this->tag->button('type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"');
						$this->tag->span('class="sr-only"');
							$this->tag->imprime('Toggle navigation');
						$this->tag->span;
						
						$this->tag->span('class="icon-bar"');
						$this->tag->span;
						
						$this->tag->span('class="icon-bar"');
						$this->tag->span;
						
						$this->tag->span('class="icon-bar"');
						$this->tag->span;
					$this->tag->button;
					
					$this->tag->a('class="navbar-brand" href="index.php"');
							$this->tag->imprime(PROJECTTITLE);
					$this->tag->a;
					
				$this->tag->div;//navbar-header
					
				$this->tag->div('id="navbar" class="navbar-collapse collapse"');
					
					$this->tag->ul('class="nav navbar-nav"');
						for($m=0; $m<count($this->menus); $m++):					
							if(is_array($this->menus[$m]))://identifica se � um menu dropdown
								$this->tag->li('class="dropdown"');
									$this->tag->a('href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"');
										$this->tag->imprime($this->menus[$m][0]);
										$this->tag->span('class="caret"');
										$this->tag->span;	
									$this->tag->a;	
									$this->tag->ul('class="dropdown-menu"');
										for($d=1; $d<count($this->menus[$m]); $d++):
											$this->tag->li;																	
												$this->tag->a('href="'.$this->links[$m][$d].'"');
													$this->tag->imprime($this->menus[$m][$d],'decode');
												$this->tag->a;																				
											$this->tag->li;
										endfor;
									$this->tag->ul;
								$this->tag->li;
							else:									
								$this->tag->li();
									$this->tag->a('href="'.$this->links[$m].'"');
										$this->tag->imprime(($this->menus[$m]),'decode');
									$this->tag->a;
								$this->tag->li;											
							endif;				
						endfor;
						
					$this->tag->ul;
											
				$this->tag->div;//nav-collapse collapse
						
			$this->tag->div;//container
		$this->tag->nav;//navbar navbar-fixed-top
	}

	/*
		M�todo show()
		Exibe o rodap�.
	*/

	public function show(){
		$this->menu_bar();
	}
}


class FooterBar{

	private $menus;
	private $links;
	private $programer;
	private $copyright;
	private $tag;
	/*
		M�todo construtor __construct()
		Respons�vel por inicializar dois arrays,
		um contendo as refer�ncias para os nomes de cada menu
		e outra para cada link deste menu.
	*/

	public function __construct(array $nomes, array $links, $programer, $copy){
		global $tag;
		$this->menus = $nomes;
		$this->links = $links;
		$this->programer = $programer;
		$this->copyright = $copy;	
		$this->tag = $tag;
		$this->show();
	}

	/*
		M�todo footer_bar()
		Respons�vel por montar uma barra de 
		rpdap� atrav�s de um array de labels menus e links.
	*/

	public function footer_bar(){
		$this->tag->div('class="footer" align="center"');
			$this->tag->div('class="row"');
				$this->tag->br();
				$this->tag->br();
				for($m=0; $m<count($this->menus); $m++):
					$this->tag->imprime(' - ');
					$this->tag->a('href="index.php'.$this->links[$m].'" class="footer-fonte"');
						$this->tag->imprime($this->menus[$m],'decode');
					$this->tag->a;
		
					if($m == count($this->menus)-1):
						$this->tag->imprime(' - ');
						$this->tag->br();
						$this->tag->br();
						
						$this->tag->a('href="https://www.facebook.com/maickon.rangel" target="blank" class="footer-fonte"');
							$this->tag->imprime($this->programer);
						$this->tag->a;
						
						$this->tag->br();
						$this->tag->br();
						
						$this->tag->a('href="index.php" class="footer-fonte"');
							$this->tag->imprime($this->copyright);
						$this->tag->a;
						
						$this->tag->br();
						$this->tag->br();
					endif;
				endfor;
			$this->tag->div;
		$this->tag->div;
	}

	/*
		M�todo show()
		Exibe o rodap�.
	*/

	public function show(){
		$this->footer_bar();
	}
}


class Login{
	
	function __construct(){
		$this->login();
	}
	
	function login(){
		global $tag;
		$tag->div('class="row"');
			$tag->div('class="col-sm-4 col-sm-offset-4"');
				$tag->div('class="panel panel-default"');
					$tag->div('class="panel-heading"');
						$tag->h3('class="panel-title"');
							$tag->imprime('Login');
						$tag->h3;
					$tag->div;
					
					$tag->form('class="form-signin" action="'.PHP_SELF.ACTION_LOGIN.'" method="post"');
						$tag->h4('class="panel-title"');
							$tag->imprime('Preencha os campos abaixo e fa�a o login.','encode');
						$tag->h4;
						$tag->br();
						$tag->label('for="inputEmail" class="sr-only"');
							$tag->imprime('Email address');
						$tag->label;
						
						$tag->input('type="email" id="inputEmail" name="login" class="form-control" placeholder="Email" required autofocus');
						$tag->label('for="inputPassword" class="sr-only"');
							$tag->imprime('Password');
						$tag->label;
						$tag->br();
						$tag->input('type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required');
						$tag->div('class="checkbox"');
						$tag->label();
						$tag->input('type="checkbox" value="remember-me"'); 
							$tag->imprime('Esqueci a senha');
						$tag->label;
						$tag->div;
						$tag->input('name="entrar" value="Entrar" class="btn btn-lg btn-primary btn-block" type="submit"');
					$tag->form;
				$tag->div;
			$tag->div;
		$tag->div;
	}
}