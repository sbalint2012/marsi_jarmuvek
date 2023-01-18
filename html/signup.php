<?php
	session_start();
  	include "metodusok.php";
?>

<!DOCTYPE html>

<html lang="hu">

<head>
    <meta name="description" content="marsi jarmuveket bemutato oldalak"/>
    <meta name="keywords" content="mars, rover, jegy, otos"/>
    <meta name="author" content="Sipos Bálint, Zöldi Péter"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <title>Regisztráció | Marsi Járművek</title>
    <link rel="stylesheet" type="text/css" href="../css/marsi_jarmuvek_design.css"/>
</head>

<body>

<?php
    //Meglevo felhasznalok beolvasasa a fajlbol
	$users = loadUsers("../users/users.txt");

    $hibak = []; //Hibak tarolasara tomb letrehozasa

    //Adatok elkuldese

    if (isset($_POST["submit-button"])) { //Gomb megnyomasa utan 

         //Valtozokba alapertek vagy a mezok ertekenek eltarolasa

        $teljesnev=$_POST["full-name"];
        $felhasznalonev=$_POST["username"];
        $email=$_POST["email"];
        $jelszo=$_POST["password"];
        $jelszoujra=$_POST["password-check"];
        $szuletesidatum="1900-01-01";
        $nem=$_POST["sex"];

        //Ha a nem kotelezoek meg vannak adva, akkor helyettesitse be a valtozoba
        
        if (isset($_POST["date-of-birth"])){    //same
            $szuletesidatum=$_POST["date-of-birth"];
        }    
                    
        //Teljes nev megadasanak ellenorzese

        if (!isset($_POST["full-name"]) || trim($_POST["full-name"]) === ""){   //ha nem adta meg a teljes nevet (ures a mezo vagy csak szokozt tartalmaz)
            $hibak[] = "Adja meg a teljes nevét.";
        }

        //Felhasznalonev kitoltesenek ellenorzese

        if (!isset($_POST["username"]) || trim($_POST["username"]) === ""){ 
            $hibak[] = "Adjon meg egy felhasználónevet.";
        }

        //Jelszo kitoltesenek ellenorzese

        if (!isset($_POST["password"]) || trim($_POST["password"]) === ""){ 
            $hibak[] = "Adja meg a jelszót.";
        }

        if (strpos($_POST["username"], ' ') !== false) {                //ellenorzi,hogy a felhasznalonev tartalmaz-e szokozt
            $hibak[] = "A felhasználónév nem tartalmazhat szóközt!";
        }

        if ($teljesnev===$felhasznalonev) {                              //a felhasznalonev nem lehet ugyanaz mint  a teljes nev
            $hibak[] = "Felhasználó és teljes név nem egyezhet meg!";
        }

        if(strlen($_POST["password"])<8) {                             //Ellenorzi, hogy a elszo legalabb 8 karakter hosszzu
            $hibak[] = "A jelszó minimum hosszúsága 8 karakter!";
        }   

        if(preg_match_all("/[A-Z]/",$_POST["password"])<1){             //jelszó tartalmaz-e nagybetűt
            $hibak[] = "A jelszóban minimum 1 nagybetű szükséges!";
        }

        if (!isset($_POST["aszfcheck"])){ 
            $hibak[] = "Nincs elfodadva az ÁSZF.";
        }
     
        //A jelszok azonossaganak ellenorzese

        if ($jelszo !== $jelszoujra)                //ha a ket jelszo elter
        {
            $hibak[] = "A két jelszó nem egyezik!"; //akkor az apollo 13 elvetette a celt (hozzaadja a tombhoz a hibat)
        }
                    
        //Foglalt felhasznalonev kereses

        foreach ($users as $fh) {
            if ($fh["felhasznalonev"] === $felhasznalonev){     //vegignezi es osszehasonlitja a tombben levo felhasznalokat a megadottal
                $hibak[] = "A felhasználónév már foglalt!";     //ha egyezest talal akkor a felhasznalonev foglalt, es a hibat a tombhoz adja
            }
        }

        //Felhasznalo letrehozasa

        if (count($hibak) === 0) {                      //ha nincs hiba akkor
            $users[] = ["felhasznalonev" => $felhasznalonev, "jelszo" => $jelszo, "teljesnev" => $teljesnev, "email" => $email, "szuletesidatum" => $szuletesidatum, "nem" => $nem];  //adja a tombhoz a megadott adatokat
			saveUsers("../users/users.txt", $users);

            $siker = TRUE;      //kesobb ezzel lesz ellenorizve hogy sikerult-e a regisztracio (igen)
        } 
        else {                    
            $siker = FALSE;     //nem sikerult a regisztracio
        }        
    }            
?>

    <nav>
        <ul class="listamenu">
		
		<?php if (isset($_SESSION["user"])) { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="profile.php" class="jelenlegi lista">Profil</a></li>
		<?php } else { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="login.php" class="jelenlegi lista">Bejelentkezés</a></li>
			<?php } ?>
			
        </ul>
    </nav>

        <div class="loginpanel">

            <form method="POST">
                <fieldset>
                    <table>
                        <caption><h3 id="reg"><a href="login.php"> Regisztráció </a></h3></caption>
                        <thead>
                            <tr>
                                <th id="leiras"></th>
                                <th id="bevitel"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td headers="leiras">Teljes név: </td>
                                <td headers="bevitel"><label><input type="text" name="full-name" size="25" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">Felhasználónév: </td>
                                <td headers="bevitel"><label><input type="text" name="username" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">E-mail: </td>
                                <td headers="bevitel"><label><input type="email" name="email" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">Jelszó: </td>
                                <td headers="bevitel"><label><input type="password" name="password" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">Jelszó ismét: </td>
                                <td headers="bevitel"><label><input type="password" name="password-check" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">Születési dátum: </td>
                                <td headers="bevitel"><label><input type="date" name="date-of-birth" min="1920-01-01" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">Nem: </td>
                                <td headers="bevitel">
                                    <label for="sex"></label>
                                    <select id="sex" name="sex">
                                        <option value="man">Férfi</option>
                                        <option value="woman">Nő</option>
                                        <option value="other" selected>Egyéb</option>
                                    </select> <br/>
                                </td>
                            </tr>
                            <tr>
                                <td headers="leiras">Elfogadja az ÁSZF-et?</td>
                                <td headers="bevitel"><label><input type="checkbox" name="aszfcheck" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras"></td>
                                <td headers="bevitel"><label><input type="hidden" id="signupID" name="customID" value="1234"></label></td>
                            </tr>
                            <tr>
                                <td headers="bevitel"><input type="reset" name="reset-button" value="Adatok törlése"/></td>
                                <td headers="bevitel"><input type="submit" name="submit-button" value="Regisztrálás"/></td>
                            </tr>
                        </tbody>

                    </table>


                </fieldset>
                <?php
                        if (isset($siker) && $siker === TRUE) {       //ha sikerukt a regisztracio
                            echo "<h1>Sikeres regisztráció!</h1>";    //kiirja hogy sikerult
                        } 
                        else {                                        //ha nem sikerult
                            foreach ($hibak as $hiba) {
                                echo "<h1>" . $hiba . "</h1><br/>";        //kiirja a hibak tombben tarolt hibakat
                            }
                        }
                    ?>
            </form>

        </div>

</body>
</html>