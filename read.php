<?php

  require('config.php');

  $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

  $pdo = require('util/getPdo.php');
  $sql = "USE php_pdo_crud_proeftoets";
  $statement = $pdo->prepare($sql);

  $sql = "SELECT * FROM DureAuto ORDER BY Prijs desc";

  $statement = $pdo->prepare($sql);
  $statement->execute();

  $result = $statement->FetchAll(PDO::FETCH_OBJ);

  $rows = "";
  foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->Merk</td>
                <td>$info->Model</td>
                <td>$info->Topsnelheid</td>
                <td>$info->Prijs</td>
                <td>
                    <a href='delete.php?Id=$info->Id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
                </td>
              </tr>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dure Autos</h3>
    <br>
    <br>
    <table border='1'>
        <thead>
            <th>Merk</th>
            <th>Model</th>
            <th>Topsnelheid</th>
            <th>Prijs</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>
</html>

