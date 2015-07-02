<?php

class Crud{
	private $conexao;
	private $db = DB_NAME;
	
	function __construct(){
		new Conexao();
		$this->setConexao(Conexao::$db_connect);
	}
	
	/**
	 * @return the $conexao
	 */
	public function getConexao() {
		return $this->conexao;
	}

	/**
	 * @return the $db
	 */
	public function getDb() {
		return $this->db;
	}

	/**
	 * @param boolean $conexao
	 */
	public function setConexao($conexao) {
		$this->conexao = $conexao;
	}

	/**
	 * @param string $db
	 */
	public function setDb($db) {
		$this->db = $db;
	}

	function insere($table, array $colums){
		$query = "INSERT INTO {$table} ( ";
		foreach($colums as $colum => $dado):
			if(end($colums) == $dado):
				$query .= "{$colum} )";
			else:
				$query .= "{$colum},";
			endif; 
		endforeach;

		$query .= " VALUES ( ";
		foreach($colums as $colum => $dado):
			if(end($colums) == $dado):
				is_numeric($dado)?$dado = $dado:$dado = "'{$dado}'";
				$query .= "{$dado} )";
			else:
				is_numeric($dado)?$dado = $dado:$dado = "'{$dado}'";
				$query .= "{$dado},";
			endif; 
		endforeach;
		
		return mysql_query(utf8_decode($query));
	}

	function listar($table){
		$dados = array();
		$result = mysql_query("SELECT * FROM {$table}");
		while($frase_object = mysql_fetch_object($result)):
			 array_push($dados, $frase_object);
		endwhile;  
		return $dados;
	}

	function delete($table, $id){
		$query = mysql_query("DELETE FROM {$table} WHERE id = {$id}");
		return $query;
	}
	
	function buscar_usuario($table, $email, $senha){
		$senhaMd5 = ($senha);
		$query = "SELECT * FROM {$table} WHERE login = '{$email}' AND senha = '{$senhaMd5}'";
		$resultado = mysql_query($query) or die(mysql_error());
		return mysql_fetch_object($resultado);
	}
	
}