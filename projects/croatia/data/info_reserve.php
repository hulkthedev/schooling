<?php
require_once('library.php');
$location_now = "Informationen &raquo; Reservierungen";
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
         <td>&#8226; <a href="info_preise.php" target="_self"><em>Preise</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="info_reserve.php" target="_self"><em><font color="#3A8ACB">Reservierungen</font></em></a></td>
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
         <td><strong>Reservierungen</strong></td>
        </tr>
		<tr>
         <td><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
		  <td>Bei Interesse oder Reservierungen bitte das Kontakt-Formular benutzen oder direkt anrufen. </td>
	     </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
		  <td><u>Deutschland</u> (Hannover)</td>
	     </tr>
		<tr>
         <td><strong>Telefon:</strong> +49 511 3506092</td>
        </tr>
		<tr>
         <td><strong>Handy:</strong> +49 162 8989499 </td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td><u>Kroatien</u> (Split Podstrona)</td>
        </tr>
		<tr>
         <td><strong>Telefon:</strong> +385 21  335375</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td><u>E-Mail</u></td>
        </tr>
		<tr>
         <td><a href="pension-niko@web.de">pension-niko@web.de</a></td>
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