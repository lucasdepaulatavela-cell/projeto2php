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

$op1 = readline("Jogador 1: ");
echo "------------------" . "\n";

$player1 = match ($op1) {
    "1" => new Druid(),
    "2" => new Templar(),
    "3" => new Alchemist(),
    default => null
    };
$op2 = readline("Jogador 2: ");

$player2 = match ($op2) {
    "1" => new Druid(),
    "2" => new Templar(),
    "3" => new Alchemist(),
    default => null
    };
if(strtolower(readline("Quer iniciar o jogo? S/N ")) === "s"){
    $whileR = false;
}
else{
    exit;
}
system('clear');
echo "Jogador 1: " . $player1->getName() . "\n";
echo "Vida: " . $player1->getLife() . "\n";
echo "Defesa: " . $player1->getDefense() . "\n";
echo "Mana: " . $player1->getMana() . "\n";
echo "------------------" . "\n";
echo "Jogador 2: " . $player2->getName() . "\n";
echo "Vida: " . $player2->getLife() . "\n";
echo "Defesa: " . $player2->getDefense() . "\n";
echo "Mana: " . $player2->getMana() . "\n";
}
?>