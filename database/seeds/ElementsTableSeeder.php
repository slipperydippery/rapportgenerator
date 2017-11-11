<?php

use Illuminate\Database\Seeder;

class ElementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elements')->delete();

        $elements = [
            [
                'body' => '<p>Voor de sectorinstituten TIN en MCN was publieke informatievoorziening, dus gericht op sector &eacute;n samenleving, een belangrijke taak. Zij hebben zorggedragen voor de (door)ontwikkeling van de Theaterencyclopedie en de Muziekencyclopedie, die gestart is door het voormalige Nationaal Pop Instituut. Bij de opheffing van TIN is de verantwoordelijkheid voor de Theaterencyclopedie overgedragen aan Bijzondere Collecties van de Universiteit van Amsterdam en de Stichting TIN, die beide ook een rol hebben in de functie beheer en ontsluiting. Het Instituut Beeld &amp; Geluid heeft per 2013 de verantwoordelijkheid over de Muziekencyclopedie overgenomen. Daardoor zijn deze online kennisplatforms behouden en onderhouden gebleven. De fysieke informatievoorziening van TIN en MCN als documentatiecentrum is minder goed in stand gebleven.</p>

<p>De sector podiumkunsten is vanuit marketingperspectief zeer gebaat bij informatievoorziening richting het publiek, en daarom heeft het brede aandacht in de sector. Uiteraard is er veel informatie beschikbaar van individuele spelers, zowel podia en andere presentatieplekken als gezelschappen en andere producenten. Er zijn overigens wel belemmeringen in de uitwisseling van informatie tussen podia en gezelschappen, soms vanuit individuele belangen van instellingen, waardoor het gezamenlijk belang om het publiek te kunnen informeren ondersneeuwt. Het initiatief podiumkunsten.info wil deze data-uitwisseling vergemakkelijken. Ook bestaat er voor de sector als geheel collectieve informatievoorziening. Dit betreft grotendeels actuele informatie over lokaal en regionaal podiumkunsten-aanbod, maar ook achtergrondinformatie. Het is wel de vraag of deze informatie ook nieuwe en potenti&euml;le publieksgroepen voldoende bereikt.</p>

<p>Wat van levensbelang voor de sector is, is ook plek voor kritiek en reflectie op wat er wordt gemaakt. Daarin vervullen media een rol. De landelijke, regionale en lokale pers verzorgt een deel van de recensies. Daarnaast is er behoefte aan professionele reflectie, waarin bijvoorbeeld de Theaterkrant kan voorzien. De positie van dergelijke vakmedia staat onder druk. Geschiedschrijving wordt gemist door spelers in de sector, ook door toetreders die zich willen verdiepen in het verleden. Een punt van kritiek uit het veld is ook dat van bijeenkomsten geen goede verslaglegging meer plaatsvindt, maar dat het beperkt blijft tot filmpjes en sfeerschetsen, waardoor informatie verdwijnt.</p>

<p>Meer beleids- en branchegerichte informatie komt tot stand bij overheden en brancheverenigingen. Resultaten van onderzoeken vanuit databases en benchmarks worden gepubliceerd en verspreid, vooral via digitale wegen maar ook in gedrukte vorm, zoals Cultuur in Beeld van het ministerie van OCW. Beleidsplannen en jaarverslagen van instellingen zijn goed beschikbaar, waar het gesubsidieerde en algemeen nut beogende instellingen (ANBI&rsquo;s) betreft, waarvoor publicatieplicht geldt. Het Fonds Podiumkunsten speelt hier ook een rol in, door het opvragen van informatie op bij gesubsidieerde instellingen en publiceren daarvan. </p>

<p>Verschillende andere rijksgesubsidieerde instellingen dragen vanuit hun perspectief en competenties bij aan de informatievoorziening voor en over de podiumkunsten, zoals de bovensectorale instellingen DutchCulture, DEN de Boekmanstichting en het LKCA, en specifieker, Instituut Beeld &amp; Geluid en Muziekweb, dat is voortgekomen uit de Centrale Discotheek Rotterdam. </p>

<p>Ondanks de brede beschikbaarheid van diverse soorten informatie, overheerst in het veld het gevoel dat de informatievoorziening binnen de podiumkunsten gebrekkig is geregeld. Er is onvoldoende regie, informatiebeleid, transparantie en eenduidigheid. Historische informatie wordt weinig beheerd en bewaard, waardoor kennis niet geborgd wordt en verdwijnt. Nieuwe ontwikkelingen worden onvoldoende gedeeld en kansen blijven daardoor onderbelicht. Duiding vindt onvoldoende plaats. Ook zijn er zorgen over onafhankelijkheid en daarmee de beschikbaarheid van objectieve informatie.  </p>',
                'sector_id' => '1',
                'functie_id' => '1'
            ],
            [
                'body' => '<p>Onderzoek is wellicht de meest breed belegde ondersteuningsfunctie in de podiumkunsten. De lijst met partijen die onderzoek doen of laten doen is lang: overheden en fondsen zelf, rekenkamers, ZBO&rsquo;s, brancheverenigingen, onderzoeksinstituten (wetenschappelijk en maatschappelijk), onderzoeksbureaus et cetera. Ontwikkeling, dus toekomstgerichte verkenning, is minder breed belegd en wordt veelal gemist in de podiumkunsten. De Raad voor Cultuur is daar overigens nu wel actief mee bezig en de resultaten worden zeer binnenkort verwacht. Ook een regiefunctie met een centrale onderzoeksagenda wordt gemist. Overzicht over wat allemaal is en wordt onderzocht ontbreekt. De sectorinstituten vervulden deze rol in het verleden enigszins, evenals het ministerie zelf. Dat is nu niet belegd, althans niet in voldoende mate voor de podiumkunsten als geheel. Er gaan stemmen op voor een centraal kennisinstituut voor de cultuursector.</p>

<p>Het Fonds Podiumkunsten beschikt vanuit de rol als financier over een schat aan informatie en verricht op de financi&euml;le data en prestatie-gegevens analyses die worden gepubliceerd zoals effectrapportages. Het FPK laat incidenteel ook onderzoek verrichten, ook gericht op ontwikkeling. Een voorbeeld is de Effectmonitor, een eenvoudige &lsquo;gereedschapskist&rsquo;, waarmee gesubsidieerde gezelschappen gemakkelijker zicht krijgen op de effecten van hun artistieke inspanningen. De monitor stelt de gezelschappen in staat een goed onderbouwd verhaal te vertellen. Aan de hand van de uitkomsten kunnen gezelschappen bovendien hun strategie sneller en gemakkelijker bijstellen. Het FPK vindt dat een dergelijke monitor vervolgens door de branche zelf moet worden overgenomen, maar vindt daar geen partner voor. </p>

<p>De branche heeft belang bij specifieke kennis en stelt daarom onder meer benchmarks op. Goede voorbeelden zijn TAS, het Theater Analyse Systeem en het PAS, het Poppodium Analyse Systeem. Die vormen ook belangrijke bronnen voor de uitgave Podia van de VSCD en Het Grote Poppodium Onderzoek van de VNPF. Verder is er een uitgebreide database met de speellijsten van de voorstellingen van rijksgefinancierde gezelschappen die door de branche, het ministerie van OCW en het Fonds Podiumkunsten samen wordt onderhouden. Een database met praktische toepassing en informatieve waarde is de podiumkunsten.info met digitale koppelingen tussen podia en bespelers.</p>

<p>Onderzoeksbureaus verrichten in opdracht onderzoeken en analyses, inclusief scenarioverkenningen, die bij kunnen dragen aan de sector als goede vragen worden geformuleerd en de juiste kennis en ervaring bijeen wordt gebracht.  </p>',
                'sector_id' => '1',
                'functie_id' => '2'
            ],
            [
                'body' => '<p>In de podiumkunsten, zowel bij muziek als bij theater, ligt de grootste zorg (maar overigens niet de hoogste prioriteit qua ondersteuning) van het veld in het beheer, behoud en ontsluiting van de collecties. Over dit onderwerp zijn al vele beleidsstukken geschreven, maar een structurele oplossing is niet gevonden. Het betreft onder meer de uitgebreide collecties die de Nederlandse muziek- en theatergeschiedenis heeft opgeleverd, onder meer in bladmuziek, opnames en registraties maar ook in decors, regie en choreografie, en daarnaast documentatie en archieven vol met muziek- en theatergerelateerde uitgaven, affiches, programmaboekjes en dergelijke. Het gaat, zoals werd verwoord door Steph Scholten, directeur UvA Erfgoed in een brief van mei 2017 aan de minister van OCW, om &lsquo;collecties die als enige de continu&iuml;teit vertegenwoordigen van sectoren die altijd bezig zijn met het cre&euml;ren van nieuwe interpretaties en daarvoor hun bronnen uit het verleden nodig hebben.&rsquo;</p>

<p>NMI heeft de erfgoedtaak nog steeds, maar heeft moeite om de taak naar waarde te vervullen, mede door het wegvallen van de rijkssubsidies. Het NMI leunt op het Haags Gemeentearchief, dat, net als veel andere regionale en lokale archieven, ook muziek- en theatercollecties beheert. MCN en TIN hadden beide een belangrijke erfgoedtaak voor de nationale muziek- en theatercollecties, en bij de opheffing is naarstig naar vervanging gezocht maar dit is maar ten dele gelukt. Stichting TIN is nog steeds eigenaar van de erfgoedcollectie en mediatheek en leunt op liefhebbers. De afdeling Bijzondere Collecties van de Universiteit van Amsterdam heeft een deel van deze erfgoedcollecties van muziek en theater opgenomen. Hiervoor was tijdelijke financiering beschikbaar vanuit de erfenis van de voormalige sectorinstituten, maar de bodem van dat budget is in zicht. De mediatheek van het TIN is met bijbehorende middelen ondergebracht bij de Universiteitsbibliotheek van de UvA. </p>

<p>Als nadeel van dergelijke meer algemene archieven wordt genoemd dat specifieke expertise in podiumkunsten, en misschien ook wel liefde, ontbreekt om tot betekenisvolle ontsluiting te komen, bijvoorbeeld in presentaties en publicaties. Collecties raken in het grotere geheel ondergesneeuwd en verweesd. Deze zorg spreekt de UvA zelf ook uit, in eerdergenoemde brief aan de minister.</p>

<p>Een ander deel van de collecties is verspreid over diverse partijen die hier een toepassing voor zagen of die van mening waren dat de collecties moesten worden onderhouden, ontsloten en uitgebreid. Voor een deel zijn dit bestaande instituten zoals Muziekweb (voortgekomen uit CDR), Beeld &amp; Geluid en het MCO (inmiddels SOM) in Hilversum. Een ander voorbeeld is het Jazzarchief dat eerder was opgegaan in het MCN en uit pure noodzaak is heropgericht. Ook bij deze partijen ontbreekt het over het algemeen aan voldoende middelen om deze taak duurzaam op zich te nemen, en moet worden teruggevallen op particulier initiatief. </p>

<p>Juist in deze tijd van digitalisering en toenemend (digitaal) mediagebruik en mede gezien de aandacht voor cultuureducatie, liggen er veel kansen in de grootschalige ontsluiting voor de sector en het brede publiek van muziek- en theatercollecties en producties. Beperkingen liggen in financiering en rechten. De cultuurproducerende instellingen hebben hier zelf ook veel baat bij maar nauwelijks gelegenheid toe. Het contrast tussen de podiumkunsten waarin deze erfgoedtaak is vervallen en de sectoren film en creatieve industrie die hier met Eye en Het Nieuwe Instituut volwaardige en rijksgefinancierde erfgoedfuncties hebben, wordt schrijnend genoemd.  </p>',
                'sector_id' => '1',
                'functie_id' => '3'
            ],
            [
                'body' => '<p>Generieke vertegenwoordiging van de podiumkunsten als geheel of de grote deelsectoren wordt sterk gemist in de sector. TIN en MCN werden in het verleden gezien als centrale instituten die hierin een duidelijke rol en positie hadden. Wel wordt opgemerkt dat deze partijen vooral werden gezien als vertegenwoordigers van de gevestigde orde, en minder stonden voor nieuwe en alternatieve spelers in het veld. Het Fonds Podiumkunsten heeft de brede vertegenwoordigende rol wel enigszins naar zich toegetrokken. Het FPK vindt zichzelf zichtbaar binnen de podiumkunstensector, onder andere door bijeenkomsten te organiseren, deel te nemen aan panels en discussies en gastcolleges te geven. Het FPK komt naar eigen zeggen regelmatig in de media, met berichtgeving over eigen initiatieven (prijzen, subsidietoekenningen) of met interviews, quotes en meningen over actuele onderwerpen in de sector.</p>

<p>Bij vertegenwoordiging hoort ook belangenbehartiging. Objectieve belangenbehartiging, dat wil zeggen vanuit het algemeen belang, is op dit moment niet of nauwelijks belegd binnen de podiumkunsten. Daarmee ontbreekt het de sector op dit moment aan een centrale en neutrale positie van aanspreekpunt en boegbeeld zonder eigenbelang. Dat is wel van groot belang, vindt de sector, juist ook richting de politiek, het ministerie, de andere overheden en het publiek. De Raad voor Cultuur heeft te veel de positie van adviseur van het ministerie om hierin te voorzien. Ook het Fonds Podiumkunsten wordt meer gezien als verlengstuk van het ministerie dan als vertegenwoordiger van de sector zelf. Het FPK wil deze rol zelf ook niet vervullen. Dat is in andere sectoren anders, waarbij als voorbeelden het Mondriaan Fonds en het Filmfonds worden genoemd. </p>

<p>De subjectieve belangen van de sector podiumkunsten wordt door diverse partijen behartigd. Over de gehele sector heen spelen Kunsten&rsquo;92, Federatie Cultuur en de Akademie voor Kunsten belangrijke rollen en zij zoeken elkaar op, vullen elkaar aan en versterken elkaar. Daarnaast zijn diverse brancheverenigingen landelijk actief. Drie grote spelers, de NAPK namens de gezelschappen die worden gesubsidieerd (vooral door het rijk), de VSCD namens de schouwburgen en concertzalen en de VVTP namens de vrije theaterproducenten, onderzoeken intensivering van de samenwerking. Binnen de podiumkunsten leeft al geruime tijd de wens om de krachten te bundelen om de politieke en maatschappelijke positie van de podiumkunsten in Nederland te versterken, gezamenlijk een breed en divers publiek te bereiken en de dienstverlening aan de aangesloten podiumkunstorganisaties te optimaliseren, zo stellen deze drie verenigingen. Verder speelt de VNPF een zichtbare rol namens de poppodia en festivals. Er zijn er veel meer, zoals Dansbelang, de nieuwe Vereniging Podiumkunstenfestivals en de VvNO, vereniging van Nederlandse Orkesten, die zich heeft afgesplitst van de NAPK. Ook wordt een deel van de vertegenwoordiging geleverd door beroepsverenigingen en vakbonden, waarvoor de belangen van de diverse beroepsgroepen en de werknemers centraal staan, terwijl de brancheverenigingen meer de werkgeversbelangen dienen. Als probleem wordt benoemd dat de afstand tussen vertegenwoordiger en vertegenwoordigde nogal groot is, in deze brede en zeer diverse sector. </p>

<p>Met name MCN maakte veel werk van internationalisering en promotie van de muzieksector. Internationalisering is deels ondergebracht bij DutchCulture, waarvoor de podiumkunsten een belangrijke plek verdienen, zie ook het hoofdstuk Bovensectoraal Internationalisering. Daar is ook de interactie met de diverse cultureel attach&eacute;s belegd. Deze internationale promotierol is deels overgenomen door Dutch Performing Arts, een programma van het Fonds Podiumkunsten. Dutch Performing Arts richt zich op het intensiveren van contacten tussen Nederlandse makers en buitenlandse afnemers. Daarnaast wil Dutch Performing Arts de interesse van buitenlandse programmeurs in Nederlandse podiumkunsten vergroten en de internationale ambitie van Nederlandse instellingen met internationale potentie prikkelen. Hiertoe organiseert Dutch Performing Arts showcases op sleutelevenementen in binnen- en buitenland en bezoekersprogramma&rsquo;s voor relevante buitenlandse gasten. Daarnaast reist Dutch Performing Arts af naar het buitenland om Neder&not;land ter plekke te vertegenwoordigen en/of onderzoek te doen. Het Fonds Podiumkunsten wil de komende tijd, samen met het ministerie van OCW, komen tot een integraal internationaal poppromotiebeleid en de rolverdeling daarbij van de belanghebbende partijen. Ook het topsectorenbeleid van de rijksoverheid wordt hierin betrokken. Het valt op dat dit alleen voor pop geldt, terwijl er bredere behoefte is, zo bleek onder meer bij de werksessie over Internationalisering. Een tegengeluid uit de sector is dat het veld zichzelf internationaal zou moeten vertegenwoordigen, in plaats van dit aan een ander instituut over te laten.</p>

<p>Een nationale, centrale promotierol voor de podiumkunsten is niet belegd. Het Bureau Promotie Podiumkunsten bestaat niet meer. Er zijn diverse organisaties die op hun manier bijdragen aan marketing en instrumentarium voor de podiumkunsten, maar dat zijn in veel gevallen dienstverlenende bureaus en daar zit een prijskaartje aan voor de sector. Marketing voor cultuur is wel in veel steden centraal geregeld, bijvoorbeeld bij Uitbureaus, die zich op het publiek van bewoners en bezoekers richten, en soms ook op bedrijven.  </p>',
                'sector_id' => '1',
                'functie_id' => '4'
            ],
            [
                'body' => '<p>Afstemming en co&ouml;rdinatie is &eacute;&eacute;n van de besteltaken die was geformuleerd voor sectorinstituten, en daarnaast reflectie. Deze taken komen samen in de netwerkactivering. Voorheen vervulden TIN en MCN en hun rechtsvoorgangers daarin een rol, maar toen en nu nog steeds ook veel andere partijen die ook bij Vertegenwoordiging zijn genoemd. Het belang van netwerken wordt breed erkend, niet alleen binnen de sector podiumkunsten (en alle deelsectoren) maar juist ook in relatie tot andere domeinen en internationale verbanden. Netwerken lijken zich als vanzelf te ontwikkelen. </p>

<p>Het Fonds Podiumkunsten ziet het faciliteren van netwerken als een van zijn ondersteunende functies. Een voorbeeld is dat het fonds van de minister de regie-opdracht heeft gekregen om strategische allianties tussen podia en gezelschappen te onderzoeken en te stimuleren. Het FPK heeft in 2016 een voorstel opgesteld voor pilots om de makelaarsrol van podia (en festivals) in relatie tot het gesubsidieerde aanbod en het publiek te onderzoeken en te ondersteunen. In het beleidsplan zegt het fonds ook de mogelijkheid te gaan onderzoeken om netwerken op te zetten met een kern die verantwoordelijk is voor het verzamelen, delen en borgen van kennis. Hoe dat concreet vorm krijgt, is nog niet zichtbaar. Een dergelijk netwerk ontstaat vermoedelijk niet vanzelf.</p>

<p>De brancheverenigingen houden elk ook jaarlijks een congres, zoals het Congres Podiumkunsten en het Congres Podia &amp; Festivals. Verder zijn er tal van bijeenkomsten gericht op beleidsvorming en debat die worden georganiseerd voor de podiumkunsten en andere cultuursectoren, onder meer door Kunsten&rsquo;92 zoals het Paradisodebat, door de Boekmanstichting en Akademie voor Kunsten / KNAW, het ene meer zichtbaar dan het andere. De Federatie Cultuur zoekt actief netwerken op met onder meer MKB Nederland en VNO/NCW. </p>

<p>Netwerkactivering vindt eveneens plaats bij grotere bijeenkomsten zoals Classical Next, BUMA Classical Convention, Eurosonic Noorderslag en het Amsterdam Dance Event. Festivals lenen zich, zo stelt de sector, bij uitstek voor netwerkvorming omdat de relevante partijen bij die gelegenheden toch al bijeenkomen. </p>

<p>Mede bij gebrek aan sectorinstituten maar vooral vanuit intrinsieke behoefte aan samenwerking, verbinding en versterking ontstaan steeds meer platforms, coalities en community&rsquo;s, bottom up vanuit verschillende deelsectoren. Voorbeelden zijn de Popcoalitie en de Klassieke Muziek Coalitie, waarin een groot aantal organisaties en verenigingen zich met elkaar verbinden, en de Werkgroep NIT, een informele tafel van personen en instellingen die zich bezighouden met erfgoed, reflectie, archivering, debat en ontsluiting in de podiumkunsten. Dergelijke coalities en werkgroepen opereren vanuit een gezamenlijke agenda en zijn daarmee actie- en resultaatgericht. Deze platforms bieden een alternatief voor centrale vertegenwoordiging en belangenbehartiging, maar zorgen uiteraard ook voor ontmoeting, uitwisseling en debat. De fysieke component is daarbij zeer belangrijk, maar er ontstaan ook steeds meer digitale mogelijkheden voor netwerkvorming. Naast landelijke platforms zijn er vele regionale en lokale netwerken die zich richten op samenwerking en beleidsbe&iuml;nvloeding. Deze werken deels sectoraal, maar vaak over meer sectoren heen, en pakken ook lokaal relevante thema&rsquo;s op zoals talentontwikkeling en diversiteit. Bij netwerkactivering horen ook incidentele initiatieven. Zo vond recent het Noordwijkoverleg plaats waarbij de negen BIS-theatergezelschappen in de podiumkunsten met 13 grote schouwburgen in overleg gingen, onder meer over het thema culturele diversiteit. Een andere incidentele vorm van netwerkactivering is het vanuit de sector instellen van commissies die een thema oppakken, zoals de Commissie Ter Horst over (onder meer) de theatersector en het publiek van de toekomst. Daarentegen komt ont-netwerken ook voor: jonge makers willen minder met gevestigde instellingen te maken hebben en onttrekken zich aan (old boys) netwerken.</p>

<p>Als nadelen van de vorming van veel nieuwe netwerken worden onder meer de versnippering en het gebrek aan afstemming en co&ouml;rdinatie genoemd. Het grote verband en het collectieve geheugen worden gemist. Het wordt minder duidelijk wie waarover gaat en op aan te spreken is. De kwaliteit en betekenis van de verschillende netwerken vari&euml;ren. Om netwerken succesvol te laten zijn, is veel tijd en inzet vereist. Deze inspanningen moeten voor de initiatiefnemers wel worden gecompenseerd door de toegevoegde waarde van het deelnemen aan netwerken.  </p>',
                'sector_id' => '1',
                'functie_id' => '5'
            ],
            [
                'body' => '<p>Beleid voor podiumkunsten lijkt een veelkoppig monster. Het beeld bestaat dat het beleid van het ministerie van OCW vooral over de (subsidi&euml;ring van) gezelschappen gaat. Dat is &eacute;&eacute;n van de redenen waarom de popsector zich ook niet terugziet in dat beleid. Het beleid van OCW zou in het verlengde moeten liggen van, of richtinggevend moeten zijn voor regionaal en lokaal beleid dat over presentatievoorzieningen gaat, maar overigens ook vaak over regionaal en lokaal gecofinancierde gezelschappen. </p>

<p>Nationaal inhoudelijk cultuurbeleid werd in het verleden be&iuml;nvloed door de sectorinstituten. Deze rol lijkt nu vooral te liggen bij de brancheverenigingen en soms ook de vakbonden. De Raad voor Cultuur heeft uiteraard nog steeds invloed op het cultuurbeleid, en zoekt daarbij steeds meer de verbindingen tussen het nationale en het stedelijke beleid, zeker met het oog op het toekomstig cultuurbestel. Het veld moedigt stellingname in het beleid door de Raad voor Cultuur aan. De recente ronde langs de velden in de verschillende regio&rsquo;s wordt door het veld gewaardeerd. </p>

<p>Het Fonds Podiumkunsten lijkt zich niet zo te (willen) bemoeien met het inhoudelijk cultuurbeleid en stelt zich meer op als uitvoerder van het beleid. In die uitvoering krijgt het beleid concreet vorm in allerlei regelingen voor financiering en een enkele regeling of voorziening op een meer inhoudelijk terrein. Het veld constateert een sterke standaardisering en juridisering daarvan en heeft daar moeite mee. </p>

<p>Er zijn in de podiumkunsten geen partijen die vanuit het ministerie beleidsuitvoerende taken toebedeeld hebben gekregen, afgezien van de financiering door de fondsen. Sowieso komt dit in de cultuursector landelijk niet veel voor, wellicht alleen bij het LKCA (zie Bovensectoraal Cultuureducatie en Cultuurparticipatie) voor, bijvoorbeeld, het programma Cultuureducatie met Kwaliteit. Op provinciaal en lokaal niveau komt het echter wel degelijk voor, zoals bkkc in Noord-Brabant en het Cultuurbedrijf in Eindhoven (naast de financieringstaak die daar ook is belegd), en de diverse penvoerders van regelingen zoals de Muziekimpuls en Cultuureducatie met Kwaliteit.  </p>',
                'sector_id' => '1',
                'functie_id' => '6'
            ],
            [
                'body' => '<p>Deskundigheidsbevordering, te weten professionalisering op ander dan artistiek-inhoudelijk vlak, komt in redelijk veel vormen voor in de cultuursector, zoals in de inleiding van dit rapport ook al is beschreven. In het recente rijksbeleid is ervoor gekozen deskundigheidsbevordering op inhoudelijk gebied in het algemeen aan de podiumkunstensector over te laten. Dat heeft met name betrekking op artistieke talentontwikkeling en de rol van ontwikkelinstellingen. Het Fonds Podiumkunsten heeft mede daarom geen taken en activiteiten op het gebied van deskundigheidsbevordering. </p>

<p>Brancheverenigingen, maar ook beroepsverenigingen, bonden, vakbonden en het Sociaal Fonds Podiumkunsten wijzen hun leden de wegen naar een breed palet aan opleidingen, vari&euml;rend van zakelijke tot technische opleidingen. De VSCD had in het verleden een eigen pakket aan opleidingen, maar dat wordt nu niet meer als zodanig aangeboden, er wordt alleen doorverwezen. Verder zijn er postdocs en na- en bijscholingstrajecten van universiteiten en hogescholen, evenals particuliere opleidingen gericht op de cultuursector. Deze opleidingen en trainingen moeten wel worden bekostigd door de deelnemers zelf of door de instellingen waar zij werkzaam zijn, en daar zijn niet veel middelen voor beschikbaar. Bij het Sociaal Fonds Podiumkunsten kunnen aanvragen worden gedaan voor bijdragen in de kosten van loopbaanontwikkelingstrajecten. Het is onbekend in hoeverre binnen de podiumkunsten gebruik wordt gemaakt van dit en andere opleidings- en ontwikkelingsfondsen (O&amp;O-fondsen).   Professionals uit de podiumkunsten maken goed gebruik van de opleidingen binnen het Programma Ondernemerschap Cultuur, waaronder de opleiding LinC (Leiderschap in Cultuur). De helft van de 350 deelnemende instellingen in de periode 2014-2017 aan Wijzer Werven, het trainings- en coachingsprogramma voor fondsenwerving, komt uit de podiumkunsten. Ook trainingen van Cultuur+Ondernemen worden benut vanuit de podiumkunstensector. De financiering van het ministerie van OCW voor het programma Ondernemerschap Cultuur loopt echter af per eind 2017 en er is nog geen zicht op (financiering van het) vervolg van deze opleidingen en trainingen. </p>

<p>De sector werkt nauwelijks met keurmerken, afgezien van BHV en diploma&rsquo;s in bepaalde (theater)technische rollen. Er zit mede daardoor geen verplichtend karakter in bijscholing, en ook weinig richting of profilering in vereiste competenties. Instellingen hechten er ook aan om van elkaar te leren en onderling te klankborden. Daarvoor dienen de netwerken ook mede. Het NAPK organiseert intervisie voor zijn leden. Inhoudelijke vorming biedt zo enig uitzicht op professionele ontwikkeling, in een sector met begrenst loopbaanperspectief. </p>

<p>Een bijzondere vorm van deskundigheidsbevordering vormen de prijzen die aan talenten of reeds gevorderde professionals worden toegekend en die voor de eigen professionalisering kunnen worden ingezet.  </p>',
                'sector_id' => '1',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '2',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '2',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '2',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '2',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '2',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '2',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '2',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '3',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '3',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '3',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '3',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '3',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '3',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '3',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '4',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '4',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '4',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '4',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '4',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '4',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '4',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '5',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '5',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '5',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '5',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '5',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '5',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '5',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '6',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '6',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '6',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '6',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '6',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '6',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '6',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '7',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '7',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '7',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '7',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '7',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '7',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '7',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '8',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '8',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '8',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '8',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '8',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '8',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '8',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '9',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '9',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '9',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '9',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '9',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '9',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '9',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '10',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '10',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '10',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '10',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '10',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '10',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '10',
                'functie_id' => '7'
            ],
            [
                'body' => '',
                'sector_id' => '11',
                'functie_id' => '1'
            ],
            [
                'body' => '',
                'sector_id' => '11',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '11',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '11',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '11',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '11',
                'functie_id' => '6'
            ],
            [
                'body' => '',
                'sector_id' => '11',
                'functie_id' => '7'
            ],
        ];

        DB::table('elements')->insert($elements);
    }
}
