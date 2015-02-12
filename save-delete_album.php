<?
include ("connection/properties.php");

$name=$_POST['section'];
$id=$_GET['ida'];


$insertnewalbum = "DELETE FROM albums WHERE id_album='$id'";
$ejecucion = mysql_query($insertnewalbum,$conex) or die(mysql_error());


 
?>

<script language="JavaScript" type="text/javascript">

var pagina="index.php"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 100);

</script>
                      