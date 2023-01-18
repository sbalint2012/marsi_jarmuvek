<?php
  session_start();
?>

<!DOCTYPE html>

<html lang="hu">

<head>
    <meta name="description" content="marsi jarmuveket bemutato oldalak"/>
    <meta name="keywords" content="mars, rover, jegy, otos"/>
    <meta name="author" content="Sipos Bálint, Zöldi Péter"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <title>Sojourner | Marsi Járművek</title>
    <link rel="stylesheet" type="text/css" href="../css/marsi_jarmuvek_design.css"/>
</head>

<body>  
    <nav>
        <ul class="listamenu">
		
		<?php if (isset($_SESSION["user"])) { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="jelenlegi lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="profile.php" class="lista">Profil</a></li>
		<?php } else { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="jelenlegi lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="login.php" class="lista">Bejelentkezés</a></li>
			<?php } ?>
			
        </ul>
    </nav>

    <div id="container">

         <div id="content"> 

                <h1 id="altalanos">Általános információk</h1>

                <img src="../images/sojourner/sojourner.jpg" alt="Sojourner" class="infokep"/>
                <table class="info">
                    <tr>
                        <td class="info">Név</td>
                        <td class="info">Sojourner</td>
                    </tr>
                    <tr>
                        <td class="info">Súly</td>
                        <td class="info">11 Kg</td>              
                    </tr>
                    <tr>
                        <td class="info">Hely</td>
                        <td class="info">Ares Vallis</td>        
                    </tr>
                    <tr>
                        <td class="info">Kilövés</td>
                        <td class="info">1996 December 4</td>                           
                    </tr>
                    <tr>
                        <td class="info">Érkezés</td>
                        <td class="info">1997 Július 4</td>                           
                    </tr>
                    <tr>
                        <td class="info">Küldetés vége</td>
                        <td class="info">1997 Szeptember 27</td>                       
                    </tr>                       
                </table>
            
            <hr id="bemutato"/>

            <h1>Bemutató</h1>

            <p>
                A Mars Pathfinder a Discovery-program második küldetése, és a Mars-kutatás egyik legsikeresebb űrszondája. Az űrszonda 1996. december 4-én indították Cape Canaveralből Delta II hordozórakétával. Magával vitte a Mars felszínére a Sojourner (=jövevény) nevű kis marsautót.
            </p>
            <p>
                A huszonnégy nagy ballonban 1997. július 4-én leérkező űrszonda épségben túlélte a talajtérést. A ballonokból kiengedték a gázt, kinyitották a három napelemszárnyat és az üzembe helyezett IMP sztereókamera elkészítette az első panoráma-felvételt. Nemcsak a leszállóegység, hanem a Sojourner marsautó is jól bírta a leszállást, majd – némi bonyodalmak után – legördült a marsi talajra, megkezdhette a kiválasztott kövek részletes vizsgálatát. A leszálló egységgel három hónap után szűnt meg a kapcsolat.
            </p>
            <p>
                A Mars Pathfinder űrszondát a <b>NASA</b> Jet Propulsion Laboratory-ban fejlesztették ki.
            </p>

            <hr id="kuldetes"/>
            
            <h1>Küldetés</h1>

            <p>
                A küldetés egyik legfontosabb célja épp az volt, hogy rovert juttassanak a vörös bolygóra. A lander szállította tehát a <b>NASA</b> első roverét, a körülbelül 11 kg tömegű (ez a Marson nagyjából 4,5 kg) Sojournert. A két eszköz a bolygó légkörét, klímáját, geológiáját, valamint a kőzetének és talajának összetételét vizsgálta. A Pathfinder küldetés utoljára 1997. szeptember 27-én küldött adást, eddigre jócskán túlélte a tervezett élettartalmát (a lander háromszor, a rover tizenkétszer tovább bírta, mint amire számítottak), és nem csak az elsődleges céljait teljesítette, de rengeteg adatot is továbbított. A számok nyelvén ez 2,3 milliárd bit információt jelent, köztük 16500 képet, amit a lander készített, és 550 olyat, amit a rover. A küldetés során 15 kémiai analízist végeztek el a bolygó felszínén. A Pathfinder küldetés során derült ki az is, hogy a Mars egykor meleg és nedves volt.
            </p>

            <hr id="meret"/>

            <h1>Méret</h1>

            <p>
                A Pathfinder kutatórobotja, a Sojourner igen aprónak számított a későbbi társaihoz képest. Csak <u>65 centi</u> hosszú, <u>48 centi</u> széles és <u>30 centi</u> magas volt, miközben a súlya alig haladta meg a <u>11 kilót</u>. A pár évvel később érkező Spirit és Opportunity már <u>1,6 méter</u> hosszú, <u>2,3 méter</u> széles, <u>1,5 méter</u> magas lett, és <u>180 kiló</u>ra hízott.
            </p>
        
            <hr id="videok"/>

            <h1 >Videók</h1>

            <p>A leszállásról készült animáció:</p>
            <iframe src="https://www.youtube.com/embed/3E9BcdFYENg" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>További videókért kattint <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="dolt">ide!</a></p>


            <hr id="szamit"/>

            <h1>Számítások</h1>

            <p>Számítsa ki a Mars felszínét és térfogatát: </p>
            <form method="GET" >
              <label>Neved: <input type="text" name="nev"/></label> <br/>
                <label>Átmérő: <input type="number" name="R"/> Km</label> <br/><br/>
                <input type="submit" name="szamit" value="Számítás"/> <br/>
            </form>
            <?php
                function felszin($r){ //Felszint kiszamíto fuggveny
                    $a=((pow($r,2))*4)*M_PI;
                    return $a;
                }

                function terfogat($r){ //Terfogatot kiszamito fuggveny
                    $v=(((pow($r,4))*4)*M_PI)/3;
                    return $v;
                }
                if (isset($_GET["szamit"])){ //Gomb megnyomasa
                    if(!isset($_GET["R"]) || trim($_GET["R"]) === ""){ //Ha az erteke null vagy ures (trim- whitespace es egyeb karakterek eltuntetese strign elejerol es vegerol)
                        $atmero=0.0; //alapertelmezett ertek ha ures
                    }
                    else{
                        $atmero=$_GET["R"]; //kulonben allitsa be a mezo ertekere
                    }
                    if(!isset($_GET["nev"]) || trim($_GET["nev"]) === ""){ //same in english
                        $str="Anonymus";
                    }
                    else{
                        $str=strtoupper($_GET["nev"]); //nagybetusse alakitja a megadott nevet (stringet)
                    }
                    echo "Felszín: " . felszin($atmero) . " Km<sup>2</sup><br/>"; //fuggveny meghivasa es az ertek kiirasa
                    echo "Térfogat: " . terfogat($atmero) . " Km<sup>3</sup><br/>"; //same
                    echo "Gratulálok ".$str." a sikeres számításhoz."; //nev kiirasa
                  }
            ?>
            <p>Hint: A Mars átmérője 6779 Km.</p>

            <hr/>
                  
            <h1>Jég a Marson</h1>

            <p>Van jég a Marson?</p>
            <form method="GET">
                <select name="jeg">
                    <option value="ures">Válassz</option>
                    <option value="igen">Igen</option>
                    <option value="nem">Nem</option>
                </select> <br/><br/>
                <input type="submit" name="ellenoriz" value="Ellenőriz"/> <br/><br/>
            </form>

           <?php
                function valasz(){                              //valasz ellenorzese fugvennyel
                    if($_GET["jeg"]==="ures"){
                        throw new Error("Válassz ki egyet!");   //ha nem valasztott ki semmit hiba
                    }
                    if($_GET["jeg"]==="nem"){                   //ha rosszat valasztott hiba
                        throw new TypeError("Hibás válasz!");
                    }
                    if($_GET["jeg"]==="igen"){                  //ha jo a valasz visszater true-val
                        return true;
                    }

                }
                if(isset($_GET["ellenoriz"])){                  //ha lenyomta a gombot
                    try{                                        //hibakezes start
                        if(valasz()===true){                    //ha helyes a valasz irja ki
                            echo "Helyes válasz!<br/>";
                        }
                    }
                    catch(Error $hiba){                         //a dobott hibauzenetek kezelese
                        echo $hiba->getMessage() . "<br/>";
                    }
                    catch(TypeError $hiba2){
                        echo $hiba2->getMessage() . "<br/>";
                    }
                    finally{                                    //mindenkeppen lefut
                        echo "---Ignore this!---";
                    }
                }
           ?>
		   
			<p><?php	echo "A mai dátum: " . $_SESSION['ido']['nap'];	?></p>
			<p><?php	echo "A mai időpont: " . $_SESSION['ido']['ora'];	?></p>	
			
        </div>
           
        <div id="sidebar">

            <h1>Tartalom</h1>

            <ul>
                <li><a href="#altalanos">Általános információk</a></li>
                <li><a href="#bemutato">Bemutató</a></li>
                <li><a href="#kuldetes">Küldetés</a></li>
                <li><a href="#meret">Méret</a></li>
                <li><a href="#videok">Videók</a></li>
                <li><a href="#szamit">Számítások</a></li>
            </ul>
            <br/>
            <img src="../images/sojourner/so1.jpg" alt="so1" class="oldalkepek">
            <img src="../images/sojourner/so2.jpg" alt="so2" class="oldalkepek">
            <img src="../images/sojourner/so3.jpg" alt="so3" class="oldalkepek">
            <img src="../images/sojourner/so4.jpg" alt="so4" class="oldalkepek">
            <img src="../images/sojourner/so5.jpg" alt="so5" class="oldalkepek">

        </div>
    
        <footer>
           
            <b>Oldaltérkép:</b><br/>
            <ol>
				<?php if (isset($_SESSION["user"])) { ?>
					<li><a href="index.php">Főoldal</a></li>
					<li><a href="sojourner.php">Sojourner</a></li>
					<li><a href="spirit.php">Spirit</a></li>
					<li><a href="opportunity.php">Opportunity</a></li>
					<li><a href="curiosity.php">Curiosity</a></li>
					<li><a href="perseverance.php">Perseverance</a></li>
					<li><a href="profile.php">Profil</a></li>
				<?php } else { ?>
					<li><a href="index.php">Főoldal</a></li>
					<li><a href="sojourner.php">Sojourner</a></li>
					<li><a href="spirit.php">Spirit</a></li>
					<li><a href="opportunity.php">Opportunity</a></li>
					<li><a href="curiosity.php">Curiosity</a></li>
					<li><a href="perseverance.php">Perseverance</a></li>
					<li><a href="login.php">Bejelentkezés</a></li>
					<?php } ?>					
             </ol>
              
             <b> David Bowie - Life on mars?</b>
                <audio src="../sound/david_bowie_life_on_mars.mp3" autoplay loop controls >
                    <p>A böngésző nem támogstott.</p>            
                </audio>
                <p>Note: A Google Chrome nem támogatja az automtikus lejátszást. Amennyiben élvezni szeretnéd az oldal hangulatát meghatározó zenét indíts el manuálisan.</p>
        </footer>
        
    </div>
    
</body>

</html>