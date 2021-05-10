<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=formation_users;charset=utf8',
        'root', 'Programme@237Cameroun976');
        die('successfull connection');
    }catch(Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
?>