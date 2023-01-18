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
    <title>Spirit | Marsi Járművek</title>
    <link rel="stylesheet" type="text/css" href="../css/marsi_jarmuvek_design.css"/>
</head>

<body>  
    <nav>
        <ul class="listamenu">
		
		<?php if (isset($_SESSION["user"])) { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="jelenlegi lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="profile.php" class="lista">Profil</a></li>
		<?php } else { ?>
			<li><a href="index.php" class="lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="jelenlegi lista">Spirit</a></li>
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

                <img src="../images/spirit/spirit.jpg" alt="spirit" class="infokep"/>
                <table class="info">
                    <tr>
                        <td class="info">Név</td>
                        <td class="info">Spirit</td>
                    </tr>
                    <tr>
                        <td class="info">Súly</td>
                        <td class="info">185 Kg</td>              
                    </tr>
                    <tr>
                        <td class="info">Hely</td>
                        <td class="info">Guszev kráter</td>        
                    </tr>
                    <tr>
                        <td class="info">Kilövés</td>
                        <td class="info">2003 Július 10</td>                           
                    </tr>
                    <tr>
                        <td class="info">Érkezés</td>
                        <td class="info">2004 Január 4</td>                           
                    </tr>
                    <tr>
                        <td class="info">Küldetés vége</td>
                        <td class="info">2011 Május 24</td>                       
                    </tr>                       
                </table>
            
            <hr id="bemutato"/>

            <h1>Bemutató</h1>

            <p>
                A Spirit (MER-A) az amerikai Mars Exploration Rover program első robotja volt, amelyet a <b>NASA</b> 2003-ban küldött a Marsra, a Guszev-kráter belsejébe. A program másik marsjárója az Opportunity (MER-B). A két robot tudományos célja a Mars felszínének kémiai és fizikai vizsgálata volt, elsősorban abból a szempontból, hogy a talaj tartalmazott-e vizet valamikor, illetve ez a víz alkalmas volt-e valamilyen életforma fenntartására. Mindkét leszállóhelyet úgy választották ki, hogy az addigi felvételek alapján ezeken a területeken látszódott a hajdani felszíni víz nyoma.
            </p>
            <p>
                Mindkét szonda bizonyítékokat talált a valamikori víz jelenlétére a Marson.
            </p>
            <p>
                A két marsjárót hivatalosan 90 napos élettartamra tervezték, mivel a kutatók eredeti feltételezése szerint ennyi idő múlva a napelem-táblákra ülepedő por miatt nem juthatnak több energiához. Nem számoltak azonban a Mars légköri aktivitásával, ami folyamatosan megtisztította a napelemtáblákat. Így a Spirit 2010-ig képes volt az adatok továbbítására, ami váratlan sikernek számított. 2010. március 22-én a robottal megszakadt a kapcsolat. A <b>NASA</b> 2011. május 24-ével befejezettnek nyilvánította a küldetést. A Spirit a Marson összesen 7730,5 métert tett meg.
            </p>

            <hr id="ut"/>

            <h1>Az út és a leszállás</h1>

            <p>
                A Spirit 7 hónapos, több mint 400 millió kilométeres utazás után 2004. január 4-én épségben leszállt a Marsra, a Guszev-kráterbe. A kaliforniai Pasadenában levő irányítóközpontban előbb csak azt közölték, hogy az űreszköz biztosan talajt fogott, majd néhány perccel később maga a szonda is jelezte: sikeresen Marsot ért, és az önjáró rover bevethető állapotban vészelte át a manővert. A leszállási folyamat követésére bevetették a vörös bolygó körül keringő Mars Global Surveyor marsi műholdat és a kaliforniai Stanford Egyetem óriás rádióteleszkópját is.
            </p>
            <p>
                Maga a leszállási művelet 6 percig tartott azt követően, hogy a szonda 130 kilométeres magasságban óránként 19 200 kilométeres sebességgel belépett a Mars légkörébe. Két perccel a talajtérés előtt kinyitotta a fékezőernyőjét, majd 20 másodperccel később ledobta magáról a már feleslegessé vált hővédő pajzsát, amely a túlhevüléstől védte meg a légkörbe történt belépés után. Hat másodperccel a felszínre érés előtt felfúvódtak a szonda légzsákjai, begyújtotta a helyzetének stabilizálására szolgáló rakétákat, majd 15 méteres magasságban csupán már csak a puha talajfogást szolgáló légzsákok maradtak rajta, és innentől kezdve szabadesésben tette meg útja utolsó szakaszát. Miután a felszínre ért, még egy kilométer hosszan pattogott, majd megállapodott a Guszev-kráterben kijelölt leszállókörzet területén.
            </p>
            <p>
                Ezzel hat és fél év elteltével ismét ember alkotta szerkezet érkezett meg épségben a Marsra: 1997. július 4-én a Mars Pathfinder amerikai szonda a mostanihoz hasonló leszállást hajtott végre az égitest felszínén.
            </p>
            
            <hr id="munka"/>

            <h1>Munka a Mars felszínén</h1>

            <p>
                Később a Spirit másfél méteres teleszkopikus póznákon elhelyezett kameráival a környezetét 360°-ban ábrázoló felvételt készített. A <b>NASA</b> tudósai az elkövetkező napokban tesztelték a Spirit műszereit.
            </p>
            <p>
                2004. január 23-án sikerült újra kapcsolatot teremteni a Spirittel, miután előzőleg több mint 24 órán át nem küldött adatokat a vörös bolygóról, és a földi irányítóközpont tudósai már komoly üzemzavarról beszéltek. A Deep Space Network nevű hálózat egyik Madrid melletti antennájának sikerült vennie pénteken a robot által küldött adatokat közép-európai idő szerint 12 óra 34 perctől 10 percen át, közölte a <b>NASA</b>. Az adatátvitel sebessége másodpercenként 10 bit volt, ami nagyon gyenge teljesítménynek számít. A <b>NASA</b> mérnökei a következő órákban utasítások sokaságát küldték el a Spiritnek, arra ösztönözve a szerkezetet, hogy küldjön adatokat saját állapotáról, amiből meg lehet állapítani a hiba okát. Az üzemzavart a robot fő számítógépének a memóriája okozta, amely megtelt felesleges adatokkal. Január 30-án újra fehér-fekete képek érkeztek. A robot még mindig ugyanabban a helyzetben volt, mint mikor először megszakadt vele a kapcsolat.
            </p>
            <p>
                2004. március 7-én a Spirit marsjáró panorámakamerája egy, a vörös bolygó égboltját átszelő hullócsillagot kapott lencsevégre, amely elméletileg a Wiesman-Skiff nevű üstökös egy parányi darabja lehet.
            </p>
            <p>
                2005 augusztusában a Spirit felért a <q>Husband Hill</q>-nek (=<q>férj domb</q>) nevezett 82 méteres magaslatra a Guszev kráter síkja fölött.
            </p>
            <p>
                2007-ben a Spirit legnagyobb felfedezését tette, amikor a talajban magas szilikáttartalmú kőzetet talált, amely akár a víz egykori jelenlétére is utalhat. Ez év júliusa és augusztusa során a Spirit túlélte a bolygón tomboló porviharokat, amelyek akár véget is vethettek volna a küldetésnek.
            </p>
            <p>
                2009 februárjában egy szerencsés széllökés-sorozat lefújta a szonda napelemtábláinak egy részéről a port, így javult azok hatásfoka, az eredeti megtermelt energiamennyiség napi ötven percig, a tisztább napelemekkel másfél óráig teszi lehetővé az előrehaladást a felszínen. Májusban lazább szerkezetű talajra ért, amelybe kerekei a tengelyig belesüppedtek, és a jármű mozgásképtelenné vált. A szonda környezetét újraépítve, földi laboratóriumban próbálták a szabaduláshoz elvégzendő manővereket kikísérletezni, közben a szonda a környezetét, mely váratlanul érdekesnek bizonyult, kutatta, kihasználva az időszakban bőségesen rendelkezésre álló napenergiát.
            </p>
            <p>
                2010. január 26-án bejelentették, hogy a Spirit végleg mozgásképtelenné vált, ezzel azonban nem ért véget a pályafutása, mert további tudományos mérések elvégzésére van lehetőség. (Ezt megelőzően több hónapig hiábavalóan kísérelték meg a Spiritet a homokcsapdájából kiszabadítani).
            </p>
            <p>
                2010. március 22-én volt az utolsó sikeres kapcsolat a marsjáróval. Valószínűleg az akkumulátorok gyengesége miatt túlzottan lehűltek a vezérlő egységei.
            </p>
            <p>
                2011. május 25-én a <b>NASA</b> bejelentette, hogy feladja a kapcsolatfelvételi próbálkozásokat a Spirit marsjáróval.
            </p>
            
            <hr id="teljesitmeny"/>
            
            <h1>Kiemelkedő eredmények</h1>

            <p>
                A misszió során a szonda számtalan felfedezéshez segítette hozzá a kutatókat.
            </p>
            <p>
                Bizonyíték a valamikori forró vízforrások létére. – Ez akkor vált nyilvánvalóvá, amikor a Spirit jobb első kereke beszorult, és ezzel barázdát vájt a talajban. Itt amorf szilikát került a felszínre, ami jelenlegi tudásunk szerint csak forró vízfolyásoknál alakul ki.
            </p>
            <p>
                Bizonyíték sűrűbb légkörre és édesvízre. – A Spirit karbonátokat fedezett fel a Mars felszínén. Ezek csak sűrű atmoszféra megléte esetén alakulnak ki, ami megakadályozza a gyors párolgást. A karbonátok kémiai felépítése arról árulkodik, hogy a víz nem volt savas, mint más, régebbi vízfolyásoknál a Marson. Ez azt jelenti, hogy több milliárd évvel ezelőtt élet lehetett a Marson.
            </p>
            <p>
                Bizonyíték az aktív vízkörforgásra. – Amikor a Spirit elakadt és megpróbálta kiszabadítani magát, a kerekei szulfátokat hoztak a felszínre. Ezek az ásványok vízzel voltak kapcsolatban még akár 1 millió évvel ezelőtt is.
            </p>
            
            <hr id="videok"/>

            <h1 >Videók</h1>

            <p>Az alábbi videón megtekinthetó a Spirit leszállása:</p>
            <video src="../video/spirit_leszallas.mp4" controls></video>
            
            <p>További videókért kattint <a href="https://www.youtube.com/watch?v=G1IbRujko-A" target="_blank" class="dolt">ide!</a></p>

			<p><?php	echo "A mai dátum: " . $_SESSION['ido']['nap'];	?></p>
			<p><?php	echo "A mai időpont: " . $_SESSION['ido']['ora'];	?></p>	

        </div>
           
        <div id="sidebar">

            <h1>Tartalom</h1>

            <ul>
                <li><a href="#altalanos">Általános információk</a></li>
                <li><a href="#bemutato">Bemutató</a></li>
                <li><a href="#ut">Az út és a leszállás</a></li>
                <li><a href="#munka">Munka a Mars felszínén</a></li>
                <li><a href="#teljesitmeny">Kiemelkedő eredmények</a></li>
                <li><a href="#videok">Videók</a></li>
            </ul>
            <br/>
            <img src="../images/spirit/s1.jpg" alt="s1" class="oldalkepek">
            <img src="../images/spirit/s2.jpg" alt="s2" class="oldalkepek">
            <img src="../images/spirit/s3.jpg" alt="s3" class="oldalkepek">
            <img src="../images/spirit/s4.jpg" alt="s4" class="oldalkepek">
            <img src="../images/spirit/s5.jpg" alt="s5" class="oldalkepek">

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