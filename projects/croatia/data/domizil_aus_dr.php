<?php
require_once('library.php');
$location_now = "Das Domizil &raquo; Ausstattung Au&szlig;en";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Domizil [Ausstattung Aussen]</title>
  
  <script type="text/javascript">
   function show_a1 () {
    window.open('show_a1.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
	
   function show_a2 () {
    window.open('show_a2.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
	
   function show_more () {
    window.open('show_a3.html', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); }
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
         <td>&#8226; <a href="domizil_aus_in.php" target="_self"><em>Ausstattung Innen</em></a></td>
        </tr>
		<tr>
         <td>&#8226; <a href="domizil_aus_dr.php" target="_self"><em><font color="#3A8ACB">Ausstattung Au&szlig;en</font></em></a></td>
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
	   </table>
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" height="200" border="0" cellpadding="3" cellspacing="2" class="">
        <tr>
         <td colspan="2"><strong>Ausstattung Au&szlig;en </strong></td>
        </tr>
		<tr>
         <td colspan="2"><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
         <td width="68%">Um das Haus herum sind ca. 800m&sup2; Fl&auml;che. </td>
         <td width="32%" rowspan="7" align="center"><a href="#"><img src="img/area/house_4_xs.jpg" border="0" width="165" height="128" onclick="show_a2();" /></a></td>
		</tr>
		<tr>
		 <td>Grillm&ouml;glichkeit sowie Sonnenschirme und Liegen sind </td>
	     </tr>
		<tr>
		 <td>vor Ort vorhanden. </td>
	     </tr>
		<tr>
		 <td>&nbsp;</td>
	     </tr>
		<tr>
		 <td>Da kein Durchgangsverkehr herrscht, ist der Ort ideal f&uuml;r </td>
	     </tr>
		<tr>
		 <td>Kinder. Am Haus befindet sich eine Tiefgarage + Parkpl&auml;tze </td>
	     </tr>
		<tr>
		 <td>die von den G&auml;sten genutzt werden k&ouml;nnen. </td>
	     </tr>
		<tr>
		 <td>&nbsp;</td>
	     <td rowspan="7" align="center"><a href="#"><img src="img/area/house_3_xs.jpg" border="0" width="165" height="128" onclick="show_a1();" /></a></td>
        </tr>
		<tr>
		 <td>Hinterdem Haus verl&auml;uft ein Naturschutzgebiet mit</td>
	     </tr>
		<tr>
		 <td>unz&auml;hligen Nadelb&auml;umen.</td>
	     </tr>
		<tr>
		 <td>&nbsp;</td>
	     </tr>
		<tr>
		 <td><u>Grundst&uuml;cksfl&auml;che:</u> ca. 800m&sup2; </td>
	     </tr>
		<tr>
		 <td><a href="#" onclick="show_more();">Mehr Bilder</a></td>
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