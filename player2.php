<?
$q1=$_GET["q1"];
$q2=$_GET["q2"];
$q3=$_GET["q3"];
$q4=$_GET["q4"];
$q5=$_GET["q5"];


$tekst=$q1.",".$q2.",".$q3.",".$q4.",".$q5;

$plik2 = fopen('player2.txt','w');
fputs($plik2, $tekst);
fclose($plik2);


?>