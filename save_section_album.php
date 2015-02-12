<?
include ("connection/properties.php");

$name=$_POST['section'];
$id=$_POST['ida'];


$insertnewalbum = "
INSERT INTO confrontation (`id_album`, `id_section`, `confrontation_date`) VALUES ('$id', $name, NOW())
";





$ejecucion = mysql_query($insertnewalbum,$conex) or die(mysql_error());


 
?>

<script language="JavaScript" type="text/javascript">

var pagina="add_sections.php?ida=<? echo $id;?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 100);

</script>
                      