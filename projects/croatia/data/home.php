<?php
require_once('library.php');
$location_now = "Home";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Home</title>
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
         <td width="270" class="createdate"><strong><font color="#1D496D"><?php echo $location_now; ?></font></strong></td>
		 <td width="230" align="right" class="createdate" ><?php echo $date_now; ?></td>
        </tr>
	   </table>
	   <!-- LOCATION & DATE TABLE END -->
	  </td>
     </tr>
	 <tr>
      <td>
	   <!-- NAVIGATION TABLE START -->
	   <table width="210" border="0" cellpadding="4" cellspacing="4">
        <tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td><a href="home.php" target="_self"><font color="#3A8ACB">Home</font></a></td>
        </tr>
		<tr>
		  <td><a href="domizil.php" target="_self">Das Domizil</a></td>
	     </tr>
		<tr>
         <td><a href="lage_umgebung.php" target="_self">Lage & Umgebung</a></td>
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
	   </table>
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td><strong>Hallo Ihr lieben G&auml;ste,</strong></td>
        </tr>
		<tr>
         <td>herzlich Willkommen auf der neuen Website der Pension Niko.</td>
        </tr>
		<tr>
         <td>Neben der Sonne und Meer erwarten den Gast hier auch komplett neu eingerichtete Zimmer</td>
        </tr>
		<tr>
         <td>mit viel Liebe zum Detail. Das ca.800m&sup2; gro&szlig;e Grundst&uuml;ck bietet ausreichend Platz,</td>
        </tr>
		<tr>
         <td>welcher den G&auml;sten frei zur Verf&uuml;gung steht.</td>
        </tr>
		<tr>
         <td>Die pension Niko befindet sich in ruhiger Lage und ist der ideale Aufenthaltsort f&uuml;r Ihren</td>
        </tr>
		<tr>
         <td>Kroatien-Urlaub.</td>
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