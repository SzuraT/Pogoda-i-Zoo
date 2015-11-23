<?php

include_once 'vendor/autoload.php';

use Szurat\Company\People\worker;
use Szurat\Company\People\Boss;

$bob = new Worker('Bob');
$boss = new Boss($bob);

$boss->work();

