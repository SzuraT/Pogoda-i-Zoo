<?php

include_once 'vendor/autoload.php';
use Szurat\Component\Weather\Api\OpenWeatherClient;



$browser = new Buzz\Browser();
echo "Podaj nazwe miasta: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);

$city = new OpenWeatherClient($line, $browser);
//$timer = new Timer();



function cgs()
{
$czas = explode(" ", microtime());
$a = (double)$czas[0];
$b = (double)$czas[1];
return $a + $b;
}
$start = cgs();
?>

<?php
$koniec = cgs();
$ile = $koniec - $start;
echo "Wykonano w " . substr($ile, 0, 5) . " sek."; 


?>