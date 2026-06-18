<?php
    abstract class Character {
        protected string $name;
        protected int $maxLife;
        protected int $life;
        protected int $attack;
        protected int $defense;
        protected int $mana;
        protected int $maxMana;
        protected bool $defending = false;
        protected int $burnTurns = 0;

        public function __construct(
        string $name,
        int $life,
        int $attack,
        int $defense,
        int $mana,
    ){
        $this->name = $name;
        $this->maxLife = $life;
        $this->life = $life;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->mana = $mana;
        $this->maxMana = $mana;
    }
        abstract public function special1(Character $target): void;

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
            if(($this->life + $healer) > $this->maxLife) {
                $this->life = $this->maxLife;
            }
            else {
            $this->life += $healer;
            }
            }
        public function increaseAttack(int $amount): void {
            $this->attack += $amount;
        }
        public function spendMana(int $cost): void {
             if ($this->mana < $cost) {
                throw new Exception("Mana insuficiente!");
            }
             $this->mana -= $cost;
        }
        public function defend(): void {
            $this->defending = true;
        }
        public function isDefending(): bool {
            return $this->defending;
        }
        public function stopDefending(): void {
            $this->defending = false;
        }

        public function increaseMana(int $increase): void {
            if(($this->mana + $increase) > $this->maxMana) {
            $this->mana = $this->maxMana;
        }
        else {
            $this->mana += $increase;
        }
        }
        public function applyBurn(int $turns): void {
            $this->burnTurns = $turns; 
        }
        public function processBurn(): void {
            if ($this->burnTurns > 0) {
            echo $this->name . " sofre 7 de dano de queimadura!\n";
            $this->takeDamage(7);
            $this->burnTurns--;
            }
}
}   
?>