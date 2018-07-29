<?
$r=$_GET["go"];
if($r==1){
$plik2 = fopen('r.txt','w');
fputs($plik2, $r);
fclose($plik2);
}

if($r==2){
$plik2 = fopen('r2.txt','w');
fputs($plik2, $r);
fclose($plik2);
}
if($r==3){
$plik = fopen('r2.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);
echo $tekst;
}
if($r==4){
$plik = fopen('r.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);
echo $tekst;
}
?>