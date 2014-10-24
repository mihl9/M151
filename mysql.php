<?php
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root";
$MYSQL_PW = "";
$MYSQL_DB = "m151";

//connection aufbauen
$con = mysql_connect($MYSQL_HOST,$MYSQL_USER,$MYSQL_PW);
//fals ein fehler auftritt abfangen und beenden
if(!$con){
	die('Fehler' . mysql_error());
}else{
	echo 'dbconnect';
}

//SQL query ausführen
if(mysql_query('Create DATABASE m151Test')){
	//erfolgreich ausgeführt
	echo '<hr>database created';
}else{
	//fehler beim ausführen
	echo '<hr>Fehler beim erstellen' .  mysql_error();
}
echo '<hr>';

//Datenbank auswählen
mysql_select_db($MYSQL_DB,$con);

$sql= "create table users(
usersid int NOT NULL AUTO_INCREMENT,
PRIMARY KEY (usersid),
loginname varchar(50),
passwort varchar(200)
)";

mysql_query($sql,$con);

//Anzeigen
$sql = "Select * FROM users";
$results = mysql_query($sql,$con);
while($row = mysql_fetch_array($results)){
	echo $row['usersid'];
	echo '/';
	echo $row['loginname'];
	echo '/';
	echo $row['passwort'];
}
//verbindung trennen
mysql_close($con);
?>