<?php
class model
{
	public $data;
	public $check;
	private $meinedb;
	public function __construct(){
	}
	public function chklogindata($_name,$_pass){
		$this->check = 0;
		$this->meinedb = new mydb();
		$this->meinedb->sqlexec('SELECT * FROM users');
		while($row = mysql_fetch_array($this->meinedb->_results)){
			if ($row['username'] ==$_name && $row['password'] ==$_pass){
				$this->check = $row['UserID'];
			}
		}
		$this->meinedb->close();	
		return $this->check;
	}
	public function showform(){
		return  '
		<form action="?controller=login" method="POST">
		<fieldset>
		<legend>Bitte einloggen:</legend>
			<label for="loginname">Name:</label>
			<input class="form-control" type="text" name="loginname" value=""/>
			<label for="loginpass">Passwort:</label>
			<input class="form-control" type="password" name="loginpass" value=""/>
			<button type="submit" class="btn btn-default" name="senden" value="Login">Login</button>
		</fieldset>
		</form>
		';	
	}
	public function showdata(){
		$_txt = 'Name :';
		$_txt .= $_POST['loginname'];
		$_txt .= ' / Passwort :';
		$_txt .= $_POST['loginpass'];
		$_txt .= '<br>';
		return $_txt;		
	}
}
?>
