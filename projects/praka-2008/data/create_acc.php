<?php 
session_start(); 

/* Adminstatus? */
if($_SESSION['admin'] =! "true") header("location:no_admin.html"); 

require_once('.log/user.inc.php');
require_once('.log/functions.php');
unset($id, $name, $new_id, $new_name, $new_pass);

$login = @mysql_connect($host, $user, $pass) or die("".messages(2).":".mysql_error());
$login = @mysql_select_db($base) or die("".messages(3));

$sql = "SELECT id, name, pass FROM ".$log_base." ORDER BY id";
$login = @mysql_query($sql) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");

/* Funktion 'Neuer Benutzer' */
function new_usr($new_id, $new_name, $new_pass)
{
	/* Keine Daten eingegeben! */
	if($new_name == "Name" && $new_pass == "Passwort")
	{
		messages(9);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	/* Keine Werte eingegeben */	
	elseif($new_name == "" || $new_pass == "")
	{
		messages(9);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	/* Erstellen */
	else
	{
		$new_pass = md5($new_pass);
		
		$statement = "INSERT INTO gate (id, name, pass) VALUES ('$new_id', '$new_name', '$new_pass')";
		$result = @mysql_query($statement) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");
	
		if(@mysql_affected_rows() >= 1)	messages(8);
		else messages(7);
		
		?><meta http-equiv="refresh" content="0;"><?php	
	}
}

/* Funktion 'Benutzer Löschen' */
function del_usr($id, $name)
{
	/* Admin loeschen? */
	if(isset($name) && $id == 1) 
	{
		messages(1);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	/* Nichts loeschen? */
	elseif(!isset($id))
	{
		messages(6);
		?><meta http-equiv="refresh" content="0;"><?php
	}
	/* Loeschen! */
	else
	{
		$statement = "DELETE FROM gate WHERE id = '$id'";
		$result = @mysql_query($statement) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>"); 
	
		if(mysql_affected_rows()) messages(5);
		else messages(4);
		
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
 <!-- Abfrage: Benutzer loeschen? -->
 <script type="text/javascript">
  function DeleteCheck () {
   var chk = window.confirm("Wollen Sie den Benutzer wirklich loeschen?");
   return (chk); }
 </script>

 <body onLoad="window.resizeTo(400, 650)" background="../pics/bg.gif" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
 <form action="create_acc.php" method="post">
  <table width="20%" border="0" align="center">
    <tr>
      <td colspan="3"><img src="../pics/logo_usr.png" alt="Logo"></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><strong><u>Autorisierte Benutzer: </u></strong></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><u>Auswahl</u></div></td>
      <td><div align="left"><u>ID</u></div></td>
	  <td><div align="left"><u>Name</u></div></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
<?php  
  $next_id = 0;  
  $differenz = 0;;
  $round_count = 0;
  $only_one = "false";
  
  /* Benutzer werden aufgelistet */
  while($row = @mysql_fetch_array($login))
  {
  	if($row['name'] == "Admin") $boss = $row['name'];
	$round_count++;
	
	/* Auf Datensatzluecken pruefen */
	if($row['id'] - $next_id != 1)
	{
		$summe = $round_count+$differenz;
		if($only_one == "false") $only_one = $summe;
		$differenz++;
	}
	
	$next_id = $row['id'];
  	$del_name = "del_name".$row['id'];
	$del_id = "del_id".$row['id'];
    ?>
    <tr>
      <td><div align="center"><input name="auswahl" type="radio" value="<?= $row['id']; ?>"/></div></td>
      <td><input name="<?= $del_id; ?>" type="text" value="<?= $row['id']; ?>" size="2" maxlength="2" readonly="true"/></td>
      <td><input name="<?= $del_name; ?>" type="text" value="<?= $row['name']; ?>" size="30" maxlength="30" readonly="true"/></td>
    </tr>
    <?php	
  }
  if($only_one != "false") $next_id = $only_one;
  else $next_id += 1;
?>	
    <tr>
      <td><div align="right"><img src="../pics/pfeil.png" width="31" height="20" /></div></td>
	  <td colspan="2"><input name="submit" type="submit" value="Loeschen" onClick="return DeleteCheck()"> <em><?php echo ''.mysql_num_rows($login).''; ?>x gefunden</em></td>
    </tr>
	<tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><hr color="#FFFFFF" width="100%" size="2"></td>
    </tr>
	<tr>
      <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="3"><strong><u>Benutzer anlegen:</u></strong></td>
    </tr>
	<tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
	<td><input name="new_id" type="text" value="<?= $next_id; ?>" size="2" maxlength="2" readonly="true"/></td>
	<td><input name="new_name" type="text" value="Name" size="30" maxlength="30"/></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
	<td><input name="new_pass" type="password" value="Passwort" size="30" maxlength="30"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
	  <td colspan="3"><input name="submit" type="submit" value="Anlegen"/></td>
    </tr>
	<tr>
      <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="3"><div align="center"><?php echo $_SESSION['successful']; ?></div></td>
    </tr>
	<tr>
      <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="3"><div align="center"><input name="close" type="button" value="Fenster schließen" onClick="javascript:window.close()"></div></td>
	</tr>
  </table>
 </form>
 </body>
</html>
<?php
    /* Events! */
	unset($_SESSION['successful']);
	
	if($_REQUEST['submit'] == 'Anlegen') new_usr($_POST['new_id'], $_POST['new_name'], $_POST['new_pass']);
	if($_REQUEST['submit'] == 'Loeschen') del_usr($_POST['auswahl'], $boss);
?>