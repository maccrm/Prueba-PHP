<?
	$conex = mysql_connect("localhost", "root", "root")
	or die("No se pudo realizar la conexion");
	mysql_select_db("albums",$conex)
	or die("ERROR con la base de datos");
?>