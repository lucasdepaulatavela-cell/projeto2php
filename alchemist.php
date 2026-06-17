<?php
$op = 0;
 class Alchemist extends Character{
    public const LIFE = 70;
    public const ATTACK = 7;
    public const DEFENSE = 7;
    public const MANA = 140;

    public function __construct()
    {
        parent::__construct(
            "Alquimista",
            self::LIFE,
            self::ATTACK,
            self::DEFENSE,
            self::MANA
        );
    }

    public function special1(): void {
        $this->spendMana(35);
        echo "1 - Frasco de cura". "\n";
        echo "2 - Frasco de veneno". "\n";
        $op = readline("Escolha o frasco para usar:");
        switch ($op) {
            case "1":
                $this->heal(14);
                break;
            case "2":
                $this->increaseAttack(14);
        }
    }
}

?>
