<?php

class TertiaryWeapon extends WeaponClass {

/*
 * CLASS CONSTRUCTOR / DESTRUCTOR
 */
    function __construct() {

        $this->setWeapons();

    }
    
/*
 * CLASS ATTRIBUTES
 */
    private $weapons    =   array();
    
/**
 * CLASS METHODS
 */
    // Getters & Setters
    public function getWeapon($numberOfWeapons) {

        $weaponReturn = array();

        $randWeapons = array_rand( $this->weapons, $numberOfWeapons );
        
        if( is_array($randWeapons) ) {

            foreach( $randWeapons as $randWeapon  ) {

                $weaponReturn[$randWeapon] = $this->weapons[$randWeapon];

            }

        } else {

            $weaponReturn[$randWeapons] = $this->weapons[$randWeapons];

        }

        return $weaponReturn;

    }

    public function getAllWeapons() {

        return $this->weapons;

    }

    public function setWeapons() {

        $this->weapons = TERTIARY_WEAPONS;

    }

}