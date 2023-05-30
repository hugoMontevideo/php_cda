<?php
//  fichier de config de l'app
if( session_status() !== PHP_SESSION_ACTIVE ) session_start();

const CONFIG=[
    'db'=>[
        'HOST'=>'localhost',
        'PORT'=>'3306',
        'NAME'=>'crud',
        'USER'=>'root',
        'PWD'=>''

    ],
    'app'=>[
        'name'=>'CRUD',
        'projecturl'=>'http://localhost/PHP/php_cours/clone_crud'
    ]

];

const BASE_PATH='/PHP/php_cours/clone_crud';



