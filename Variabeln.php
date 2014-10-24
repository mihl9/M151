<a href="?seite=eins">eins</a>
<a href="?seite=zwei">Zwei</a>
<?php
	//globale einstellung um Standart Pfad zu ändern sollte nicht mehr geändert werden
	define('PFAD','./include/');
	
	//Globale Variable die immer wieder geändert wirt
	$GLOBALS['test1']=66;
	
	echo $GLOBALS['test1'];
?>