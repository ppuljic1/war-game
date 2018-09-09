<?php

class Army {

/*
 * CLASS CONSTRUCTOR / DESTRUCTOR
 */
    function __construct($solidersNumber, $gameTerrain, $gameWeather) {

        $this->setEquipment($gameTerrain, $gameWeather);
        $this->setFeatures($solidersNumber, $gameTerrain, $gameWeather);
        $this->setAttackDefect();
        $this->setHPDefect();
        $this->setAttack();
        $this->setHP();

    } 

/*
 * CLASS ATTRIBUTES
 */ 
    // Strength / HP attributes 
    private $attack;
    private $HP;

    // Equipment & Features
    private $equipment;
    private $features;

    // Defect
    private $attackDefect;
    private $HPDefect;

    // 

/*
 * CLASS METHODS
 */
    // GETTERS & SETTERS

    // STRENGTH / HP 
    public function getAttack() { 
        
        return $this->attack;

    }
    public function setAttack() { 
        
        $totalAttack = 0;

        // Calculate soliders total attack
        $totalAttack += getTotalSoliderAttack($this->features);

        // Calculate equipment total attack
        $totalAttack += getTotalEquipmentAttack( $this->features->getSolidersNum(), $this->equipment);

        // Calculate weapon defect/benefit
        $totalAttack += $this->attackDefect;

        $this->attack = $totalAttack+MIN_ATTACK;

         
    }

    public function getHP() { 
        
        return $this->HP;
         
    }
    public function setHP() { 
        
        $totalHP = 0;

        // Calculate soliders total HP
        $totalHP += getTotalSoliderHP($this->features);

        // Calculate equipment total HP
        $totalHP += getTotalEquipmentHP( $this->features->getSolidersNum(), $this->equipment);

        // Calculate garment HP defect and environment defect
        $totalHP += $this->HPDefect;

        $this->HP = $totalHP+MIN_HP;
         
    }

    public function getEquipment() { 
        
        return $this->equipment;
         
    }
    public function setEquipment($gameTerrain, $gameWeather) { 
        
        $this->equipment = new ArmyEquipment($gameTerrain, $gameWeather);
         
    }

    public function getFeatures() { 
        
        return $this->features;
         
    }
    public function setFeatures($solidersNumber, $gameTerrain, $gameWeather) { 
        
        $this->features = new ArmyFeatures($solidersNumber, $gameTerrain, $gameWeather);
         
    }

    public function getAttackDefect() {

        return $this->attackDefect;

    }
    public function setAttackDefect() {

        $this->attackDefect = $this->equipment->getWeaponsDefectIndex();

    }

    public function getHPDefect() {

        return $this->HPDefect;

    }
    public function setHPDefect() {

        $this->HPDefect = $this->features->getSoliderTerrainDefectIndex() + $this->features->getSoliderWeatherDefectIndex() + $this->equipment->getGarmentsDefectIndex();

    }

}

?>