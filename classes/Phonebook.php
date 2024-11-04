<?php

namespace classes;

class Phonebook
{
    private $filename;

    public function __construct() {
        $this->filename = 'data/phonebook.json';
    }

    public function ucitaj_kontakte() {
        if(file_exists($this->filename)) {
            $kontakti = file_get_contents($this->filename); //cita se sadrzaj fajla instance klase
            return json_decode($kontakti, true); //dekodira iz json-a
        }

        return []; //ako fajl ne postoji
    }

    public function sacuvaj_kontakte($kontakti) { //argument enkodira u json format i upisuje u phonebook.json
        file_put_contents($this->filename, json_encode($kontakti, JSON_PRETTY_PRINT));
    }

    public function dodaj_kontakt($ime, $email, $telefon) {
        $kontakti = $this->ucitaj_kontakte(); //ucitavamo postojece kontakte
        $id = count($kontakti) + 1;
        $kontakti[] = [
            'id' => $id,
            'name' => $ime,
            'email' => $email,
            'telefon' => $telefon
        ]; //u niz dodajemo novi

        $this->sacuvaj_kontakte($kontakti); //salje se u phonebook.json
    }

    public function izmijeni_kontakt($id, $ime, $email, $telefon) {
        $kontakti = $this->ucitaj_kontakte();

        foreach ($kontakti as $kontakt) {
            if($kontakt['id'] == $id) {
                if($ime != null) {
                    $kontakt['ime'] = $ime;
                }

                if($email != null) {
                    $kontakt['email'] = $email;
                }

                if($telefon != null) {
                    $kontakt['telefon'] = $telefon;
                }

                break;
            }

            $this->sacuvaj_kontakte($kontakti);
        }
    }

    public function izbrisi_kontakt($id) {
        $kontakti = $this->ucitaj_kontakte();
        $fkontakti = array_filter($kontakti, fn($kontakt) => $kontakt['id'] == $id);
        $this->sacuvaj_kontakte($fkontakti);
    }
}