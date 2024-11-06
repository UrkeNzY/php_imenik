<?php
use Classes\Phonebook;

require 'classes/Phonebook.php';

$phonebook = new Phonebook();

if(isset($_GET['id'])) { #uzimamo id iz url predat kao parametar
    $id = $_GET['id'];
    $kontakt = $phonebook->ucitaj_kontakt($id); #ucitavamo da bi upisali predefinisane vrijednosti u polja

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ime = $_POST['ime_i_prezime'];
        $email = $_POST['email'];
        $telefon = $_POST['broj_telefona'];

        if(empty($ime) || empty($email) || empty($telefon)) {
            echo "Sva polja su obavezna!";
        } else {
            $phonebook->izmijeni_kontakt($id, $ime, $email, $telefon);
            echo "Kontakt je azuriran!";
        }
    }
} else {
    echo "Greska pri azuriranju!";
}



require "views/izmijeni.view.php";