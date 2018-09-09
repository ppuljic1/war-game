<?php

abstract class SoliderClass {

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
    abstract public function getAttack();
    abstract public function setAttack();
    abstract public function getHP();
    abstract public function setHP();

    abstract public function getName();
    abstract public function setName();

    abstract public function getStrategyIndex();
    abstract public function setStrategyIndex();

    abstract public function getIsFidai();
    abstract public function setIsFidai();


}

?>