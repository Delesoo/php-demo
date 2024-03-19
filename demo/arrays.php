<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Recommended Shit</h1>

    <?php
        $stuff = [
            "Rafaelo",
            "Ferero Rocher",
            "My big shlong"
        ];
    ?>

    <ul>
       <?php foreach($stuff as $name) {
            echo "<li>$name</li>";
       }
       ?>
    </ul>
</body>
</html>