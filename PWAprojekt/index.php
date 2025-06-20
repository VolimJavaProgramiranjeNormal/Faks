<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="indexStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Uspostava veze sa sqlom-->
     <?php 
     require_once 'php/db_connect.php';
     $conn = connectToDB();
     ?>

     <?php
        session_start();
    ?>
    <!-- ----------aaaa---------- -->


    <div class = "row" id ="wrapper">
        <aside class="col-md-2 col-sm-0"></aside>

        <main class = "custom-container text-center col-md-8 col-sm-12">
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
                    <div><a href="#">HOME</a></div>
                    <div><a href="politics/politika.php">POLITIKA</a></div>
                    <div><a href="sport/sport.php">SPORT</a></div>
                    
                    <div>
                                <a href="<?php
                                    if (isset($_SESSION['logged_status'])) {
                                    echo ($_SESSION['logged_status'] === 'admin') ? 'unos/unos.php' : 'admin/admin.php';
                                    } else {
                                    echo 'admin/admin.php';
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

            <section class="politika-dio">
                <div class="row">
                        <article class="col-md-3 col-sm-12">
                        <hr>
                        
                        <h3>POLITIKA</h3>
                        </article>

                        <article class="col-md-3 col-sm-12">
                        <figure>
                            <?php
                                $query = 'SELECT slika.*, article.* 
                                            FROM slika 
                                            JOIN article ON slika.clanakId = article.id
                                            WHERE article.arhiva < 1 AND article.kategorija = "politika"
                                            ORDER BY slika.datumObjave DESC
                                            LIMIT 3';
                                $result = $conn->query($query);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo '<a href="clanakFokus/clanak.php?id=' . $row['clanakId'] . '">';
                                    echo '<img src="images/' . $row['path'] . '" alt="slika" class="img-fluid">';
                                    echo '<figcaption>' . $row['opis'] . '</figcaption>';
                                    echo '</a>';
                                } else {
                                    echo "Greska u dohvacanju informacija";
                                }
                            ?>
                        </figure>
                        <div class="sazetak-clanka">

                        <!--TEkst za clanak-->
                                <?php 
                                        echo "<h4>" . htmlspecialchars($row['naslov']) . "</h4>";
                                        echo "<p>" . htmlspecialchars($row['sazetak']) . "</p>";
                                ?>
                        </div>
                        </article>

                        <article class="col-md-3 col-sm-12">
                        <figure>
                             <?php
                                        $row = $result->fetch_assoc();
                                        echo '<a href="clanakFokus/clanak.php?id=' . $row['clanakId'] . '">';
                                        echo '<img src="images/' . $row['path'] . '" alt="slika" class="img-fluid">';
                                        echo "<figcaption>" . $row['opis'] . "</figcaption>";
                                        echo '</a>';
                                ?>
                        </figure>
                            <div class="sazetak-clanka">
                            <!--TEkst za clanak-->
                                <?php 
                                        echo "<h4>" . htmlspecialchars($row['naslov']) . "</h4>";
                                        echo "<p>" . htmlspecialchars($row['sazetak']) . "</p>";
                                ?>
                        </div>
                        </article>

                        <article class="col-md-3 col-sm-12">
                        <figure>
                             <?php
                                        $row = $result->fetch_assoc();
                                        echo '<a href="clanakFokus/clanak.php?id=' . $row['clanakId'] . '">';
                                        echo '<img src="images/' . $row['path'] . '" alt="slika" class="img-fluid">';
                                        echo "<figcaption>" . $row['opis'] . "</figcaption>";
                                        echo '</a>';
                                ?>
                        </figure>
                            <div class="sazetak-clanka">
                            <!--TEkst za clanak-->
                                <?php 
                                        echo "<h4>" . htmlspecialchars($row['naslov']) . "</h4>";
                                        echo "<p>" . htmlspecialchars($row['sazetak']) . "</p>";
                                ?>
                            </div>
                        </article>
                </div>
            </section>

            <section class="sport-dio">
                <div class="row">
                        <article class="col-md-3 col-sm-12">
                        <hr>
                        <h3>SPORT</h3>
                        </article>

                        <article class="col-md-3 col-sm-12">
                        <figure>
                            <?php
                                    $query = 'SELECT slika.*, article.* 
                                                from slika join article on slika.clanakId = article.id
                                                WHERE article.arhiva <1 AND article.kategorija ="sport"
                                                ORDER by slika.datumObjave DESC
                                                limit 3';
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        echo '<a href="clanakFokus/clanak.php?id=' . $row['clanakId'] . '">';
                                        echo '<img src="images/' . $row['path'] . '" alt="slika" class="img-fluid">';
                                        echo "<figcaption>" . $row['opis'] . "</figcaption>";
                                        echo '</a>';
                                    } else {
                                        echo "Greska u dohvacanju informacija";
                                    }
                                ?>
                        </figure>
                        <div class="sazetak-clanka">

                        <!--TEkst za clanak-->
                                <?php 
                                        echo "<h4>" . htmlspecialchars($row['naslov']) . "</h4>";
                                        echo "<p>" . htmlspecialchars($row['sazetak']) . "</p>";
                                ?>
                        </div>
                        </article>

                        <article class="col-md-3 col-sm-12">
                        <figure>
                             <?php
                                        $row = $result->fetch_assoc();
                                        echo '<a href="clanakFokus/clanak.php?id=' . $row['clanakId'] . '">';
                                        echo '<img src="images/' . $row['path'] . '" alt="slika" class="img-fluid">';
                                        echo "<figcaption>" . $row['opis'] . "</figcaption>";
                                        echo '</a>';
                                ?>
                        </figure>
                            <div class="sazetak-clanka">
                            <!--TEkst za clanak-->
                                <?php 
                                        echo "<h4>" . htmlspecialchars($row['naslov']) . "</h4>";
                                        echo "<p>" . htmlspecialchars($row['sazetak']) . "</p>";
                                ?>
                            </div>
                        </article>

                        <article class="col-md-3 col-sm-12">
                        <figure>
                             <?php
                                        $row = $result->fetch_assoc();
                                        echo '<a href="clanakFokus/clanak.php?id=' . $row['clanakId'] . '">';
                                        echo '<img src="images/' . $row['path'] . '" alt="slika" class="img-fluid">';
                                        echo "<figcaption>" . $row['opis'] . "</figcaption>";
                                        echo '</a>';
                                ?>
                        </figure>
                            <div class="sazetak-clanka">
                            <!--TEkst za clanak-->
                                <?php 
                                        echo "<h4>" . htmlspecialchars($row['naslov']) . "</h4>";
                                        echo "<p>" . htmlspecialchars($row['sazetak']) . "</p>";
                                ?>
                            </div>
                        </article>
                </div>
            </section>
            
            </main>
            <aside class="col-md-2 col-sm-0"></aside>

            <footer class="text-center">
                <h1>Frankfurter Allgemeine</h1>
            </footer>
    </div>
    
</body>
</html>