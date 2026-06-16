<?php
    abstract class Character {
        protected string $name;
        protected int $maxLife;
        protected int $life;
        protected int $attack;
        protected int $defense;
        protected int $mana;
        public function __construct(
        string $name,
        int $maxLife,
        int $life,
        int $attack,
        int $defense,
        int $mana
    ){
        $this->name = $name;
        $this->maxLife = $maxLife;
        $this->life = $life;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->mana = $mana;
    }
        abstract public function special(): int;  

        public function getName(): string {
            return $this->name;
        }
        public function getLife(): int {
            return $this->life;
        }
        public function getAttack(): int {
            return $this->attack;
        }
        public function getDefense(): int {
            return $this->defense;
        }
        public function getMana(): int {
            return $this->mana;
        }
        public function takeDamage(int $damage): void {
            $this->life -= $damage;
        }
        public function heal(int $healer): void {
            if($healer += $this->life > $this->maxLife) {
                $this->life = $this->maxLife;
            }
            else {
            $this->life += $healer;
            }
            }

}   
?>