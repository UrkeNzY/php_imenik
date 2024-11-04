<?php
require 'classes/Phonebook.php';
use Classes\Phonebook;

$phonebook = new Phonebook();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $_POST['ime_i_prezime'] ?? '';
    $email = $_POST['email'] ?? '';
    $broj_telefona = $_POST['broj_telefona'] ?? '';

    if(empty($ime) || empty($email) || empty($broj_telefona)){
        echo "Sva polja su obavezna!";

    } else {
        echo "Kontakt uspjesno dodat!";
    }

    $phonebook->dodaj_kontakt($ime, $email, $broj_telefona);
}

require 'views/dodaj.view.php';