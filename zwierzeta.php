<?php

include_once 'vendor/autoload.php';

use Szurat\Zoo\Animals\Lew;
use Szurat\Zoo\Animals\Dzik;
use Szurat\Zoo\Animals\Surykatka;
use Szurat\Zoo\Animals\Bieganie;



$Simba = new Lew('Simba');
$Simba->say();

$Pumba = new Dzik('Pumba');
$Pumba->say();

$Timon = new Surykatka('Timon');
$Timon->say();


$biegac = new Bieganie($Pumba, $Simba, $Timon);
echo('Idziemy biegac  ');
$biegac->bieganie();


