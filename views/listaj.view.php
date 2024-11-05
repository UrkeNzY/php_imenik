<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

use classes\Phonebook;

require 'classes/Phonebook.php';

    $phonebook = new Phonebook();
    $kontakti = $phonebook->ucitaj_kontakte();
?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Ime i prezime</td>
            <td>Email</td>
            <td>Broj telefona</td>
        </tr>
        <?php foreach ($kontakti as $k) {
        $link = "izmijeni.php?id=" . $k['id'];
            echo "<tr>
                    <td><a href={$link}>{$k['id']}</a></td>
                    <td>{$k['name']}</td>
                    <td>{$k['email']}</td>
                    <td>{$k['telefon']}</td>
                </tr>";
        } ?>

    </table>
</body>
</html>