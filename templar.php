<?php
class Templar extends Character {
    public const LIFE = 112;
    public const ATTACK = 21;
    public const DEFENSE = 12;
    public const MANA = 70;

    public function __construct() {
        parent::__construct(
            "Templario",
            self::LIFE,
            self::ATTACK,
            self::DEFENSE,
            self::MANA
        );
    }

    public function special1(Character $target): void {
        try {
        $this->spendMana(70);
        $target->takeDamage(35);
        } catch(Exception $e) {
            echo $e->getMessage() ."\n";
        }
        echo "Um raio divino cai sobre o inimigo causando 35 pontos de dano." ."\n";
        }
}


?>