<?php
// $plusGrand = null;
for ($i = 0; $i < 20; $i++) {

    do {
        $nbUser = readline("Donne moi un nb ($i): \n");
    } while (!is_numeric($nbUser));

    if ($i == 0 || $nbUser > $plusGrand) {
        $plusGrand = $nbUser;
    }
}
echo "le plus grand nombre que tu m'ais donné est : $plusGrand !\n";
