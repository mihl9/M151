<?php
class model
{
	public $data;
	private $meinedb;
	public function __construct()
	{
		//$this->data = "jaja";
		$this->data = '';
		$this->meinedb = new mydb();
		$this->meinedb->sqlexec('SELECT * FROM users');
		while($row = mysql_fetch_array($this->meinedb->_results)){
			$this->data .= $row['UserID'];
			$this->data .= ' / ';
			$this->data .=  $row['username'];
			$this->data .=  ' / ';
			$this->data .=  $row['password'];
			$this->data .=  '<br>';
		}
		$this->meinedb->close();
	}
}
?>
