<?php 
// fichier configuration de l'Application
if( session_status() !== PHP_SESSION_ACTIVE ) session_start();

const CONFIG = [
    'db' => [
        'HOST' => 'localhost',
        'PORT' => '3306',
        'NAME' => 'crud',
        'USER' => 'root',
        'PWD' => ''
    ],
    'app'=> [
        'name' => 'CRUD',
        'projecturl' => 'http://localhost/PHP/php_cours/03Crud'
    ]
];

const BASE_PATH = '/PHP/php_cours/03Crud';
//  '/PHP/php_cours/03Crud';

// en dev
const DB_SQL_DEBUG = true;