<?php
require_once 'character.php';
require_once 'druid.php';
require_once 'templar.php';
require_once 'alchemist.php';

$op1 = 0;
$op2 = 0;
$player1 = 0;
$player2 = 0;
$dado = 0;
$whileR = true;
$damage = 0;

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
$whileR = true;
while($whileR){
    system('clear');
    $player1->processBurn();
    $player2->processBurn();
    echo "Jogador 1: " . $player1->getName() . "\n";
    echo "Vida: " . $player1->getLife() . "\n";
    echo "Defesa: " . $player1->getDefense() . "\n";
    echo "Mana: " . $player1->getMana() . "\n";
    echo "------------------" . "\n";
    echo "Jogador 2: " . $player2->getName() . "\n";
    echo "Vida: " . $player2->getLife() . "\n";
    echo "Defesa: " . $player2->getDefense() . "\n";
    echo "Mana: " . $player2->getMana() . "\n";
    echo "\n";
    echo "Turno do Jogador 1" . "\n";
    echo "------------------" . "\n";
    echo "1 - Atacar" . "\n";
    echo "2 - Esquivar/Defender" . "\n";
    echo "3 - Especial" . "\n";
    echo "------------------" . "\n";
    $op1 = readline("Escolha sua ação:");
    switch($op1){
        case "1": 
        $dado = rand(1, 20);
        echo "Rolagem " . $dado . "\n"; 
        if($dado >= $player2->getDefense()){
            echo "Você acertou o ataque com maestria!". "\n;";
            $damage = $player1->getAttack();
            if($player2->isDefending() == true){
                $damage -= 14;
                $player2->stopDefending();
            }
            $damage = max(0, $damage);
            $player2->takeDamage($damage);
            echo "Você causou ". $damage . " de dano!\n";
            echo "\n";
        }
        else{
            echo "O oponente foi mais rapido e infelizmente escapou do seu ataque." . "\n";
        }

        if($player2->getLife() <= 0){
            echo "\n";
            system('clear');
            echo "VITORIA PARA O JOGADOR 1". "\n";
            $whileR = false;
        }
        break;

        case "2":
        $player1->defend();
        echo "Jogador 1 escolheu entrar na defensiva.". "\n";

        if($player2->getLife() <= 0){
            echo "\n";
            system('clear');
            echo "VITORIA PARA O JOGADOR 1". "\n";
            $whileR = false;
        }
        break;

        case "3":
        $player1->special1($player2);

        if($player2->getLife() <= 0){
            echo "\n";
            system('clear');
            echo "VITORIA PARA O JOGADOR 1". "\n";
            $whileR = false;
        }
        break;
    };
    echo "Turno do Jogador 2" . "\n";
    echo "------------------" . "\n";
    echo "1 - Atacar" . "\n";
    echo "2 - Esquivar/Defender" . "\n";
    echo "3 - Especial" . "\n";
    echo "------------------" . "\n";
    $op2 = readline("Escolha sua ação: ");
    switch($op2){
        case "1":
        $dado = rand(1, 20);
        echo "Rolagem " . $dado . "\n";
        if($dado >= $player1->getDefense()){
            echo "Você acertou o ataque com maestria!". "\n;";
            $damage = $player2->getAttack();
            if($player1->isDefending() == true){
                $damage -= 14;
                $player1->stopDefending();
            }
            echo "\n";
            $damage = max(0, $damage);
            $player1->takeDamage($damage);
            echo "Você causou ". $damage ." de dano!\n";
        }
        else{
            echo "O oponente foi mais rapido e infelizmente escapou do seu ataque." . "\n";
            echo "\n";
        }

        if($player1->getLife() <= 0){
            echo "\n";
            system('clear');
            echo "VITORIA PARA O JOGADOR 2". "\n";
            $whileR = false;
        }
        break;

        case "2":
        $player2->defend();
        echo "Jogador 2 escolheu entrar na defensiva.". "\n";

        if($player1->getLife() <= 0){
            echo "\n";
            system('clear');
            echo "VITORIA PARA O JOGADOR 2". "\n";
            $whileR = false;
        }
        break;

        case "3":
        $player2->special1($player1);
        if($player1->getLife() <= 0){
            echo "\n";
            system('clear');
            echo "VITORIA PARA O JOGADOR 2". "\n";
            $whileR = false;
        }
        break;
    }
    $player1->increaseMana(14);
    $player2->increaseMana(14);
    readline("Pressione enter para continuar");
}
}
?>