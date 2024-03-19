<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Nissan Skyline GT-R R34";
        $read = true;

        if ($read) {
            $message = "you have unlocked '$name'";
        } else {
            $message = 'you have not unlocked shit, try again';
        }
    ?>
    <h1>
        <?php echo $message; ?>
    </h1>
</body>
</html>