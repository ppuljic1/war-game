<?php

abstract class WeaponClass {

/*
 * CLASS ATTRIBUTES
 */
    private $weapons;

/**
 * CLASS METHODS
 */
    // Getters & Setters
    abstract public function getWeapon($numberOfWeapons);
    abstract public function getAllWeapons();
    abstract public function setWeapons(); 

}

?>