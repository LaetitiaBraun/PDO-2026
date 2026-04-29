<?php

// Chargement de nos constantes de connexion
require_once 'config-dev.php';

// Tentavive de connexion
try{
    $connectDB = new PDO(DB_DSN, DB_CONNECT_USER, DB_CONNECT_PWD);
}catch(Exception $e){
    die($e->getMessage());
}