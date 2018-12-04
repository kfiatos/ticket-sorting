<?php
require '../vendor/autoload.php';

use App\BoardingPass;
use App\Interfaces\TicketInterface;

$boardingPasses = [
    new BoardingPass(
        'Stockholm',
        'New York JFK',
        'seat 7B',
        'flight'
    ),
    new BoardingPass(
        'Barcelona',
        'Gerona Airport',
        'no seat assignment',
        'airport bus'
    ),
    new BoardingPass(
        'Gerona Airport',
        'Stockholm',
        'seat 3A',
        'flight'
    ),
    new BoardingPass(
        'Madrid',
        'Barcelona',
        'sit in seat 45B',
        'train'
    ),
];

$departureLocations = [];
$arrivalDestinations = [];


/** @var TicketInterface $boardingPass */
foreach($boardingPasses as $index => $boardingPass) {
    $departureLocation = $boardingPass->getDepartureLocation();
    if (empty($departureLocations[$departureLocation])) {
        $departureLocations[$departureLocation] = $boardingPass;
    }

    $arrivalLocation = $boardingPass->getArrivalLocation();
    if (empty($arrivalDestinations[$arrivalLocation])) {
        $arrivalDestinations[$arrivalLocation] = $boardingPass;
    }
}

$startingLocation = null;
foreach ($departureLocations as $location => $boardingPass) {
    if (!isset($arrivalDestinations[$location])) {
        $startingLocation =  $boardingPass;
    }
}

echo $startingLocation->getDepartureLocation() . PHP_EOL;
$count = 0;
for ($i = 0;$i<=count($departureLocations);$i++) {
    $arrivalLocationName = $departureLocations[$startingLocation->getDepartureLocation()]->getArrivalLocation();
    echo $arrivalLocationName . PHP_EOL;
    if (!isset($departureLocations[$arrivalLocationName])) {
        break;
    }
    $departureLocation = $departureLocations[$arrivalLocationName];
    echo $departureLocation->getDepartureLocation() . PHP_EOL;
}


var_dump('departures', $departureLocations);
var_dump('arrivals', $arrivalDestinations);die;