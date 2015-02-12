<? include ("connection/properties.php");?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>
<?
$id_album=$_GET["id_a"];
$albums =("SELECT * FROM albums where id_album='$id_album'"); 
$ejecucion = mysql_query($albums,$conex) or die(mysql_error());
$array_albums = mysql_fetch_assoc($ejecucion);

?>

<form id="form1" name="form1" method="post" action="save_new_album.php">
  <table width="100%" border="0" align="center">
    <tr>
      <th style="font-style: italic; font-size: 24px;" scope="row">View album</th>
    </tr>
    <tr>
      <th style="font-style: italic; font-size: 24px; text-align: left;" scope="row"><a href="index.php"><img src="images/home.png" width="58" height="58"  alt=""/></a></th>
    </tr>
    <tr>
      <th scope="row"><table width="100%" border="0">
        <tr>
          <th width="23%" scope="row"><img src="images/album.png" width="204" height="202"  alt=""/></th>
          <td width="77%" style="text-align: center; font-size: 36px; font-style: italic;"><strong><? echo $array_albums['album_name']?></strong></td>
        </tr>
        <tr>
          <th scope="row"><table width="289" border="1" align="center" cellpadding="2" cellspacing="2">
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
          <td>
          <?
$id_album=$_GET["id_a"];
$albums =("SELECT * FROM albums where id_album='$id_album'"); 
$ejecucion = mysql_query($albums,$conex) or die(mysql_error());
$array_albums = mysql_fetch_assoc($ejecucion);

?>
          <table width="100%" border="1">
            <tr>
              <th scope="row">Description:</th>
              <td><span style="text-align: center">
                <textarea name="campo2" wrap="soft" id="campo2" type="text"><? echo $array_albums['album_name']?></textarea>
              </span></td>
            </tr>
            <tr>
              <th scope="row">Year:</th>
              <td><span style="text-align: center">
                <input type="text" name="campo3" id="campo3" value=" <? echo $array_albums['album_year']?>">
              </span></td>
            </tr>
            <tr>
              <th scope="row">Order:</th>
              <td><span style="text-align: center">
                <input type="text" name="campo4" id="campo4" value=" <? echo $array_albums['album_order']?>">
              </span></td>
            </tr>
            <tr>
              <th scope="row">Number of sheets:</th>
              <td><span style="text-align: center">
                <input type="text" name="campo5" id="campo5" value=" <? echo $array_albums['album_number_sheets']?>">
              </span></td>
            </tr>
            <tr>
              <th scope="row">last modified</th>
              <td><span style="text-align: center">
                <input type="text" name="campo" id="campo" value=" <? echo $array_albums['album_modification_date']?>">
              </span></td>
            </tr>
          </table></td>
        </tr>
      </table></th>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
    </tr>
  </table>
</form>
</body>
</html>
