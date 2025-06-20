<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procitaj Clanak</title>
    <link rel="stylesheet" href="clanak.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();

         if (isset($_GET['id'])) {
            $slikaId = $_GET['id'];
         }

         /* Uspostava veze sa sqlom*/

        require_once '../php/db_connect.php';
        $conn = connectToDB();
        /*--------------------------------*/
         $query = "SELECT article.*, slika.* FROM slika join ARTICLE
         ON slika.clanakId = article.id
         WHERE article.id = $slikaId";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {  
            echo "Greska u dohvacanju informacija";
        }
    ?>


    <div class = "d-flex flex-column" id ="wrapper">
        <main class = "custom-container text-center">
            <header>
                    <nav>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div><a href="../index.php">HOME</a></div>
                            <div><a href="../politics//politika.php">POLITIKA</a></div>
                            <div><a href="#">SPORT</a></div>
                            <div>
                                <a href="<?php
                                    if (isset($_SESSION['logged_status'])) {
                                    echo ($_SESSION['logged_status'] === 'admin') ? '../unos/unos.php' : '../admin/admin.php';
                                    } else {
                                    echo '../admin/admin.php';
                                    }
                                ?>">
                                    ADMINISTRACIJA
                                </a>
                            </div>
                            
                        </div>
                    </nav>
                    <hr>
                    <h1 class = "naslov">Frankfurter Allgemeine</h1>
            </header>

            <hr>

            <article>
            <div class="d-flex flex-column justify-content-center tekst">
                <?php
                    echo "<h2 class = 'naslov-clanka'>" . htmlspecialchars($row['naslov']) . "</h2>";
                    ?>
            </div>
            <div class="d-flex flex-column justify-content-center tekst">
                    <?php
                    echo "<h3>OBJAVLJENO DATUMA " . htmlspecialchars($row['datumObjave']) . "</h3>";
                    ?>
            </div>
            <figure class="d-flex flex-column align-items-center">
                    <?php
                    echo '<img src="../images/' . $row['path'] . '" alt="slika" class="img-fluid">';
                    ?>
            
            </figure>
            <hr class="separator">

            <div class="d-flex flex-column justify-content-center tekst">
                    <?php
                    echo "<p class = 'sazetak'>" . htmlspecialchars($row['sazetak']) . "</p>";
                    ?>
                    <?php
                    echo "<p class='prvo-slovo'>" . htmlspecialchars($row['tekst']) . "</p>";
                    ?>
                
            </div>
            </article>
            </main>

        </div>
        <footer class="text-center">
            <h1>Frankfurter Allgemeine</h1>
        </footer>
    
</body>
</html>