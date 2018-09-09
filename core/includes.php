<?php

/*
 * REQUIRE SETTINGS
 */
require $_SERVER["DOCUMENT_ROOT"] . '/core/settings.php';


/*
 * REQUIRE STORY ELEMENTS CLASSES
 */
// Require weather
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/weather/weather.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/weather/mist.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/weather/rain.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/weather/sun.class.php';

// Require terrain
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/terrain/terrain.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/terrain/forest.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/terrain/mountain.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/environment/terrain/plain.class.php';

// Require garment
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/garment/garment.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/garment/lowerGarment.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/garment/shield.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/garment/upperGarment.class.php';

// Require weapons
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/weapons/weapon.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/weapons/primaryWeapon.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/weapons/secondaryWeapon.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/equipment/weapons/tertiaryWeapon.class.php';

// Require soliders
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/solider.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/professionalSolider.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/amateurSolider.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/doctor.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/deliveryBoy.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/fidai.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/rambo.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/solider/general.class.php';

// Require army
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/helpers/armyHelpersFunctions.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/armyEquipment.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/armyFeatures.class.php';
require $_SERVER["DOCUMENT_ROOT"] . '/resources/army/army.class.php';

?>