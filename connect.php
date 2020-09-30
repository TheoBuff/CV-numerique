<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new PDO('mysql:host=sqletud.u-pem.fr;dbname=tbuffet_db', 'tbuffet', 'wEsei2uar8'); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $sql = "INSERT INTO formulaire (prenom, nom, email, sujet, message) VALUES (:prenom, :nom, :email, :sujet, :message)";

  $attributes = array(
    'prenom' => $_POST['prenom'],
    'nom' => $_POST['nom'],
    'email' => $_POST['email'],
    'sujet' => $_POST['sujet'],
    'message' => $_POST['message']
  );

  $stmt = $db->prepare($sql);

  $stmt->execute($attributes);
  $db = null;

header('Location: index.php?success=true');
} else {
  http_response_code(500);
}
?>