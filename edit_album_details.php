<? include ("connection/properties.php");?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="save_edit_album.php">

<?php 
$id_album=$_GET["id_a"];
$albums =("SELECT * FROM albums where id_album='$id_album'"); 
$ejecucion = mysql_query($albums,$conex) or die(mysql_error());
$array_albums = mysql_fetch_assoc($ejecucion);
?>

  <table width="100%" border="0" align="center">
    <tr>
      <th colspan="2" style="font-style: italic; font-size: 24px;" scope="row">Edit album</th>
    </tr>
    <tr>
      <th style="font-style: italic; font-size: 24px; text-align: left;" scope="row"><a href="index.php"><img src="images/home.png" width="58" height="58"  alt=""/></a></th>
      <th style="font-style: italic; font-size: 24px; text-align: right;" scope="row"><a href="add_sections.php?ida=<? echo $id_album?>"><img src="images/add.png" width="71" height="49"  alt=""/></a>Add sections</th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><table width="37%" border="1" align="center">
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th style="text-align: left" scope="row">Name:</th>
          <td style="text-align: center"><input name="campo1" type="text" id="campo1" value=" <? echo $array_albums['album_name']?>"></td>
        </tr>
        <tr>
          <th style="text-align: left" scope="row">Description:</th>
          <td style="text-align: center"><textarea name="campo2" wrap="soft" id="campo2" type="text"><? echo $array_albums['album_name']?></textarea></td>
        </tr>
        <tr>
          <th style="text-align: left" scope="row">Year:</th>
          <td style="text-align: center"><input type="text" name="campo3" id="campo3" value=" <? echo $array_albums['album_year']?>"></td>
        </tr>
        <tr>
          <th style="text-align: left" scope="row">Order:</th>
          <td style="text-align: center"><input type="text" name="campo4" id="campo4"></td>
        </tr>
        <tr>
          <th style="text-align: left" scope="row">Number of sheets:</th>
          <td style="text-align: center"><input type="text" name="campo5" id="campo5"></td>
        </tr>
        <tr>
          <th style="text-align: left" scope="row">Date:</th>
          <td style="text-align: center"><?php
        
        date_default_timezone_set('UTC');
       
        echo date("Y-m-d");
        ?>
            <input type="hidden" name="ida" id="ida" value="<? echo $id_album?>"></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="button" value="Save" onclick="valida_envia()"></th>
          </tr>
      </table></th>
    </tr>
    <tr>
      <th colspan="2" scope="row">&nbsp;</th>
    </tr>
  </table>
</form>
</body>
</html>
<script>
function valida_envia(){
    //valido el nombre
    if (document.form1.campo1.value.length==0){
       alert("The name is required")
       document.form1.campo1.focus()
       return 0;
    }
	
	 if (document.form1.campo2.value.length==0){
       alert("The description is required")
       document.form1.campo2.focus()
       return 0;
    }
	
	 if (document.form1.campo3.value.length==0){
       alert("The year is required")
       document.form1.campo3.focus()
       return 0;
    }
	
	 var FiltroRx = /[0-9]{1}/;
   if (document.form1.campo4.value.length < 1)
       {
           alert('The Order is required')
            document.form1.campo4.focus()
       		return 0;
       }
   else if (!FiltroRx.test(document.form1.campo4.value))
       {
           alert('Only numbers please')
            document.form1.campo4.focus()
       		return 0;
       }
	   
	   
	    if (document.form1.campo5.value.length < 1)
       {
           alert('The number of sheets is required')
            document.form1.campo5.focus()
       		return 0;
       }
   else if (!FiltroRx.test(document.form1.campo5.value))
       {
           alert('Only numbers please')
            document.form1.campo5.focus()
       		return 0;
       }
	
    alert("The data have been saved");
    document.form1.submit();
} 

</script>