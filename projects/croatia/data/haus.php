<?php
require_once('library.php');
$location_now = "Haus";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Haus</title>
  <link rel="stylesheet" href="format.css" type="text/css"/>
 </head>
  <body>
   <!-- MAJOR TABLE START -->
   <table width="760" border="0" align="center" cellpadding="0" cellspacing="0" class="content">
     <tr>
      <td colspan="2">
	   <!-- LOCATION & DATE TABLE START -->
	   <table width="550" border="0" align="right" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td width="270" class="createdate"><strong><?php echo $location_now; ?></strong></td>
		 <td width="230" align="right" class="createdate" ><?php echo $date_now; ?></td>
        </tr>
	   </table>
	   <!-- LOCATION & DATE TABLE END -->
	  </td>
     </tr>
	 <tr>
      <td>
	   <!-- NAVIGATION TABLE START -->
	   <table width="210" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td></td>
        </tr>
		<tr>
         <td><a href="home.php" target="_self">Home</a></td>
        </tr>
		<tr>
         <td><a href="lage_umgebung.php" target="_self">Lage & Umgebung</a></td>
        </tr>
		<tr>
         <td><a href="haus.php" target="_self"><font color="#3A8ACB">Haus</font></a></td>
        </tr>
		<tr>
         <td><a href="info.php" target="_self">Informationen</a></td>
        </tr>
		<tr>
         <td><a href="kontakt.php" target="_self">Kontakt</a></td>
        </tr>
		<tr>
         <td><a href="impress.php" target="_self">Impressum</a></td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
	   </table>
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td>Haus</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
	   </table>
	   <!-- MAIN FRAME TABLE END-->
	  </td>
     </tr>
  </table>
  <!-- MAJOR TABLE END -->
  
   <!-- FOOTER TABLE -->	  
   <table width="760" border="0" align="center" cellpadding="0" cellspacing="0" class="footer"><tr><td>&nbsp;</td></tr></table>
 </body>
</html>