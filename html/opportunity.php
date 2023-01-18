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
    <title>Opportunity | Marsi Járművek</title>
    <link rel="stylesheet" type="text/css" href="../css/marsi_jarmuvek_design.css"/>
</head>

<body>  
    <nav>
        <ul class="listamenu">
		
		<?php if (isset($_SESSION["user"])) { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="jelenlegi lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="profile.php" class="lista">Profil</a></li>
		<?php } else { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="jelenlegi lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="login.php" class="lista">Bejelentkezés</a></li>
			<?php } ?>
			
        </ul>
    </nav>

    <div id="container">

         <div id="content"> 

                <h1 id="altalanos">Általános információk</h1>

                <img src="../images/opportunity/opportunity.jpg" alt="oppy" class="infokep"/>
                <table class="info">
                    <tr>
                        <td class="info">Név</td>
                        <td class="info">Opportunity</td>
                    </tr>
                    <tr>
                        <td class="info">Súly</td>
                        <td class="info">185 Kg</td>              
                    </tr>
                    <tr>
                        <td class="info">Hely</td>
                        <td class="info">Meridiani Planum</td>        
                    </tr>
                    <tr>
                        <td class="info">Kilövés</td>
                        <td class="info">2003 Július 7</td>                           
                    </tr>
                    <tr>
                        <td class="info">Érkezés</td>
                        <td class="info">2004 Január 25</td>                           
                    </tr>
                    <tr>
                        <td class="info">Küldetés vége</td>
                        <td class="info">2019 Február 13</td>                       
                    </tr>                       
                </table>
            
            <hr id="bemutato"/>

            <h1>Bemutató</h1>

            <p>
                Az Opportunity (MER-B) az amerikai Mars Exploration Rover program második robotja. A Spirit (MER-A) marsjárótól 10 500 km-re szállt le, a Mars másik felén, a Meridiani Planumnak nevezett egyenlítői területen. A két robot tudományos célja a vörös bolygó talajának kémiai, fizikai vizsgálata. Mindkét leszállóhelyet úgy választották ki, hogy az addigi felvételek alapján ezeken a területeken látszódott a hajdani felszíni víz nyoma.
            </p>
            <p>
                Mindkét szonda bizonyítékokat talált a víz valamikori jelenlétére a Marson.
            </p>
            <p>
                A két marsjárót hivatalosan 90 napos élettartamra tervezték, mivel a kutatók eredeti feltételezése szerint ennyi idő alatt a napelem-táblákra ülepedő por miatt nem juthatnak több energiához. Nem számoltak azonban a Mars légköri aktivitásával, ami folyamatosan megtisztítja a napelemtáblákat, és aminek hatására 2014. január 24-én – pontosan tíz évvel a leszállás után - az Opportunity még működőképes volt, és továbbra is szolgáltatta az adatokat, ami példátlan sikernek számított.
            </p>
            <p>
                A <b>NASA</b> 2019. február 13-án befejezettnek nyilvánította az Opportunity küldetését, miután 2018 augusztusa óta nincs kapcsolat az űrszondával. Az ember által épített eszközök közül eddig az Opportunity tette meg a leghosszabb távot idegen égitesten: 45,16 kilométert.
            </p>
            
            <hr id="kuldetes"/>

            <h1>Küldetés</h1>

            <p>
                Az Opportunity 2004. január 25-én, közép-európai idő szerint 5.05-kor szállt le a Mars felszínére, pontosan három héttel azután, hogy <q>ikertestvére</q>, a Spirit is sikeres leszállást hajtott végre. A leszállóhely 10 500 km-re, a Mars másik oldalán, a Meridiani-síkságon volt. Néhány órával a landolás után megérkeztek az Opportunity által készített első látványos felvételek a pasadenai irányítóközpontba. Ezek a Mars teljesen új arcát mutatták az addig ismertekhez képest. Az egyik képen a marsjáró robot leszálló szerkezete látszik, a háttérben a marsbéli tájjal. Néhány képen világos sziklák voltak kivehetők. Ezeket a sziklákat később alaposan megvizsgálták.
            </p>
            <p>
                2004. január 27-én a szonda kinyitotta fő antennáját, és így már közvetlenül is kommunikálni tudott a földi irányítóközponttal. Az adatok továbbítására már nem kellett megvárni, hogy a két amerikai marsi műhold – a Mars Global Surveyor és a Mars Odyssey – valamelyike a leszállóhely fölé érkezzen, és vegye, illetve továbbítsa a Földre az Opportunity UHF-antennájának segítségével küldött jeleket.
            </p>
            <p>
                Az Opportunity 2004. február 5-én tette meg az első métereket a Mars felszínén. Először indult el azután, hogy néhány nappal korábban legördült a leszállóegység platformjáról a bolygó poros talajára. Február 5-én mintegy 3,3 métert tett meg, másnapra még 1,5-et terveztek.
            </p>
            <p>
                2004. március 2-án a <b>NASA</b> tudósai beszámoltak az Opportunity fontos felfedezéséről: a robot egy általa vizsgált szikladarabban olyan ásványi anyagokat talált, amelyek kizárólag víz jelenlétében alakulnak ki.
            </p>
            <p>
                2005. május 2-án az Opportunity elakadt egy homokdűnében, de sikerült kiszabadulnia.
            </p>
            <p>
                2008. szeptember 1-jére (Sol 1634) sikerült kijutnia a 800 méter átmérőjű és 70 m mélységű Victoria-kráterből, ahova 2007. szeptember 11-én ereszkedett le.
            </p>
            <p>
                2011. augusztus elején elérte következő nagy célpontját, a 22 kilométer átmérőjű Endeavour-krátert.
            </p>
            <p>
                2015 tavaszára a rover összesen egy maratonnyi távot tett meg a Mars felszínén.
            </p>
            <p>
                2018. június 10-én a bolygó negyedrészére kiterjedő homokvihar megakadályozta az Opportunity működését, mivel a rover napelemei nem kaptak elég fényt a feltöltődéshez. A <b>NASA</b> mérnökei ekkor még tovább próbálkoztak a marsjáró felélesztésével.
            </p>
            <p>
                2019. február 13-án a <b>NASA</b> hivatalosan is befejezettnek nyilvánította az Opportunity küldetését, végleg felfüggesztve a marsjáró felébresztésére tett próbálkozásokat.
            </p>

            <hr id="videok"/>

            <h1 >Videók</h1>

            <p>A küldetés befelyezése után készült videó, amely bemutatja a rover élettartama alatt elvégzett feladatokat:</p>
            <iframe src="https://www.youtube.com/embed/cnddzE4YSzg" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>További videókért kattint <a href="https://www.youtube.com/watch?v=ZZ5LpwO-An4" target="_blank" class="dolt">ide!</a></p>

			<p><?php	echo "A mai dátum: " . $_SESSION['ido']['nap'];	?></p>
			<p><?php	echo "A mai időpont: " . $_SESSION['ido']['ora'];	?></p>	

        </div>
           
        <div id="sidebar">

            <h1>Tartalom</h1>

            <ul>
                <li><a href="#altalanos">Általános információk</a></li>
                <li><a href="#bemutato">Bemutató</a></li>
                <li><a href="#kuldetes">Küldetés</a></li>
                <li><a href="#videok">Videók</a></li>
            </ul>
            <br/>
            <img src="../images/opportunity/o1.png" alt="o1" class="oldalkepek">
            <img src="../images/opportunity/o2.jpg" alt="o2" class="oldalkepek">
            <img src="../images/opportunity/o3.png" alt="o3" class="oldalkepek">
            <img src="../images/opportunity/o4.jpg" alt="o4" class="oldalkepek">
            <img src="../images/opportunity/o5.jpg" alt="o5" class="oldalkepek">

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