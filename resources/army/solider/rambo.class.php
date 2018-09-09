<?php

class Rambo extends SoliderClass {

/*
 * CLASS CONSTRUCTOR / DESTRUCTOR
 */

    function __construct() {

        $this->setAttack();
        $this->setHP();
        $this->setName();
        $this->setStrategyIndex();
        $this->setIsFidai();

    }

/*
 * CLASS ATTRIBUTES
 */
    // Stats - health, attack
    private $attack;
    private $HP;

    // Class type
    private $name;

    // Strategy index
    private $strategyIndex;

    // Fidai flag
    private $isFidai;

    // 

/**
 * CLASS METHODS
 */
    // Getters & Setters
    public function getAttack() {

        return $this->attack;

    }
    public function setAttack() {

        $this->attack = RAMBO_ATTACK;

    }


    public function getHP() {

        return $this->HP;

    }
    public function setHP() {

        $this->HP = RAMBO_HP;
    }


    public function getName() {

        return $this->name;

    }
    public function setName() {

        $this->name = 'rambo';

    }


    public function getStrategyIndex() {

        return $this->strategyIndex;

    }
    public function setStrategyIndex() {

        $this->strategyIndex = RAMBO_STRATEGY_INDEX;

    }


    public function getIsFidai() {

        return $this->isFidai;

    }
    public function setIsFidai() {

        $this->isFidai = RAMBO_IS_FIDAI;

    }


}

?>