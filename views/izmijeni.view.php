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
    <h1>Izmijeni kontakt</h1>
    <form method="POST" action="izmijeni.php?id=<?= $kontakt['id'] ?>">
        <label for="ime_i_prezime">Ime i prezime:</label>
        <input id="ime_i_prezime" name="ime_i_prezime" type="text" value="<?= $kontakt['name'] ?>"} />
        <br/>
        <label for="email">Email:</label>
        <input id="email" name="email" type="email" value="<?= $kontakt['email'] ?>"/>
        <br/>
        <label for="broj_telefona">Broj telefona:</label>
        <input id="broj_telefona" name="broj_telefona" type="number" value="<?= $kontakt['telefon'] ?>" />
        <br/>
        <button type="submit">Izmijeni</button>
    </form>
</body>
</html>