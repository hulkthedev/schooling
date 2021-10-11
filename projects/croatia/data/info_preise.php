<?php
require_once('library.php');
$location_now = "Informationen &raquo; Preise";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Preise</title>
  <link rel="stylesheet" href="format.css" type="text/css"/></head>
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
         <td><a href="home.php" target="_self">Home</a></td>
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
         <td>&#8226; <a href="info_preise.php" target="_self"><em><font color="#3A8ACB">Preise</font></em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="info_reserve.php" target="_self"><em>Reservierungen</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="info_anreise.php" target="_self"><em>Anreisem&ouml;glichkeiten</em></a></td>
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
	   </table>
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td width="334"><strong>Preise</strong></td>
        </tr>
		<tr>
         <td><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
		  <td><u>von 01.06 bis 31.09</u></td>
	     </tr>
		<tr>
		  <td>Erwachsene <strong>20,00 EUR</strong> / Person</td>
	     </tr>
		<tr>
		  <td>Kinder bis 12 J. <strong>15,00 EUR</strong> / Person</td>
	     </tr>
		<tr>
		  <td>Im Preis mitenthalten sind Tagesgeb&uuml;hren</td>
	     </tr>
		<tr>
		  <td>&nbsp;</td>
	     </tr>
		<tr>
		  <td><u>von 01.10 bis 01.06</u></td>
	     </tr>
		<tr>
		  <td>Erwachsene <strong>15,00 EUR</strong> / Person</td>
	     </tr>
		<tr>
		  <td>Kinder bis 12 J. <strong>10,00 EUR</strong> / Person</td>
	     </tr>
		<tr>
		  <td>Im Preis mitenthalten sind Tagesgeb&uuml;hren</td>
	     </tr>
		<tr>
		  <td>&nbsp;</td>
	     </tr>
		<tr>
		  <td><u>Wohnung</u> <em>(ca. 110m&sup2;)</em></td>
	     </tr>
		<tr>
		  <td><strong>600,00 EUR</strong> pro Woche </td>
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