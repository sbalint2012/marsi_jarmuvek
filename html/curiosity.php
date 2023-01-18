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
    <title>Curiosity | Marsi Járművek</title>
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
			<li><a href="curiosity.php" class="jelenlegi lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="profile.php" class="lista">Profil</a></li>
		<?php } else { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="jelenlegi lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="login.php" class="lista">Bejelentkezés</a></li>
			<?php } ?>
			
        </ul>
    </nav>

    <div id="container">

         <div id="content"> 
             <header>
                <h1 id="altalanos">Általános információk</h1>

                <img src="../images/curiosity/curiosity.jpg" alt="curiosity" class="infokep"/>
                <table class="info">
                    <tr>
                        <td class="info">Név</td>
                        <td class="info">Curiosity</td>
                    </tr>
                    <tr>
                        <td class="info">Súly</td>
                        <td class="info">900 Kg</td>              
                    </tr>
                    <tr>
                        <td class="info">Hely</td>
                        <td class="info">Gale kráter</td>        
                    </tr>
                    <tr>
                        <td class="info">Kilövés</td>
                        <td class="info">2011 November 26</td>                           
                    </tr>
                    <tr>
                        <td class="info">Érkezés</td>
                        <td class="info">2012 Augusztus 6</td>                           
                    </tr>
                    <tr>
                        <td class="info">Küldetés vége</td>
                        <td class="info">Folyamatban</td>                       
                    </tr>                       
                </table>
            </header>
            <main>
            <hr id="bemutato"/>

            <h1>Bemutató</h1>

            <p>
                A Mars Science Laboratory nevű <b>NASA</b> küldetés célja, hogy eljuttassa a Marsra a <strong>Curiosity</strong> nevű (jelentése: kíváncsiság) marsjárót, amely az elődeihez képest nagyobb méretű, és radioizotópos termoelektromos generátorral (RTG) üzemel. Az űrszonda 2011. november 26-án indult, és nyolc és fél hónap alatt érte el a Marsot, ahol a tervek szerint egy marsi évig (2 földi évig) üzemel. A Mars felszínén kémiai és biológiai vizsgálatokat végez, feladata a marsi élet keresése, a bolygó légkörének és geológiájának tanulmányozása, valamint az emberes Mars-repülések előkészítése.
            </p>
            
            <hr id="eredmeny"/>

            <h1>Tudományos eredmények</h1>

            <p>
                A Marson valamikor <em>léteztek</em> az élethez szükséges feltételek. Szerves szénmolekulákat találtak a marsi sziklákban.
            </p>
            <p>
                Jelenlegi aktív metán jelenléte a légkörben. A metán mennyisége két hónap alatt a tízszeresére nőtt.
            </p>
            <p>
                A felszínen mérhető sugárzás a <b>NASA</b> által (hosszú távon) elfogadhatónak tartott érték fölött van. Ezek egyik forrása a galaktikus kozmikus sugárzás, a másik a Napból eredő, nagy energiájú részecskék.
            </p>
            <p>
                Sűrűbb légkör és több víz jelenléte a Mars régmúltjában.
            </p>

            <hr id="leszallas"/>
            
            <h1>Leszállás</h1>

            <p>
                Az űrszonda elődeinél lényegesen pontosabban, 10 kilométer átmérőjű ellipszisen belül szállt le (a korábbi Mars-küldetéseknél ennek mérete 150 km nagyságrendű volt). A nagy sebesség és tömeg miatt 4,5 m átmérőjű hőpajzsos fékezés után kb. 1600 km/h-ra lassulva kinyílt a szuperszonikus ejtőernyő, legvégül az égi-daru-nak nevezett berendezés fékezőrakétákkal tovább lassította a szondát és puhán letette a Mars felszínére. Az égi-daru egy fékezőrakétákkal ellátott platform, melyen a marsjáró kábeleken lógott és amikor a felszínt elérte, akkor a kábelek leoldása után, kicsit odébb repülve a felszínbe csapódott. A módszer kockázata az volt, hogy mivel a rover a kerekeivel éri el először a felszínt, és ha a leszállás keményre sikerül, a futómű megsérülhetett volna, továbbá, hogy ezt a leszállási módszert addig nem alkalmazták.
            </p>
            <pre>
                Ez
                    a
                        szöveg
                                így
                            néz 
                        ki
                    a 
                forráskódban
                        is.
            </pre>

            <hr id="mars">

            <h1>Első lépések a marson</h1>

            <p>
                A leszállás utáni állapotában a rover nem volt képes sok mindent csinálni. A számítógépeinek memóriái csak azokat a programokat tudták tárolni, amik az odautazáshoz és a leszálláshoz kellettek. Négy napba telt, mire a Marson való tevékenységhez szükséges, 3,5 millió kódsorból álló programot feltöltötték, felülírva, azaz törölve a repüléshez és a leszálláshoz addig szükséges szoftvert.
            </p>
            <p>
                A sikeres leszállás után a marsi adatgyűjtést megelőzően a Curiosity irányító csoportjának a mozgó tudományos laboratórium járművének hatásosságáról kellett meggyőződnie és két és fél héttel a leszállás után egy augusztus 23-i jelentés szerint a jármű a <b>NASA</b>-irányításnak megfelelően, sikeresen elvégzett egy-két kisebb, de lényeges feladatot: előre hajtott kb. öt métert, derékszögben elfordult és elhátrált egy rövid távolságra. Ebből azt következtették, hogy a jármű üzemképes és a laboratórium rövidesen munkába kezdhet.
            </p>
            <p>
                Következő lépés: a laboratórium 2,1 méter hosszú, mintázó robotkarjának ellenőrzése volt. Ehhez a következők tartoznak: fúró, lapátka, spektrométer és fényképezőgép. Az ötcsuklós robotkar működésének elvét a <b>NASA</b>/JPL-Caltech egyik sematikus videója bemutatja. (12/09/06)
            </p>
            <p>
                A <cite>Curiosity</cite> talajra érkezte után észrevették, hogy a szonda REMS (szélsebességet és szélirányt érzékelő) műszerének egyike megsérült (valószínűleg egy felcsapódó kavics miatt). A műszert készítő spanyol tudósokat nem tájékoztatták kellő mértékben arról, hogy a leszállás során a műszereket védett állapotban kell tartani. A műszer hiánya kisebb kellemetlenségnek számít, mert a második jól működik.
            </p>
            <p>
                Augusztus 19-én <b>NASA</b> irányítással a labor egyik műszere 8000 °C-os lézersugárral elpárologtatott egy közeli szikladarabot, amit három spektrométer analizált.
            </p>

            <hr id="videok"/>

            <h1 >Videók</h1>

            <p>A Curiosity landolásáról készült videó:</p>
            <iframe src="https://www.youtube.com/embed/N9hXqzkH7YA" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>További videókért kattint <a href="https://letmegooglethat.com/?q=nasa+curiosity+video" target="_blank" class="dolt">ide!</a></p>
			
			<p><?php	echo "A mai dátum: " . $_SESSION['ido']['nap'];	?></p>
			<p><?php	echo "A mai időpont: " . $_SESSION['ido']['ora'];	?></p>	
			
        </main>
        </div>
           
        <aside>

            <h1>Tartalom</h1>

            <ul>
                <li><a href="#altalanos">Általános információk</a></li>
                <li><a href="#bemutato">Bemutató</a></li>
                <li><a href="#eredmeny">Tudományos eredmények</a></li>
                <li><a href="#leszallas">Leszállás</a></li>
                <li><a href="#mars">Első lépések a marson</a></li>
                <li><a href="#videok">Videók</a></li>
            </ul>
            <br/>
            <img src="../images/curiosity/c1.jpg" alt="c1" class="oldalkepek">
            <img src="../images/curiosity/c2.jpg" alt="c2" class="oldalkepek">
            <img src="../images/curiosity/c3.jpg" alt="c3" class="oldalkepek">
            <img src="../images/curiosity/c4.jpg" alt="c4" class="oldalkepek">
            <img src="../images/curiosity/c5.jpg" alt="c5" class="oldalkepek">
            <img src="../images/curiosity/c6.jpg" alt="c6" class="oldalkepek">
            <img src="../images/curiosity/c7.jpg" alt="c7" class="oldalkepek">

        </aside>
       
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