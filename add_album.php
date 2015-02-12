<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="save_new_album.php">
  <table width="100%" border="0" align="center">
    <tr>
      <th style="font-style: italic; font-size: 24px;" scope="row">Add album</th>
    </tr>
    <tr>
      <th scope="row"><table width="37%" border="1" align="center">
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th scope="row">Name:</th>
          <td style="text-align: center"><input type="text" name="campo1" id="campo1"></td>
        </tr>
        <tr>
          <th scope="row">Description:</th>
          <td style="text-align: center"><textarea type="text" name="campo2" id="campo2"></textarea></td>
        </tr>
        <tr>
          <th scope="row">Year:</th>
          <td style="text-align: center"><input type="text" name="campo3" id="campo3"></td>
        </tr>
        <tr>
          <th scope="row">Date:</th>
          <td style="text-align: center"><?php
        
        date_default_timezone_set('UTC');
       
        echo date("Y-m-d");
        ?></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="button" value="Save" onclick="valida_envia()"></th>
          </tr>
      </table></th>
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
	
    alert("The data have been saved");
    document.form1.submit();
} 

</script>