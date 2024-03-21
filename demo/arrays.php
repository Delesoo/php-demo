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
            [
                'name' => "Rafaelo",
                'name2' => "Ferero Rocher",
                'yooo' => "https://example.com"
            ],
            [
                'name' => "Nutela",
                'name2' => "Nestle",
                'yooo' => "https://example.com"
            ]
        ];
    ?>
    
    <ul>
        <?php foreach ($stuff as $name) : ?>

            <li>
                <a href="<?= $name['yooo'] ?>">
                    <?= $name['name']; ?>
                </a> 
            </li>

        <?php endforeach; ?>
    </ul>
</body>
</html>