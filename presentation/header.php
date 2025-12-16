<?php

$host = "localhost";
$db   = "tp";
$user = "root";
$pass = "Fab.Charb";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}

$stmt = $pdo->query("SELECT * FROM actu ORDER BY Date DESC LIMIT 5");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Actualité</title>
</head>
<body>
<header>
<div id="h_p">
    <div>
        <a href="index.php"><img src="img/logo.jpg"></a>
    </div>
    <div>
        <a href="index.php">Accueil</a>
    <div>
</header>