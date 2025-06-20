<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjesti iz Politike</title>
    <link rel="stylesheet" href="politika.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
         /* Uspostava veze sa sqlom*/

        require_once '../php/db_connect.php';
        $conn = connectToDB();
        /*--------------------------------*/
         $query = "SELECT article.*, slika.* FROM slika join ARTICLE
         ON slika.clanakId = article.id
         WHERE article.arhiva < 1
         AND article.kategorija='politika'
         ORDER BY article.datumObjave DESC";
         $result = $conn->query($query);
    ?>

    <?php
        session_start();
    ?>


    <div class = "d-flex flex-column" id ="wrapper">
        <main class = "custom-container text-center">
            <header>
                <?php
                    if (isset($_SESSION['logged_display'])) {
                    echo "<p style='text-align: right'>Dobro došli ". $_SESSION['logged_display'] ."!</p>";
                    }
                    else{
                    echo "<h4>Dobro došli Gost!</h4>";
                    }
                ?>
                    <nav>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div><a href="../index.php">HOME</a></div>
                            <div><a href="#">POLITIKA</a></div>
                            <div><a href="../sport/sport.php">SPORT</a></div>
                            
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



            <?php 
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
            #-----------------------------------------


                echo '<article>';

                echo '<div class="d-flex flex-column justify-content-center tekst">';
                echo "<h2 class='naslov-clanka'>" . htmlspecialchars($row['naslov']) . "</h2>";
                echo '</div>';

                echo '<div class="d-flex flex-column justify-content-center tekst">';
                echo "<h3>OBJAVLJENO DATUMA " . htmlspecialchars($row['datumObjave']) . "</h3>";
                echo '</div>';

                echo '<figure class="d-flex flex-column align-items-center">';
                echo '<img src="../images/' . htmlspecialchars($row['path']) . '" alt="slika" class="img-fluid">';
                echo '</figure>';

                echo '<hr class="separator">';

                echo '<div class="d-flex flex-column justify-content-center tekst">';
                echo "<p class='sazetak'>" . htmlspecialchars($row['sazetak']) . "</p>";
                echo "<p class='prvo-slovo'>" . htmlspecialchars($row['tekst']) . "</p>";
                echo '</div>';

                echo '<hr>';
                echo '</article>';
            #-----------------------------------------
            }
            } else {  
                echo "Greska u dohvacanju informacija";
            }
            
            ?>
            
            </main>

        </div>
        <footer class="text-center">
            <h1>Frankfurter Allgemeine</h1>
        </footer>
    
</body>
</html>