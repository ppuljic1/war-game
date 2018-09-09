<?php

class Shield extends GarmentClass {

/*
 * CLASS CONSTRUCTOR / DESTRUCTOR
 */
    function __construct() {

        $this->setGarments();

    }
    
/*
 * CLASS ATTRIBUTES
 */
    private $garments   =   array();
    
/**
 * CLASS METHODS
 */
    // Getters & Setters
    public function getGarment($numberOfGarments) {

        $garmentReturn = array();

        $randGarments = array_rand( $this->garments, $numberOfGarments );
        
        if( is_array($randGarments) ) {

            foreach( $randGarments as $randGarment  ) {

                $garmentReturn[$randGarment] = $this->garments[$randGarment];

            }

        } else {

            $garmentReturn[$randGarments] = $this->garments[$randGarments];

        }

        return $garmentReturn;

    }

    public function getAllGarment() {

        return $this->garments;

    }

    public function setGarments() {

        $this->garments = SHIELD;

    }

}