<?php

class Rain extends WeatherClass {

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

        $this->type = 'rain';

    }

    public function getDefects() {

        return $this->defects;

    }

    public function getBenefits() {

        return $this->benefits;

    }

    public function setDefects() {

        $this->defects = RAIN_DEFECTS;

    }

    public function setBenefits() {

        $this->benefits = RAIN_BENEFITS;
        
    }

    // Other methods
    public function getRandomWeather() {

        $weatherTypes = WEATHER_TYPES;
        
        $randIndex = array_rand($weatherTypes, 1);

        return $weatherTypes[$randIndex];

    }

}