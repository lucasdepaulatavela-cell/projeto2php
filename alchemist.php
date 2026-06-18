<?php
 class Alchemist extends Character{
    public const LIFE = 77;
    public const ATTACK = 7;
    public const DEFENSE = 9;
    public const MANA = 140;

    public function __construct() {
        parent::__construct(
            "Alquimista",
            self::LIFE,
            self::ATTACK,
            self::DEFENSE,
            self::MANA
        );
    }

    public function special1(Character $target): void {
    try {
        $this->spendMana(49);

        echo "1 - Frasco de cura\n";
        echo "2 - Frasco de chamas\n";

        $op = readline("Escolha o frasco: ");

        switch ($op) {

            case "1":
                $this->heal(28);
                echo "A poção te cura em 28 pontos de vida.\n";
                break;

            case "2":
                $target->takeDamage(14);
                echo "O alvo está pegando fogo!\n";
                $target->applyBurn(3);
                break;
        }

    } catch (Exception $e) {
        echo $e->getMessage() . "\n";
    }
}
}

?>
