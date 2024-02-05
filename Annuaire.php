<?php
$users = [
    ["nom" => "LANNEY", "prenom" => "Rémi  ", "email" => "remi@lanney.com\t"],
    ["nom" => "ENRICI", "prenom" => "Cyril   ", "email" => "cyril@enrici.com\t"],
    ["nom" => "VANHALLEN", "prenom" => "Théo   ", "email" => "Vanhallen@theo.fr\t"],
    ["nom" => "DUPOND", "prenom" => "Arnaud", "email" => "a.dupond@gmail.com\t"],
    ["nom" => "DUPONT", "prenom" => "Elodie", "email" => "e.dupont06@outlook.fr\t"],
    ["nom" => "TARTenpion", "prenom" => "Michelle", "email" => "mtartenpion@yopmail.com"],
    ["nom" => "LE Floch", "prenom" => "Nicolas", "email" => "nlefloch@renaissance.fr"],
    ["nom" => "CHOUETTE", "prenom" => "Christine", "email" => "cchouette@Csm.Nice\t"],
    ["nom" => "BIDULLE", "prenom" => "Patrick", "email" => "PATRICKBIDULLE@MYCLOUD.COM"],
    ["nom" => "Machin", "prenom" => "Cecile", "email" => "CecILE.machin@gmail.com"],
];
do {
    # code...
    do {
        # code...
        echo "########################################\n";
        echo "## Gestion d'un annuaire\n";
        echo "## Que voulez-vous faire ?\n";
        echo "1 - Lister tous les utilisateurs \n";
        echo "2 - Créer un utilisateur \n";
        echo "3 - Modifier un utilisateur \n";
        echo "4 - Supprimer un utilisateur \n";
        echo "5 - Quitter \n";
        $choix = readline("");
    } while (!in_array($choix, [1, 2, 3, 4, 5]));

    switch ($choix) {
        case 1: // Lister tous les utilisateurs
            # code...
            echo "Lister tous les utilisateurs \n";
            echo "| NOM\t\t| Prénom\t| email\n";
            foreach ($users as $user) {
                echo "| " . strtoupper($user["nom"]) . "\t| " . ucwords(strtolower($user["prenom"])) . "\t| " . strtolower($user["email"]) . "\n";
                # code...
            }
            break;
        case 2: // Créer un utilisateur
            # code...
            echo "Créer un utilisateur \n";
            $user["nom"] = readline("Quel est le nom du nouvel utilisateur ? \n");
            $user["prenom"] = readline("Quel est le prénom du nouvel utilisateur ? \n");
            $user["email"] = readline("Quel est l'email du nouvel utilisateur ? \n");
            $users[] = $user;
            break;
        case 3: // Modifier un utilisateur
            # code...
            echo "Modifier un utilisateur \n";
            echo "| Id\t| NOM\t\t| Prénom\t| email\n";
            for ($i = 0; $i < sizeof($users); $i++) {
                # code...
                if (isset($users[$i])) {
                    echo "| " . $i . "\t| " . strtoupper($users[$i]["nom"]) . "\t| " . ucwords(strtolower($users[$i]["prenom"])) . "\t| " . strtolower($users[$i]["email"]) . "\n";
                }
            }
            $update = readline("Quel utilisateur voulez-vous supprimer ? (rentrez son numéro pour le supprimer)\n");
            $user["nom"] = readline("Quel est le nouveau nom de l'utilisateur ? \n");
            $user["prenom"] = readline("Quel est le nouveau prénom de l'utilisateur ? \n");
            $user["email"] = readline("Quel est le nouvel email de l'utilisateur ? \n");
            $users[$update] = $user;
            break;
        case 4: // Supprimer un utilisateur
            # code...
            echo "Supprimer un utilisateur \n";
            echo "| Id\t| NOM\t\t| Prénom\t| email\n";
            for ($i = 0; $i < sizeof($users); $i++) {
                # code...
                if (isset($users[$i])) {
                    echo "| " . $i . "\t| " . strtoupper($users[$i]["nom"]) . "\t| " . ucwords(strtolower($users[$i]["prenom"])) . "\t| " . strtolower($users[$i]["email"]) . "\n";
                }
            }
            $delete = readline("Quel utilisateur voulez-vous supprimer ? (rentrez son numéro pour le supprimer)\n");
            unset($users[$delete]);
            break;
        default:
            # code...
            echo "Good Bye \n";
            break;
    }
} while ($choix != 5);
