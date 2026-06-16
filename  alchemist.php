<?php
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

    public function special(): int
    {
        return 30;
    }
}

?>