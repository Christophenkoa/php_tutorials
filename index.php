<?php

            /* concatenation */

/*
    $direBonjour = "Hello";
    $destinataire = "World";
    
    // echo"$direBonjour $destinataire";
    // echo $direBonjour.' '.$destinataire;

*/



            /* array */

/*
    $identitePersonneA = array (
        'id'        => 15,
        'prenom'    => 'Christophe', 
        'nom'       => 'Nkoa',
        'age'       => 20
    );

    $identitePersonneB = array (15,'Christophe', 'Nkoa',20);

    // echo $identitePersonneB[0];

    // echo 'Bonjour '.$identitePersonneA['prenom'].' !';
*/



            /* conditional structure */

/*
    $age = 22;
    
    if($age > 21) {
        echo "Vous etes majeur.";

    }else if($age < 5) {
        echo "Vous etes un bebe";
    
    } else {
        echo "Vous etes mineur.";
    }

    $randomNumber = 1 ;

    switch($randomNumber) {
        case 0:
            echo "First number";
            break;
        case 1: 
            echo "You selected 1";
            break;
        
        default:
            echo "Another choice";
    }
*/



            /*loop */

/*
    $ligne = 0;

    while($ligne <10 ) {
        echo 'ligne numero '.($ligne + 1).'<br>';
        $ligne++;
    }

    for($ligne = 0; $ligne <10; $ligne++) {
        echo 'ligne numero '.($ligne + 1).'<br>';
    }

    $user = array('Chris', 'Brown', 'Toni', 'Herve', 'Joshua');

    foreach($user as $name) {
        echo $name.'<br>';
    }

    do {
        echo $ligne.'<br>';
        $ligne ++;
    } while($ligne < 10 );
*/



        /* functions*/
 
/*
    function addition($x, $y) {
        return $x + $y;
    }

    echo addition(5,50);
*/



        /* predifined functions */

    $string = "Bienvenu sur la formation ultime";
    strlen($string); // lenght of a string
    str_replace('formation', 'training', $string);
    strtolower($string); // lower case
    strtoupper($string); // transform to upper case
    substr($string, 0, 5); // extract a string portion
    max(1,3,4); // maximum
    min(1,9,0); // minimum
    // rand(), round()

?>