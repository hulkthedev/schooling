<?php 
session_start(); 

/* Adminrechte! Weiterleitung an 'menue.php' */
if($_SESSION['admin'] == "true") header("location:data/menue.php");
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Praka '08 Projekt</title>
 <meta name="DC.Date"        content="2008-02-22T21:09:00+01:00">
 <meta name="description"    content="Praka '08 Projekt">
 <meta name="keywords"       content="Praka, praka">
 <meta name="author"         content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Publisher"   content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Language"    content="de">
</head>

<body background="pics/bg.gif" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
 <form action="data/login.php" method="post">
  <table width="20%" border="0" align="center">
    <tr>
      <td colspan="2"><img src="pics/musterfirma.jpg" alt="Logo"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="22%">Benutzername</td>
      <td width="41%"><input name="name" type="text" size="30" maxlength="30"></td>
    </tr>
    <tr>
      <td>Passwort</td>
      <td><input name="pass" type="password" size="30" maxlength="30"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input name="senden" type="submit" value="Anmelden"></td>
    </tr>
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><?php echo $_SESSION['error']; ?></td>
    </tr>
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="2"><font size="2"><div align="center"><strong>Projekt Praka '08</strong></div></font></td>
    </tr>
	<tr>
      <td colspan="2"><font size="2"><div align="center"><em>© 2008, Alexej Beirith</em></div></font></td>
    </tr>
  </table>
 </form>
 </body>
</html>