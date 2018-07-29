<?
ob_start();
session_start();

?>

<meta name="viewport" content="width=device-width">
<?






$konto=$_GET["bank"];
$stul1=$_GET["stul"];
$stul2=$_GET["stul2"];

$o1="0";

$plik2 = fopen('stul1.txt','w');
fputs($plik2, $o1);
fclose($plik2);

$plik2 = fopen('stul2.txt','w');
fputs($plik2, $o1);
fclose($plik2);

$o2=$konto-$stul1;
$plik2 = fopen('konto2.txt','w');
fputs($plik2, $o2);
fclose($plik2);



$o6="";
$plik2 = fopen('r2.txt','w');
fputs($plik2, $o6);
fclose($plik2);


$nazwa1=$_GET["q1"];
$nazwa2=$_GET["q2"];
echo $nazwa1." vs ".$nazwa2."<br>";
?>
lose
<meta http-equiv="refresh" content="4; url=index2.php">