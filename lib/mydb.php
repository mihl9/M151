<?php
class mydb{
	public  $_con 		= null;
	public  $_results 	= null;
	public function __construct(){
		$this->conection();
	}
	public function conection(){
		$this->_con = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);
		if(!$this->_con){
			die('Fehler : ' . mysql_error());
		}else{
			mysql_select_db(MYSQL_DB,$this->_con);
		}
	}
	public function close(){
		mysql_close($this->_con);
	}
	function sqlexec($sqlsr){
		$this->_results = mysql_query($sqlsr,$this->_con);
	}
}
?>