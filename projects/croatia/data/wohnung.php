<?php
require_once('library.php');
$location_now = "Das Domizil &raquo; Die Wohnung";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Domizil [Ausstattung Aussen]</title>
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
	   <table width="210" height="200" border="0" cellpadding="4" cellspacing="4">
        <tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td><a href="home.php" target="_self">Home</a></td>
        </tr>
		<tr>
         <td><a href="domizil.php" target="_self">Das Domizil</font></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="domizil_aus_in.php" target="_self"><em>Ausstattung Innen</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="domizil_aus_dr.php" target="_self"><em>Ausstattung Au&szlig;en</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="wohnung.php" target="_self"><em><font color="#3A8ACB">Die Wohnung</font></em></a></td>
        </tr>
		<tr>
         <td><a href="lage_umgebung.php" target="_self">Lage & Umgebung</a></td>
        </tr>
		<tr>
         <td><a href="info.php" target="_self">Informationen</a></td>
        </tr>
		<tr>
         <td><a href="kontakt.php" target="_self">Kontakt</a><a href="galerie.php" target="_self"></a></td>
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
         <td><strong>Die Wohnung</strong></td>
        </tr>
		<tr>
         <td><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
         <td>Die Wohnung ist ca. 110m&sup2; gross und ist mit 3 Schlafzimmern,</td>
        </tr>
		<tr>
		 <td>einem Wohnzimmer, einem 11m langen Balkon, einer Wohnk&uuml;che,</td>
	    </tr>
		<tr>
		 <td>einem Badezimmer sowie einem G&auml;ste-WC ausgestattet.</td>
	    </tr>
		<tr>
		 <td>Hier findet sich Platz f&uuml;r ca. 6 bis 8 Personen. </td>
	    </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
		 <td>Wenn Sie ungest&ouml;rt sein m&ouml;chten im Kreis der Familie, dann ist das die ideale </td>
	    </tr>
		<tr>
		 <td>L&ouml;sung da Sie eine komplette Etage des Hauses alleine bewohnen. </td>
	    </tr>
		<tr>
		 <td>&nbsp;</td>
	    </tr>
		<tr>
         <td>F&uuml;r weitere Inforamtionen bez&uuml;glich der Wohnung, bitte das Kontakt-Formular </td>
        </tr>
		<tr>
		 <td>benutzen oder direkt anrufen.</td>
	    </tr>
		<tr>
		 <td>&nbsp;</td>
	    </tr>
		<tr>
		  <td><u>Personen:</u> max. 6-8 </td>
          <td>&nbsp;</td>
		</tr>
		<tr>
		 <td><u>Wohnfl&auml;che:</u> ca. 110m&sup2;</td>
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