<?php 
// fichier configuration de l'Application
if( session_status() !== PHP_SESSION_ACTIVE ) session_start();

const CONFIG = [
    'db' => [
        'HOST' => 'localhost',
        'PORT' => '3306',
        'NAME' => 'annonces',
        'USER' => 'root',
        'PWD' => ''
    ],
    'app'=> [
        'name' => 'annonces',
        'projecturl' => 'http://localhost/PHP/php_cours/annonces'
    ]
];

const BASE_PATH = '/PHP/php_cours/annonces';
//  '/PHP/php_cours/03Crud';

// en dev
const DB_SQL_DEBUG = true;