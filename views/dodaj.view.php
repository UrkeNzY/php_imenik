<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phonebook</title>
</head>
<body>
<h1>Unesi kontakt</h1>
<form method="POST" action="../dodaj.php"> <!--forma preko POST-a salje vrijednosti input polja, action se navodi da
                                               bi znali kojem fajlu saljemo, u suprotnom je po default-u ovaj fajl
                                            -->
    <label for="ime_i_prezime">Ime i prezime:</label>
    <input id="ime_i_prezime" name="ime_i_prezime" type="text" /> <!-- name parametri odgovaraju imenima argumenata za POST u dodaj.php-->
    <br/>
    <label for="email">Email:</label>
    <input id="email" name="email" type="email" />
    <br/>
    <label for="broj_telefona">Broj telefona:</label>
    <input id="broj_telefona" name="broj_telefona" type="number" />
    <br/>
    <button type="submit">Dodaj</button>
</form>
<a href="listaj.php">Idi na listu kontakata</a>
</body>
</html>