<?

$plik = fopen('stul2.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
echo $tekst4;
?>