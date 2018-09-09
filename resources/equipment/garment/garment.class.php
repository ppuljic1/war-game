<?php

abstract class GarmentClass {

/*
 * CLASS ATTRIBUTES
 */
    private $garments;

/**
 * CLASS METHODS
 */
    // Getters & Setters
    abstract public function getGarment($numberOfGarments);
    abstract public function getAllGarment();
    abstract public function setGarments(); 

}

?>