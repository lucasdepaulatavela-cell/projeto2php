<?php
    abstract class Character {
        protected string $name;
        protected int $maxLife;
        protected int $life;
        protected int $attack;
        protected int $defense;
        protected int $mana;
        protected bool $defending = false;

        public function __construct(
        string $name,
        int $life,
        int $attack,
        int $defense,
        int $mana,
        bool $defending
    ){
        $this->name = $name;
        $this->maxLife = $life;
        $this->life = $life;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->mana = $mana;
        $this->defending = $defending;
    }
        abstract public function special1(): void;

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
        public function increaseDefense(int $increase): void {
            $this->defense += $increase;
        }
        public function increaseAttack(int $amount): void {
            $this->attack += $amount;
        }
        public function spendMana(int $cost): bool {
            if(($this->mana - $cost) < 0) {
            echo "Você falhou em usar a habilidade!" . "\n";
            return false;
            }
            else {
                $this->mana -= $cost;
                return true;
            }
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
}   
?>