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
 * Estabelece a cria��o e destrui��o de sess�es 
 * atrav�s de um objeto da classe sess�o.
 **/

class Sessao{
	protected $id;
	protected $nvars; 
	
	/**
	 * __construct()
	 * @param  $inicia = TRUE por padr�o a sess�o sempra ser� iniciada
	 * Ao criar um objeto sessao, aotomaticamente 
	 * se inicializa a sess�o, ap�s isso basta registrar as 
	 * var�veis de sess�o no array $_SESSION.
	 * Para fazer isso basta usar o m�todo setVar($var, $valor)
	 * passando a posi��o no par�metro $var e o seu valor no par�metro $valor
	 */
	
	public function __construct($inicia = TRUE){
		if($inicia == TRUE):
			$this->start();
		endif;
	}//fim construct
	
	/**
	 * start()
	 * Inicializa a sess�o
	 */
	public function start(){
		@session_start();
		ob_start();
		//resgata o id da sess�o e armazena na propiedade id
		$this->id = session_id();
		$this->setNvars();
	}//fim start
	
	/**
	 * setNvars()
	 * Inicializa o n�mero de var�veis da sess�o.
	 * basta saber o tamanho do array $SESSION com sizeof
	 * �para saber o n�mero de vari�veis de sess�o
	 */
	private function setNvars(){
		$this->nvars = sizeof($_SESSION);
	}//fim setNvars
	
	/**
	 * getNvars()
	 * Retorna o n�mero de var�veis da sess�o
	 */
	public function getNvars(){
		return $this->nvars;
	}//fim getNvars 	
	
	/** setVar()
	 * Adiciona novas vari�veis de sess�o ao array $_SESSION
	 * @param  $var = nome da posicao onde vai ser armazenado o valor
	 * @param  $valor = o valor propriamente dito
	 */
	public function setVar($var,$valor){
		$_SESSION[$var] = $valor;
		$this->setNvars();
	}//fim setVars
	
	
	/**
	 * unsetVar()
	 * @param  $var = posi��o a ser removida do array
	 * Remove uma vari�vel de ses�o do array $_SESSION
	 */
	public function unsetVar($var){
		unset($_SESSION[$var]);
		$this->setNvars();
	}//fim unsetVar
	
	/**
	 * getVar()
	 * Retorna uma vari�vel de sess�o
	 * @param  $var = posi��o da var�vel no array $_SESSION
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
	 * Destrio a sess�o atual
	 * @param  $inicia = por padr�o recebe false, se for true inicia uma nova sess�o 
	 * ap�s a destrui��o da sess�o atual.
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
	 * Percorre por todas as vari�veis de sess�o no array
	 * $_SESSION e exibe na tela.
	 */
	public function printAll(){
		foreach ($_SESSION as $k => $v):
			printf("%s = %s<br />",$k,$v);
		endforeach;;
	}//fim printAll
	
}//fim classe sessao
