<?php

class ArmyFeatures {

/*
 * CLASS CONSTRUCTOR / DECONSTRUCTOR
 */ 
    function __construct($solidersNum, $gameTerrain, $gameWeather) {

        $this->setSoliderTerrainPreferences($gameTerrain);
        $this->setSoliderTerrainDefectIndex($gameTerrain);
        $this->setSoliderWeatherPreferences($gameWeather);
        $this->setSoliderWeatherDefectIndex($gameWeather);
        $this->setSoliderTypes();
        $this->setSolidersNum($solidersNum);
        $this->setSoliders();
        $this->setStrategyIndex();
        $this->setFidaiNum();
        
        
    }


/*
 * CLASS ATTRIBUTES
 */ 
    // Soliders environment defect index
    private $soliderTerrainPreferences;
    private $soliderWeatherPreferences;
    
    private $soliderTerrainDefectIndex;
    private $soliderWeatherDefectIndex;

    // Solider attributes
    private $solidersNum;
    private $soliders = array();
    private $soliderTypes = array();

    // Army strategy
    private $strategyIndex;

    // Fidai 
    private $fidaiNum;

/*
 * CLASS METHODS
 */
    // GETTERS & SETTERS

    // ENVIRONMENT PREFERENCES
    public function getSoliderTerrainPreferences() { 
        
        return $this->soliderTerrainPreferences;

    }
    public function setSoliderTerrainPreferences($gameTerrain) { 
        
        $this->soliderTerrainPreferences = $gameTerrain->getRandomTerrain();
         
    }
    public function getSoliderTerrainDefectIndex() {

        return $this->soliderTerrainDefectIndex;

    }
    public function setSoliderTerrainDefectIndex($gameTerrain) {

        if( $gameTerrain != $this->soliderTerrainPreferences ) {

            $this->soliderTerrainDefectIndex = -TERRAIN_DEFECT;

        } else if( $gameTerrain == $this->soliderTerrainPreferences ) {

            $this->soliderTerrainDefectIndex = TERRAIN_DEFECT;

        }
        
    }


    public function getSoliderWeatherPreferences() { 
        
        return $this->soliderWeatherPreferences;
         
    }
    public function setSoliderWeatherPreferences($gameWeather) { 
        
        $this->soliderWeatherPreferences = $gameWeather->getRandomWeather();
         
    }
    public function getSoliderWeatherDefectIndex() {

        return $this->soliderWeatherDefectIndex;

    }
    public function setSoliderWeatherDefectIndex($gameWeather) {

        if( $gameWeather != $this->soliderWeatherPreferences ) {

            $this->soliderWeatherDefectIndex = -WEATHER_DEFECT;

        } else if( $gameWeather == $this->soliderWeatherPreferences ) {

            $this->soliderWeatherDefectIndex = WEATHER_DEFECT;

        }
        
    }


    // SOLIDER ATTRIBUTES
    public function getSolidersNum() {

        return $this->solidersNum;

    }
    public function  setSolidersNum($solidersNum) {

        $this->solidersNum = $solidersNum;

    }


    public function getSoliders() {

        return $this->soliders;

    }
    public function setSoliders() {

        $randNumber = 0;
        $solidersNum = $this->solidersNum;

        // Rambo
        $randNumber = rand(RAMBO_MIN_NUM, RAMBO_MAX_NUM );

        $this->soliders['rambo'] = $randNumber;

        $solidersNum -= $randNumber; 

        // General
        $randNumber = rand(GENERAL_MIN_NUM, GENERAL_MAX_NUM );

        $this->soliders['general'] = $randNumber;

        $solidersNum -= $randNumber; 

        // Doctor
        $randNumber = rand(DOCTOR_MIN_NUM, DOCTOR_MAX_NUM );

        $this->soliders['doctor'] = $randNumber;

        $solidersNum -= $randNumber; 

        // Delivery boy
        $randNumber = rand(DELIVERY_BOY_MIN_NUM, DELIVERY_BOY_MAX_NUM );

        $this->soliders['delivery boy'] = $randNumber;

        $solidersNum -= $randNumber; 

        // Fidai
        $randNumber = rand(FIDAI_MIN_NUM, FIDAI_MAX_NUM );

        $this->soliders['fidai'] = $randNumber;

        $solidersNum -= $randNumber;

        // Amateur solider
        $randNumber = rand(0, $solidersNum);

        $this->soliders['amateur solider'] = $randNumber;

        $solidersNum -= $randNumber;

        // Professional solider
        $this->soliders['professional solider'] = $solidersNum;


    }

    public function getSoliderTypes() {

        return $this->soliderTypes;

    }
    public function setSoliderTypes() {

        $this->soliderTypes = array(

            'rambo'                 =>  new Rambo,
            'professional solider'  =>  new ProfessionalSolider,
            'amateur solider'       =>  new AmateurSolider,
            'general'               =>  new General, 
            'doctor'                =>  new Doctor,
            'delivery boy'          =>  new DeliveryBoy,
            'fidai'                 =>  new Fidai

        );
        
    } 


    // ARMY STRATEGY
    public function getStrategyIndex() {

        return $this->strategyIndex;

    }
    public function setStrategyIndex() {

        $this->strategyIndex = 0;
        
        // General defect - if there are 3 generals, only 2 strategy indexes are counted, and if there are more then 3 only 1 is

        foreach( $this->soliderTypes as $soliderType ) {

            if( $soliderType->getName() == 'general' && $this->soliders[$soliderType->getName()] >= 3 ) {

                if( $this->soliders[$soliderType->getName()] > 3 ) {

                    $this->strategyIndex +=  $soliderType->getStrategyIndex();

                } else {

                    $this->strategyIndex +=  $soliderType->getStrategyIndex() * 2;

                }

            } else {

                $this->strategyIndex +=  $soliderType->getStrategyIndex() * $this->soliders[$soliderType->getName()];

            }

        }

    }

    public function getFidaiNum() {

        return $this->fidaiNum;

    }
    public function setFidaiNum() {

        $this->fidaiNum = $this->soliders['fidai'];

    }

    

}