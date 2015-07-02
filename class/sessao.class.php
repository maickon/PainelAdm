<?php
/**
 * @project PainelAdm
 * @author Maickon Rangel
 * @date 02/07/2015
 * @contact maickon4developers@gmail.com
 * @version 1.0
 * @link https://github.com/painelAdm
 *
 * sessao.class.php
 * Estabelece a criação e destruição de sessões 
 * através de um objeto da classe sessão.
 **/

class Sessao{
	protected $id;
	protected $nvars; 
	
	/**
	 * __construct()
	 * @param  $inicia = TRUE por padrão a sessão sempra será iniciada
	 * Ao criar um objeto sessao, aotomaticamente 
	 * se inicializa a sessão, após isso basta registrar as 
	 * varáveis de sessão no array $_SESSION.
	 * Para fazer isso basta usar o método setVar($var, $valor)
	 * passando a posição no parâmetro $var e o seu valor no parâmetro $valor
	 */
	
	public function __construct($inicia = TRUE){
		if($inicia == TRUE):
			$this->start();
		endif;
	}//fim construct
	
	/**
	 * start()
	 * Inicializa a sessão
	 */
	public function start(){
		@session_start();
		ob_start();
		//resgata o id da sessão e armazena na propiedade id
		$this->id = session_id();
		$this->setNvars();
	}//fim start
	
	/**
	 * setNvars()
	 * Inicializa o número de varáveis da sessão.
	 * basta saber o tamanho do array $SESSION com sizeof
	 * ´para saber o número de variáveis de sessão
	 */
	private function setNvars(){
		$this->nvars = sizeof($_SESSION);
	}//fim setNvars
	
	/**
	 * getNvars()
	 * Retorna o número de varáveis da sessão
	 */
	public function getNvars(){
		return $this->nvars;
	}//fim getNvars 	
	
	/** setVar()
	 * Adiciona novas variáveis de sessão ao array $_SESSION
	 * @param  $var = nome da posicao onde vai ser armazenado o valor
	 * @param  $valor = o valor propriamente dito
	 */
	public function setVar($var,$valor){
		$_SESSION[$var] = $valor;
		$this->setNvars();
	}//fim setVars
	
	
	/**
	 * unsetVar()
	 * @param  $var = posição a ser removida do array
	 * Remove uma variável de sesão do array $_SESSION
	 */
	public function unsetVar($var){
		unset($_SESSION[$var]);
		$this->setNvars();
	}//fim unsetVar
	
	/**
	 * getVar()
	 * Retorna uma variável de sessão
	 * @param  $var = posição da varável no array $_SESSION
	 * 
	 */
	public function getVar($var){
		if(isset($_SESSION[$var])):
			return $_SESSION[$var];
		else:
			return NULL;
		endif;
	}//fim getVar
	
	/**
	 * destroy()
	 * Destrio a sessão atual
	 * @param  $inicia = por padrão recebe false, se for true inicia uma nova sessão 
	 * após a destruição da sessão atual.
	 */
	public function destroy($inicia = FALSE){
		session_unset();
		session_destroy();
		$this->setNvars();
		if ($inicia == TRUE):
			$this->start();
		endif;
	}//fim destroy
	
	/**
	 * printAll()
	 * Percorre por todas as variáveis de sessão no array
	 * $_SESSION e exibe na tela.
	 */
	public function printAll(){
		foreach ($_SESSION as $k => $v):
			printf("%s = %s<br />",$k,$v);
		endforeach;;
	}//fim printAll
	
}//fim classe sessao
