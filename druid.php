<?php
   class Druid extends Character{
    public const LIFE = 84;
    public const ATTACK = 17;
    public const DEFENSE = 10;
    public const MANA = 105;

    public function __construct() {
        parent::__construct(
            "Druida",
            self::LIFE,
            self::ATTACK,
            self::DEFENSE,
            self::MANA
        );
    }

    public function special1(Character $target): void {
        try {
        echo "Você se cura com a ajuda da natureza em 35 pontos de cura." . "\n";
        $this->spendMana(63);
        $this->heal(35);
        } catch(Exception $e) {
            echo $e ->getMessage() . "\n";
        }
    } 
    
}

?>