<?php

class DeliveryBoy extends SoliderClass {

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

        $this->attack = DELIVERY_BOY_ATTACK;

    }


    public function getHP() {

        return $this->HP;

    }
    public function setHP() {

        $this->HP = DELIVERY_BOY_HP;
    }


    public function getName() {

        return $this->name;

    }
    public function setName() {

        $this->name = 'delivery boy';

    }


    public function getStrategyIndex() {

        return $this->strategyIndex;

    }
    public function setStrategyIndex() {

        $this->strategyIndex = DELIVERY_BOY_STRATEGY_INDEX;

    }


    public function getIsFidai() {

        return $this->isFidai;

    }
    public function setIsFidai() {

        $this->isFidai = DELIVERY_BOY_IS_FIDAI;

    }


}

?>