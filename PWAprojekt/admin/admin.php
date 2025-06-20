<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php
    session_start();
    ?>
    <div class = "d-flex flex-column" id ="wrapper">
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
                            <div><a href="../index.php">HOME</a></div>
                            <div><a href="../politics/politika.php">POLITIKA</a></div>
                            <div><a href="../sport/sport.php">SPORT</a></div>

                            <div>
                                <a href="<?php
                                    if (isset($_SESSION['logged_status'])) {
                                    echo ($_SESSION['logged_status'] === 'admin') ? '../unos/unos.php' : '#';
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

            <div class="d-flex justify-content-center">
                <img src="slike/handshake.png" alt="handshake" class="cover-img">
            </div>
            <div class="row text-center">
                <h2 class="col-12">Upišite podatke za administraciju:</h2>
            </div>


            <form action="" method="post">
                <hr>
            <div class="d-flex justify-content-center input-field">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username">
            </div>
            <div class="d-flex justify-content-center input-field">
                <label for="password">Password: </label>
                <input type="password" id="password" name = "pass" autocomplete="off">
            </div>

            <h5 class="register-here">Nemate račun? Registrirajte se <a href="../register/register.php">ovdje</a></h5>

            <div class ="d-flex justify-content-center">
                <input type="submit" value="LOGIN" id="login">
            </div>
            </form>
            
            <?php
                require 'loginValidation.php';
            ?>
            
            </main>

        </div>
        <footer class="text-center">
            <h1>Frankfurter Allgemeine</h1>
        </footer>
    
</body>
</html>