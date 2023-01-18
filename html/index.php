<?php
	session_start();
	include "metodusok.php";
	
	$_SESSION['ido'] = setTime();
  
?>

<!DOCTYPE html>

<html lang="hu">

<head>
    <meta name="description" content="marsi jarmuveket bemutato oldalak"/>
    <meta name="keywords" content="mars, rover, jegy, otos"/>
    <meta name="author" content="Sipos Bálint, Zöldi Péter"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <title>Főoldal | Marsi Járművek</title>
    <link rel="stylesheet" type="text/css" href="../css/marsi_jarmuvek_design.css"/>
</head>

<body>  
    <nav>
        <ul class="listamenu">
		
		<?php if (isset($_SESSION["user"])) { ?>
			<li><a href="index.php" class="jelenlegi lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
			<li><a href="spirit.php" class="lista">Spirit</a></li>
			<li><a href="opportunity.php" class="lista">Opportunity</a></li>
			<li><a href="curiosity.php" class="lista">Curiosity</a></li>
			<li><a href="perseverance.php" class="lista">Perseverance</a></li>
			<li><a href="profile.php" class="lista">Profil</a></li>
		<?php } else { ?>
			<li><a href="index.php" class="jelenlegi lista">Főoldal</a></li>
			<li><a href="sojourner.php" class="lista">Sojourner</a></li>
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

            <div>

                <a href="http://www.termeszetvilaga.hu/tv99/tv9911/mars.html" target="_blank"><h1 id="marskutatas">Mars-kutatás</h1></a>
                <img id=panorama src="../images/fooldal/Panorama.jpg" alt="p1" class="oldalkepek">

                <p>A Hold után a Marsot kereste fel a legtöbb űrszonda. Az egyik legfontosabb kérdés, amit a kutatások el kellett döntsenek, hogy van-e, vagy volt-e élet a bolygón. A Mars kutatására felküldött űrszondák legtöbbje különböző hibák miatt nem tudta elvégezni a kitűzött feladatait. Az első közeli fényképeket a vörös bolygó felszínéről az amerikai Mariner–4 készítette el 1964-ben. A felszínre először a szovjet Marsz–3 lander szállt le 1971-ben. A Mars első műholdja a Mariner–9 volt, 1971-ben.</p>

            </div>
            <div>

                <hr id="60asevek">
                <h2>1960-as évek</h2>

                <p><mark>1962. november 1.</mark>: elindul az első űrszonda, a szovjet Marsz–1 a bolygó felé, de a Földtől 106 millió kilométerre megszakad vele a kapcsolat.</p>

                <p><mark>1964. július 15.</mark>: az amerikai Mariner–4 űrszonda 9846 kilométerre elrepülve a Mars mellett (mivel nincs fékezésre alkalmas eszköze) elkészíti az első 21 fekete-fehér közelképet. Kiderül, hogy a felszín kráterekkel szabdalt, nincsenek Mars-csatornák a bolygón, és nem léteznek épületek vagy idegen civilizáció.</p>

                <p>Légköre főleg szén-dioxidból áll, és a felszíni légnyomás a földinek csak századrésze.</p>

                <p><mark>1969. július 31. és augusztus 5.</mark>: a Mariner 6 és Mariner 7 3429 és 3430 kilométerre repül el a Mars felszíne felett, és több száz képet és mérést küld a Földre. A két Mars-holdról, a Phoboszról és a Deimoszról készült képek azt jelezték, hogy szabálytalan alakúak.</p>

                <p>A Mariner 9 felvételein – ez a szonda lett az első Mars-műhold 1971 novemberében – már feltűnt számos igen érdekes, azelőtt ismeretlen felszíni alakzat: hatalmas völgyrendszer, óriás vulkánok. A mérések alapján az északi félteke kérgének vastagsága mindössze 10%-a a délinek.</p>

                <p>A hallatlan méretű völgyrendszert erről az űrszondáról nevezték el Valles Marinerisnek. A marsi egyenlítőtől kissé délre, nyugat-keleti irányú töréshálózat valószínűleg egy régen elkezdődött, majd leállt lemeztektonikai folyamat maradványa. A Valles Marineris átlagosan 2-3 kilométer mély, nagyjából 4000 km hosszúságú, 200-300 kilométer széles, több kiszélesedése és melléköble van. A 9-10 kilométer magasságú Syria-síkságba bevágódó Valles Marineris olyan tenger lehetett 3-4 milliárd évvel ezelőtt, amikor még sűrű légköre és sok folyékony vize volt e bolygónak, mint ma a Vörös-tenger.</p>

                <p>Hamarosan az is kiderült, hogy a Marson található a Naprendszerünk legnagyobb vulkánja: az impozáns méretű, több mint 21 kilométer magas kúp, az Olympus Mons, aminek átmérője az alapjánál eléri a 600 kilométert. A nyugati oldalon lévő leszakadásokkal egybevéve a <b>NASA</b> kutatói megállapították: egykoron sekély tengerben állhatott. Két másik vulkánnal, az Arsia Monssal, és az Ascraeus Monssal egyenlő szárú háromszöget alkot. A legnagyobb meglepetést azonban az okozta, hogy a Mariner-9 képein már feltűnt néhány kiszáradt folyómederhez hasonlító alakzat is. Valamint egyedül a Marson vannak <q>loccsanásos</q>, víz alatti becsapódási kráterek, melyek körül a víz eróziójának nyomai láthatóak. Ez újabb reménnyel töltötte el azokat, akik hisznek a marsi élet valamilyen formájának a lehetőségében.</p>

            </div>
            <div>

                <hr id="70esevek">
                <h2>1970-es évek</h2>

                <p>Két szovjet űrszonda leszállóegysége 1971 novemberében és decemberében megkísérelt simán leereszkedni a Mars felszínére. A Marsz–2 becsapódott és tönkrement, ám a Marsz–3 leszállóegysége sikeresen landolt, s már közvetíteni is kezdett a felszínről, de az első tudományos mérési adatok Földre érkezése előtt váratlanul elhallgatott. Utóbb kiderült, hogy mindkét szonda sikertelenségéért a magasságmérő radar hibás kalibrációja a felelős, a Mars földitől jelentősen eltérő visszaverő képességű felszínén a két szonda a <q>felszín alatt</q> próbált meg leszállni, fékezőrakétáik késve gyújtottak be, és a műszerek a tervezettnél jelentősen nagyobb túlterheléssel végrehajtott leszállás miatt megsérültek, használhatatlanná váltak.</p>

                <p><mark>1974. február 10. és 12.</mark>: a Marsz–4 szovjet szonda műszaki hiba miatt elrepül a bolygó mellett, de a Marsz–5 sikerrel műholdpályára állt, méréseiből felfedezték a Mars belső eredetű mágneses terét.</p>

                <p>Szovjet űrszondák (a Marsz–6 és Marsz–7) ezután még kétszer kíséreltek meg leszállni a bolygóra 1974 márciusában, mindkét alkalommal sikertelenül.</p>

                <p><mark>1974. március 9. és 12.</mark>: a Marsz–7 leszállóegysége műszaki hiba miatt elrepült a Mars mellett, a Marsz–6 leszállója pedig becsapódott a felszínbe, az anyaszondák is elrepültek a Mars mellett. Az orosz kutatók csak 1996-ban, a Csendes-óceánba zuhant Marsz–96 kísérlet, vagyis a Marsz–8 űrszonda kudarca kapcsán vallották be, hogy a korábbi leszállóegységek becsapódásának felelősei a magasságmérők voltak, amelyek mágneses érzékelői a talajban lévő igen nagy mennyiségű vasoxid miatt hibásan működtek.</p>

                <p>Az amerikai Viking űrszondapáros 1976 nyarán állt bolygó körüli pályára. Méréseikből kiderült, hogy a poláris sapkákban a szén-dioxid-jég mellett igen nagy mennyiségű vízjég is van. A Viking szondák keringőegységeinek képein egykori folyószakaszok is szép számmal megfigyelhetők.</p>

                <p>A Viking szondák leszállóegységei 1976. július 20-án, majd szeptember 3-án sikerrel talajt értek a Marson, s éveken keresztül vizsgálták a felszíni viszonyokat, ám sem életnyomokat, sem szerves anyagot nem sikerült egyértelműen kimutatniuk a vörös marsi talajban. (A kísérletek nem voltak egyértelműek, volt pozitív eredményű, melyet később szervetlen jelenségekkel is meg lehetett magyarázni, és volt olyan kísérlet, mely bizonyos földi mintákkal elvégezve is negatív eredményt adott).</p>

                <p>Annál nagyobb volt a meglepetés és a szenzáció, amikor 1996 nyarán az amerikaiak bejelentették, hogy a Föld déli sarkvidékén, az Antarktiszon gyűjtött és marsi eredetűnek talált meteorit, az ALH 84001 belsejében primitív egysejtűek (nanobaktériumok) 3,5 milliárd évesre becsült nyomait fedezték fel.[1] A felfedezést akkora jelentőségűnek ítélték meg, hogy azt személyesen Bill Clinton, az Egyesült Államok akkori elnöke jelentette be televíziós beszédben. A következtetéseket máig vitatják, sem kizárni, sem megerősíteni nem tudták.[2]</p>

            </div>
            <div>

                <hr id="napjaink">
                <h2>Napjaink</h2>

                <div class="tobboszlopos">
                    <p>A Viking űrszondák sikere utáni évtizedekben több kudarcot is el kellett könyvelni a Mars-kutatásban. A Fobosz és Mars Observer űrszondák 1988-1989-es és 1993-as elhallgatása, valamint a Marsz–8 1996-os földi lezuhanása, a Mars Climate Orbiter 1998-as és a Mars Polar Lander – Deep Space–2 1999-es sikertelen küldetése után az amerikaiak szerencsésebbek voltak a következő szondákkal: Mars Odyssey, Mars Exploration Rover. Korábban a Mars Pathfinder 1997. július 4-én leszáll az Ares Vallis északi végénél, a Mars Global Surveyor pedig 1997. szeptember 9-én állt Mars körüli pályára. 2004-ben érkezett meg a Marshoz az első európai és az első japán Mars-szonda, a Mars Express illetve a Nozomi (Planet-B). A Nozominak nem sikerült pályára állnia a bolygó körül. Az amerikai Phoenix űrszonda viszont 2008-ban sikeresen leszállt.</p>

                    <p>A 2010-es évek nagyobb és összetettebb küldetéseket hoztak. Az egyik legjelentősebb az amerikai Curiosity marsjáró, amely az egyik legnagyobb szerkezet, amelyet addig a Mars felszínére juttattak. Az európai kutatóprogram következő lépéseként indult az ExoMars program első szondája, a Trace Gas Orbiter. Bár korábban az Egyesült Államokkal közös lett volna a kivitelezés, a sorozatos csúszások és alulfinanszírozás miatt az amerikaiak kihátráltak a projektből és Oroszország vette át a helyüket. Az oroszok egy újabb sikertelen próbálkozás, a Fobosz-Grunt 2011-es kudarca után szálltak be az európai programba. A Fobosz-Grunttal együtt indult volna Kína első mars küldetése, a Jinghuo–1, de a hordozórakéta felső fokozatának meghibásodása miatt mindkét szerkezet Föld körüli pályán ragadt, majd később, a légkörbe visszatérve megsemmisült.</p>

                    <p>Kína mellett egy másik ázsiai ország, India is beszállt a Mars-kutatásba a 2013-ban elindított Mars Orbiter Mission küldetéssel.</p>

                </div>

            </div>
            <div>

                <hr id="jovo">
                <h2>A jövő</h2>

                    <p>A személyzet nélküli űreszközökkel történő felderítés után a következő nagy lépés az emberes Mars-expedíció. Nincsen még jóváhagyott program, de a legelőrehaladottabb tervekkel rendelkező <b>NASA</b> a 2030-as évekre tartja megvalósíthatónak.</p>

                    <p>Távolabbi cél a Mars kolonizálása, majd terraformálása.</p>

            </div>
            <div>

                <h2>Érdekesség</h2>

                <p>A leghosszabb magyar szó:</p>
                <blockquote cite="https://hu.wikipedia.org/wiki/Magyar_nyelvi_sz%C3%B3rekordok_list%C3%A1ja">
                    <q>eltöredezettségmentes<wbr>ítőtlenítetthetetlenség<wbr>telenítő<wbr>tlenkedhetőiteknek</q>
                </blockquote>
				
				<p><?php	echo "A mai dátum: " . $_SESSION['ido']['nap'];	?></p>
				<p><?php	echo "A mai időpont: " . $_SESSION['ido']['ora'];	?></p>		
				
            </div>

            <div id="animacio"></div>

        </div>

        <div id="sidebar">

            <h1>Tartalom</h1>

            <ul>
                <li><a href="#marskutatas">Mars-kutatás</a></li>
                <li><a href="#60asevek">1960-as évek</a></li>
                <li><a href="#70esevek">1970-es évek</a></li>
                <li><a href="#napjaink">Napjaink</a></li>
                <li><a href="#jovo">A jövő</a></li>
            </ul>
            <br/>
            <img src="../images/fooldal/Fooldal1.jpg" alt="p1" class="oldalkepek">
            <img src="../images/fooldal/Fooldal2.jpg" alt="p3" class="oldalkepek">
            <img src="../images/fooldal/Fooldal3.jpg" alt="p3" class="oldalkepek">
            <img src="../images/fooldal/Fooldal4.jpg" alt="p4" class="oldalkepek">
            <img src="../images/fooldal/Fooldal5.jpg" alt="p5" class="oldalkepek">
            <img src="../images/fooldal/Fooldal6.jpg" alt="p6" class="oldalkepek">
            <img src="../images/fooldal/Fooldal7.jpg" alt="p3" class="oldalkepek">

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