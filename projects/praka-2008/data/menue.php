<?php 
session_start(); 

/* Adminstatus? */
if($_SESSION['admin'] =! "true") header("location:no_admin.html");
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Praka '08 Projekt</title>
 <meta name="DC.Date"        content="2008-02-22T21:07:00+01:00">
 <meta name="description"    content="Praka '08 Projekt">
 <meta name="keywords"       content="Praka, praka">
 <meta name="author"         content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Publisher"   content="Alexej Beirith, its.my.life@web.de">
 <meta name="DC.Language"    content="de">
</head> 
 <body background="../pics/bg.gif" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
 <table width="65%" border="0" align="center">
   <form action="" method="post">
    <tr>
      <td colspan="2"><div align="center"><img src="../pics/musterfirma.jpg" alt="Logo"></div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
      <td width="20%">&nbsp;</td>
	  <td width="80%"><strong><u>Geschaeftsuebersicht</u></strong></td>
    </tr>
    <tr>
      <td width="20%"><font size="4"><a target="popup1" onClick="window.open('', 'popup1', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no')" href="create_acc.php"><button>Benutzerverwaltung</button></a></font></td>
      <td width="80%">&nbsp;</td>
    </tr>
    <tr>
      <td width="20%"><font size="4"><a target="popup2" onClick="window.open('', 'popup2', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no')" href="create_art.php"><button>Artikelverwaltung</button></a></font></td>
      <td width="80%">&nbsp;</td>
    </tr>
    <tr>
      <td width="20%"><font size="4"><a target="popup3" onClick="window.open('', 'popup3', 'scrollbars=yes, toolbar=no, status=no, resizable=no, menubar=no, location=no, directories=no')" href="show_kdn.php"><button>Kundenverwaltung</button></a></font></td>
      <td width="80%">&nbsp;</td>
    </tr>
	<tr>
	  <td width="20%"><a href="logout.php"><button>Logout</button></td>
	  <td width="80%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
   </form>
  </table>
 </body>
</html>