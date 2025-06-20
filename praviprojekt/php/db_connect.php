<?php
function connectToDB() {
    $host = 'localhost';    
    $korisnik = 'root';      
    $lozinka = '';           
    $baza = 'projekt';      
    $conn = new mysqli($host, $korisnik, $lozinka, $baza);
    if ($conn->connect_error) {
        die("Nije moguce uspostaviti vezu sa SQL serverom, zatvaram program." . $conn->connect_error);
    }

    return $conn;
}
?>