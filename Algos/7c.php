<?php
echo "Choisi un nombre entre 0 et 100, je vais tenter de le deviner !\n";
$min = 0;
$max = 100;
$nbEssai = 7;
do {
    # code...
    $nbAlea = random_int($min, $max);
    do {
        $repUser = readline("Je pense à $nbAlea ! Est-ce +, - ou = ? ");
    } while ($repUser != "+" && $repUser != "-" && $repUser != "=");
    if ($repUser == "+") {
        $min = $nbAlea + 1;
    }
    if ($repUser == "-") {
        $max = $nbAlea - 1;
    }
    --$nbEssai;
    if ($nbEssai == 0) {
        echo "J'ai perdu, je suis le plus null !\n";
        exit;
    }
} while ("=" != $repUser);
echo "Ton nombre était donc $nbAlea , je suis le plus fort !\n";
