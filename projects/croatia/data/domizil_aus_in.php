<?php
require_once('library.php');
$location_now = "Das Domizil &raquo; Ausstattung Innen";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Domizil [Innenausstattung]</title>
  
  <script type="text/javascript">
   function show_r1 () {
    window.open('show_r1.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
	
   function show_r2 () {
    window.open('show_r2.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
	
   function show_r3 () {
    window.open('show_r3.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
	
   function show_r4 () {
    window.open('show_r4.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }

   function show_r5 () {
    window.open('show_r5.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
	
   function show_more () {
    window.open('show_more_1.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
  </script>  
  
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
         <td>&#8226; <a href="domizil_aus_in.php" target="_self"><em><font color="#3A8ACB">Ausstattung Innen</font></em></a></td>
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
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td colspan="3"><strong>Die Innenausstattung des Hauses</strong></td>
        </tr>
		<tr>
         <td colspan="3"><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
         <td width="68%" colspan="2">Im Haus  befinden sich  8 verschieden grosse Zimmer,</td>
         <td width="32%" rowspan="7" align="center"><a href="#"><img src="img/rooms/bedroom_1_xs.jpg" border="0" alt="Klicken zum Vergr&ouml;ssern" width="165" height="128" onclick="show_r1();" /></a></td>
		</tr>
		<tr>
		 <td colspan="2">mit Doppelbetten, Bettw&auml;sche vorhanden, 8 Badezimmer </td>
	     </tr>
		<tr>
		  <td colspan="2">und 2 Gemeinschaftsk&uuml;chen.</td>
         </tr>
		<tr>
		 <td colspan="2">&nbsp;</td>
	     </tr>
		<tr>
         <td colspan="2"><u>Extras:</u>  Ventilator, Mini-Bar </td>
         </tr>
		<tr>
		 <td colspan="2"><u>K&uuml;che:</u> K&uuml;hlschrank, Gefrierfach, Plattenherd, Backofen,</td>
	     </tr>
		<tr>
		  <td colspan="2">Kaffeemaschine, Toaster, Wasserkocher</td>
         </tr>
		<tr>
		  <td colspan="2"><u>Sanit&auml;r:</u> Dusche, Handt&uuml;cher vorhanden, WC, Waschmaschine</td>
	      <td rowspan="7" align="center"><a href="#"><img src="img/rooms/bedroom_2_xs.jpg" border="0" alt="Klicken zum Vergr&ouml;ssern" width="165" height="128" onclick="show_r2();" /></a></td>
		</tr>
		<tr>
		 <td colspan="2"><u>Unterhaltung:</u> Empfang deutschsprachiger TV-Programme,</td>
	     </tr>
		<tr>
		 <td colspan="2">Fernseher, Radio, SAT-Anlage</td>
	     </tr>
		<tr>
		  <td colspan="2">&nbsp;</td>
         </tr>
		<tr>
		  <td><u>Personen:</u> max. 30</td>
          <td><u>Wohnfl&auml;che:</u> 420m&sup2;</td>
		</tr>
		<tr>
		  <td colspan="2"><a href="#" onclick="show_more();">Mehr Bilder</a></td>
         </tr>
		<tr>
		  <td colspan="2">&nbsp;</td>
         </tr>
		<tr>
		  <td width="32%" align="center"><a href="#"><img src="img/rooms/bedroom_5_xs.jpg" alt="Klicken zum Vergr&ouml;ssern" border="0" width="165" height="128" onclick="show_r5();" /></a></td>
	      <td width="36%" align="center"><a href="#"><img src="img/rooms/bedroom_4_xs.jpg" alt="Klicken zum Vergr&ouml;ssern" border="0" width="165" height="128" onclick="show_r4();"/></a></td>
	      <td align="center"><a href="#"><img src="img/rooms/bedroom_3_xs.jpg" border="0" alt="Klicken zum Vergr&ouml;ssern" width="165" height="128" onclick="show_r3();" /></a></td>
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