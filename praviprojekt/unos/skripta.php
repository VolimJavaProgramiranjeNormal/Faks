<?php
require_once '../php/db_connect.php';
$conn = connectToDB();

if (isset($_POST['dodaj'])) {
    //DODAJ
    if (!empty($_POST['naslov']) && !empty($_POST['sazetak']) && !empty($_POST['clanak']) && !empty($_POST['opisSlike']) && isset($_FILES['filePicker'])) {

        $naslov = $_POST['naslov'];
        $sazetak = $_POST['sazetak'];
        $clanak = $_POST['clanak'];
        $kategorija = $_POST['kategorija'];
        $arhiva = isset($_POST['arhiva']) ? 1 : 0;
        $opisSlike = $_POST['opisSlike'];

        $fileName = basename($_FILES['filePicker']['name']);
        $localSave = "../images/$fileName";
        move_uploaded_file($_FILES['filePicker']['tmp_name'], $localSave);

        $clanakQuery = "INSERT INTO ARTICLE (naslov, sazetak, tekst, datumObjave, kategorija, arhiva) VALUES (?, ?, ?, CURDATE(), ?, ?)";
        $stmt = $conn->prepare($clanakQuery);
        $stmt->bind_param("ssssi", $naslov, $sazetak, $clanak, $kategorija, $arhiva);
        $stmt->execute();

        $clanakId = $conn->insert_id;

        $slikaQuery = "INSERT INTO slika (opis, alt, datumObjave, path, clanakId) VALUES (?, ?, CURDATE(), ?, ?)";
        $stmt = $conn->prepare($slikaQuery);
        $alt = "Slikica Tikica Mikica";
        $stmt->bind_param("sssi", $opisSlike, $alt, $fileName, $clanakId);
        $stmt->execute();
        echo "<h4>Clanak uspjesno dodan!</h4>";
    } else {
        echo "POPUNI SVE KUCICEE!!!!!!!";
    }
} elseif (isset($_POST['edit'])) {
        if (!empty($_POST['clanakId'])) {
        $clanakId = $_POST['clanakId'];

        if (!empty($_POST['naslov_change'])) {
            $naslov = $_POST['naslov_change'];
            $stmt = $conn->prepare("UPDATE ARTICLE SET naslov = ?, datumObjave = CURDATE() WHERE id = ?");
            $stmt->bind_param("si", $naslov, $clanakId);
            $stmt->execute();
        }

        if (!empty($_POST['sazetak_change'])) {
            $sazetak = $_POST['sazetak_change'];
            $stmt = $conn->prepare("UPDATE ARTICLE SET sazetak = ?, datumObjave = CURDATE() WHERE id = ?");
            $stmt->bind_param("si", $sazetak, $clanakId);
            $stmt->execute();
        }

        if (!empty($_POST['clanak_change'])) {
            $tekst = $_POST['clanak_change'];
            $stmt = $conn->prepare("UPDATE ARTICLE SET tekst = ?, datumObjave = CURDATE() WHERE id = ?");
            $stmt->bind_param("si", $tekst, $clanakId);
            $stmt->execute();
        }

        if (!empty($_POST['kategorija_change'])) {
            $kategorija = $_POST['kategorija_change'];
            $stmt = $conn->prepare("UPDATE ARTICLE SET kategorija = ?, datumObjave = CURDATE() WHERE id = ?");
            $stmt->bind_param("si", $kategorija, $clanakId);
            $stmt->execute();
        }

        if (isset($_POST['arhiva_change'])) {
            $arhiva = 1; 
            $stmt = $conn->prepare("UPDATE ARTICLE SET arhiva = ?, datumObjave = CURDATE() WHERE id = ?");
            $stmt->bind_param("ii", $arhiva, $clanakId);
            $stmt->execute();
        }

        if (!empty($_POST['opisSlike_change'])) {
            $opisSlike = $_POST['opisSlike_change'];
            $stmt = $conn->prepare("UPDATE slika SET opis = ?, datumObjave = CURDATE() WHERE clanakId = ?");
            $stmt->bind_param("si", $opisSlike, $clanakId);
            $stmt->execute();
        }

        if (!empty($_FILES['filePicker_change']['name'])) {
            $fileName = basename($_FILES['filePicker_change']['name']);
            $localSave = "../images/$fileName";
            move_uploaded_file($_FILES['filePicker_change']['tmp_name'], $localSave);

            $stmt = $conn->prepare("UPDATE slika SET path = ?, datumObjave = CURDATE() WHERE clanakId = ?");
            $stmt->bind_param("si", $fileName, $clanakId);
            $stmt->execute();
        }

        echo "<h4>Clanak uspjesno ažuriran!</h4>";
    }
    else{
        echo "Za preradu članka mora biti odabran ID!";
    }
}
elseif (isset($_POST['obrisi'])){
$clanakId = $_POST['clanakId'];
$stmt = $conn->prepare("DELETE FROM article WHERE id = ?");
$stmt->bind_param("i", $clanakId);
$stmt->execute();
echo "<h4>Clanak uspjesno izbrisan!</h4>";
}
else{
    echo "Greska luda greska jao covjece";
}
?>