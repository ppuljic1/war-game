<?php

abstract class WeatherClass {

/*
 * CLASS ATTRIBUTES
 */
    private $type;
    private $defects;
    private $benefits;

/**
 * CLASS METHODS
 */
    // Getters & Setters
    abstract public function getType();
    abstract public function setType();
    abstract public function getDefects();
    abstract public function getBenefits();
    abstract public function setDefects();
    abstract public function setBenefits();

    // Method for getting random weather type
    abstract public function getRandomWeather();

}


?>