<?php
class Persona {
    private $nome;
    private $cognome;
    private $dataNascita;

    public function __construct($nome, $cognome) {
        $this -> nome = $nome;
        $this -> cognome = $cognome;

    }

    public function getNome() {
        return $this -> nome;
    }

    public function getCognome() {
        return $this -> cognome;
    }

    public function getDataNascita() {
        return $this -> dataNascita;
    }

    public function printFullPerson() {
        return $this -> nome . " " . $this -> cognome . ": " . $this -> dataNascita;
    }

    public function __toString() {
        return $this -> printFullPerson();
    }
}

class Dipendente {
    private $stipendio;
    private $dataAssunzione;

    public function __construct($nome, $cognome, $stipendio) {
        $this -> nome = $nome;
        $this -> cognome = $cognome;
        $this -> stipendio = $stipendio;

    }

    public function getStipendio() {
        return $this -> stipendio;
    }

    public function getDataAssunzione() {
        return $this -> dataAssunzione;
    }

    public function printFullDipendente() {
        return $this -> nome . " " . $this -> cognome . ": " . $this -> stipendio . "(" . $this -> dataAssunzione . ")";
    }

    public function __toString() {
        return $this -> printFullDipendente();
    }
}

$P1 = new Persona("Antonio", "D'Angelo");
$P2 = new Persona("Nico", "Bianco");
$P3 = new Persona("Rocco", "Serra");

$P1 -> dataNascita = "01/01/2000";
$P2 -> dataNascita = "02/02/2000";
$P1 -> dataNascita = "03/03/2000";

echo $P1 . "<br>";
echo $P2 . "<br>";
echo $P3 . "<br>";
?>