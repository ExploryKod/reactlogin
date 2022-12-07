<?php
require_once "db_connexion.php";

// Permet l'accés à toute la donnée des clients de la base de donnée
$reqDisplayUser = $pdo->prepare("SELECT id, `username` FROM user");
$reqDisplayUser->execute();

$clients = $reqDisplayUser->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    "users" => $users
]);

exit();