<?php
/*
<meta name="DC.Date"        content="2008-02-24T15:00:00+01:00">
<meta name="description"    content="Praka '08 Projekt">
<meta name="keywords"       content="Praka, praka">
<meta name="author"         content="Alexej Beirith, its.my.life@web.de">
<meta name="DC.Publisher"   content="Alexej Beirith, its.my.life@web.de">
<meta name="DC.Language"    content="de">
*/

session_start();
$_SESSION['admin'] = "false";
unset($_SESSION['error']);

require_once('.log/user.inc.php');
require_once('.log/functions.php');

$login = @mysql_connect($host, $user, $pass) or die("".messages(2)."".mysql_error());
$login = @mysql_select_db($base) or die("".messages(3));

$sql = "SELECT name, pass FROM ".$log_base."";
$login = @mysql_query($sql) or die("<font color='#FF0000'><em>".mysql_error()."</em></font>");

/* Vergleich der Zugangsdaten */
while($row = @mysql_fetch_array($login))
{
	/* Username richtig? */
	if($_POST['name'] == $row['name'])
	{
		/* Userpasswort richtig? */
	 	if(md5($_POST['pass']) == $row['pass'])
		{
			$_SESSION['admin'] = "true";
			header("location:menue.php");
			break;
		}
	}
	/* Falsche Zugangsdaten! */
	else
	{
		messages(10);
		header("location:../index.php");
	}	
}

@mysql_close($login); 
?>