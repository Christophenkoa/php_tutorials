<?php

if(isset($_POST['prenom']) && isset($_POST['nom'])) {
  echo '<p>Welcome '.$_POST['prenom'].' '.$_POST['prenom'].' '.'</p>';
}

echo '<form method="post" action="formulaire.php">
        <p>
          <table>
            <tr>
              <td>Prénom</td>
              <td><input type="text" name="prenom"/></td>
            </tr>
            <tr>
              <td>Nom</td>
              <td><input type="text" name="nom"/></td>
            </tr>
          </table>
          <button type="submit">Envoyer</button>
        </p> 
      </form>';