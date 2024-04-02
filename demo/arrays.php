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
                'author' => "Vaime",
                'purchaseUrl' => "https://example.com",
                'releaseYear' => '1992'
            ],
            [
                'name' => "Nutela",
                'author' => "Nestle",
                'purchaseUrl' => "https://example.com",
                'releaseYear' => '1943'
            ],
            [
                'name' => "Chemikai",
                'author' => "Nestle",
                'purchaseUrl' => "https://example.com",
                'releaseYear' => '1961'
            ]
        ];

       function filter ($items, $fn) {
           $filteredItems = [];
           
           foreach ($items as $item) {
               if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        };

        $filteredBooks = array_filter($stuff, function ($book) {;
            return $book['releaseYear'] <= 2000;
        });
    ?>
    
    <ul>
        <?php foreach ($filteredBooks as $name) : ?>
            <li>
                <a href="<?= $name['purchaseUrl'] ?>">
                    <?= $name['name']; ?> (<?=$name['releaseYear']; ?>) 
                </a> 
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>