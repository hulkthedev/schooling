<?php
session_start();
require_once('library.php');
$location_now = "Kontakt";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Kontakt</title>
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
         <td><a href="kontakt.php" target="_self"><font color="#3A8ACB">Kontakt</font></a></td>
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
		<tr>
         <td>&nbsp;</td>
        </tr>
	   </table>
	   <!-- NAVIGATION TABLE END -->
	  </td>	  
	  <td>
	   <!-- MAIN FRAME TABLE START-->
	   <table width="550" border="0" cellpadding="3" cellspacing="2">
        <tr>
         <td colspan="2"><strong>Kontakt</strong></td>
        </tr>
		<tr>
         <td colspan="2"><hr width="85%" align="left" size="2" color="#1D496D"/></td>
        </tr>
		<tr>
         <td width="33%"><u>Domizil Adresse</u></td>
         <td width="67%"><u>Telefon Nummer</u></td>
		</tr>
		<tr>
         <td>Marko Sucur </td>
		 <td><strong>Hannover:</strong> +49 511 3506092</td>
        </tr>
		<tr>
         <td>Banica 12 </td>
		 <td><strong>Split:</strong> +385 21  335375</td>
        </tr>
		<tr>
         <td colspan="2">21312 Podstrana</td>
        </tr>
		<tr>
         <td colspan="2">Kroatien</td>
        </tr>
		<tr>
		  <td colspan="2"><em>(6 km &ouml;stlich von Split) </em></td>
	     </tr>
		<tr>
         <td colspan="2">&nbsp;</td>
        </tr>
		<tr>
         <td colspan="2"> Haben Sie  Fragen? M&ouml;chten Sie mehr &uuml;ber uns erfahren?</td>
        </tr>
		<tr>
         <td colspan="2">Rufen Sie uns an oder schreiben Sie uns, wir helfen Ihnen gerne weiter:</td>
        </tr>
		<tr>
         <td colspan="2">&nbsp;</td>
        </tr>
		<form method="post" action="kontakt.php">
		<tr>
         <td><strong>Ihr Name:</strong></td>
		 <td><strong>Ihre Mitteilung:</strong></td>
        </tr>
		<tr>
         <td><input type="text" name="name" size="20" maxlength="20" class="myinputbox"/></td>
		 <td rowspan="3"><textarea name="msg" cols="30" rows="5" class="myinputbox"></textarea></td>
        </tr>
		<tr>
         <td><strong>Ihre E-Mail Adresse:</strong></td>
		 </tr>
		<tr>
         <td><input type="text" name="mail" size="20" maxlength="30" class="myinputbox"/></td>
		 </tr>
		<tr>
         <td colspan="2"><input type="submit" value="Abschicken" class="mybutton" /></td>
        </tr>
		<tr>
         <td colspan="2"><?php echo $_SESSION['todo']; ?></td>
        </tr>
		</form>
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
<?php
	$msg_ziel = "pension-niko@web.de";
	$subject = "Kroatien Domizil Anfrage";
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$mitteilung = $_POST['msg'];
	
	if($name != "" && $mail != "" && $mitteilung != "")
	{
		$msg  = $name." schrieb am ".$date_now.":\n\n".$mitteilung;
		mail($msg_ziel, $subject, $msg, "From: ".$mail);		
		$_SESSION['todo'] = "<font color='#00FF00'>Mitteilung erfolgreich Verschickt!</font>";
		unset($name, $mail, $mitteilung, $msg);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	elseif($name == "" && $mail == "" && $mitteilung == "")
	{
		$_SESSION['todo'] = "";
	}
	else
	{
		$_SESSION['todo'] = "<font color='#FF0000'>Bitte alle Felder ausf&uuml;len!</font>"
		?><meta http-equiv="refresh" content="0;"><?php
	}
?>