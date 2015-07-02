<?php
/**
 * @project PainelAdm
 * @author Maickon Rangel
 * @date 02/07/2015
 * @contact maickon4developers@gmail.com
 * @version 1.0
 * @link https://github.com/painelAdm
 *
 * conexao.class.php
 * Cria uma conexao com o banco de dados 
 * através de um objeto stático
 **/
class Conexao{
	private $db_host;
	private $db_user;
	private $db_pass;
	private $db_name;
	private static $db_connect = FALSE;
	
	/**
	 * __construct()
	 * Inicializa por parametros os dados de 
	 * configuraçao do banco de dados e chama o
	 * metodo estatico getInstance() para 
	 * estabelecer uma conexao com o banco de dados
	 */
	
	function __construct($db_host = HOST, $db_user = USER , $db_pass = PASS){
		$this->db_host = $db_host;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		self::getInstance();	
	}
	
	/** 
	 * getInstance()
	 * Metodo estatico que retorna a 
	 * conexao com o banco fe dados 
	 * em caso de sucesso.
	 * Retorna FALSE em caso de falha
	 */
	public static function getInstance(){
		global $tag;
		if(self::$db_connect = mysql_connect($this->db_host, $this->db_user, $this->db_pass) or die($tag->imprime('<div class="alert alert-danger" role="alert">Conexão não estabelecida!</div>','encode'))):
			mysql_query("SET NAMES 'utf8'");
			mysql_query("set character_set_client='utf8'");
			mysql_query("set character_set_results='utf8'");
			mysql_query("set collation_connection='utf8'");
		else:
			echo mysql_error($this->db_identifier);
		endif;

		return self::$db_connect;
	}
}
