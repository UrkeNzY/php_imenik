<?php
use Classes\Phonebook;

require 'classes/Phonebook.php';

$phonebook = new Phonebook();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $phonebook->izbrisi_kontakt($id);
}

require 'views/izbrisi.view.php';