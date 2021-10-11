<?php
require_once('library.php');
$location_now = "Informationen &raquo; Anreisem&ouml;glichkeiten";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Preise</title>
  
  <script type="text/javascript">
   function show_map () {
    window.open('show_map.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
	
   function show_d1 () {
    window.open('show_d1.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); } 
	
   function show_d2 () {
    window.open('show_d2.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); } 
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
         <td>&#8226; <a href="info_reserve.php" target="_self"><em>Reservierungen</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="info_anreise.php" target="_self"><em><font color="#3A8ACB">Anreisem&ouml;glichkeiten</font></em></a></td>
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
	   </table>
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td colspan="2"><strong>Anreisem&ouml;glichkeiten</strong></td>
        </tr>
		<tr>
         <td colspan="2"><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
		  <td><u>Sie haben folgende Anreisem&ouml;glichkeiten </u></td>
	      <td rowspan="8" align="center"><a href="#"><img src="img/info/sky_split_xs.jpg" alt="Klicken zum Vergr&ouml;ssern" border="0" onclick="show_map();" /></a></td>
		</tr>
		<tr>
         <td>&#8226; <strong>PKW</strong></td>
        </tr>
		<tr>
		  <td>&#8226; <strong>Zug</strong></td>
        </tr>
		<tr>
         <td>&#8226; <strong>Flugzeug</strong></td>
        </tr>
		<tr>
         <td>&#8226; <strong>Reisebus</strong></td>
        </tr>
		<tr>
         <td>&nbsp;</td>
        </tr>
		<tr>
         <td><u>Wegbeschreibung aus Deutschland</u></td>
        </tr>
		<tr>
         <td><a href="http://www.viamichelin.de/viamichelin/deu/dyn/controller/Itineraires?strStartCityCountry=240&strStartAddress=&strStartMerged=Hannover&strDestCityCountry=1752&strDestAddress=&strDestMerged=Podstrana&choiceType=1&x=44&y=5&ie=UTF-8" target="_blank">Hier die Route</a></td>
         </tr>
		 <tr>
		  <td colspan="2">&nbsp;</td>
		 </tr>
		<tr>
         <td width="50%" align="center"><a href="#"><img src="img/info/domizil_1.jpg" alt="Klicken zum Vergr&ouml;ssern" border="0" onclick="show_d1();" /></a></td>
         <td width="50%" align="center"><a href="#"><img src="img/info/domizil_2.jpg" alt="Klicken zum Vergr&ouml;ssern" border="0" onclick="show_d2();"/></a></td>
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