<?php
require_once('config.php');
class Database {
	private $Con;
	public function __construct() {
		global $cfg;
		$this->Con = mysql_connect($cfg['db']['host'], $cfg['db']['user'], $cfg['db']['password']);

		mysql_select_db($cfg['db']['name'], $this->Con);
		if(! is_resource($this->Con)) {
			throw new Exception("Нельзя соединиться с базой данных" .
			"с использованием параметров\"$connString\"", E_USER_ERROR);
		}
	}
	public function select($sql) {
		$hRes = mysql_query($sql);
		if(! is_resource($hRes)) {
			$err = pg_last_error($this->hConn);
			throw new Exception($err);
		}
		$arReturn = array();
		while( ($row = mysql_fetch_array($hRes)) ) {
			$arReturn[] = $row;
		}
		return $arReturn;
	}
	public function insert($table, $arFieldValues) {
		$fields = array_keys($arFieldValues);
		$values = array_values($arFieldValues);
		// Создается массив значений, который используется
		// для формирования параметраVALUES оператора
		// SELECT.
		// Функцияpg_escape_string используется для
		// нечисловых значений.
		$escVals = array();
		foreach($values as $val) {
			if(! is_numeric($val)) {
				//обеспечение корректности строковых значений
				$val = "'" . $val . "'";
			}
			$escVals[] = $val;
		}
		//конструирование оператораSQL
		$sql = " INSERT INTO $table (";
		$sql .= join(', ', $fields);
		$sql .= ') VALUES(';
		$sql .= join(', ', $escVals);
		$sql .= ')';
		$hRes = mysql_query($sql);
		echo "<br>".$sql."<br>";
		//if(! is_resource($hRes)) {
			//$err = pg_last_error($this->hConn) . "\n" . $sql;
		//	throw new Exception($err);
		//}
		return "succses";
	}
	public function update($table, $arFieldValues, $arConditions) {
		// создание массива для конструирования параметраSET
		$arUpdates = array();
		foreach($arFieldValues as $field => $val) {
			if(! is_numeric($val)) {
				//обеспечение корректности строковых значений
				$val = "'" . $val . "'";
			}
			$arUpdates[] = "$field = $val";
		}
		// создание массива для конструирования параметраWHERE
		$arWhere = array();
		foreach($arConditions as $field => $val) {
			if(! is_numeric($val)) {
				//обеспечение корректности строковых значений
				$val = "'" . $val . "'";
			}
			$arWhere[] = "$field = $val";
		}
		$sql = "UPDATE $table SET ";
		$sql .= join(', ', $arUpdates);
		$sql .= ' WHERE ' . join(' AND ', $arWhere);
		$hRes = mysql_query($sql);
		
		return "succses";
	}
	function delete($table, $arConditions) {
		//создание массива для конструирования параметраWHERE
		$arWhere = array();
		foreach($arConditions as $field => $val) {
			if(! is_numeric($val)) {
				//обеспечение корректности строковых значений
				$val = "'" . $val . "'";
			}
			$arWhere[] = "$field = $val";
		}
		$sql = "DELETE FROM $table WHERE " . join(' AND ', $arWhere);
		$hRes = mysql_query($sql);
		
		return "succses";
	}

	/*public function __destruct() {
		if(is_resource($this->hConn)) {
			@pg_close($this->hConn);
		}
	}*/
}



?>