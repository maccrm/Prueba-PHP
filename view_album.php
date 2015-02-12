<? include ("connection/properties.php");?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>
<form id="form1" name="form1" method="post" action="save_new_album.php">
  <table width="100%" border="0" align="center">
    <tr>
      <th style="font-style: italic; font-size: 24px;" scope="row">View albums</th>
    </tr>
    <tr>
      <th style="font-style: italic; font-size: 24px; text-align: left;" scope="row"><a href="index.php"><img src="images/home.png" width="58" height="58"  alt=""/></a></th>
    </tr>
    <tr>
      <th scope="row">
      
      <table width="685" border="1" align="center" cellpadding="2" cellspacing="2">
    <tr bgcolor="#666666">
      <td colspan="6" bgcolor="#E7E8EB"><div align="center"><strong>Albums:</strong></div></td>
      </tr>
    <tr bgcolor="#999999">
			  
				<th width="67">&nbsp;</th>
			<th width="160"><? echo "Name";?></th>
                <th width="29"><? echo "Description";?></th>
				<th width="29"><? echo "Year";?></th>
                <th width="29"><? echo "Date"?></th>
				<th width="153"></th>
				
			</tr>
    
 
    
    
        <?php
					$albums = mysql_query('SELECT * FROM albums');
					$color="#eeeeee";
					while ($array_albums = mysql_fetch_assoc($albums)) {
				
			   	$color=($color=='#eeeeee') ? '#ffffff' : '#eeeeee' ;
					?>
                     <tr bgcolor="<?php echo $color; ?>" onMouseOver="this.className='over';" onMouseOut="this.className='';">
                    
      <td align="center"><img src="images/album.png" width="47" height="49"  alt=""/></td>
      <td align="center"><? 
		 echo $array_albums['album_name'];
		 $id_al=$array_albums['id_album'];
		 ?></td>
      <td align="center"><?  echo $array_albums['album_description'];?></td>
      <td align="center"><?  echo $array_albums['album_year'];?></td>
      <td align="center"><?  echo $array_albums['album_date'];?></td>
      <td align="center"> <a href="final_view.php?id_a=<? echo $id_al;?>">View</a></td>
          </tr>
         <?php
					
					
					}
					?>

    </table>
      
      
      </th>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
    </tr>
  </table>
</form>
</body>
</html>
