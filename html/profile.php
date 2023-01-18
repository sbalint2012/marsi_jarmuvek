<?php
	session_start();
	include "metodusok.php";
  
	if (!isset($_SESSION["user"])) {
		header("Location: login.php");
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

		    <h3 id="belepes"><a href="logout.php">Kijelentkezés</a></h3>
			
        <?php

			$profilkep = "../images/profilepictures/default.jpg";      //alapertelmezett kep
			$utvonal = "../images/profilepictures/" . $_SESSION["user"]["felhasznalonev"]; //kep, ami megegyezik a felhasznalo nevevel

			$kiterjesztesek = ["png", "jpg", "jpeg"];     //profilkep lehetseges kiterjesztesei

			foreach ($kiterjesztesek as $kiterjesztes) {  //meglevo profilkepek keresese minden kiterjesztessel
				if (file_exists($utvonal . "." . $kiterjesztes)) {
					$profilkep = $utvonal . "." . $kiterjesztes;  //felhasznalo profilkepenek eleresi utvonala
				}
			}
		  
        ?>
			<form action="profile.php" method="POST" enctype="multipart/form-data">
			<table style="font-size:40;text-align:left;line-height:30px;">
			
				<tr>
					<th style="color:white;">Teljes név:</th>
					<th style="color:white;"><?php echo $_SESSION["user"]["teljesnev"]; ?></th>
				</tr>
				<tr>
					<th style="color:white;">Felhasználónév:</th>
					<th style="color:white;"><?php echo $_SESSION["user"]["felhasznalonev"]; ?></th>
				</tr>
				<tr>
					<th style="color:white;">Email:</th>
					<th style="color:white;"><?php echo $_SESSION["user"]["email"]; ?></th>
				</tr>
				<tr>
					<th style="color:white;">Neme:</th>
					<th style="color:white;"><?php echo $_SESSION["user"]["nem"] === 'man' ? "Férfi" : ($_SESSION["user"]["nem"] === 'woman' ? "Nő" : "Egyéb"); ?></th>
				</tr>
				<tr>
					<th style="color:white;">Születési dátum:</th>
					<th style="color:white;"><?php echo $_SESSION["user"]["szuletesidatum"]; ?></th>
				</tr>
				<tr>
					<th style="color:white;">Profilkép:</th>
					<th>
						<img src="<?php echo $profilkep; ?>" alt="Profilkép" height="200"/>
						<?php if ($_SESSION["user"]["felhasznalonev"] !== "default") { /* default felhasznalonak ne legyen engedelyezve a profilkep modositas */ ?>
						<?php } ?>
					</th>
				</tr>
				<tr>
					<th><input type="file" name="profile-pic"/></th>
					<th><input type="submit" name="upload-btn" value="Profilkép módosítása"/></th>
				</tr>
				
			</table>
			</form>
				<?php
				
					//profilkep modositasa

					if (isset($_POST["upload-btn"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
						$fajlfeltoltes_hiba = "";                                       //hibauzenet tarolasa
						uploadProfilePicture($_SESSION["user"]["felhasznalonev"]);      //metodusok.php-bol fuggveny meghivas

						$kit = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));    //feltoltott profilkep kiterjesztese
						$utvonal = "../images/profilepictures/" . $_SESSION["user"]["felhasznalonev"] . "." . $kit;            //feltoltott profilkep eleresi utvonala

					//ha nem volt hiba, akkor toroljuk a regi profilkepet, egyebkent irjuk ki a hibat

						if ($fajlfeltoltes_hiba === "") {
							if ($utvonal !== $profilkep && $profilkep !== "D:/Jatekok/XAMPP/htdocs/images/profilepictures/asd.jpg") {   // az ugyanolyan névvel feltöltött képet és a default.png-t nem töröljük
								unlink($profilkep);    //regi profilkep torlese
							}

							header("Location: profile.php");      //weboldal ujratoltese, hogy frissuljon
						} else {
							echo "<p>" . $fajlfeltoltes_hiba . "</p>";
						}
					}
					
				?>
			
        </div>

</body>
</html>