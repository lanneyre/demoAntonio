<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<h" . $i . ">Il est très bon ce ragout de PHP</h" . $i . ">\n";
    }
    for ($i = 1; $i < 50; $i++) {
        echo "<span style='font-size: " . $i . "px'>je me repete ($i)<span><br>\n";
    }
    ?>
</body>

</html>