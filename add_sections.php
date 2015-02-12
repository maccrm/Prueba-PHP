<? include ("connection/properties.php");?>
<?php 
$id_album=$_GET["ida"];
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
<style type="text/css">
.csc {text-align: center;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="save_section_album.php">



  <table width="100%" border="0" align="center">
    <tr>
      <th colspan="2" style="font-style: italic; font-size: 24px;" scope="row">Add section</th>
    </tr>
    <tr>
      <th style="font-style: italic; font-size: 24px; text-align: left;" scope="row"><a href="index.php"><img src="images/home.png" width="58" height="58"  alt=""/></a></th>
      <th style="font-style: italic; font-size: 24px; text-align: right;" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><table width="100%" border="0">
          <tr>
            <th width="28%" scope="row"><table width="289" border="1" align="center" cellpadding="2" cellspacing="2">
              <tr bgcolor="#666666">
                <td width="277" colspan="5" bgcolor="#E7E8EB"><div align="center"><strong>Sections in this album:</strong></div></td>
              </tr>
             
              <?php
					$albums = mysql_query("SELECT section_name from sections sec left join confrontation co on co.id_section=sec.id_section where co.id_album='$id_album'");
					$color="#eeeeee";
					while ($array_albums = mysql_fetch_assoc($albums)) {
				
			   	$color=($color=='#eeeeee') ? '#ffffff' : '#eeeeee' ;
					?>
              <tr bgcolor="<?php echo $color; ?>" onMouseOver="this.className='over';" onMouseOut="this.className='';">
                <td align="center"><? 
		 echo $array_albums['section_name'];
		
		 ?></td>
                
              </tr>
              <?php
					
					
					}
					?>
            </table></th>
            <th width="72%" scope="row">
            <table width="68%" border="1" align="center">
              <tr>
                <th style="text-align: left" scope="row">Select section:</th>
                <td style="text-align: center"><select name="section" id="section">
                  <option>-Seleccionar-</option>
                  <?php
					$sections = mysql_query('SELECT * FROM sections');
					while ($array_sections = mysql_fetch_array($sections)) {
					?>
                  <option value="<?php echo $array_sections['id_section']; ?>"><?php echo $array_sections['section_name']; ?></option>
                  <?php
					}
					mysql_free_result($sections);
					?>
                </select></td>
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
                <th colspan="2" scope="row"><span class="csc">
                  <input type="submit" name="button" id="button" value="Save" />
                </span></th>
              </tr>
            </table></th>
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