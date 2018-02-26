<?php
$sql = "SELECT * FROM Contact ORDER BY ID";

$result=mysqli_query($conn,$sql);
 if (!$result) {
     die('Erreur dans la requête: '.mysqli_error());
 }

 // Essai 3 !!!!!!
 echo '<div class="container-fluid">';
   echo '<table class="fromben">';
    echo '<tr>';
     echo '<th>Nom</th>';
     echo '<th>Anniversaire</th>';
     echo '<th>Telephone</th>';
     echo '<th>Mail</th>';
    echo '</tr>';

 while ($row=mysqli_fetch_array($result)) {
 // Essai 1 !!!!!!!!
 // echo $row['Nom']. ' : '.$row['Mail']. '</br>';
 // Affiche en ligne les noms et mails de la BDD.


 // Essai 2 !!!!!!!!
 // echo '<table style="width:100%">';
 //   echo '<tr>';
 //     echo '<td>'.$row['Nom'].'</td>';
 //     echo '<td>'.$row['Telephone'].'</td>';
 //     echo '<td>'.$row['Mail'].'</td>';
 //   echo '</tr>';
 // echo '</table>';
 // Affiche ligne par ligne nom + tel + mail.

 //Essai 3 !!!!!!!
    echo '<tr>';
        echo '<td><a href="detailcontact.php?id='.$row['ID'].'">'.$row['Nom'].'</a></td>';
        echo '<td>'.$row['Anniversaire'].'</td>';
        echo '<td>'.$row['Telephone'].'</td>';
        echo '<td>'.$row['Mail'].'</td>';
    echo '</tr>';
}
   echo '</table>';

   echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter un contact !</button>';

 echo '</div>';
 ?>
