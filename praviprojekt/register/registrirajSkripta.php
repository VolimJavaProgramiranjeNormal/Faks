<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    #za spajanje na bazu
    require_once '../php/db_connect.php';
    $conn = connectToDB();
    #----------------


    if (!empty($_POST['ime']) && !empty($_POST['prezime']) &&
        !empty($_POST['username']) && !empty($_POST['password']) &&
        !empty($_POST['password1'])) {

        $ime = trim($_POST['ime']);
        $prezime = trim($_POST['prezime']);
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $password1 = $_POST['password1'];

        if ($password !== $password1) {
            echo "<h5 class='upozorenje'>Lozinke se moraju podudarati!</h5>";
        } else {
            $query ="select * from korisnik where username = '$username'";
            $result= $conn->query($query);

            if (mysqli_num_rows($result) > 0){
            echo "<h5 class='upozorenje'>Korisnik sa takvim nadimkov već postoji.</h5>";
            }
            else{
                #sve pase
                $hashirana_lozinka = password_hash($password,CRYPT_BLOWFISH);
                $query = "INSERT INTO korisnik(ime,prezime,username,password,adminStatus)
                          VALUES ('$ime','$prezime','$username','$hashirana_lozinka',0)";
                $conn->query($query);

                
                echo "<h5 class='uspjeh'>Registracija uspješna, dobrodošli u Frankfurter Allgemeine $ime!</h5>";
            }
        }

    } else {
        echo "<h5 class='upozorenje'>Sva polja moraju biti popunjena za registraciju.</h5>";
    }
}
?>