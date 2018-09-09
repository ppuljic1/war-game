<?php

class ArmyEquipment {
/*
 * CLASS CONSTRUCTOR / DESTRUCTOR
 */
function __construct($gameTerrain, $gameWeather) {

    $this->setPrimaryWeaponsNum();
    $this->setPrimaryWeapons();

    $this->setSecondaryWeaponsNum();
    $this->setSecondaryWeapons();

    $this->setTertiaryWeaponsNum();
    $this->setTertiaryWeapons();


    $this->setUpperGarmentNum();
    $this->setUpperGarments();

    $this->setLowerGarmentNum();
    $this->setLowerGarments();

    $this->setShieldNum();
    $this->setShields();

    $this->setWeaponsDefectIndex($gameTerrain, $gameWeather);
    $this->setGarmentsDefectIndex($gameTerrain, $gameWeather);

}


/*
 * CLASS ATTRIBUTES
 */ 
    // Weapons
    private $primaryWeaponsNum;
    private $primaryWeapons = array();

    private $secondaryWeaponsNum;
    private $secondaryWeapons = array();

    private $tertiaryWeaponsNum;
    private $tertiaryWeapons = array();

    // Garment
    private $upperGarmentNum;
    private $upperGarments = array();

    private $lowerGarmentNum;
    private $lowerGarments = array();

    private $shieldNum;
    private $shields = array();

    // Equipment environment defect index
    private $weaponsDefectIndex;
    private $garmentDefectIndex;


/*
 * CLASS METHODS
 */
    // GETTERS & SETTERS

    // WEAPONS
    public function getPrimaryWeaponsNum() {

        return $this->primaryWeaponsNum;

    }
    public function setPrimaryWeaponsNum() {

        $this->primaryWeaponsNum = rand(0, 2);

    }
    public function getPrimaryWeapons() {

        return $this->primaryWeapons;

    }
    public function setPrimaryWeapons() {

        if( $this->primaryWeaponsNum == 0 ) {

            $this->primaryWeapons = array();

        } else {

            $primaryWeapon = new PrimaryWeapon;

            $this->primaryWeapons = $primaryWeapon->getWeapon($this->primaryWeaponsNum);

        }

    }


    public function getSecondaryWeaponsNum() {

        return $this->secondaryWeaponsNum;

    }
    public function setSecondaryWeaponsNum() {

        $this->secondaryWeaponsNum = rand(0, 2);

    }
    public function getSecondaryWeapons() {

        return $this->secondaryWeapons;

    }
    public function setSecondaryWeapons() {

        if( $this->secondaryWeaponsNum == 0 ) {

            $this->secondaryWeapons = array();

        } else {

            $secondaryWeapon = new SecondaryWeapon;

            $this->secondaryWeapons = $secondaryWeapon->getWeapon($this->secondaryWeaponsNum);

        }

    }


    public function getTertiaryWeaponsNum() {

        return $this->tertiaryWeaponsNum;

    }
    public function setTertiaryWeaponsNum() {

        $this->tertiaryWeaponsNum = rand(0, 2);

    }
    public function getTertiaryWeapons() {

        return $this->tertiaryWeapons;

    }
    public function setTertiaryWeapons() {

        if( $this->tertiaryWeaponsNum == 0 ) {

            $this->tertiaryWeapons = array();

        } else {

            $tertiaryWeapon = new TertiaryWeapon;

            $this->tertiaryWeapons = $tertiaryWeapon->getWeapon($this->tertiaryWeaponsNum);

        }

    }


    // GARMENT
    public function getUpperGarmentNum() {

        return $this->upperGarmentNum;

    }
    public function setUpperGarmentNum() {

        $this->upperGarmentNum = rand(0, 2);

    }
    public function getUpperGarments() {

        return $this->upperGarments;

    }
    public function setUpperGarments() {

        if( $this->upperGarmentNum == 0 ) {

            $this->upperGarments = array();

        } else {

            $upperGarment = new UpperGarment;

            $this->upperGarments = $upperGarment->getGarment($this->upperGarmentNum);

        }

    }


    public function getLowerGarmentNum() {

        return $this->lowerGarmentNum;

    }
    public function setLowerGarmentNum() {

        $this->lowerGarmentNum = rand(0, 2);

    }
    public function getLowerGarments() {

        return $this->lowerGarments;

    }
    public function setLowerGarments() {

        if( $this->lowerGarmentNum == 0 ) {

            $this->lowerGarments = array();

        } else {

            $lowerGarment = new LowerGarment;

            $this->lowerGarments = $lowerGarment->getGarment($this->lowerGarmentNum);

        }

    }


    public function getShieldNum() {

        return $this->shieldNum;

    }
    public function setShieldNum() {

        $this->shieldNum = rand(0, 2);

    }
    public function getShields() {

        return $this->shields;

    }
    public function setShields() {

        if( $this->shieldNum == 0 ) {

            $this->shields = array();

        } else {

            $shield = new Shield;

            $this->shields = $shield->getGarment($this->shieldNum);

        }

    }

    public function getWeaponsDefectIndex() {

        return $this->weaponsDefectIndex;

    }
    public function setWeaponsDefectIndex($gameTerrain, $gameWeather) {

        $totalWeaponsDefectIndex = 0;
        $totalWeaponsBenefitIndex = 0;

        $totalWeaponsDefectIndex += getTotalWeaponsDefectIndex($gameTerrain, $gameWeather, $this->primaryWeapons, $this->secondaryWeapons, $this->tertiaryWeapons);
        $totalWeaponsBenefitIndex += getTotalWeaponsBenefitIndex($gameTerrain, $gameWeather, $this->primaryWeapons, $this->secondaryWeapons, $this->tertiaryWeapons);

        $this->weaponsDefectIndex = $totalWeaponsBenefitIndex-$totalWeaponsDefectIndex;

    }

    public function getGarmentsDefectIndex() {

        return $this->garmentDefectIndex;

    }
    public function setGarmentsDefectIndex($gameTerrain, $gameWeather) {

        $totalGarmentsDefectIndex = 0;
        $totalGarmentsBenefitIndex = 0;

        $totalGarmentsDefectIndex += getTotalGarmentsDefectIndex($gameTerrain, $gameWeather, $this->upperGarments, $this->lowerGarments, $this->shields);
        $totalGarmentsBenefitIndex += getTotalGarmentsBenefitIndex($gameTerrain, $gameWeather, $this->upperGarments, $this->lowerGarments, $this->shields);

        $this->garmentDefectIndex = $totalGarmentsBenefitIndex-$totalGarmentsDefectIndex;

    }

}