<?php

/* Mysql */	

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$dbas = substr( $url["path"], 1);
    define ('DBHOST', $url["host"]); 
    //define ('DBPORT', '3306'); 
    define ('DBNAME', $dbas); // Имя базы
    define ('DBUSER', $url["user"]); // Пользователь
    define ('DBPASS', $url["pass"]); // Пароль
	
/* PHP DATA OBJECT ничего не трогай класс с документации */		

class PDO_ extends PDO {

    function __construct($dsn, $username, $password) {
		parent :: __construct($dsn, $username, $password);
		$this -> setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
		$this -> setAttribute(PDO :: ATTR_DEFAULT_FETCH_MODE, PDO :: FETCH_ASSOC);
    } 

    function prepared($sql) {
		$stmt = parent :: prepare($sql, array(
		PDO :: ATTR_STATEMENT_CLASS => array('PDOStatement_'))); 
		return $stmt; 
    }  
 
    function query($sql, $params = array()) { 
		$stmt = $this -> prepare($sql); 
		$stmt -> execute($params); 
		return $stmt; 
    }  
 
    function querySingle($sql, $params = array()) { 
		$stmt = $this -> query($sql, $params); 
		$stmt -> execute($params); 
		return $stmt -> fetchColumn(0); 
    }  
 
    function queryFetch($sql, $params = array()) { 
		$stmt = $this -> query($sql, $params); 
		$stmt -> execute($params); 
		return $stmt -> fetch(); 
    }
	
}  	
	
class PDOStatement_ extends PDOStatement {
 
	function execute($params = array()) { 
	
		if (func_num_args() == 1) { 
			$params = func_get_arg(0); 
		} else { 
			$params = func_get_args(); 
		}  
		
		if (!is_array($params)) { 
			$params = array($params); 
		}  
		
		parent :: execute($params); 
		return $this; 
    }  
 
    function fetchSingle() { 
		return $this -> fetchColumn(0); 
    }  
 
    function fetchAssoc() { 
		$this -> setFetchMode(PDO :: FETCH_NUM); 
		$data = array(); 
		
			while ($row = $this -> fetch()) { 
				$data[$row[0]] = $row[1]; 
			}  
			
		return $data; 
	}
	
}  	
	
class DB { 

    static $dbh; 
    public function __construct() { 
		try { 
			self :: $dbh = new PDO_('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);
			self :: $dbh -> exec('SET CHARACTER SET utf8'); 
			self :: $dbh -> exec('SET NAMES utf8'); 
		}	  
		catch (PDOException $e) { die('К сожалению, не доступен сервер mySQL.');} }  
		final public function __destruct() { self :: $dbh = null; }  
		
}  $database = new DB(); 

	

?>