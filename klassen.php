<?php
//alle fehler anzeigen
error_reporting(E_ALL | E_NOTICE);

class test{
	private $meins;
	public $jaja;
	
	function __construct(){
		$this->jaja=5;
	}
	//eigene Funktion mit parameter
	function test($wert){
		
		//wert zurückgeben
		return $wert+2;
	}
}

$hallo = new test();
echo $hallo->jaja;
echo $hallo->test(5);

//abstracte Klasse ohne klammern
abstract class Main{
	//statische function
	public static function count($wert){
		return $wert+3;
	}
}

//auf statische funktion zugreifen
echo Main::count(7);

//vererbung der klassen
class meine1 extends test{
	//funktion überschreiben
	function __construct(){
		//konstruktor der vererbten klasse ausführen
		parent::__construct();
	}
	
}
$newClass=new meine1;
echo '<br />' + $newClass->test(10);
?>