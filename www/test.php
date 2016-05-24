<?php
date_default_timezone_set(«Europe/Oslo»);
$date=new DateTime('now');
echo $ts->format(DATE_RFC2822)."\n<br>";
$ts->modify("+2 days");
echo $ts->format(DATE_RFC2822)."\n<br>";
$ts->modify(«fifth month»);
echo $ts->format(DATE_RFC2822)."\n<br>";
$ts->modify(«Friday +3 weeks»);
echo $ts->format(DATE_RFC2822)."\n<br>";
$ts->modify(«next friday»);
echo $ts->format(DATE_RFC2822)."\n<br>";
?>