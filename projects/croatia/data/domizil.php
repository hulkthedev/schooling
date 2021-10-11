<?php
require_once('library.php');
$location_now = "Das Domizil";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Domizil</title>
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
	   <table width="210" height="200" border="0" cellpadding="4" cellspacing="4">
        <tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td><a href="home.php" target="_self">Home</a></td>
        </tr>
		<tr>
         <td><a href="domizil.php" target="_self"><font color="#3A8ACB">Das Domizil</font></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="domizil_aus_in.php" target="_self"><em>Ausstattung Innen</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="domizil_aus_dr.php" target="_self"><em>Ausstattung Au&szlig;en</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="wohnung.php" target="_self"><em>Die Wohnung</em></a></td>
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
	   </table>
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td><strong>Was bieten wir euch? </strong></td>
        </tr>
		<tr>
         <td><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
         <td>Wir bieten euch bis zu 8 Zimmer mit angeschlossener Dusche sowie Toilette, au&szlig;erdem</td>
        </tr>
		<tr>
         <td>befindet sich auf jeder Etage eine Gemeinschaftsk&uuml;che. Jedes Zimmer hat SAT-TV und eine</td>
        </tr>
		<tr>
         <td>kleine Mini-Bar. Ca. 150m vom Haus befindet sich schon der Strand, welcher sehr gut zu</td>
        </tr>
		<tr>
         <td>Fu&szlig; zu erreichen ist. Wenn Sie ungest&ouml;rt sein m&ouml;chten im Kreis der Familie,</td>
        </tr>
		<tr>
         <td>dann ist das die ideale l&ouml;sung da Sie eine komplette Etage des Hauses alleine bewohnen.</td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td>Au&szlig;erdem vermieten wir auch eine Wohnung <em>(etwa 110m&sup2;)</em> mit 3 Schlafzimmer, einem </td>
        </tr>
		<tr>
         <td>Wohnzimmer mit angeschlossener K&uuml;che, einem Badezimmer und G&auml;ste-Toilette f&uuml;r die,</td>
        </tr>
		<tr>
		  <td>die lieber im geschlossenem Kreis der Familie Urlaub machen m&ouml;chten. </td>
	     </tr>
		<tr>
		  <td>&nbsp;</td>
	    </tr>
		<tr>
		  <td>Bei weiteren Fragen bez&uuml;glich der Wohnung k&ouml;nnen Sie uns telefonisch</td>
	    </tr>
		<tr>
		  <td>oder &uuml;ber das Kontaktformular erreichen.</td>
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