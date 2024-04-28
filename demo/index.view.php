<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Recommended Shit</h1>
    
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