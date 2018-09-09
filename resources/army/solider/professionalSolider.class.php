<?php

class ProfessionalSolider extends SoliderClass {

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

        $this->attack = PROFESSIONAL_SOLIDER_ATTACK;

    }


    public function getHP() {

        return $this->HP;

    }
    public function setHP() {

        $this->HP = PROFESSIONAL_SOLIDER_HP;
    }


    public function getName() {

        return $this->name;

    }
    public function setName() {

        $this->name = 'professional solider';

    }


    public function getStrategyIndex() {

        return $this->strategyIndex;

    }
    public function setStrategyIndex() {

        $this->strategyIndex = PROFESSIONAL_SOLIDER_STRATEGY_INDEX;

    }


    public function getIsFidai() {

        return $this->isFidai;

    }
    public function setIsFidai() {

        $this->isFidai = PROFESSIONAL_SOLIDER_IS_FIDAI;

    }


}

?>