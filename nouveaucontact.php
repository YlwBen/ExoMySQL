<?php
// ESSAI 1 !!!!!!!!!!!!!!!!!!!! A INCLUDE POUR TESTER !
// $sql = "INSERT INTO Contact (Nom, IDGrp, Mail, Telephone, Anniversaire)
// VALUES ('Antoine', '3', 'Antoine@example.com', '00.00.00.00.00', '1974-03-08')";
//
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
//
// mysqli_close($conn);

//ESSAI 2 !!!!!!!!!!!! Avec le FORM en HTML !
include('connection.php');

$Nom = $_POST['Nom'];
$Anniversaire = $_POST['Anniversaire'];
$Telephone = $_POST['Telephone'];
$Mail = $_POST['Mail'];

print_r($_POST);

$res = mysqli_query($conn,"INSERT INTO Contact (Nom, Anniversaire, Telephone, Mail) VALUES ('$Nom', '$Anniversaire', '$Telephone', '$Mail')");

if ($res){
    echo 'Le contact est ajouté.';
} else {
    echo "Error: " . $res . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
