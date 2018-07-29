<?
//error_reporting(0);


$plik = fopen('talia.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

$talia=explode(",", $tekst);
$karta=array();
$ww=2;
$karta=array_pop($talia);
if (empty($karta)){
$karta=array_pop($talia);
}

$ww=1;

$tekst=implode(",", $talia);
$plik2 = fopen('talia.txt','w');
fputs($plik2, $tekst);
fclose($plik2);
//var_dump($talia);

//var_dump($talia);
header('Content-Type: application/json');
echo $karta;

?>