<?php
use Classes\Phonebook;

require 'classes/Phonebook.php';

$phonebook = new Phonebook();

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $kontakt = $phonebook->ucitaj_kontakt($id);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ime = $_POST['ime_i_prezime'];
        $email = $_POST['email'];
        $telefon = $_POST['broj_telefona'];
        echo $id . " " . $ime . " " . $email . " " . $telefon;
        $phonebook->izmijeni_kontakt($id, $ime, $email, $telefon);
        echo "Kontakt je azuriran!";
    }
} else {
    echo "Greska pri azuriranju!";
}



require "views/izmijeni.view.php";