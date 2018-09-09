<?php

// Create terrain 
$gameTerrain = null;

$terrainTypes = TERRAIN_TYPES;
$terrainTypesNmb = count($terrainTypes);
$randNmb = rand(0, $terrainTypesNmb-1);


if( $terrainTypes[$randNmb] == 'forest' ) {

    $gameTerrain = new Forest;

} else if( $terrainTypes[$randNmb] == 'mountain' ) {

    $gameTerrain = new Mountain;

} else if( $terrainTypes[$randNmb] == 'plain' ) {

    $gameTerrain = new Plain;

} else {

    die('error loading the terrain');

}


// Create weather
$gameWeather = null;

$weatherTypes = WEATHER_TYPES;
$weatherTypesNmb = count($weatherTypes);
$randNmb = rand(0, $weatherTypesNmb-1);


if( $weatherTypes[$randNmb] == 'mist' ) {

    $gameWeather = new Mist;

} else if( $weatherTypes[$randNmb] == 'rain' ) {

    $gameWeather = new Rain;

} else if( $weatherTypes[$randNmb] == 'sun' ) {

    $gameWeather = new Sun;

} else {

    die('error loading the weather');

}

// Create armies
$armyOne = null;
$armyTwo = null;

if( !isset($_GET['army1']) && !isset($_GET['army2']) ) {

    die("You can't have a war without the armies!");

} else {

    if( is_numeric($_GET['army1']) && is_numeric($_GET['army1']) ) {

        $armyOne = new Army(round($_GET['army1']), $gameTerrain, $gameWeather);
        $armyTwo = new Army(round($_GET['army2']), $gameTerrain, $gameWeather);

    } else {

        die("Armies need soldiers to fight! Come back when you have the man power for this fight!");

    }

}


