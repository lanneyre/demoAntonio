<?php
echo "Choisi un nombre entre 0 et 100, je vais tenter de le deviner !\n";
$min = 0;
$max = 100;
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
} while ("=" != $repUser);
echo "Ton nombre était donc $nbAlea , je suis le plus fort !";
