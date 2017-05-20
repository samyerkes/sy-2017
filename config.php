<?php

return [
    'baseUrl' => 'https://samyerkes.com',
    'production' => false,
    'collections' => [
    	'posts' => [
            'path' => '{date|Y}/{filename}',
            'sort' => ['-date'],
            'excerpt' => function ($page, $characters = 250) {
                return substr(strip_tags($page->getContent()), 0, $characters);
            },
        ],
    ],
    'site_title' => 'Sam Yerkes',
];
