<?php
class logs
{
public $date;
public $today = date_default_timezone_set('Europe/Paris').date(DATE_RFC2822);

function addlog($errtxt)
  {
  $fp = fopen('log.txt','a+');
  echo $today;
  $retourligne=$errtxt."\r\n";
  fputs($fp,$retourligne);
  fclose($fp);
  }
}
$date = new logs();
$date -> addlog("test");


