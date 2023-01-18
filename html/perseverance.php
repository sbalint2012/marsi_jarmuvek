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
    <title>Perseverance | Marsi Járművek</title>
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
			<li><a href="perseverance.php" class="jelenlegi lista">Perseverance</a></li>
			<li><a href="profile.php" class="lista">Profil</a></li>
		<?php } else { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="jelenlegi lista">Perseverance</a></li>
			<li><a href="login.php" class="lista">Bejelentkezés</a></li>
			<?php } ?>
			
        </ul>
    </nav>

    <div id="container">

         <div id="content">
				
                <h1 id="altalanos">Általános információk</h1>

                <img src="../images/perseverance/perseverance_info.jpg" alt="percy" class="infokep"/>
                <table class="info">
                    <tr>
                        <td class="info">Név</td>
                        <td class="info">Perseverance</td>
                    </tr>
                    <tr>
                        <td class="info">Súly</td>
                        <td class="info">1025 Kg</td>              
                    </tr>
                    <tr>
                        <td class="info">Hely</td>
                        <td class="info">Jezero kráter</td>        
                    </tr>
                    <tr>
                        <td class="info">Kilövés</td>
                        <td class="info">2020 Július 30</td>                           
                    </tr>
                    <tr>
                        <td class="info">Érkezés</td>
                        <td class="info">2021 Február 18</td>                           
                    </tr>
                    <tr>
                        <td class="info">Küldetés vége</td>
                        <td class="info">Folyamatban</td>                       
                    </tr>                       
                </table>
            
            <hr id="muszaki"/>

            <h1>Műszaki adatok</h1>

            <p>
                A Perseverance rover tervezésébe besegített a <i>Curiosity</i> mérnök csapata, mivel a hasonló funkciók miatt a két rover eléggé hasonlít egymásra. A <i>Perseverance</i> kerekeit robusztusabbra tervezték, a Curiosity tapasztalatai alapján, aminek kerekei sérüléseket szenvedtek. A kerekek vastagabbak és átmérőjük nagyobb (52,5 cm - ami a Curiosity esetében 50 cm volt), szélességük kisebb, anyaguk dur-alumínium. A kerekeken <q>stopli</q> van a jobb tapadás érdekében. Küllői részben titánból vannak. A nagyobb műszerezettség miatt a Perseverance tömege 17%-kal nagyobb, mint elődje, a Curiosity tömege volt (899 kg helyett 1050 kg).
            </p>
            <p>
                A rover rendelkezik egy 2,1 méter hosszú, öt ponton hajló robotkarral. Ez egy toronyhoz van erősítve, és a marsi talajról származó geológiai minták begyűjtésére szolgál.
            </p>
            <p>
                A rover számára egy 45 kg tömegű RTG generátor biztosítja a villamos teljesítményt, ami 4,8 kg plutónium-oxidot visz magával, amely a tervek szerint 110 watt elektromos teljesítményt tud leadni (ez egy év alatt pár százalékkal csökken). Két lítiumion-akkumulátor is tartozik a berendezéshez, amelyeket a generátor tölt, ezek az egyszerre jelentkező csúcs-energiaigények kielégítésére szolgálnak. Az RTG tervezett működési élettartama 14 év. Azért esett RTG-re a választás, mert a napelemek kevésbé kiszámíthatóan működnek: éjszaka nem termelnek áramot, működésüket visszaveti egy-egy homokvihar (ami a Marson esetleg hónapokig is eltart), továbbá télen kevesebb energiát adnak le.
            </p>
            <p>
                A rover <i>BAE RAD750</i> sugárzástűrő egykártyás számítógépet visz a fedélzetén. Ez 128 megabájt DRAM-ot tartalmaz, a processzor sebessége 133 MHz. A repülést irányító szoftver 4 gigabájt nem-felejtő NAND memóriát használ, ez egy külön áramköri lapon helyezkedik el.
            </p>
            <p>
                A Mars 2020 küldetés része egy <i>Ingenuitynek</i> nevezett <q>Mars helikopter</q> kísérlet. A helikopter lényegében egy drón, amelyet saját napelem lát el árammal. Össztömege mindössze 1,8 kg. Feladata a stabil repülés megvalósíthatóságának vizsgálata. Tudományos műszereket nem visz magával, mindössze kamerákat, amikkel jó esetben fel tudja deríteni a rover tervezett haladási útvonalát. Működését 30 naposra tervezték.
            </p>

            <hr id="kuldetes"/>

            <h1>Küldetés</h1>

            <p>
                A leszállás folyamata teljesen automatikusan zajlik.
            </p>
            <p>
                A szonda nagyjából 100 km magasságban lép be a Mars ritka légkörébe. Ekkor nagyjából 20 000 km/h sebességgel halad. A szondának 1 m/s sebességre kell lelassulnia, amikor eléri a felszínt, hogy ne sérüljön meg. A lassítás nagy részét a hőpajzs végzi, ami eközben akár 1000 °C-ra is felhevülhet. Amikor ereszkedés és fékezés közben a sebesség 1200 km/h-ra csökken, kinyílik a szuperszonikus ejtőernyő. Ez a 21,5 m átmérőjű ejtőernyő mindössze egy percig működik. 2 km magasságban, 100 m/s sebesség mellett a Perseverance rover és az <q>égi daru</q>> leválik a szonda többi részéről. A darun nyolc hajtómű működik, amik a pozicionálást végzik. Erről műanyag köteleken lógatják le a később majd a felszínen mozgó rovert. Amikor a rover eléri a talajt, a daru leválasztódik, arrébb repül, majd a földbe csapódik. A leszállás idején a Mars-Föld aktuális távolsága miatt a kommunikáció 11,7 percet vesz igénybe egy irányba, azaz a jelek ennyi idő alatt érnek le a Földre.
            </p>

            <hr id="videok"/>

            <h1 >Videók</h1>

            <p>A leszálláskor készült videó:</p>
            <iframe src="https://www.youtube.com/embed/Cr56P7K2zuQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>További videókért kattint <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="dolt">ide!</a></p>

            <hr id="hang"/>

            <h1 >Hangok a marsról</h1>

            <p>Az alábbi hangfelvételt a Perseverance rögzítette a Mars felszínén és küldte vissza a Földre.</p>
            <audio controls>
                <source src="../sound/perseverance_sound.mp3" type="audio/mpeg"/>
                <p>A böngésző nem támogstott.</p>
            </audio>
            <p>A küldetés során további hangfelvételek érkeznek a Marsról.</p>
			
			<p><?php	echo "A mai dátum: " . $_SESSION['ido']['nap'];	?></p>
			<p><?php	echo "A mai időpont: " . $_SESSION['ido']['ora'];	?></p>	

        </div>
           
        <div id="sidebar">

            <h1>Tartalom</h1>

            <ul>
                <li><a href="#altalanos">Általános információk</a></li>
                <li><a href="#muszaki">Műszaki adatok</a></li>
                <li><a href="#kuldetes">Küldetés</a></li>
                <li><a href="#videok">Videók</a></li>
                <li><a href="#hang">Hangok a marsról</a></li>
            </ul>
            <br/>
            <img src="../images/perseverance/perseverance1.png" alt="p1" class="oldalkepek">
            <img src="../images/perseverance/perseverance3.jpg" alt="p2" class="oldalkepek">
            <img src="../images/perseverance/perseverance2.jpg" alt="p3" class="oldalkepek">
            <img src="../images/perseverance/perseverance4.jpg" alt="p4" class="oldalkepek">
            <img src="../images/perseverance/perseverance5.png" alt="p5" class="oldalkepek">
            <img src="../images/perseverance/perseverance6.jpg" alt="p6" class="oldalkepek">
            <img src="../images/perseverance/perseverance7.png" alt="p7" class="oldalkepek">

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