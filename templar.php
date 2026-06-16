<?php

class Templar extends Character {
    public const LIFE = 112;
    public const ATTACK = 28;
    public const DEFENSE = 14;
    public const MANA = 70;

    public function __construct()
    {
        parent::__construct(
            "Templario",
            self::LIFE,
            self::ATTACK,
            self::DEFENSE,
            self::MANA
        );
    }

    public function special(): int
    {
        return 28;
    }
}

?>