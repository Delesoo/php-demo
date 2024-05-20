<?php

require 'functions.php';
// require 'router.php';

//connect to mySQL database
$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';

$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare('select * from posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

