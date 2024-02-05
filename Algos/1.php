<?php
$nbAlea = random_int(0, 100);

echo "j'ai imaginé un nombre compris entre 0 et 100. Je veux bien te laisser le deviner !\n\n";

do {
    //version longue
    $encore = false;
    do {
        if ($encore) {
            $nbUser = readline("J'ai dit : donne moi un nombre ! \n");
        } else {
            $nbUser = readline("Donne moi un nb \n");
        }
        $encore = true;
    } while (!is_numeric($nbUser) || $nbUser < 0 || $nbUser > 100);

    //version courte
    // do {
    //     $nbUser = readline("Donne moi un nb compris entre 0 et 100 : \n");
    // } while (!is_numeric($nbUser) || $nbUser < 0 || $nbUser > 100);

    // on continue quelle que soit la version
    if ($nbAlea > $nbUser) {
        echo "Plus grand \n";
    }
    if ($nbAlea < $nbUser) {
        echo "Plus petit \n";
    }
} while ($nbAlea != $nbUser);

echo "BRAVO \n";























































// $encore = false;
// do {
//     if ($encore) {
//         $nbUser = readline("J'ai dit : donne moi un nombre ! \n");
//     } else {
//         $nbUser = readline("Donne moi un nb \n");
//     }
//     $encore = true;
// } while (!is_numeric($nbUser));
