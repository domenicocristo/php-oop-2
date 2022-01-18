<?php

use Dipendente as GlobalDipendente;

class Persona {
    private $nome;
    private $cognome;
    private $dataNascita;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;

    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    public function getDataNascita() {
        return $this->dataNascita;
    }

    public function setDataNascita($dataNascita) {
        $this->dataNascita = $dataNascita;
    }

    public function printFullPerson() {
        return $this->getNome() . " " . $this->getCognome() . ": " . $this->getDataNascita();
    }

    public function __toString() {
        return $this->printFullPerson();
    }
}

$P1 = new Persona("Antonio", "D'Angelo");
$P2 = new Persona("Nico", "Bianco");
$P3 = new Persona("Rocco", "Serra");

$P1->setDataNascita("01/01/2000");
$P2->setDataNascita("02/02/2000");
$P3->setDataNascita("03/03/2000");

echo $P1 . "<br>";
echo $P2 . "<br>";
echo $P3 . "<br>";

echo "<br>------------------------------------------------------<br><br>";

class Dipendente extends Persona {
    private $stipendio;
    private $dataAssunzione;

    public function __construct($nome, $cognome, $stipendio) {
        parent::__construct($nome, $cognome);
        $this->stipendio = $stipendio;
    }

    public function getStipendio() {
        return $this->stipendio;
    }

    public function setStipendio($stipendio) {
        $this->stipendio = $stipendio;
    }

    public function getDataAssunzione() {
        return $this->dataAssunzione;
    }

    public function setDataAssunzione($dataAssunzione) {
        $this->dataAssunzione = $dataAssunzione;
    }

    public function printFullDipendente() {
        return $this->getNome() . " " . $this->getCognome() . ": " . $this->getStipendio() . " " . "(" . $this->getDataAssunzione() . ")";
    }

    public function __toString() {
        return $this->printFullDipendente();
    }
}

$D1 = new Dipendente("Antonio", "D'Angelo", "2'000,00$");
$D2 = new Dipendente("Nico", "Bianco", "2'000,00$");
$D3 = new Dipendente("Rocco", "Serra", "2'000,00$");

$D1->setDataAssunzione("01/01/2020");
$D2->setDataAssunzione("02/02/2020");
$D3->setDataAssunzione("03/03/2020");

echo $D1 . "<br>";
echo $D2 . "<br>";
echo $D3 . "<br>";
?>