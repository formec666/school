<?php
include "zahlavi.html";
$prom1=0;
$vysledek=1;
$zaklad=$_GET['zaklad'];
$mocnina=$_GET['mocnina'];
echo("Zadano: ");
echo($zaklad."^");
echo($mocnina);
while ($prom1<$mocnina) 
{
$prom1++;
$vysledek*=$zaklad;
 }
 if ($mocnina>0) {
     $vysledek=1/$vysledek;
 }
 elseif($mocnina==0){
    $vysledek=1;
 }
 echo("<h1>Vysledek je</h1>".$vysledek);
include "zapati.html";
?>

