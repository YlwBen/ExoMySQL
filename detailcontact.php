<?php

include 'connection.php';

if(isset($_GET['id'])){

  // Affiche les groupe par ID !

  $grp = "SELECT NomGroupe FROM Contact
  INNER JOIN Groupes ON Contact.IDGrp=Groupes.IDGroupe
  WHERE Contact.ID='".$_GET['id']."'";

  $result=mysqli_query($conn,$grp);
   if (!$result) {
       die('Erreur dans la requête: '.mysqli_error($conn));
   }

   $row=mysqli_fetch_array($result);

   echo 'Groupe : '.$row['NomGroupe'].'</br>';

  // Affiche les interets par ID !

  $int = "SELECT NomInteret FROM Interets
  INNER JOIN InteretContact ON InteretContact.IDInteret=Interets.ID
  INNER JOIN Contact ON Contact.ID=InteretContact.IDContact
  WHERE Contact.ID='".$_GET['id']."'";

  $result=mysqli_query($conn,$int);
   if (!$result) {
       die('Erreur dans la requête: '.mysqli_error($conn));
   }

   $row=mysqli_fetch_array($result);

   echo 'Loisir : '.$row['NomInteret'].'</br>';

   // Affiche les terminaux par ID !

   $term = "SELECT NomTerm, Navigateur FROM TermContact
   INNER JOIN Contact ON TermContact.IdContact=Contact.ID
   WHERE Contact.ID='".$_GET['id']."'";

   $result=mysqli_query($conn,$term);
    if (!$result) {
        die('Erreur dans la requête: '.mysqli_error($conn));
    }

    $row=mysqli_fetch_array($result);

    echo 'Terminal : '.$row['NomTerm'].'</br>';
    echo 'Navigateur : '.$row['Navigateur'];

}

 ?>
