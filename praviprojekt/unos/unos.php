<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Menu</title>
    <link rel="stylesheet" href="unos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Uspostava veze sa sqlom-->
     <?php 
     require_once '../php/db_connect.php';
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
            
                <nav>
                    <div class="d-flex flex-wrap justify-content-between">
                        <div><a href="../index.php">HOME</a></div>
                        <div><a href="../politics/politika.php">POLITIKA</a></div>
                        <div><a href="../sport/sport.php">SPORT</a></div>
                        
                        <div>
                                <a href="<?php
                                    if (isset($_SESSION['logged_status'])) {
                                    echo ($_SESSION['logged_status'] === 'admin') ? '#' : '../admin/admin.php';
                                    } else {
                                    echo '#';
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

            
            <section>
                <h4>Dodavanje Clanka</h4>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="d-flex justify-content-center align-items-center">
                    <label for="naslov">Naslov vijesti: </label>
                    <input type="text" id="naslov_input" name="naslov" class="naslov_input">
                    </div>
                    <label for="sazetak">Intrigirajući sažetak: </label><br>
                    <textarea id="sazetakArea" name="sazetak"></textarea><br>

                    <label for="clanak">Glavni tekst:</label><br>
                    <textarea id="clanakArea" name="clanak"></textarea>

                    <div class="d-flex justify-content-center align-items-center">
                        <label for="kategorija">Kategorija vijesti:</label>
                        <select id="kategorija" name="kategorija">
                        <option value="politika">Politika</option>
                        <option value="sport">Sport</option>
                        </select>

                        <label for="arhiva">Arhiva? </label>
                        <input type="checkbox" name="arhiva">
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <label for="filePicker">Odaberi naslovnu sliku:</label>
                        <input type="file" name="filePicker">
                    </div>

                     <div class="d-flex justify-content-center align-items-center">
                        <label for="opisSlike">Opis slike:</label><input type="text" id="opisSlike" name="opisSlike">
                    </div>

                    <br>
                    <div class="d-flex justify-content-center align-items-center">
                        <input type="submit" name="dodaj" class="unesiTekst" value="DODAJ NOVI ČLANAK">
                    </div>
                    <br>
                   <hr>
                   <br>
                   <br>
                            

                   <h4>Prerada postojećeg članka</h4>
                   <label for="clanakId">ID članka za preuređivanje: </label>
                   <select name="clanakId" id="clanakId">
                   <?php
                   $query = "SELECT id FROM article";
                   $result = mysqli_query($conn,$query);
                   if (mysqli_num_rows($result) > 0) {
                             while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                            }    
                        } else {
                            echo "Error";
                        }
                   ?>
                   </select>

                   <div class="d-flex justify-content-center align-items-center">
                    <label for="naslov_drugi">Novi naslov vijesti: </label>
                    <input type="text" id="naslov_drugi" name="naslov_change" class="naslov_input">
                    </div>
                    <label for="sazetak_drugi">Novi sažetak: </label><br>
                    <textarea  id="sazetak_drugi" name="sazetak_change"></textarea><br>

                    <label for="clanak_drugi">Novi tekst:</label><br>
                    <textarea id="clanak_drugi" name="clanak_change"></textarea>

                    <div class="d-flex justify-content-center align-items-center">
                        <label for="kategorija_drugi">Promijeni kategoriju vijesti:</label>
                        <select id="kategorija_drugi" name="kategorija_change">
                        <option value="politika">Politika</option>
                        <option value="sport">Sport</option>
                        </select>

                        <label for="arhiva_drugi">Premjesti u arhivu? </label>
                        <input type="checkbox" id="arhiva_drugi" name="arhiva_change">
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <label for="filePicker_drugi">Promijeni naslovnu sliku:</label>
                        <input type="file" id="filePicker_drugi" name="filePicker_change">
                    </div>

                     <div class="d-flex justify-content-center align-items-center">
                        <label for="opisSlike_drugi">Novi opis slike:</label><input type="text" id="opisSlike_drugi" name="opisSlike_change">
                    </div>

                    <br>
                    <div class="d-flex justify-content-center align-items-center">
                        <input type="submit" name="edit" class="unesiTekst" value="SPREMI PROMJENE">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center align-items-center">
                        <input type="submit" name="obrisi" class="unesiTekst" value="OBRISI CLANAK">
                    </div>
                    
                </form>

                 <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    include 'skripta.php';
                }
                ?>
            </section>
            
            </main>
            <aside class="col-md-2 col-sm-0"></aside>

            <footer class="text-center">
                <h1>Frankfurter Allgemeine</h1>
            </footer>
    
    
</body>
</html>