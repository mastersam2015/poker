<?
$tekst=$_GET["q"];
$plik2 = fopen('stul1.txt','w');
fputs($plik2, $tekst);
fclose($plik2);


?>