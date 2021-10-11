<?php
session_start();

function messages($nr)
{
	unset($_SESSION['successful'], $_SESSION['error']);
	
						/* Administrator */
	if($nr == 1)		$_SESSION['successful'] = "<font color='#FF0000'><em>Administrator kann nicht geloescht werden!</em></font>";
						/* Datenbanken. Zugriff & Selection */
	elseif($nr == 2)	return "<font color='#FF0000'><em>Datenbankverbindung fehlgeschlagen</em></font>";
	elseif($nr == 3)	return "<font color='#FF0000'><em>Auswahl der Datenbank fehlgeschlagen!</em></font>";
						/* Benutzer loeschen */
	elseif($nr == 4)	$_SESSION['successful'] = "<font color='#FF0000'><em>Benutzer konnte nicht geloescht werden!</em></font>";
	elseif($nr == 5)	$_SESSION['successful'] = "<font color='#00FF00'><strong>Benutzer erfolgreich geloescht!</strong></font>";
	elseif($nr == 6)	$_SESSION['successful'] = "<font color='#FF0000'><em>Kein Benutzer ausgewaehlt!</em></font>";
						/* Benutzer erstellen */
	elseif($nr == 7)	$_SESSION['successful'] = "<font color='#FF0000'><em>Benutzer konnte nicht erstellt werden!</em></font>";
	elseif($nr == 8)	$_SESSION['successful'] = "<font color='#00FF00'><strong>Benutzer erfolgreich erstellt!</strong></font>";
	elseif($nr == 9)	$_SESSION['successful'] = "<font color='#FF0000'><em>Zugangsdaten zu unsicher!</em></font>";
						/* Einloggen */
	elseif($nr == 10)	$_SESSION['error'] = "<font color='#FF0000'><em>Falsche Zugangsdaten!</em></font>";
						/* Artikel loeschen */
	elseif($nr == 11)	$_SESSION['successful'] = "<font color='#FF0000'><em>Artikel konnte nicht geloescht werden!</em></font>";
	elseif($nr == 12)	$_SESSION['successful'] = "<font color='#00FF00'><strong>Artikel erfolgreich geloescht!</strong></font>";
	elseif($nr == 13)	$_SESSION['successful'] = "<font color='#FF0000'><em>Kein Artikel ausgewaehlt!</em></font>";	
	elseif($nr == 17)	$_SESSION['successful'] = "<font color='#00FF00'><strong>Alle Artikel erfolgreich geloescht!</strong></font>";
						/* Artikel erstellen */
	elseif($nr == 14)	$_SESSION['successful'] = "<font color='#FF0000'><em>Artikel konnte nicht erstellt werden!</em></font>";
	elseif($nr == 15)	$_SESSION['successful'] = "<font color='#FF0000'><em>Artikel konnte nicht erstellt werden!<br>Bitte f&uuml;llen Sie alle Felder aus...</em></font>";
	elseif($nr == 18)	$_SESSION['successful'] = "<font color='#FF0000'><em>Artikel konnte nicht veraendert werden!<br>Bitte f&uuml;llen Sie alle Felder aus...</em></font>";
	elseif($nr == 19)	$_SESSION['successful'] = "<font color='#FF0000'><em>Artikel konnte nicht veraendert werden!</em></font>";
	elseif($nr == 16)	$_SESSION['successful'] = "<font color='#00FF00'><strong>Artikel erfolgreich erstellt!</strong></font>";
	elseif($nr == 20)	$_SESSION['successful'] = "<font color='#00FF00'><strong>Artikel erfolgreich veraendert!</strong></font>";
						/* Kunden loeschen */
	elseif($nr == 21)	$_SESSION['successful'] = "<font color='#FF0000'><em>Kunde konnte nicht geloescht werden!</em></font>";
	elseif($nr == 22)	$_SESSION['successful'] = "<font color='#00FF00'><strong>Kunde erfolgreich geloescht!</strong></font>";
	elseif($nr == 23)	$_SESSION['successful'] = "<font color='#FF0000'><em>Keinen Kunden ausgewaehlt!</em></font>";	
						/* Unbekannter Fehler */
	else				$_SESSION['error'] = "<font color='#FF0000'><em>Unbekannter Fehler!</em></font>";
}
?>