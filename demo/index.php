<?php

require 'functions.php';
require 'Database.php';


$db = new Database();

$posts = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

dd($posts);

