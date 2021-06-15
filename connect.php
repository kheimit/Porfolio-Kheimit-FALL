<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$Email = $_POST['email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];
//connexion base de donnée
$conn = new mysqli ('127.0.0.1' ,'root' , 'nasta');
if ($conn->connect_error){
    die('connection Failed:' .$conn->connect_error);}

else{
    $stmt = $conn->prepare("insert into registration(nom, prenom, email, Subject, Message")");
    $stmt->bind_param("sssssi",$nom, $prenom, $email, $Subject, $Message);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $stmt->close();
}
?>