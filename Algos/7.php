<?php
echo "Choisi un nombre entre 0 et 100, je vais tenter de le deviner !\n";
do {
    # code...
    $nbAlea = random_int(0, 100);
    do {
        $repUser = readline("Je pense à $nbAlea ! Est-ce +, - ou = ? ");
    } while ($repUser != "+" && $repUser != "-" && $repUser != "=");
} while ("=" != $repUser);
echo "Ton nombre était donc $nbAlea , je suis le plus fort !";
