<a href="?seite=eins">eins</a>
<a href="?seite=zwei">Zwei</a>
<?php
	//globale einstellung um Standart Pfad zu �ndern sollte nicht mehr ge�ndert werden
	define('PFAD','./include/');
	
	//Globale Variable die immer wieder ge�ndert wirt
	$GLOBALS['test1']=66;
	
	echo $GLOBALS['test1'];
?>