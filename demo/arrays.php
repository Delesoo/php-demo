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
         return $book['releaseYear'] >= 1950;
     });

     require "index.view.php";