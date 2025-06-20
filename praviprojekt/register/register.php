<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class = "d-flex flex-column" id ="wrapper">
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

            <div class="row text-center">
                <h2 class="col-12">Postanite član:</h2>
            </div>


            <form action="" method="post">
            <div class="d-flex justify-content-center input-field">
                <label for="ime">Ime: </label>
                <input type="text" id="ime" name="ime">
            </div>
            <div class="d-flex justify-content-center input-field">
                <label for="prezime">Prezime: </label>
                <input type="text" id="prezime" name="prezime">
            </div>
            <div class="d-flex justify-content-center input-field">
                <label for="username">Nadimak: </label>
                <input type="text" id="username" name="username">
            </div>
            <hr>
            <div class="d-flex justify-content-center input-field">
                <label for="password">Lozinka: </label>
                <input type="text" id="password" name="password">
            </div>
            <div class="d-flex justify-content-center input-field">
                <label for="password1">Potvrdi lozinku: </label>
                <input type="password" id="password1" name="password1">
            </div>

            <div class ="d-flex justify-content-center">
                <input type="submit" value="REGISTRIRAJ SE" id="login">
            </div>
            </form>
            
            <?php
                require 'registrirajSkripta.php';
            ?>
            
            </main>

        </div>
        <footer class="text-center">
            <h1>Frankfurter Allgemeine</h1>
        </footer>
    
</body>
</html>