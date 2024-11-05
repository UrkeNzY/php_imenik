<?php

use classes\Phonebook;

require 'classes/Phonebook.php';

$phonebook = new Phonebook();
$kontakti = $phonebook->ucitaj_kontakte();

require "views/listaj.view.php";