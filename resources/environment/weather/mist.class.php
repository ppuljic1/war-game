<?php

class Mist extends WeatherClass {

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

        $this->type = 'mist';

    }

    public function getDefects() {

        return $this->defects;

    }

    public function getBenefits() {

        return $this->benefits;

    }

    public function setDefects() {

        $this->defects = MIST_DEFECTS;

    }

    public function setBenefits() {

        $this->benefits = MIST_BENEFITS;
        
    }

    // Other methods
    public function getRandomWeather() {

        $weatherTypes = WEATHER_TYPES;
        
        $randIndex = array_rand($weatherTypes, 1);

        return $weatherTypes[$randIndex];

    }

}