<?php
$url = $_SERVER['REQUEST_URI'];

$S1TMP = explode('s1=', $url, 2)[1];
$S1 = explode('&s2=', $S1TMP, 2)[0];

$S2TMP = explode('s2=', $url, 2)[1];
$S2 = explode('&p1=', $S2TMP, 2)[0];

$exchange1 = (strpos($S1,'MA')!==false || strpos($S1,'V')!==false || strpos($S2,'MA')!==false || strpos($S2,'V')!==false) ? '%3ANYSE' : '%3ANASDAQ';
$exchange2 = (strpos($S1,'MA')!==false || strpos($S1,'V')!==false || strpos($S2,'MA')!==false || strpos($S2,'V')!==false) ? '%3ANYSE' : '%3ANASDAQ';

$S1 .= $exchange1;
$S2 .= $exchange2;

$api_1 = str_replace('$', '', file_get_contents('https://www.google.com/finance/quote/' . $S1 . ''));
$api_2 = str_replace('$', '', file_get_contents('https://www.google.com/finance/quote/' . $S2 . ''));

$parse_1 = explode('<div class="YMlKec fxKbKc">', $api_1, 2)[1];
$parse_2 = explode('<div class="YMlKec fxKbKc">', $api_2, 2)[1];

$S1PRICE = explode('</div>', $parse_1, 2)[0];
$S2PRICE = explode('</div>', $parse_2, 2)[0];

$P1TMP = explode('p1=', $url, 2)[1];
$P1 = explode('&p2=', $P1TMP, 2)[0];
$P2 = explode('p2=', $url, 2)[1];

$S1SUM = $S1PRICE*$P1;
$S2SUM = $S2PRICE*$P2;

$CASH = $S1SUM-$S2SUM;
?>