<?
include ("connection/properties.php");

$name=$_POST['campo1'];
$description=$_POST['campo2'];
$year=$_POST['campo3'];
$order=$_POST['campo4'];
$sheets=$_POST['campo5'];
$id=$_POST['ida'];


$insertnewalbum = "UPDATE albums  
SET `album_name` = '$name', `album_description` = '$description', 
`album_order` = $order, `album_number_sheets` = $sheets, `album_year` = '$year',
`album_modification_date` = NOW() WHERE `albums`.`id_album` = $id";





$ejecucion = mysql_query($insertnewalbum,$conex) or die(mysql_error());


 
?>

<script language="JavaScript" type="text/javascript">

var pagina="edit_album.php"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 100);

</script>
                      