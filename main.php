<?php
require_once 'character.php';
require_once 'druid.php';
require_once 'templar.php';
require_once 'alchemist.php';

$op1 = 0;
$op2 = 0;
$player1 = 0;
$player2 = 0;
$whileR = true;

while ($whileR){

system('clear');
echo " Hunter x Hunter " . "\n";
echo "------------------" . "\n";
echo "1 - Druida" . "\n";
echo "2 - Templario" . "\n";
echo "3 - Alquimista" . "\n";
echo "------------------" . "\n";

$op1 = readline("Jogador 1, escolha sua classe: ");

$player1 = match ($op1) {
    "1" => new Druid(),
    "2" => new Templar(),
    "3" => new Alchemist(),
    default => null
    };
echo "Jogador 1 escolheu " . $player1->getName() . "\n";

$op2 = readline("Jogador 2, escolha sua classe: ");

$player2 = match ($op2) {
    "1" => new Druid(),
    "2" => new Templar(),
    "3" => new Alchemist(),
    default => null
    };
echo "Jogador 2 escolheu " . $player2->getName() . "\n";
$whileR = false;
}
?>