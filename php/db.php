<?php
class DB{

	var $host;
	var $user;
	var $pass;
	var $db;
	var $conn;
	var $inited;
	var $resultSet;
	var $encoding = 'utf8';

	function readConfig(){
		$this->host = host;
		$this->user = user;
		$this->pass = pass;
		$this->db = db;
	}
	
	function init(){
		$this->readConfig();
		$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db) or die( mysqli_connect_error());
		mysqli_set_charset ( $this->conn, $this->encoding );
		$this->inited = true;
	}

	function getData($query){
		if(!$this->inited){
			$this->init();
			}
		$resultSet = $this->conn->query($query);
		$this->resultSet = $resultSet;
		return $resultSet;
	}
	
	function execCmd($query){
		if(!$this->inited){
			$this->init();
			}
		$result = $this->conn->query($query);
		return $result;
	}
	
	function execCmds($query){
		if(!$this->inited){
			$this->init();
			}
		$result = $this->conn->multi_query($query);
		return $result;
	}	
	
	function getObject($resultSet = false){
		if(!$resultSet){
			$resultSet = $this->resultSet;
		}
		return $resultSet->fetch_object();
	}

	function getArray($resultSet = false){
		if(!$resultSet){
			$resultSet = $this->resultSet;
		}
		return $resultSet->fetch_assoc();
	}
	
	function getNumRows($resultSet = false){
		if(!$resultSet){
			$resultSet = $this->resultSet;
		}
		return $resultSet->num_rows;
	}
	
	function getLastId(){
		if($this->inited){
			return mysqli_insert_id($this->conn);
		}else{
			return false;
		}
	}

	function escape($query){
		if(!$this->inited){
			$this->init();
			}
		return $this->conn->real_escape_string($query);
	}
	
	function close(){
		$this->inited = false;
		mysqli_close($this->conn);
	}

}
?>
