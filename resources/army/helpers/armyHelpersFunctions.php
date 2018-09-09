<?php

// Calculate total soliders attack
function getTotalSoliderAttack($soliders) {

    $totalAttack = 0;

    $solidersArr = $soliders->getSoliders();
    $soliderTypes = $soliders->getSoliderTypes();

    foreach( $soliderTypes as $soliderTypeName => $soliderTypeObjct ) {

        $totalAttack += $solidersArr[$soliderTypeName] * $soliderTypeObjct->getAttack();

    }

    return $totalAttack;

}

function getTotalEquipmentAttack($solidersNum, $equipment) {

    $totalAttack = 0;

    $weaponsArr = array( 
        'primary weapons'   =>  $equipment->getPrimaryWeapons(), 
        'secondary weapons' =>  $equipment->getSecondaryWeapons(), 
        'tertiary weapons'  =>  $equipment->getTertiaryWeapons(), 
    );
    

    foreach($weaponsArr as $weapons ) {

        foreach( $weapons as $weapon ) {

            $totalAttack += $weapon * $solidersNum; 

        }

    }

    return $totalAttack;

}


function getTotalSoliderHP($soliders) {

    $totalHP = 0;

    $solidersArr = $soliders->getSoliders();
    $soliderTypes = $soliders->getSoliderTypes();

    foreach( $soliderTypes as $soliderTypeName => $soliderTypeObjct ) {

        $totalHP += $solidersArr[$soliderTypeName] * $soliderTypeObjct->getHP();

    }

    return $totalHP;

}

function getTotalEquipmentHP($solidersNum, $equipment) {

    $totalHP = 0;

    $garmentsArr = array(
        'upper garments'    =>  $equipment->getUpperGarments(),
        'lower garments'    =>  $equipment->getLowerGarments(),
        'shields'           =>  $equipment->getShields(),
    );

    foreach($garmentsArr as $garments ) {

        foreach( $garments as $garment ) {

            $totalHP += $garment*$solidersNum; 

        }

    }

    return $totalHP;

}


function getTotalWeaponsDefectIndex($gameTerrain, $gameWeather, $primaryWeapons, $secondaryWeapons, $tertiaryWeapons) {

    $totalDefect = 0;

    $terrainDefects = $gameTerrain->getDefects();
    $weatherDefects = $gameWeather->getDefects();

    foreach( $primaryWeapons as $weaponName => $weaponAttack  ) {

        if( array_key_exists($weaponName, $terrainDefects) ) {

            $totalDefect += $terrainDefects[$weaponName];

        }
        if( array_key_exists($weaponName, $weatherDefects) ) {

            $totalDefect += $weatherDefects[$weaponName];

        }

    }
    foreach( $secondaryWeapons as $weaponName => $weaponAttack ) {

        if( array_key_exists($weaponName, $terrainDefects) ) {

            $totalDefect += $terrainDefects[$weaponName];

        }
        if( array_key_exists($weaponName, $weatherDefects) ) {

            $totalDefect += $weatherDefects[$weaponName];

        }

    }
    foreach( $tertiaryWeapons as $weaponName => $weaponAttack ) {

        if( array_key_exists($weaponName, $terrainDefects) ) {

            $totalDefect += $terrainDefects[$weaponName];

        }
        if( array_key_exists($weaponName, $weatherDefects) ) {

            $totalDefect += $weatherDefects[$weaponName];

        }

    }

    return $totalDefect;

}

function getTotalGarmentsDefectIndex($gameTerrain, $gameWeather, $upperGarments, $lowerGarments, $shields) {

    $totalDefect = 0;

    $terrainDefects = $gameTerrain->getDefects();
    $weatherDefects = $gameWeather->getDefects();

    foreach( $upperGarments as $garmentName => $garmentValue ) {

        if( array_key_exists($garmentName, $terrainDefects) ) {

            $totalDefect += $terrainDefects[$garmentName];

        }
        if( array_key_exists($garmentName, $weatherDefects) ) {

            $totalDefect += $weatherDefects[$garmentName];

        }

    }
    foreach( $lowerGarments as $garmentName => $garmentValue ) {

        if( array_key_exists($garmentName, $terrainDefects) ) {

            $totalDefect += $terrainDefects[$garmentName];

        }
        if( array_key_exists($garmentName, $weatherDefects) ) {

            $totalDefect += $weatherDefects[$garmentName];

        }

    }
    foreach( $shields as $garmentName => $garmentValue ) {

        if( array_key_exists($garmentName, $terrainDefects) ) {

            $totalDefect += $terrainDefects[$garmentName];

        }
        if( array_key_exists($garmentName, $weatherDefects) ) {

            $totalDefect += $weatherDefects[$garmentName];

        }

    }

    return $totalDefect;

}

function getTotalWeaponsBenefitIndex($gameTerrain, $gameWeather, $primaryWeapons, $secondaryWeapons, $tertiaryWeapons) {

    $totalBenefits = 0;

    $terrainBenefits = $gameTerrain->getBenefits();
    $weatherBenefits = $gameWeather->getBenefits();

    foreach( $primaryWeapons as $weaponName => $weaponAttack  ) {

        if( array_key_exists($weaponName, $terrainBenefits) ) {

            $totalBenefits += $terrainBenefits[$weaponName];

        }
        if( array_key_exists($weaponName, $weatherBenefits) ) {

            $totalBenefits += $weatherBenefits[$weaponName];

        }

    }
    foreach( $secondaryWeapons as $weaponName => $weaponAttack ) {

        if( array_key_exists($weaponName, $terrainBenefits) ) {

            $totalBenefits += $terrainBenefits[$weaponName];

        }
        if( array_key_exists($weaponName, $weatherBenefits) ) {

            $totalBenefits += $weatherBenefits[$weaponName];

        }

    }
    foreach( $tertiaryWeapons as $weaponName => $weaponAttack ) {

        if( array_key_exists($weaponName, $terrainBenefits) ) {

            $totalBenefits += $terrainBenefits[$weaponName];

        }
        if( array_key_exists($weaponName, $weatherBenefits) ) {

            $totalBenefits += $weatherBenefits[$weaponName];

        }

    }

    return $totalBenefits;

}

function getTotalGarmentsBenefitIndex($gameTerrain, $gameWeather, $upperGarments, $lowerGarments, $shields) {

    $totalBenefit = 0;

    $terrainBenefits = $gameTerrain->getBenefits();
    $weatherBenefits = $gameWeather->getBenefits();

    foreach( $upperGarments as $garmentName => $garmentValue ) {

        if( array_key_exists($garmentName, $terrainBenefits) ) {

            $totalBenefit += $terrainBenefits[$garmentName];

        }
        if( array_key_exists($garmentName, $weatherBenefits) ) {

            $totalBenefit += $weatherBenefits[$garmentName];

        }

    }
    foreach( $lowerGarments as $garmentName => $garmentValue ) {

        if( array_key_exists($garmentName, $terrainBenefits) ) {

            $totalBenefit += $terrainBenefits[$garmentName];

        }
        if( array_key_exists($garmentName, $weatherBenefits) ) {

            $totalBenefit += $weatherBenefits[$garmentName];

        }

    }
    foreach( $shields as $garmentName => $garmentValue ) {

        if( array_key_exists($garmentName, $terrainBenefits) ) {

            $totalBenefit += $terrainBenefits[$garmentName];

        }
        if( array_key_exists($garmentName, $weatherBenefits) ) {

            $totalBenefit += $weatherBenefits[$garmentName];

        }

    }

    return $totalBenefit;

}