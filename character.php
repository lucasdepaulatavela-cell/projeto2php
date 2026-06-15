<?php
    abstract class Character {
        protected string $name;
        protected int $life;
        protected int $attack;
        protected int $defense;
        abstract public function special(): int;  
        }

?>