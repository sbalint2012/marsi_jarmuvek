<?php

	//Meglevo felhasznalok beolvasasa a fajlbol
	function loadUsers($path) {
		$users = [];                    			//tomb letrehozasa a felhasznaloknak

		$file = fopen($path, "r");      			//fajl megnyitasa csak olvasara
		if ($file === FALSE) {          			//ha nem letezik a fajl
			die("Houston, we have a problem.");
		}           
		while (($line = fgets($file)) !== FALSE) {  //fajl beolvasasa soronkent
		$user = unserialize($line);                 //sor visszaalakitasa tommbe
		$users[] = $user;                           //a visszaalakitott sor hozzadasa a tombhoz
		}
		fclose($file);  							//fajl bezarasa
		return $users;
		
	}
	
	
	//Felhasznalo letrehozasa ( kimentése fájlba )
	function saveUsers($path, $users) {
		$file = fopen($path, "w");                    //felhasznalokat tartalmazo fajl megnyitasa
		if ($file === FALSE){                     	  //ha nem birja megnyitni a fajlt kiirja a hibat
			die("Houston, we have a problem.");    	  //kiirando hiba
		}
	
		foreach($users as $user) {                    //tombbon vegigmegy soronkent
			$serialized_user = serialize($user);      //atalakitja az adott sort bajtsorozatta, igy eltarolhato a fajlban
			fwrite($file, $serialized_user . "\n");   //az atalakitott sort kiirja a fajlba, vegen sortores
		}
		fclose($file);
	}
	
	
	//Profilkép feltöltése
	function uploadProfilePicture($username) { 
		global $fajlfeltoltes_hiba;    //ez a valtozo abban a fajlban talalhato, ahol a fuggvenyt meghivjuk, ezert ujra deklaraljuk globaliskent

		if (isset($_FILES["profile-pic"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
			$allowed_extensions = ["png", "jpg", "jpeg"];     //engedelyezett kiterjesztesek
			$extension = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));  //feltoltott fajl

			if (in_array($extension, $allowed_extensions)) {      //fajl kiterjesztes ellenorzese
				if ($_FILES["profile-pic"]["error"] === 0) {        //fajlfeltoltes ellenorzese
					if ($_FILES["profile-pic"]["size"] <= 20971520) { //fajlmeret meghaladja-e a 20mb-t
						$path = "../images/profilepictures/" . $username . "." . $extension;   //mentesi utvonal megadasa

						if (!move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $path)) { //fajl mozgatasa
							$fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
						}
					} else {
						$fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
					}
				} else {
					$fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
				}
			} else {
				$fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!";
			}
		}
	}
	
	
	//Idő beállítása
	function setTime() {
		$time = new DateTime();	//ido valtozo letrehozasa
		$time->setTimezone(new DateTimeZone("Europe/Budapest"));	//idozona europa/budapest-re allitasa
	
		$idotomb = [
			"nap" =>$time->format('Y-m-d'),	//ido valtozo lebontasa ev - honap - nap
			"ora" =>$time->format('H:i:s'), //ido valtozo lebontasa ora - perc - masodperc
		];
		
		return $idotomb;
	}	
?>