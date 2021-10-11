<?php 
session_start(); 

/* Adminstatus? */
if($_SESSION['admin'] =! "true") header("location:no_admin.html"); 

require_once('.log/user.inc.php');
require_once('.log/functions.php');

$login = @mysql_connect($host, $user, $pass) or die("".messages(2).":".mysql_error());
$login = @mysql_select_db($base) or die("".messages(3));

$sql = "SELECT * FROM kunde ORDER BY id";
$login = @mysql_query($sql) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");

/* Funktion 'Kunde löschen' */
function del_kdn($id)
{
	/* Nichts loeschen? */
	if(!isset($id))
	{
		messages(23);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	/* Loeschen! */
	else
	{
		$statement = "DELETE FROM kunde WHERE id = '$id'";
		$result = @mysql_query($statement) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>"); 
	
		if(mysql_affected_rows()) messages(22);
		else messages(21);
		
		?><meta http-equiv="refresh" content="0;"><?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
 <title>Praka '08 Projekt</title>
 <meta name="DC.Date"        content="2008-02-24T15:00:00+01:00">
 <meta name="description"    content="Praka '08 Projekt">
 <meta name="keywords"       content="Praka, praka">
 <meta name="author"         content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Publisher"   content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Language"    content="de">
</head>
 <!-- Abfrage: Artikel loeschen? -->
 <script type="text/javascript">
  function DeleteCheck () {
   var chk = window.confirm("Wollen Sie den Kunden wirklich loeschen?");
   return (chk); }
</script>  

<body onLoad="window.resizeTo(1250, 500)" background="../pics/bg.gif" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
<form action="show_kdn.php" method="post">
 <table width="81%" border="0" align="center">
  <tr>
    <td colspan="10"><div align="center"><img src="../pics/logo_kdn.png" alt="Logo"></div></td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><strong><u>Vorhandene Kunden:</u></strong></td>
  </tr>
  <tr>
   <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td width="2%"><u>Auswahl</u></td>
    <td width="3%"><u>ID</u></td>
    <td width="12%"><u>Name</u></td>
    <td><u>Vorname</u></td>
    <td><u>Strasse u. Hausnr.</u></td>
    <td><u>PLZ</u></td>
    <td><u>Ort</u></td>
    <td><u>Land</u></td>
    <td><u>eMail</u></td>
    <td><u>Rechnungs- Nummer. </u></td>
  </tr> 
<?php
	/* Kunden werden aufgelistet */
	while($row = @mysql_fetch_array($login))
	{
?>
  <tr>
    <td><div align="center"><input name="auswahl" type="radio" value="<?= $row['id']; ?>"/></div></td>
    <td><input name="id"    type="text" value="<?= $row['id']; ?>" size="2" maxlength="3" readonly="true"/></td>
    <td><input name="nname" type="text" value="<?= $row['name']; ?>" size="20" maxlength="30" readonly="true"/></td>
    <td><input name="vname" type="text" value="<?= $row['vorname']; ?>" size="20" maxlength="30" readonly="true"/></td>
    <td><input name="str"   type="text" value="<?= $row['strasse']; ?>" size="30" maxlength="50" readonly="true"/></td>
    <td><input name="plz"   type="text" value="<?= $row['plz']; ?>" size="5" maxlength="10" readonly="true"/></td>
    <td><input name="ort"   type="text" value="<?= $row['ort']; ?>" size="20" maxlength="30" readonly="true"/></td>
    <td><input name="land"  type="text" value="<?= $row['land']; ?>" size="20" maxlength="30" readonly="true"/></td>
    <td><input name="email" type="text" value="<?= $row['email']; ?>" size="20" maxlength="30" readonly="true"/></td>
    <td><input name="rechn_id" type="text" value="<?= $row['rechnungs_id']; ?>" size="10" maxlength="10" readonly="true"/></td>
  </tr>
<?php
	}
?>
  <tr>
  <tr>
    <td><div align="right"><img src="../pics/pfeil.png" width="31" height="20" /></div></td>
	<td colspan="9"><input name="submit" type="submit" value="Loeschen" onClick="return DeleteCheck()"> <em><?php echo ''.mysql_num_rows($login).''; ?>x gefunden</em></td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><div align="center"><?php echo $_SESSION['successful']; ?></div></td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><div align="center"><input name="close" type="button" value="Fenster schließen" onClick="javascript:window.close()"></div></td>
  </tr>
</table>
 </form>
</body>
</html>
<?php
    /* Events! */
	unset($_SESSION['successful'], $_SESSION['send_page_nr']);
	
	if($_REQUEST['submit'] == 'Loeschen') del_kdn($_POST['auswahl']);
?>