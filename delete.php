<?php
require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

$pdo = require('util/getPdo.php');

$sql = "DELETE FROM DureAuto WHERE Id = :Id";

$statement = $pdo->prepare($sql);
$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

$res = $statement->execute();

if ($res) {

    echo "Verwijderd";
    header('Refresh:1; url=read.php');
} else {
    echo "Niet verwijderd";
    header('Refresh:1; url=read.php');
}


