<?php
    session_start();

	include "metodusok.php";
	$users = loadUsers("../users/users.txt");
	
	$uzenet = "";

	//Bejelentkezes
	if (isset($_POST["submit-button"])) {
		if (!isset($_POST["email"]) || trim($_POST["email"]) === "" || !isset($_POST["username"]) || trim($_POST["username"]) === "" || !isset($_POST["password"]) || trim($_POST["password"]) === "") {
			$uzenet = "<strong>Hiba:</strong> Adj meg minden adatot!";
		} else {
			$email = $_POST["email"];
			$username = $_POST["username"];
			$password = $_POST["password"];

			$uzenet = "Sikertelen belépés! A belépési adatok nem megfelelők!";

			foreach ($users as $user) {
				if ($user["email"] === $email && $user["felhasznalonev"] === $username && $user["jelszo"] === $password) {
					$uzenet = "Sikeres belépés!";
					$_SESSION["user"] = $user;           //felhasznalot reprezentalo tomb tarolasa
					header("Location: profile.php");
				}
			}
		}
	}
	
?>

<!DOCTYPE html>

<html lang="hu">

<head>
    <meta name="description" content="marsi jarmuveket bemutato oldalak"/>
    <meta name="keywords" content="mars, rover, jegy, otos"/>
    <meta name="author" content="Sipos Bálint, Zöldi Péter"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <title>Bejelentkezés | Marsi Járművek</title>
    <link rel="stylesheet" type="text/css" href="../css/marsi_jarmuvek_design.css"/>
</head>

<body>
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
                        <caption><h3 id="belepes"><a href="signup.php">Bejelentkezés</a></h3></caption>
                        <thead>
                            <tr>
                                <th id="leiras"></th>
                                <th id="bevitel"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td headers="leiras">E-mail: </td>
                                <td headers="bevitel"><label><input type="email" name="email" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">Felhasználónév: </td>
                                <td headers="bevitel"><label><input type="text" name="username" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras">Jelszó: </td>
                                <td headers="bevitel"><label><input type="password" name="password" required/></label></td>
                            </tr>
                            <tr>
                                <td headers="leiras"></td>
                                <td headers="bevitel"><label><input type="hidden" id="loginID" name="customID" value="4321"></label></td>
                            </tr>
                            <tr>
                                <td headers="bevitel"><input type="reset" name="reset-button" value="Adatok törlése"/></td>
                                <td headers="bevitel"><input type="submit" name="submit-button" value="Bejelentkezés"/></td>
                            </tr>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </fieldset>
            </form>

					<p style="color:white;"><?php echo $uzenet?></p>

        </div>

</body>
</html>