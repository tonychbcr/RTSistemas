<?
/*Conteccion a base de datos Mysql*/
$host="databasename";
$username="databaseuser";
$password="databasepass";
$database="databasename";
$connection = mysql_connect($host,$username,$password);
mysql_select_db($database,$connection);
//session_start();
?>
