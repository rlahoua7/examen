                <?php 
                         session_start();

                         if(isset($_SESSION['user_name'])){
                            $gebruikersnaam = $_SESSION["user_name"];
                            echo "<li>Hallo, $gebruikersnaam </li>";
                            echo "<li><a href='paketten.php'>Paketten</a></li>";
                            echo "<li><a href='uitloggen/uitloggen.php'>uitloggen</a></li>";
                            echo "<li><a href='wachtwoord-vergeten.php'>wachtwoordvergeten</a></li>";
                         }else{
                            echo "<li><a href='login/index.php'>Inloggen</a></li>";
                            echo "<li><a href='registreren/index.php'>Registreren</a></li>";
                         }
                        
                    ?>
    
