<?php 
session_start(); 

/* Adminstatus? */
if($_SESSION['admin'] =! "true") header("location:no_admin.html");

require_once('.log/user.inc.php');
require_once('.log/functions.php');
$id = $_SESSION['send_page_nr'];

$login = @mysql_connect($host, $user, $pass) or die("".messages(2).":".mysql_error());
$login = @mysql_select_db($base) or die("".messages(3));

$sql = "SELECT * FROM artikel WHERE id='$id'";
$login = @mysql_query($sql) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");

$row = @mysql_fetch_array($login);
$id = $_SESSION['send_page_nr'];

/* Funktion 'Aktualisiere Artikel' */
function edit_art($nr, $bez, $menge, $ein, $aus, $versand)
{
	/* Keine Daten eingegeben! */
	if($bez == "" || $menge == "" || $aus == "")
	{
		messages(18);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	else
	{
		/* Auf Kommas prüfen */
		$aus = ereg_replace(',', '.', $aus);
		$versand = ereg_replace(',', '.', $versand);
	
		$statement = "UPDATE artikel SET bezeichnung='$bez', lagerbestand='$menge', einkaufspreis='$ein', verkaufspreis='$aus', versandpreis='$versand' WHERE id='$nr'";
		$result = @mysql_query($statement) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");
	
		if(@mysql_affected_rows() >= 1)	messages(20);
		else messages(19);
		
		?><meta http-equiv="refresh" content="0;"><?php	
	}	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Praka '08 Projekt</title>
 <meta name="DC.Date"        content="2008-02-24T15:00:00+01:00">
 <meta name="description"    content="Praka '08 Projekt">
 <meta name="keywords"       content="Praka, praka">
 <meta name="author"         content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Publisher"   content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Language"    content="de">
</head>

 <body onLoad="window.resizeTo(700, 400)" background="../pics/bg.gif" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
 <form action="show_art.php" method="post">
  <table width="50%" align="center">
    <tr>
      <td colspan="6"><div align="center"><img src="../pics/logo_art.png" alt="Logo"></div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><strong><u>Artikel ID:</u> <?php echo $_SESSION['send_page_nr']; ?></strong></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td><div align="left"><u>ID</u></div></td>
	  <td colspan="2"><div align="left"><u>Bezeichnung</u></div></td>
	  <td><div align="center"><u>Lagerbestand</u></div></td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
      <td>&nbsp;</td>
      <td><input name="new_id" type="text" value="<?= $row['id']; ?>" size="2" maxlength="2" readonly="true"/></td>
	  <td colspan="2"><input name="new_bez" type="text" value="<?= $row['bezeichnung']; ?>" size="50" maxlength="70"/></td>
	  <td><div align="center"><input name="new_anz" type="text" value="<?= $row['lagerbestand']; ?>" size="10" maxlength="10"/></div></td>
	  <td><strong>St&uuml;ck</strong></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td width="34%"><u>Einkaufspreis</u></td>
	  <td width="21%"><u>Verkaufspreis:</u></td>
	  <td><div align="center"><u>Versnadkosten</u></div></td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td><input name="new_ein" type="text" value="<?= $row['einkaufspreis']; ?>" size="10" maxlength="7" readonly="true"/> <strong>Euro</strong> </td>
	  <td><input name="new_aus" type="text" value="<?= $row['verkaufspreis']; ?>" size="10" maxlength="7"/> <strong>Euro</strong></td>
	  <td><div align="center"><input name="new_ver" type="text" value="<?= $row['versandpreis']; ?>" size="10" maxlength="7"/></div></td>
	  <td><strong>Euro</strong></td>
    </tr>
	<tr>
	<tr>
      <td>&nbsp;</td>
	  <td colspan="5"><input name="submit" type="submit" value="Aenderung speichern"/></td>
    </tr>
	<tr>
      <td colspan="6">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="6"><div align="center"><?php echo $_SESSION['successful']; ?></div></td>
    </tr>
	<tr>
      <td colspan="6">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="6"><div align="center"><input name="close" type="button" value="Fenster schließen" onClick="javascript:window.close()"></div></td>
	</tr>
  </table>
  </form>
 </body>
</html>

<?php
    /* Events! */
	unset($_SESSION['successful']);
		
	if($_REQUEST['submit'] == 'Aenderung speichern') edit_art($_POST['new_id'], $_POST['new_bez'], $_POST['new_anz'], $_POST['new_ein'], $_POST['new_aus'], $_POST['new_ver']);
?>