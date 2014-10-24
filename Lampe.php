<?php
class Lampe{
	private $_IstLampeAn;
	
	function __construct(){
		$this->_IstLampeAn=false;
	}
	
	public function lampeIstAn(){
		return $this->_IstLampeAn;
	}
	
	public function anschalten(){
		$this->_IstLampeAn=true;
	}
	
	public function ausschalten(){
		$this->_IstLampeAn=false;
	}
}



class LampeTest{
	private $_Lampe1;
	private $_Lampe2;
	
	public function __construct() {
		$this->_Lampe1=new Lampe();
		$this->_Lampe2=new Lampe();
	}
	
	function test(){
		echo '<br />Lampe1:' . $this->_Lampe1->lampeIstAn();
		echo '<br />Lampe2:' . $this->_Lampe2->lampeIstAn();
		
		$this->_Lampe1->anschalten();
		$this->_Lampe2->anschalten();
		
		echo '<br />Lampe1:' . $this->_Lampe1->lampeIstAn();
		echo '<br />Lampe2:' . $this->_Lampe2->lampeIstAn();
		
		$this->_Lampe1->ausschalten();
		$this->_Lampe2->ausschalten();
		
		echo '<br />Lampe1:' . $this->_Lampe1->lampeIstAn();
		echo '<br />Lampe2:' . $this->_Lampe2->lampeIstAn();
	}
}

$_test=new LampeTest();
$_test->test();
?>