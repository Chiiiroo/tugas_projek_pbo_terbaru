<?php
class Pelanggan {
    public $firstname;
    public $lastname;
    public $phoneNumber;
    public $address;

    public function __construct($f, $l, $p, $a) {
        $this->firstname = $f;
        $this->lastname = $l;
        $this->phoneNumber = $p;
        $this->address = $a;
    }

    public function tampilkanNama() {
        return "Hi, my name is " . $this->firstname . " " . $this->lastname;
    }

    public function tampilkanKontak() {
        return "Phone Number: " . $this->phoneNumber . "<br>Address: " . $this->address;
    }
}
?>