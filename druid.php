<?php
 class Druid extends Character {
    public const INITIAL_LIFE = 84;

    public function special(): int{
    return 30;   
    }

    public function __construct(
    int $life,
    int $attack,
    int $defense
){
    $this->life = $life;
    $this->attack = $attack;
    $this->defense = $defense;
}

 }

?>