<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=formation_users;charset=utf8',
        'root', 'Programme@237Cameroun976');
        // die('successfull connection');
    }catch(Exception $e) {
        die('Erreur: '.$e->getMessage());
    }

    // Add a user
    $requete = $db->exec('INSERT INTO 
                            users(prenom, nom, serie_preferee) 
                            VALUES("Mark", "Zuckerberg", "Gost Rider")')
                            or die(print_r($db->errorInfo()));

    // Update an existing user information
    /* $requete = $db->exec('UPDATE users 
                            SET serie_preferee = "les feux de l\'amour"
                            WHERE prenom = "Mark"'); */

    // Delete a user
    /* $requete = $db->exec('DELETE FROM users
                            WHERE prenom = "Mark"'); */

    // Retrieve user information
    $requete = $db->query('SELECT * 
                            FROM users
                            ORDER BY id DESC');
    
    while($donnees = $requete->fetch()){
        echo $donnees['prenom'];
    }

    $requete->closeCursor();
?>