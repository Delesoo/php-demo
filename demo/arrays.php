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

        function filteredByAuthor($stuff, $author) {
            $filteredAuthor = [];

            foreach ($stuff as $name) {
                if ($name['author'] === $author) {
                    $filteredAuthor[] = $name;
                }
            }
            return $filteredAuthor;
        }
    ?>
    
    <ul>
        <?php foreach (filteredByAuthor($stuff, 'Vaime') as $name) : ?>
            <li>
                <a href="<?= $name['purchaseUrl'] ?>">
                    <?= $name['name']; ?> (<?=$name['releaseYear']; ?>) 
                </a> 
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>