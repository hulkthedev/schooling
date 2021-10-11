<?php 
session_start(); 

/* Adminstatus? */
if($_SESSION['admin'] =! "true") header("location:no_admin.html"); 

require_once('.log/user.inc.php');
require_once('.log/functions.php');
unset($id, $bezeichnung, $lagerbestand, $einkaufspreis, $verkaufspreis, $versand);

$login = @mysql_connect($host, $user, $pass) or die("".messages(2).":".mysql_error());
$login = @mysql_select_db($base) or die("".messages(3));

$sql = "SELECT id, bezeichnung, lagerbestand FROM artikel ORDER BY id";
$login = @mysql_query($sql) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");

/* Funktion 'Artikel erstellen' */
function new_art($id, $bezeichnung, $lagerbestand, $einkaufspreis, $verkaufspreis, $versand)
{
	/* Keine Daten eingegeben! */
	if($id == "" || $bezeichnung == "" || $lagerbestand == "" || $einkaufspreis == "" || $verkaufspreis == "" || $versand == "")
	{
		messages(15);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	else
	{
		/* Auf Kommas prüfen */
		$einkaufspreis = ereg_replace(',', '.', $einkaufspreis);
		$verkaufspreis = ereg_replace(',', '.', $verkaufspreis);
		$versand = ereg_replace(',', '.', $versand);
		
		$statement = "INSERT INTO artikel (id, bezeichnung, lagerbestand, einkaufspreis, verkaufspreis, versandpreis) VALUES ('$id', '$bezeichnung', '$lagerbestand', '$einkaufspreis', '$verkaufspreis', '$versand')";
		$result = @mysql_query($statement) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");
	
		if(@mysql_affected_rows() >= 1)	messages(16);
		else messages(14);
		
		?><meta http-equiv="refresh" content="0;"><?php	
	}
}

/* Funktion 'Artikel loeschen' */
function del_art($id)
{
	/* Nichts loeschen? */
	if(!isset($id))
	{
		messages(13);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	/* Loeschen! */
	else
	{
		$statement = "DELETE FROM artikel WHERE id = '$id'";
		$result = @mysql_query($statement) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>"); 
	
		if(mysql_affected_rows()) messages(12);
		else messages(11);
		
		?><meta http-equiv="refresh" content="0;"><?php
	}
}

/* Funktion 'Alle Artikel loeschen' */
function del_all()
{
	$statement = "DELETE FROM artikel";
	$result = @mysql_query($statement) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>"); 
	
	if(mysql_affected_rows()) messages(17);
	else messages(11);
		
	?><meta http-equiv="refresh" content="0;"><?php
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
   var chk = window.confirm("Wollen Sie den/die Artikel wirklich loeschen?");
   return (chk); }
   
  function show () {
   window.open('show_art.php', 'popup', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no'); } 
</script>  

 <body onLoad="window.resizeTo(700, 500)" background="../pics/bg.gif" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
 <form action="create_art.php" method="post">
  <table width="49%" border="0" align="center">
    <tr>
      <td colspan="6"><div align="center"><img src="../pics/logo_art.png" alt="Logo"></div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="6"><strong><u>Vorhandene Artilel:</u></strong></td>
    </tr>
	<tr>
      <td colspan="6">&nbsp;</td>
    </tr>
	<tr>
      <td width="8%"><div align="center"><u>Auswahl</u></div></td>
      <td width="3%"><div align="left"><u>ID</u></div></td>
	  <td colspan="2"><div align="left"><u>Bezeichnung</u></div></td>
	  <td width="14%"><div align="center"><u>Lagerbestand</u></div></td>
	  <td width="20%"><div align="center"><u>Aktion</u></div></td>
	</tr>
	<tr>
      <td colspan="6">&nbsp;</td>
    </tr>
<?php  
  /* Benutzer werden aufgelistet */
  while($row = @mysql_fetch_array($login))
  {
	$next_id = $row['id'];
	$art_bez = "bez_".$row['id'];
	$art_id = "id_".$row['id'];
	$art_anz = "anz_".$row['id'];
	$show_art = "Ansehen #".$row['id'];
    ?>
    <tr>
      <td><div align="center"><input name="auswahl" type="radio" value="<?= $row['id']; ?>"/></div></td>
      <td><input name="<?= $art_id; ?>" type="text" value="<?= $row['id']; ?>" size="2" maxlength="2" readonly="true"/></td>
      <td colspan="2"><input name="<?= $art_bez; ?>" type="text" value="<?= $row['bezeichnung']; ?>" size="50" maxlength="70" readonly="true"/></td>
	  <td><div align="center">
	    <input name="<?= $art_id; ?>" type="text" value="<?= $row['lagerbestand']; ?>" size="10" maxlength="3" readonly="true"/>
	    </div></td>
      <td><div align="left"><input name="submit" type="submit" value="<?= $show_art; ?>"/></div></td>
    </tr>
    <?php	
  }
  $next_id += 1;
?>	
	<tr>
      <td><div align="right"><img src="../pics/pfeil.png" width="31" height="20" /></div></td>
	  <td colspan="5"><input name="submit" type="submit" value="Loeschen" onClick="return DeleteCheck()"> <input name="submit" type="submit" value="Alles Loeschen" onClick="return DeleteCheck()"> <em><?php echo ''.mysql_num_rows($login).''; ?>x gefunden</em></td>
    </tr>
	<tr>
      <td colspan="6">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="6"><hr color="#FFFFFF" width="100%" size="2"></td>
    </tr>
	<tr>
      <td colspan="6">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="6"><strong><u>Artikel erstellen:</u></strong></td>
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
      <td><input name="new_id" type="text" value="<?= $next_id; ?>" size="2" maxlength="2" readonly="true"/></td>
	  <td colspan="2"><input name="new_bez" type="text" size="50" maxlength="70"/></td>
	  <td><div align="center"><input name="new_anz" type="text" size="10" maxlength="10"/></div></td>
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
	  <td><input name="new_ein" type="text" size="10" maxlength="7"/> <strong>Euro</strong> </td>
	  <td><input name="new_aus" type="text" size="10" maxlength="7"/> <strong>Euro</strong></td>
	  <td><div align="center"><input name="new_ver" type="text" size="10" maxlength="7"/></div></td>
	  <td><strong>Euro</strong></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
	  <td colspan="6"><input name="submit" type="submit" value="Erstellen"/> <input name="reset" type="reset" value="Eingabe loeschen"/></td>
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
	unset($_SESSION['successful'], $_SESSION['send_page_nr']);
	
	if($_REQUEST['submit'] == 'Loeschen') del_art($_POST['auswahl']);
	if($_REQUEST['submit'] == 'Alles Loeschen') del_all();
	if($_REQUEST['submit'] == 'Erstellen') new_art($_POST['new_id'], $_POST['new_bez'], $_POST['new_anz'], $_POST['new_ein'], $_POST['new_aus'], $_POST['new_ver']);
	
	for($i = 1; $i < $next_id; $i++)
	{
		if($_REQUEST['submit'] == 'Ansehen #'.$i)
		{
			$_SESSION['send_page_nr'] = $i;
			echo "<script language='JavaScript'> show(); </script>";
		}
	}
?>