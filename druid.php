<?php
   class Druid extends Character{
    public const LIFE = 84;
    public const ATTACK = 21;
    public const DEFENSE = 10;
    public const MANA = 105;

    public function __construct()
    {
        parent::__construct(
            "Druida",
            self::LIFE,
            self::ATTACK,
            self::DEFENSE,
            self::MANA
        );
    }

    public function special1(): void {
        echo "Você se cura com a ajuda da natureza." . "\n";
       $this->spendMana(49);
       $this->heal(35);
    }
}

?>