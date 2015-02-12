<?
include ("connection/properties.php");

$name=$_POST['campo1'];
$description=$_POST['campo2'];
$year=$_POST['campo3'];


$insertnewalbum = "INSERT INTO albums (`album_name`, `album_description`, `album_year`, `album_date`) VALUES 
('$name', '$description', '$year', NOW());";
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
                      