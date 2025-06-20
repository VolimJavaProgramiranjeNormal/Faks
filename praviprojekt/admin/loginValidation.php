<?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                require_once '../php/db_connect.php';
                $conn = connectToDB();

                if (!empty($_POST['username']) && !empty($_POST['pass'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];

                $query = "SELECT password,adminStatus,ime,prezime FROM korisnik where username='$username'";
                $result = $conn->query($query);
                

                    if (mysqli_num_rows($result)>0){
                        $row = $result->fetch_assoc();
                        if(password_verify($pass, $row['password'])){
                            #uspjesno ulogiran 
                            if($row['adminStatus'] > 0){
                                $_SESSION["logged_username"] = $username;
                                $_SESSION["logged_display"] = 'admin '. $row['ime'] . ' ' . $row['prezime'];
                                $_SESSION["logged_status"] = "admin";
                                header("Location: ../unos/unos.php");
                                exit;
                            }
                            else{
                                #obicni korisnik
                                echo "<h5 class='upozorenje'>Login uspjesan, dobro dosli ".$row['ime']."!</h5>";
                                $_SESSION["logged_username"] = $username;
                                $_SESSION["logged_display"] = $row['ime'] . ' ' . $row['prezime'];
                                $_SESSION["logged_status"]="user";
                            }
                           
                        }
                        else{
                            echo "<h5 class='upozorenje'>Pogresna lozinka!</h5>";
                        }
                    }
                    else{
                        #korisnik ne postoji
                        echo "<h5 class='upozorenje'>KORISNIK NIJE PRONAĐEN</h5>";
                    }
                } else {
                #prazna polja
                echo "<h5 class='upozorenje'>OBA POLJA MORAJU BITI POPUNJENA!</h5>";
                }
            }
?>