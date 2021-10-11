<?php
/* Library v1.0
   Get Date
   02. Mai 2008
   by ChAoZ
*/

/* ---------------------------------------------------- */
$day_eng = date("D");

if($day_eng == "Mon")     $day_ger = "Montag";
elseif($day_eng == "Tue") $day_ger = "Dienstag";
elseif($day_eng == "Wed") $day_ger = "Mittwoch";
elseif($day_eng == "Thu") $day_ger = "Donnerstag";
elseif($day_eng == "Fri") $day_ger = "Freitag";
elseif($day_eng == "Sat") $day_ger = "Samstag";
elseif($day_eng == "Sun") $day_ger = "Sonntag";
else                      $day_ger = "";
/* ---------------------------------------------------- */
$mouth_eng = date("n");

if($mouth_eng == "1")      $mouth_ger = "Januar";
elseif($mouth_eng == "2")  $mouth_ger = "Februar";
elseif($mouth_eng == "3")  $mouth_ger = "März";
elseif($mouth_eng == "4")  $mouth_ger = "April";
elseif($mouth_eng == "5")  $mouth_ger = "Mai";
elseif($mouth_eng == "6")  $mouth_ger = "Juni";
elseif($mouth_eng == "7")  $mouth_ger = "Juli";
elseif($mouth_eng == "8")  $mouth_ger = "August";
elseif($mouth_eng == "9")  $mouth_ger = "September";
elseif($mouth_eng == "10") $mouth_ger = "Oktober ";
elseif($mouth_eng == "11") $mouth_ger = "November";
elseif($mouth_eng == "12") $mouth_ger = "Dezember";
else                       $mouth_ger = "";
/* ---------------------------------------------------- */
$dd   = date("j. ");
$yyyy = date(" Y");

$date_now = $day_ger.", ".$dd.$mouth_ger.$yyyy;
?>