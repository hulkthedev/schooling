<?php
require_once('library.php');
$location_now = "Informationen";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Informationen</title>
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
         <td><a href="info.php" target="_self"><font color="#3A8ACB">Informationen</font></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="info_preise.php" target="_self"><em>Preise</em></a></td>
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
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td colspan="2"><strong>&Uuml;ber uns</strong></td>
        </tr>
		<tr>
         <td colspan="2"><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
         <td colspan="2">Der Gast kann sich auf ein angenehmes Mittelmeerklima freuen und einheimische</td>
        </tr>
		<tr>
         <td colspan="2">Spezilalit&auml;ten, wie z.B. dalmatinische Weine, leckere Fischgerichte und typische kroatische</td>
        </tr>
		<tr>
         <td width="50%">Hausmannskost. Die Städte Split und Omis</td>
         <td width="50%" rowspan="9" align="right"><img src="img/info/split.jpg" width="270" height="175" /></td>
		</tr>
		<tr>
         <td>sind durch ihre kulturellen und historischen</td>
         </tr>
		<tr>
         <td>Geb&auml;ude ebenfalls ein Besuch wert.</td>
         </tr>
		<tr>
		 <td>&nbsp;</td>
		</tr>
		<tr>
         <td><u>Allgemeine Informationen</u></td>
         </tr>
		<tr>
         <td>Kroatische W&auml;hrung: <strong>Kuna</strong></td>
         </tr>
		<tr>
         <td>Landesvorwahl: <strong>00385</strong></td>
         </tr>
		<tr>
         <td>&nbsp;</td>
         </tr>
		<tr>
         <td><u>Ben&ouml;tigte Dokumente bei der Einreise</u></td>
         </tr>
		<tr>
         <td>Fahrzeugdokumente <em>(Gr&uuml;ne Karte)</em>,</td>
         </tr>
		<tr>
         <td colspan="2">Personalausweis und die Dokumente &uuml;ber die EU-B&uuml;rgerschaft.</td>
        </tr>
		<tr>
         <td colspan="2">&nbsp;</td>
        </tr>
		<tr>
         <td colspan="2"><u>Wichtige Telefonnummern</u></td>
        </tr>
		<tr>
         <td>Stra&szlig;enhilfsdienst: <strong>987</strong></td>
         <td>Polizei: <strong>92</strong></td>
		</tr>
		<tr>
		  <td>ADAC Kroatien: <strong>+385 1 3636000</strong></td>
	      <td>Feuerwehr: <strong>93</strong></td>
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