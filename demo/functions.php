<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
    <?php 

        $movies = [
            [
                'name' => 'Green Mile',
                'director' => 'Vigaca1',
                'releaseDate' => '1995'

            ],
            [
                'name' => "Schindler's list",
                'director' => 'Vigaca2',
                'releaseDate' => '2001'
            ],
            [
                'name' => 'Hancock',
                'director' => 'Vigaca3',
                'releaseDate' => '2009'
            ]
        ];

        function filterByDate($movies) {
            $filteredDate = [];

            foreach ($movies as $movie) {
                if ($movie['releaseDate'] > '2000') {
                    $filteredDate[] = $movie;
                }
            }
            return $filteredDate;
        }
    ?>

    <ul>
        <?php foreach (filterbyDate($movies) as $movie) : ?>
            <li>
                <?= $movie['name']; ?> <?= $movie['releaseDate']; ?>
            </li> 
        <?php endforeach ?>
    </ul>

</body>
</html>