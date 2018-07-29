<?
$tekst=$_GET["q"];



$plik = fopen('stul2.txt','r');
$tekst2=fgets($plik, 10000);
fclose($plik);
if ($tekst2==$tekst){
}else{
$plik2 = fopen('stul2.txt','w');
fputs($plik2, $tekst);
fclose($plik2);
}

?>