<?php

class Mountain extends TerrainClass {

/*
 * CLASS CONSTRUCTOR / DESTRUCTOR
 */
    function __construct() {

        $this->setType();
        $this->setDefects();
        $this->setBenefits();

    }
    
/*
 * CLASS ATTRIBUTES
 */
    private $type;
    private $defects    =   array();
    private $benefits   =   array();

/**
 * CLASS METHODS
 */
    // Getters & Setters
    public function getType() {

        return $this->type;

    }
    public function setType() {

        $this->type = 'mountain';

    }

    public function getDefects() {

        return $this->defects;

    }

    public function getBenefits() {

        return $this->benefits;

    }

    public function setDefects() {

        $this->defects = MOUNTAIN_DEFECTS;

    }

    public function setBenefits() {

        $this->benefits = MOUNTAIN_BENEFITS;
        
    }

    // Other methods
    public function getRandomTerrain() {

        $terrainTypes = TERRAIN_TYPES;
        
        $randIndex = array_rand($terrainTypes, 1);

        return $terrainTypes[$randIndex];

    }

}