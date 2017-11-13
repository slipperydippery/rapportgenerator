<?php

use Illuminate\Database\Seeder;

class SpecialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('specials')->delete();

        $specials = [
            [
            	'title' => 'Inleiding op onderzoek',
            	'body' => '<h2>1. Inleiding</h2>
<h3>1.1 Rapportstructuur</h3>
<p><em>Leeswijzer</em></p>
<p>Het rapport van het onderzoek naar de ondersteuningsstructuur in de cultuursector in opdracht van het ministerie van OCW bevat de volgende onderdelen. In de inleiding wordt geschetst wat de vraag en de context voor het onderzoek zijn en hoe het onderzoek is opgezet en aangepakt. In hoofdstuk 2 geven we een toelichting op de verschillende sectoren die onderdeel zijn geweest van het onderzoek. Vervolgens bespreken we in hoofdstuk 3 de zeven verschillende ondersteuningsfuncties die zijn ge&iuml;dentificeerd voor de ondersteunende instellingen, en die in dit onderzoek zijn gebruikt om de taken van de ondersteunende instellingen te beoordelen en prioriteren. Daarna volgen de hoofdstukken per sector of bovensectoraal onderwerp. In deze 11 hoofdstukken worden de uitkomsten van de veldraadpleging voor alle sectoren en onderwerpen achtereenvolgens per functie beschreven. Dankzij de rapportgenerator is het in de definitieve versie mogelijk het rapport ook vanuit elke afzonderlijke functie voor alle sectoren en onderwerpen achter elkaar te ordenen. Vervolgens volgt in hoofdstuk 15 de beschouwing per functie in zijn totaliteit, dus van alle sectoren bij elkaar. Hoofdstuk 16 gaat nog in op de prioritering van de verschillende functies per sector, waarna het rapport in hoofdstuk 17 wordt afgerond met de slotbeschouwing.</p>
<p><em>Instructie voor de rapportgenerator</em></p>
<p>Voor de publicatie van de conceptversie voor de instellingen en definitieve versie van dit rapport hebben we ervoor gekozen om te werken met een zogenoemde rapportgenerator. Met deze rapportgenerator hebben wij het voor u als lezer mogelijk gemaakt om gemakkelijk alleen bepaalde delen van het rapport te lezen, of om uitkomsten van verschillende sectoren gemakkelijk naast elkaar te zetten. Deze rapportgenerator geeft u daarmee de mogelijkheid om informatie te lezen waarin u zelf ge&iuml;nteresseerd bent. Dit werkt als volgt. Om het rapport te lezen vanuit sectorperspectief selecteert u de sector en kiest u daarbij de bijbehorende functie. Wilt u het rapport lezen vanuit functieperspectief selecteert u eerst een functie. U kunt deze onderdelen uit het rapport op uw eigen clipboard bewaren, of de geselecteerde informatie delen. Wilt u het hele rapport lezen, klik dan op <em>read all</em>. U kunt ook de volgende rapportonderdelen lezen:</p>
<ul>
<li>Inleiding</li>
<li>Toelichting op sectoren</li>
<li>Beschrijving van functies</li>
<li>Beschouwing van functies</li>
<li>Prioritering van functies</li>
<li>Slotbeschouwing</li>
</ul>
<h3>1.2 Onderzoeksvraag</h3>
<p>Oud-minister Bussemaker heeft de Raad voor Cultuur gevraagd haar te adviseren over de toekomstige ondersteuning van cultuurproducerende instellingen. De Raad constateert in het algemene advies over de culturele basisinfrastructuur 2017-2020 dat het weefsel van ondersteunende instellingen door de bezuinigingen uit balans is geraakt. De ontwikkelingen van de afgelopen jaren, zoals in paragraaf 1.3 beschreven, hebben hun sporen nagelaten in die ondersteuning, deels negatief door het verdwijnen van functies, deels positief door (door)ontwikkeling van functies. Het is volgens de Raad voor Cultuur de vraag of de activiteitenplannen van de nog bestaande instellingen aansluiten op actuele behoeften in de sector.</p>
<p>De Raad onderstreept het belang van een inventariserend onderzoek, dat breder reikt dan de bovensectorale instellingen en de volledige ondersteuningsstructuur in ogenschouw neemt. Op basis van dit onderzoek kan de Raad vervolgens de Minister advies geven over de toekomst van de ondersteuningsstructuur, als onderdeel van de verkenning van het cultuurbestel na 2020. Het onderzoek diende antwoord te geven op de volgende hoofdvraag en subvragen a) t/m d):</p>
<p><em>In hoeverre sluit de huidige rijksgesubsidieerde ondersteuningsstructuur aan op de vraag van de relevante belanghebbenden?</em></p>
<ol>
<li><em>a) Wat zijn de huidige rijksgesubsidieerde ondersteuningsproducten/functies (aanbod) en door wi</em>e <em>worden ze aangeboden, en met welke financiering?</em></li>
<li><em>b) Zijn er ondersteuningsproducten/functies die door andere partijen buiten de rijksgesubsidieerde ondersteuningsstructuur worden aangeboden? En met welke financiering?</em></li>
<li><em>c) Hoe worden de ondersteuningsproducten/functies uit a en b gewaardeerd door de belanghebbenden? Denk hierbij aan vragen zoals: hoe waarderen de belanghebbenden de manier waarop de ondersteuningsproducten/functies op dit moment zijn belegd? Maken zij gebruik van de ondersteuningsstructuur (publiek/privaat) en op welke wijze? Hoe waarderen zij de kwaliteit van het aangebodene?</em></li>
<li><em>d) Hoe is de ondersteuningsstructuur in andere vergelijkbare sectoren binnen en buiten het culturele domein georganiseerd? En welke voor- en nadelen heeft dit ten opzichte van hoe dit binnen de Basisinfrastructuur is georganiseerd? </em></li>
</ol>
<p>Daarnaast biedt het onderzoek inzicht in hoeverre het aanbod aansluit op de vraag en behoefte die er is bij de belanghebbenden en waar op dit moment de witte vlekken zitten. Dit onderzoek richt zich in de eerste plaats op de ondersteunende instellingen met structurele dan wel incidentele rijksfinanciering zoals beschreven in de Wet op het specifiek cultuurbeleid (Wsc). De Koninklijke Bibliotheek valt onder de Wet stelsel openbare bibliotheken (Wsob), en daarvoor hoeven subvragen a), b) en c) niet te worden beantwoord. De monumenten- en archiefsectoren blijven voor het onderzoek buiten beschouwing, maar zijn, net als de Koninklijke Bibliotheek, indien relevant, meegenomen ter vergelijking zoals bedoeld in subvraag d). De sectoren, aandachtsgebieden en instellingen die het ministerie van OCW primair heeft genoemd voor het onderzoek zijn:</p>
<img src="img/1_2_tabel_1.jpg" alt="" class="tablereplacement">
<table>
<tbody>
<tr class="table--highlight">
<td width="199">
<p>Sectoraal</p>
</td>
<td width="200">
<p>Bovensectoraal / ondersteunend</p>
</td>
<td width="200">
<p>Activiteiten van Fondsen</p>
</td>
</tr>
<tr>
<td width="199">
<p><em>Musea</em>: RKD</p>
</td>
<td width="200">
<p><em>Amateurkunst en cultuureducatie</em>: LKCA</p>
</td>
<td width="200">
<p><em>Letteren</em>: Nederlands Letterenfonds</p>
</td>
</tr>
<tr>
<td width="199">
<p><em>Film</em>: Eye</p>
</td>
<td width="200">
<p><em>Internationaal cultuurbeleid</em>: DutchCulture</p>
</td>
<td width="200">
<p><em>Beeldende kunst en erfgoed</em>: Mondriaan Fonds</p>
</td>
</tr>
<tr>
<td width="199">
<p><em>Letteren</em>: Stichting Lezen</p>
</td>
<td width="200">
<p><em>Digitalisering</em>: DEN</p>
</td>
<td width="200">
<p><em>Podiumkunsten</em>: Fonds Podiumkunsten</p>
</td>
</tr>
<tr>
<td width="199">
<p><em>Letteren</em>: SSS</p>
</td>
<td width="200">
<p><em>Onderzoek en statistiek</em>: Boekmanstichting</p>
</td>
<td width="200">
<p><em>Creatieve industrie</em>: Stimuleringsfonds Creatieve Industrie</p>
</td>
</tr>
<tr>
<td width="199">
<p><em>Letteren</em>: FBJP</p>
</td>
<td width="200">
<p><em>Cultuur en ondernemerschap</em>: Cultuur+Ondernemen</p>
</td>
<td width="200">
<p><em>Film</em>: Filmfonds</p>
</td>
</tr>
<tr>
<td width="199">
<p><em>Creatieve industrie: Het Nieuwe Instituut</em></p>
</td>
<td width="200">
<p><em>Openbare bibliotheken: Koninklijke bibliotheek</em></p>
</td>
<td width="200">
<p><em>Cultuureducatie en -participatie: Fonds voor Cultuurparticipatie </em></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>Hiermee is afgebakend welke deelsectoren het onderzoek betreft, namelijk <em>Musea, Film, Letteren, Beeldende Kunst en Erfgoed </em>(maar exclusief Monumenten en Archieven)<em>, Podiumkunsten </em>en<em> Creatieve Industrie, </em>en voor subvraag d) ook <em>Bibliotheken</em>. <em>Cultuureducatie en participatie</em> vormen een aparte invalshoek, die immers voor alle deelsectoren relevant is. De bovensectorale instellingen bedienen in praktijk overigens meerdere sectoren, ook sectoren die aanpalend zijn aan de cultuursector. Er is wel onderzocht of in die sectoren ook andere ondersteunende partijen actief zijn (subvraag b).</p>
<h3>1.3 Context en ambitie</h3>
<p>De ondersteuningsstructuur is al decennialang in beweging. Staatssecretaris Van der Laan heeft op basis van het advies van Berenschot uit 2004 onderscheid gemaakt in bestel-, branche- en opdrachttaken. Op basis van de gewenste besteltaken en te verwachten opdrachttaken is de basis gelegd voor een stelsel met sectorinstituten voor de sectoren in de basisinfrastructuur en enkele bovensectorale instituten voor taken die niet sectoraal konden worden belegd.</p>
<p>De ondersteuningsstructuur is in 2005 grondig herzien, en nader beschreven in de uitgangspuntennotitie van de toenmalige staatssecretaris Medy van der Laan. Zij formuleerde het als volgt: <em>Ondersteunende taken vinden hun oorsprong in de dagelijkse kunst- en cultuurpraktijk en hebben als doel om bepaalde aspecten hiervan gezamenlijk of generiek aan te pakken; soms omdat dit niet effectief kan worden gedaan door afzonderlijke producerende instellingen, zoals bij internationalisering, soms omdat een gezamenlijke actie een duidelijke meerwaarde heeft, zoals bij collectieve promotie. Het effectieve doel van de ondersteuning is het verbeteren of bevorderen van het autonome en zelfstandige functioneren van producerende instellingen. Daarom is een goed functionerende ondersteuningsstructuur van groot belang voor het cultuurbestel.</em></p>
<p>Van der Laan voegde daar in 2005 aan toe dat het dan ook van wezenlijk belang is dat de rijksoverheid hiervoor in het kader van zijn cultuurbeleid voor korte of lange termijn financi&euml;le middelen beschikbaar stelt. De beschikbare middelen zijn in de jaren daarna onder volgende bewindspersonen herverdeeld tussen de verschillende ondersteunende instellingen en in een aantal sectoren fors gereduceerd.</p>
<p>In 2005 werd onderscheid aangebracht in besteltaken, branchetaken en opdrachttaken. Een aantal besteltaken zijn de verantwoordelijkheid van de overheden, in het bijzonder de rijksoverheid. Deze besteltaken vormen de kern van de ondersteuning waarin het rijk kan voorzien en worden onderscheiden van branchetaken. Branchetaken komen ten goede aan en daarom voor rekening van de leden van de betreffende branche zelf. Een eigen financieel belang biedt de beste garanties voor draagvlak en een professionele aanpak die aansluit bij de opvattingen van de opdrachtgevers in kwestie, is de gedachte. Omdat goed functionerende brancheorganisaties bijdragen aan de professionaliteit van het bestel, kunnen op tijdelijke basis activiteiten in de vorm van opdrachttaken worden ondersteund, zodat zich een effectieve branchestructuur kan ontwikkelen die zonder overheidssubsidie kan functioneren.</p>
<p>In 2017 is het onderscheid in besteltaken, branchetaken en opdrachttaken nog steeds relevant. Echter, het is niet in alle sectoren gekomen tot een sectorinstituut zoals oorspronkelijk de gedachte was, soms wel tot een kennisinstituut, en in een aantal gevallen zijn opgerichte sectorinstituten alweer ontmanteld. Daarmee is een divers palet aan instellingen met verschillende besteltaken ontstaan. De vier bovensectorale ondersteuningsinstituten, die elk een aantal besteltaken op bovensectoraal niveau uitvoeren, hebben in de voorbereiding van dit onderzoek een lijst gemaakt met circa 15 vormen van ondersteuning die zij bieden. In de diverse activiteitenplannen van de bovensectorale ondersteuningsinstituten, maar ook de sectorale instituten en de fondsen, zijn diverse benamingen en indelingen van de besteltaken c.q. ondersteuningsfuncties gebruikt.</p>
<p>In het kader van dit onderzoek heeft Berenschot de aanwezige ondersteuningsfuncties op basis van de verschillende bronnen en opties herschikt tot zeven functies van ondersteunende instellingen. Het onderscheid in deze zeven functies helpt om de huidige ondersteuningsstructuur goed te schetsen en de toekomstige ondersteuningsstructuur vorm te geven, zonder dat de discussie direct gaat over de instellingen die de ondersteuning leveren. Deze functies zijn afgeleid van de eerder gebruikte besteltaken, zijn ruim gedefinieerd en omvatten een breed palet aan taken en activiteiten. Functies zijn aanpalend en toch onderscheidend. Waar relevant zijn raakvlakken met andere functies beschreven. In de inventariserende ronde langs de ondersteunende instellingen en fondsen is de (eerste) set functies getoetst en bijgesteld, en later ook bij de begeleidingscommissie van dit onderzoek. Bij de werksessies met het veld zijn acht functies gepresenteerd, waarbij de achtste, dienstverlening, weinig passend werd gevonden of, ten aanzien van opdrachttaken, bij beleidsondersteuning paste. Daarmee zijn de definitieve zeven ondersteuningsfuncties die Berenschot onderscheidt en die in hoofdstuk 3 worden toegelicht de volgende:</p>
<ul>
<li>Informatievoorziening</li>
<li>Onderzoek &amp; Ontwikkeling</li>
<li>Beheer &amp; Ontsluiting</li>
<li>Vertegenwoordiging</li>
<li>Netwerkactivering</li>
<li>Beleidsondersteuning, en</li>
<li>Deskundigheidsbevordering</li>
</ul>
<h3>1.4 Aanvliegroute</h3>
<p>Onze aanvliegroute voor het onderzoek is als volgt weer te geven:</p>
<ul>
<li><em>Bepalen van ondersteunende instellingen, deelsectoren, bovensectorale onderwerpen en overige beleidsthema&rsquo;s </em>- Op basis van de onderzoeksvraag en in overleg met het ministerie is allereerst vastgesteld welke ondersteunende instellingen (of onderdelen daarvan) en, daaraan gerelateerd, welke deelsectoren dan wel bovensectorale onderwerpen in het onderzoek mee konden worden genomen. Dit overzicht is aan de orde gekomen in paragraaf 1.2. Naast deze sectoren en onderwerpen, zijn er binnen de ondersteuningsstructuur ook thema&rsquo;s te onderscheiden. Dit zijn thema&rsquo;s die binnen alle sectoren actueel zijn. Deze thema&rsquo;s zijn &lsquo;kleiner&rsquo; dan bovensectorale onderwerpen, maar daarom niet minder relevant. Ze zijn vanwege het minder structurele karakter (ze zijn vaak afhankelijk van vigerend beleid) niet altijd belegd bij een specifieke instelling. De thema&rsquo;s die in de beleidsstukken maar ook in de bijeenkomsten met het veld regelmatig aan de orde zijn gekomen zijn Innovatie, Culturele Diversiteit, Cultural Governance, Fair Practice, Financiering en Legitimatie en publieke opinie.</li>
<li><em>Overzicht van huidige en mogelijke ondersteuningsfuncties</em> - Vervolgens is door ons een overzicht opgesteld van de huidige en mogelijke ondersteuningsfuncties in een logische ordening en clustering. Dit is op basis van verschillende bronnen gebeurd. Om te beginnen hebben we een uitgebreide documentstudie gedaan. Hierbij is relevant onderzoeksmateriaal dat betrekking heeft op de huidige inrichting maar ook op de ontwikkeling van de ondersteuningsstructuur bekeken. Hierbij zijn beleidsstukken van het ministerie over de ondersteuningsstructuur, de activiteitenplannen van de betreffende instellingen, websites, adviezen van de Raad voor Cultuur, eerder verrichte relevante onderzoeken en klanttevredenheidsonderzoeken van deze instellingen bestudeerd. Voor de zomer is er een intensieve gespreksronde geweest met vertegenwoordigers van de 18 instellingen die op dit moment een ondersteunende rol vervullen en in de tabel van paragraaf 1.3 te vinden zijn. In deze gesprekken c.q. interviews hebben we de uitkomsten van onze inventarisatie getoetst. De instellingen hebben de gelegenheid gekregen om hun observaties toe te voegen aan degene die wij reeds uit de documentstudie hadden opgehaald. Ook konden ondersteuningsfuncties worden bijgesteld, toegevoegd of samengevoegd, om tot een omvattend en toch overzichtelijk geheel te komen. Het overzicht van functies is in paragraaf 1.3 aan de orde gekomen.</li>
<li><em>Voorbereiden van werksessies</em> - Samen met het ministerie en met de ondersteunende instellingen zelf is bepaald wie de relevante belanghebbenden zijn waarmee over de ondersteuningsstructuur moest worden gesproken. Het was noodzakelijk om voor dit onderzoek een scherpe selectie te maken. Het aantal doelgroepen van de ondersteunende instellingen is namelijk zeer groot, zeker als ook alle publieksgroepen worden meegenomen. Het veldonderzoek is daarom ook gericht op professionele culturele instellingen, brancheverenigingen en koepels en enkele andere relevante spelers per sector. In enkele gevallen, zoals bij het LKCA, is de eigenlijke doelgroep veel breder, en daar is voor zover mogelijk enige rekening mee gehouden bij het benaderen van deelnemers voor de sessies. Vervolgens zijn we de verschillende werksessies gaan plannen en organiseren. Voor de werksessies hebben wij de volgende indeling in sectoren en onderwerpen gehanteerd.</li>
<li><em>Werksessies met het veld</em> <em>-</em> Om de ervaringen en behoeften van het brede veld optimaal te verkennen, hebben wij in de maand september totaal 12 werksessies van telkens drie uur op ons kantoor te Utrecht georganiseerd. De deelname aan de sessies wisselde per werksessie, maar lag tussen de 8 en 25 personen. Tijdens deze werksessies hebben we onze methodiek toegepast voor de verschillende functies van de ondersteuning, telkens toegespitst op een deelsector of op een bovensectoraal onderwerp. In elke werksessie toetsten we bij het geselecteerde gezelschap van relevante belanghebbenden positieve en negatieve observaties over de huidige ondersteuning. Tevens hebben we bij het veld getoetst welke ondersteuningsfuncties en producten worden aangeboden, ook door andere partijen dan de instellingen uit de ondersteuningsstructuur. Ook hebben we gesproken over de kwaliteit en de waardering van de ondersteuningsproducten binnen de verschillende functies. In de sessies verkenden we de verwachtingen en beperkingen voor toekomstige ondersteuning en kwamen we samen met de deelnemers tot inzichten. Om direct prioritering te kunnen identificeren, hebben we in de sessies waarbij daar gelegenheid voor was ons positioneringsmodel ingezet en onderscheid gemaakt in noodzakelijke functies, nuttige functies en functies die door het veld niet in de ondersteuning wordt verwacht.</li>
</ul>
<img src="img/1_4_tabel_1.jpg" alt="" class="tablereplacement">
<table width="104%">
<tbody>
<tr class="table--highlight">
<td width="17%">
<p>Sessies (1 t/m 6)</p>
</td>
<td width="12%">
<p>1. Beeldende Kunst</p>
</td>
<td width="12%">
<p>2. Erfgoed</p>
</td>
<td width="13%">
<p>3. Film</p>
</td>
<td width="15%">
<p>4. Creatieve industrie</p>
</td>
<td width="13%">
<p>5. Letteren / bibliotheken / journalistiek</p>
</td>
<td width="15%">
<p>6. Podium-kunsten 1 &ndash; Muziek</p>
</td>
</tr>
<tr>
<td width="17%" class="table--highlight">
<p>Ondersteunende instellingen/ fondsen</p>
</td>
<td width="12%">
<p>- Mondriaan</p>
<p>Fonds</p>
</td>
<td width="12%">
<p>- RKD</p>
<p>- Mondriaan Fonds</p>
</td>
<td width="13%">
<p>- EYE</p>
<p>- Nederlands Filmfonds</p>
</td>
<td width="15%">
<p>- Het Nieuwe Instituut</p>
<p>- Stimulerings-fonds</p>
<p>- Creatieve Industrie</p>
</td>
<td width="13%">
<p>- Stichting Lezen</p>
<p>- SSS</p>
<p>- Koninklijke Bibliotheek</p>
<p>- Nederlands Letteren-fonds</p>
</td>
<td width="15%">
<p>- FPK</p>
</td>
</tr>
<tr class="table--highlight">
<td width="17%">
<p>Sessies (7 t/m 12)</p>
</td>
<td width="12%">
<p>7. Podium-kunsten 2 &ndash; Scenisch</p>
</td>
<td width="12%">
<p>8. Boven-sectoraal Beleid</p>
</td>
<td width="13%">
<p>9 . Boven-sectoraal Digitalisering</p>
</td>
<td width="15%">
<p>10. Boven-sectoraal Educatie / Participatie</p>
</td>
<td width="13%">
<p>11. Boven-sectoraal Ondernemer-schap</p>
</td>
<td width="15%">
<p>12. Boven-sectoraal Internationali-sering</p>
</td>
</tr>
<tr>
<td width="17%" class="table--highlight">
<p>Ondersteunende instellingen/ fondsen</p>
</td>
<td width="12%">
<p>- FPK</p>
</td>
<td width="12%">
<p>- Boekman-stichting</p>
</td>
<td width="13%">
<p>- DEN</p>
</td>
<td width="15%">
<p>- LKCA</p>
<p>- FCP</p>
</td>
<td width="13%">
<p>- Cultuur+</p>
<p>Onder-</p>
<p>nemen</p>
</td>
<td width="15%">
<p>- DutchCulture</p>
</td>
</tr>
</tbody>
</table>
<ul>
<li><em>Analyse en rapportage</em> &ndash; De verkregen inzichten uit de verschillende werksessies zijn door ons geanalyseerd, zodat wij gefundeerde uitspraken kunnen doen over de verschillende ondersteuningsfuncties. Bovendien hebben we een synthese uitgevoerd om de inzichten over de diverse functies heen met elkaar in verband te brengen en ook te vergelijken met hoe dit in andere sectoren wordt ingevuld. Dit heeft geleid tot het rapport dat nu voor u ligt, waarin alle verkregen informatie en inzichten per deelsector en bovensectorale onderwerpen bij elkaar zijn gebracht. Het rapport bevat beschrijvingen van de ondersteunende instellingen en hun activiteiten, de prioritering die het desbetreffende veld geeft van de ondersteunende functies door de instellingen en beschouwt de totale ondersteuningsstructuur.</li>
</ul>
<p><em>Relevantie en representatie</em></p>
<p>We wijzen erop dat waar er in dit rapport gesproken wordt over &lsquo;het veld&rsquo;, we de circa 200 aanwezigen bij de 12 werksessies als vertegenwoordigers van het veld bedoelen, tenzij anders vermeld wordt. Daar waar meningen of waarderingen zijn weergegeven, zijn deze in principe opgehaald uit de werksessies, als geen andere bron is genoemd. Daarmee schetsen we een beeld van de invulling en ervaringen met de ondersteuning en de waardering daarvoor. Vaak wordt ook verwezen naar informatie van de ondersteunende instellingen zelf, die ons mondeling of schriftelijk is meegegeven, bijvoorbeeld op basis van hun eigen veldonderzoeken. Hoewel het aantal gesprekspartners zeer ruim is, is er geen sprake van representatieve uitkomsten. Het onderzoek omvat een veelheid en verscheidenheid aan invalshoeken en gespreksonderwerpen. Wij maken dan ook het voorbehoud dat voor specifieke onderwerpen op basis van dit onderzoek onvoldoende uitsluitsel kan worden gegeven om consequenties aan te verbinden. Als ten aanzien van functies en instellingen impactvolle keuzes moeten worden gemaakt, bevelen wij aan specifiek aanvullend onderzoek te doen.</p>
<h3>1.5 Methodiek Sectorperspectieven en positioneringsmodel</h3>
<p>Bij dit onderzoek is de methodiek Sectorperspectieven ingezet om de diversiteit aan ondersteuningsfuncties te verkennen en de betekenis en bijdrage van de ondersteuningsstructuur in relatie tot de behoeften van relevante belanghebbenden in kaart te brengen. De methodiek Sectorperspectieven geeft inzicht in de huidige stand van zaken &eacute;n verkent de vooruitzichten voor en verwachtingen over de verschillende ondersteuningsfuncties, door het combineren van objectieve informatie uit desk research en ervaringskennis uit het veld. Daarmee ontstaat een beeld over deelsectoren heen en kunnen verschillen tussen deelsectoren inzichtelijk worden gemaakt. De methode verenigt het huidige beeld van wat er goed en minder goed gaat in de ondersteuning met de beleefde behoeften aan ondersteuning, en biedt vanuit daar handvatten om beleidsinterventies vorm te geven.</p>
<p>De methodiek krijgt vorm volgens onderstaand figuur waarin met cijfers is aangeduid in welke volgorde wij de punten aanpakken. De groene plussen en rode minnen staan symbool voor positieve en negatieve observaties (blijkend uit de deskresearch). De pijlen omhoog (groen) en omlaag (rood) geven aan of sprake is van aanvullende verwachtingen, dus uitbreiding, of juist beperkende bijstellingen, dus minder of andere vormen van toekomstige ondersteuning volgens de partijen in het veld. Daarna geven we een toelichting per punt.</p>
<img src="img/1_5_tabel_1.jpg" alt="" class="tablereplacement">
<table width="0">
<tbody class="table--highlight">
<tr>
<td width="183">
<p><strong>Interventies (6)</strong></p>
<p>&middot; Koesteren</p>
<p>&middot; Koers houden</p>
</td>
<td rowspan="2" width="217">
<p><strong>Aanvullende verwachtingen </strong><strong>&uarr;</strong><strong> (4)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
<td width="201">
<p><strong>Interventies (6)</strong></p>
<p>&middot; Stimuleren</p>
<p>&middot; Volle kracht vooruit</p>
</td>
</tr>
<tr>
<td width="183">
<p><strong>Inzichten </strong><strong>+</strong><strong> / </strong><strong>&uarr;</strong><strong> (5)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
<td width="201">
<p><strong>Inzichten </strong><strong>&ndash; </strong><strong>/ </strong><strong>&uarr;</strong><strong> (5)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
</tr>
<tr>
<td rowspan="2" width="183">
<p><strong>Positieve observaties </strong><strong>+</strong><strong> (3)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
<td width="217">
<p><strong>Deelsector (1)</strong></p>
<p>&middot; &hellip;</p>
</td>
<td rowspan="2" width="201">
<p><strong>Negatieve observaties </strong><strong>&ndash;</strong><strong> (3)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
</tr>
<tr>
<td width="217">
<p><strong>Ondersteuningsfunctie (2)</strong></p>
<p>&middot; &hellip;</p>
</td>
</tr>
<tr>
<td width="183">
<p><strong>Inzichten </strong><strong>+</strong><strong> / </strong><strong>&darr;</strong><strong> (5)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
<td rowspan="2" width="217">
<p><strong>Beperkende bijstellingen </strong><strong>&darr;</strong><strong> (4)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
<td width="201">
<p><strong>Inzichten </strong><strong>&ndash;</strong> <strong>/ </strong><strong>&darr;</strong><strong> (5)</strong></p>
<p>&middot; &hellip;</p>
<p>&middot; &hellip;</p>
</td>
</tr>
<tr>
<td width="183">
<p><strong>Interventies (6)</strong></p>
<p>&middot; Bijsturen</p>
<p>&middot; Koers verleggen</p>
</td>
<td width="201">
<p><strong>Interventies (6)</strong></p>
<p>&middot; Ingrijpen</p>
<p>&middot; Roer omgooien</p>
</td>
</tr>
</tbody>
</table>
<ol>
<li><em>Deelsector: </em>we hanteren de methodiek per deelsector, die hier wordt ingevuld. Dat kan ook een bovensectoraal onderwerp zijn. Per deelsector komen de verschillende ondersteuningsfuncties aan bod, ongeacht wie daarvan de aanbieders zijn. In de uiteindelijke synthese is een totaalbeeld voor de ondersteuningsstructuur over de deelsectoren heen weergegeven.</li>
<li><em>Ondersteuningsfunctie: </em>hier wordt de specifieke ondersteuningsfunctie benoemd waarop dit schema betrekking heeft. Dit biedt de mogelijkheid om per functie te analyseren en vervolgens te prioriteren welke functies relevant zijn, nu en in de toekomst.</li>
<li><em>Observaties</em>: hier is tijdens het onderzoek geregistreerd hoe het er voor staat in de sector met de huidige ondersteuning binnen deze functie. Wat gaat er goed (positief, linker vak), wat gaat er minder goed (negatief, rechter vak)? Is het veld tevreden, voelen zij zich ondersteund, zitten ze te wachten op deze producten en diensten of missen er juist functies (uit het verleden)? De vraag die daar achter lag, is hoe het aanbod van ondersteunende instellingen tot stand komt en wordt doorontwikkeld: gebeurt dat voornamelijk aanbodgericht of vraaggericht en kan dat beter, &aacute;ls de tevredenheid van het veld te laag is nu?</li>
<li><em>Verwachtingen</em>: hier is tijdens het onderzoek geregistreerd wat de wensen en behoeften van het veld zijn ten aanzien van de toekomstige ondersteuningsfuncties binnen deze categorie. Welke aanvullende ondersteuningsfuncties zijn zeker nodig, welke zijn vooral nuttig en waarom (positief, bovenste vak)? Welke ondersteuningsfuncties zijn juist overdreven of overbodig en kunnen beter worden bijgesteld, beperkt, vervangen of zelfs gestopt (negatief, onderste vak)? De verwachtingen zijn ten dele afgeleid van algemene en sectorspecifieke ontwikkelingen, maar vooral van de visie van de partijen in het veld op toekomstige behoeften.</li>
<li><em>Inzichten: </em>tot welke conclusies heeft de confrontatie van observaties met verwachtingen, in de 4 mogelijke richtingen van positief en negatief (vergelijkbaar met de confrontatie van sterkten met kansen en dergelijke binnen een SWOT-analyse) geleid? Deze inzichten leggen een basis onder beleidskeuzes en interventies: bij een positieve observatie met negatieve verwachtingen kan er bijvoorbeeld bijgestuurd worden of de koers verlegd worden, waarbij een negatieve observatie met een positieve verwachting gebaat is bij stimuleren en volle kracht vooruit.</li>
<li><em>Interventies</em>: de laatste stap in de methodiek Sectorperspectieven is aan de Raad voor Cultuur. De Raad kan de verkregen <em>inzichten</em> hanteren bij de advisering over de toekomstige ondersteuningsstructuur en de daarvoor mogelijke interventies vormgeven. Dit sluit aan op de manier waarop de Raad nu ook zijn eigen sectoranalyses aanpakt als basis voor de algemene advisering van de Raad over het cultuurbestel vanaf 2020.</li>
</ol>
<p>Het uitwerken van interventies is geen onderdeel van ons onderzoek. De toepassing van de methodiek in dit onderzoek loopt tot en met stap 5, de inzichten. De methodiek biedt wel de gelegenheid voor het inzichtelijk maken van prioriteiten in het totale palet van bestaande en nieuwe ondersteuningsfuncties. Voor het inventariseren van die prioriteiten is een ander model gebruikt.</p>
<p><em>Positioneringsmodel voor prioritering</em></p>
<p>Het is in de cultuursector werkbaar gebleken om de categorie&euml;n van functies te prioriteren aan de hand van het Positioneringsmodel van Berenschot voor branche- en kennisinstituten. Het model zoals in dit onderzoek toegepast kent 7 assen waarop de ondersteuningsfuncties worden weergegeven. De ondersteunende instellingen zijn in een aantal van deze functies en daarmee op elk van de assen in meer of mindere mate actief. Het huidige profiel van dat instituut wordt weergegeven door de mate waarin het instituut deze functie tot een taak rekent (hoe groter de taak, hoe hoger op de as). In het model worden naast het huidige beeld ook de door spelers in het veld toegekende prioriteiten weergegeven.</p>
<p>Het positioneringsmodel is gebruikt in dit onderzoek voor elke deelsector en bovensectoraal onderwerp, waarbij de huidige prioritering door Berenschot is gescoord aan de hand van wat de ondersteunende instelling nu doet, en de prioriteit is bepaald door het veld tijdens de werksessies. De scores van de huidige invulling en taakopvatting van de instelling zijn ingevuld door Berenschot. Hierbij is er gebruikt gemaakt van de beleidsplannen, jaarverslagen en de gesprekken die wij met deze ondersteunende instellingen hebben gevoerd. De scores omtrent de prioritering zijn ingevuld door de deelnemers aan de werksessies. Het veld heeft de zeven functies in volgorde van prioriteit kunnen plaatsen.</p>
<p>Een voorbeeld van het positioneringsmodel waarin de eerder genoemde functies zijn opgenomen, ziet er als volgt uit:</p>
<img src="img/1_5_figuur_1.jpg" alt="">
<p>De grafische weergave van de huidige taakopvatting en de prioriteiten per sector of bovensectoraal onderwerp en de duiding daarvan door Berenschot zijn opgenomen in hoofdstuk 16, plus een analyse over alle uitkomsten. Daarin staat ook een nuancering ten aanzien van de waarde die mag worden toegekend aan de uitkomsten die in de grafieken zijn weergegeven. De grafieken vormen een indicatieve visualisatie van enerzijds onze eigen analyse over de huidige taakopvatting en anderzijds de prioritering vanuit de sessies. Bij de prioritering is dan ook geen sprake van een representatieve meting onder een significant grote groep stakeholders. De grafieken en de toelichtingen moeten met deze nuancering in het achterhoofd worden bezien.</p>'
            ],
            [
            	'title' => 'Toelichting op sectoren',
            	'body' => '<h2>2. Toelichting op sectoren en bovensectorale onderwerpen</h2>
<h3>2.1 Afbakening</h3>
<p>Het onderzoek heeft in eerste plaats betrekking op de ondersteunende instellingen met structurele dan wel incidentele rijksfinanciering zoals beschreven de Wet op het specifiek cultuurbeleid (Wsc). Hierbij heeft het ministerie van OCW ons meegegeven dat het onderzoek betrekking moet hebben op de volgende sectoren:</p>
<ul>
<li>Podiumkunsten</li>
<li>Beeldende Kunst</li>
<li>Erfgoed</li>
<li>Film</li>
<li>Creatieve industrie</li>
<li>Letteren en bibliotheken</li>
</ul>
<p>De ondersteuningsstructuur ten behoeve van monumenten en archieven blijft in dit onderzoek op verzoek van het ministerie buiten beschouwing. Door de afbakening binnen de Wet op het specifiek cultuurbeleid, valt de Koninklijke Bibliotheek (KB) feitelijk gezien buiten de onderzoeksopdracht. Deze instelling valt immers onder de Wet stelsel openbare bibliotheken (Wsob).</p>
<p>Op het moment dat bij de KB of andere ondersteunende instellingen die buiten de directe doelgroep van het onderzoek vallen, toch sprake is van een relevante ondersteunende functie voor cultuurproducerende instellingen in de zes sectoren zoals hierboven beschreven, dan is dat wel benoemd en toegelicht. Doel van het onderzoek is immers ook na te gaan in hoeverre andere dan de ondersteunende instellingen die binnen de Wsc zijn gefinancierd voor ondersteuning van de sector zorgen.</p>
<p>In elk van bovenstaande sectoren zijn &eacute;&eacute;n of meer instellingen actief in de ondersteuning. In het geval van de fondsen is de ondersteuning vaak een afgeleide rol naast de primaire taak van financiering van de sector. De instellingen waar dit onderzoek op is gericht worden per sector in dit hoofdstuk gekenschetst.</p>
<p><em>Bovensectorale onderwerpen</em></p>
<p>Naast de sectoren is ook structureel een vijftal bovensectorale onderwerpen belegd bij verschillende ondersteunende instellingen. Bovensectorale onderwerpen hebben betrekking op meerdere of alle sectoren en zijn daarom niet per sector ondergebracht, maar op &eacute;&eacute;n plek belegd. Het gaat om de volgende onderwerpen en instellingen die daar binnen de ondersteuningsstructuur een (primaire) rol in vervullen:</p>
<ul>
<li>Beleid</li>
<li>Digitalisering</li>
<li>Ondernemerschap</li>
<li>Internationalisering</li>
<li>Cultuureducatie &amp; Cultuurparticipatie</li>
</ul>
<p>Naast deze bovensectorale onderwerpen die zijn belegd binnen de ondersteuningsstructuur zijn er ook diverse beleidsthema&rsquo;s die al dan niet belegd zijn. Dergelijke thema&rsquo;s zijn culturele diversiteit, cultural governance, fair practice maar ook legitimatie en talentontwikkeling. In dit onderzoek wordt ge&iuml;dentificeerd in hoeverre deze thema&rsquo;s in diverse sectoren en functies worden geadresseerd, met name bij beleidsondersteuning in de vorm van opdrachttaken.</p>
<p>Hierna lichten wij de sectoren, bovensectorale onderwerpen en de bijbehorende ondersteunende instellingen kort, en in sommige gevallen uitgebreider toe. In aparte hoofdstukken volgt een uitgebreidere beschrijving in functies per sector of bovensectoraal onderwerp.</p>
<h3>2.2 Podiumkunsten: Fonds Podiumkunsten</h3>
<p>De sector podiumkunsten is een brede en diverse sector met vele genres, die in toenemende mate in elkaar overlopen. Een deel van de professionele podiumkunsten is rijksgesubsidieerd, deels direct binnen de Basisinfrastructuur, deels via het Fonds Podiumkunsten (FPK). Ook andere overheden subsidi&euml;ren delen van het aanbod aan podiumkunsten, maar er is ook een grote en brede vrije sector die zonder subsidie opereert. De presentatieplekken voor de podiumkunsten, vooral concertzalen, schouwburgen en theaters, maar ook festivals, worden grotendeels lokaal gesubsidieerd, maar ook daar is een grote vrije sector van commerci&euml;le theaters en festivals. De ondersteuningsstructuur richt zich op het functioneren van de gehele sector podiumkunsten, met een focus op de professionele cultuurproducenten.</p>
<p>Tot 2013 bestonden er drie sectorinstituten, te weten Theater Instituut Nederland (TIN), Muziek Centrum Nederland (MCN) en het Nederlands Muziek Instituut (NMI). De sectorinstituten TIN en MCN zijn opgeheven als gevolg van de bezuinigingen in 2012. Ook de rijkssubsidie voor NMI is stopgezet, maar die instelling bestaat nog dankzij enige financiering van de gemeente Den Haag en intensieve samenwerking met onder meer het Haags Gemeentearchief. Een deel van de besteltaken en dus ondersteuningsfuncties is overgenomen door het Fonds Podiumkunsten, brancheverenigingen, zelfstandige stichtingen en andere instellingen zoals de Universiteit van Amsterdam, maar zonder structurele rijksfinanciering van deze taken. Andere taken zijn gestopt.</p>
<p>Wat er over is van de ondersteuningsstructuur voor de podiumkunsten wordt beschouwd als willekeurig en divergent. Regie, autoriteit en overzicht ontbreken. Een aantal spelers in het veld benoemt de ondersteuningsstructuur van de podiumkunsten zelfs als &lsquo;non-existent&rsquo;. Er leven grote zorgen over de verloren gegane expertise en het risico van verdwijnen van erfgoed, zoals de collecties die nu verweesd zijn. Ook wordt een centrale plek en een gedeeld wij-gevoel gemist. Andere spelers benoemen juist dat de inrichting van instituten automatisch tot bureaucratie leidt en dat hieraan ter beschikking gestelde middelen ten koste zouden gaan van budgetten voor producerende instellingen. Er wordt niet gepleit voor het in ere herstellen van de oude situatie, maar de gedachte overheerst dat de ondersteuningsstructuur sterk kan winnen aan toegevoegde waarde en toekomstbestendigheid.</p>
<h3>2.3 Beeldende Kunst: Mondriaan Fonds</h3>
<p>De sector beeldende kunst is zeer divers en wordt gevormd door kunstenaars, kunstenaarsinitiatieven, presentatie-instellingen, galeries, musea, postacademische instellingen en festivals. Voor beeldende kunst heeft nooit een specifiek sectorinstituut bestaan met een aantal besteltaken c.q. ondersteuningsfuncties. Voor de sector beeldende kunst is, mede daarom, het Mondriaan Fonds vanuit de BIS-ondersteuning de aangewezen partij voor het invullen van een aantal van de ondersteuningsfuncties die anders geheel afwezig zouden zijn. Daarnaast vervullen veel spelers een eigen rol in de ondersteuning van de sector, zoals Platform BK, BKNL, Kunsten&rsquo;92, de Museumvereniging, Federatie Cultuur, de Kunstenbond, Dhaps, Binoq, Laps, KNAW, Boknet, ZaakNU, NGA en BBKnet.</p>
<p>In dit onderzoek ligt de nadruk op het Mondriaan Fonds en dan met name op de taken die niet direct te maken hebben met de financiering van beeldendekunstactiviteiten. Het Mondriaan Fonds bevordert bijzondere en vernieuwende projecten en activiteiten van beeldend kunstenaars, bemiddelaars (curatoren en critici), musea en andere erfgoedinstellingen, presentatie-instellingen, archieven, galeries en opdrachtgevers. Alle bijdragen hebben tot doel het stimuleren van de productie en de presentatie van relevante beeldende kunst en erfgoed uit Nederland in binnen- en buitenland op die plekken waar de markt dit (nog) niet doet.</p>
<p>Het Mondriaan Fonds is ontstaan uit een fusie van het Fonds BKVB en de Mondriaan Stichting. Sinds de fusie is er &eacute;&eacute;n loket voor individuele aanvragers en instellingen op het gebied van beeldende kunst en cultureel erfgoed. Het Mondriaan Fonds heeft jaarlijks zo&rsquo;n 26 miljoen euro te besteden. Het grootste deel van dit budget komt van het ministerie van OCW. Per jaar worden honderden projecten in Nederland en daarbuiten ondersteund. Daarnaast biedt het fonds stimuleringsprogramma&rsquo;s voor innovatie en promotie, die aanjagen en agenderen. Bij het Mondriaan Fonds werken 34 mensen. Bij de beoordeling van aanvragen wordt het fonds geadviseerd door 75 deskundigen.</p>
<h3>2.4&nbsp;Erfgoed: RKD en Mondriaan Fonds</h3>
<p>De landelijke ondersteuning in de culturele sector op het gebied van Erfgoed ligt bij het Nederlands Instituut voor Kunstgeschiedenis (hierna: RKD), en bij het Mondriaan Fonds, het publieke stimuleringsfonds voor beeldende kunst en cultureel erfgoed. Het gaat in dit onderzoek om erfgoed exclusief monumenten en archieven, met de nadruk op ondersteuning van musea.</p>
<p>Het RKD is een kennisinstituut met zowel een onderzoeksfunctie als een collectie- en publieksfunctie en heeft als kerntaak het verzamelen, beheren, beschikbaar stellen en presenteren van archief-, documentatie-, en bibliotheekmateriaal van en over de kunst van de Nederlanden in internationale context en het bevorderen van onderzoek hiernaar. De driehoek waarin het RKD opereert wordt gevormd door het publiek (fysiek en digitaal), de musea en de wetenschap. Met deze drie velden wordt veel samengewerkt. De organisatie bestond in eind 2016 uit 54 FTE.</p>
<p>Het Mondriaan Fonds bevordert bijzondere en vernieuwende projecten en activiteiten in beeldende kunst en erfgoed. Voor erfgoed kunnen musea en andere instellingen terecht bij het Mondriaan Fonds voor projectinvesteringen, opdrachten, programmering en bijdragen aan collecties.</p>
<p>Andere spelers in het veld van ondersteuning in de erfgoedsector zijn CODART, NICAS, ESNA, VNK, OSK, onderzoeksinstituten en universiteiten, DEN, DutchCulture, Rijksdienst voor Cultureel Erfgoed en individuele musea.</p>
<h3>2.5&nbsp;Film: EYE en Filmfonds</h3>
<p>In de ondersteuningsstructuur spelen het Filmfonds en EYE een belangrijke rol. Het Filmfonds heeft als primaire taak de financiering van de Nederlandse filmproducties en filmactiviteiten en als afgeleide taak ondersteuning met als beleidspijlers talentontwikkeling, innovatie, internationalisering en professionalisering. EYE is sinds 2010 onderdeel van de ondersteuningsstructuur en is een fusieorganisatie, ontstaan uit het Filmmuseum, Holland Film, het Nederlands Instituut voor Filmeducatie (NIF) en de Filmbank, waarvan niet alle taken zijn behouden wegens gelijktijdige bezuinigingen. De filmsector wordt op nationale schaal ook ondersteund door het Fonds voor Cultuurparticipatie, het Stimuleringsfonds Creatieve Industrie en nationaal opererende media-instituten zoals de NPO, Filmacademie en Instituut Beeld &amp; Geluid. Op internationale schaal is er ondersteuning door bijvoorbeeld Eurimage en Creative Europe Desk via DutchCulture. Regionaal en lokaal komt ook ondersteuning voor, onder meer provinciale en stedelijke film commissioners.</p>
<p>De filmsector is internationaal geori&euml;nteerd, wat betreft profilering, structuur en financiering. Net als filmfondsen in andere landen, voert het Filmfonds in directe samenhang met zijn centrale rol als financier een aantal ondersteunende functies uit, zoals internationale activiteiten, analyse en onderzoek en in het bijzonder de Netherlands Film Commission. Dat is het centrale aanspreek- en servicepunt voor producenten die in Nederland (delen van) hun productie willen uitvoeren en treedt op als de liaison tussen producenten en de bedrijven en professionals in de Nederlandse filmindustrie.&nbsp;</p>
<p>EYE is het Nederlandse filminstituut met primaire museale en erfgoedtaken en een aantal kennisgedreven ondersteuningsfuncties. In de ondersteuningsstructuur in sommige andere landen zijn kennis, educatie, promotie, collectie en financiering gecombineerd, terwijl dat in Nederland los is (EYE en Filmfonds). In sommige landen of regio&rsquo;s zoals Vlaanderen is bovendien de filmsector gecombineerd met televisie en andere audiovisuele sectoren zoals interactive media, waar dat in Nederland niet het geval is. Het Filmfonds pleit ervoor het filmbeleid ten minste te verbreden met het mediabeleid op rijksniveau, omdat enkel film te smal is geworden in dit huidige tijdperk waarin het publiek beeldcultuur veel breder consumeert dan enkel in de bioscoop.</p>
<p>De filmsector heeft een andere aard dan cultuursectoren waarin gesubsidieerde instellingen het meest toonaangevend zijn, omdat de globale filmsector over het algemeen en daarmee het grootste deel van wat in Nederland wordt vertoond aan films privaat georganiseerd en gefinancierd is. De Nederlandse filmproducties die wel worden gefinancierd moeten in dat speelveld opereren. In (bijvoorbeeld) de podiumkunsten is voor het artistieke aanbod de gehele keten (productie, distributie en exploitatie) ondersteund met publieke financiering, terwijl dat in de film veel beperkter is, eigenlijk alleen in bijzondere gevallen een deel van de productie en een deel van de presentatieplekken, zoals filmfestivals en lokale filmhuizen. Bioscopen hebben wel een verlaagd btw-tarief.</p>
<p>De zeven ondersteuningsfuncties die door Berenschot zijn onderscheiden, worden op nationale schaal uitgevoerd door het Filmfonds en EYE. Zij slagen hier over het algemeen redelijk goed in, maar de middelen zijn minder toereikend dan in het verleden. Zij hebben bovendien taken moeten opvangen die voorheen bij inmiddels opgeheven organisaties zoals het BINGER Filmlab en het Mediafonds waren belegd. Bij sommige ondersteuningsfuncties is de taakverdeling tussen het Filmfonds en EYE helder, zoals bij Beheer &amp; Ontsluiting. Bij de functies Vertegenwoordiging, Beleidsondersteuning en Deskundigheidsbevordering heerst echter onduidelijkheid en discussie, zoals ook al eerder door de Raad voor Cultuur werd geconstateerd, en het veld heeft daar last van.</p>
<h3>2.6 Creatieve Industrie: Het Nieuwe Instituut en SFCI</h3>
<p>In de landelijke rijksgefinancierde ondersteuning zijn er twee partijen binnen de sector Creatieve Industrie die ondersteuning bieden aan het veld: Het Stimuleringsfonds Creatieve Industrie (SFCI) en Het Nieuwe Instituut.</p>
<p>Het Stimuleringsfonds Creatieve Industrie is het cultuurfonds voor architectuur, vormgeving, digitale cultuur en alle mogelijke crossovers daartussen. Het Stimuleringsfonds is in 2013 voortgekomen uit het voormalige Stimuleringsfonds voor Architectuur. Het Stimuleringsfonds kreeg een aantal taken overgeheveld van het Mondriaan Fonds op gebied van vormgeving. Ook kreeg het er een aantal nieuwe taken bij, zoals het stimuleren van de e-cultuur dat tot dan toe nog nergens was belegd. De taak van het Stimuleringsfonds is het ondersteunen van bijzondere en vernieuwende projecten en activiteiten van ontwerpers, makers en culturele instellingen in de creatieve industrie en het stimuleren van productie en presentatie van architectuur, vormgeving en digitale cultuur uit Nederland in binnenland &eacute;n buitenland. Via programma&rsquo;s en subsidies draagt het fonds bij aan het formuleren van ontwerpoplossingen voor maatschappelijke vraagstukken die breed gedragen zijn. Het Stimuleringsfonds heeft op dit moment 23 medewerkers in dienst.</p>
<p>Het Nieuwe Instituut is ontstaan op 1 januari 2013 uit een fusie van het Nederlands Architectuurinstituut, Premsela, Nederlands Instituut voor Design en Mode en Virtueel Platform, kennisinstituut voor e-cultuur. Het Nieuwe Instituut opereert in het werkveld creatieve industrie vanuit het Rijksarchief voor de Nederlandse Architectuur en Stedenbouw, het museum voor Architectuur, Design en Digitale Cultuur en het agentschap voor Architectuur, Design en Digitale Cultuur. Het Nieuwe Instituut is hiermee een ondersteunende instelling met sectorale taken. Het Nieuwe Instituut probeert met haar activiteiten de wisselwerking tussen architectuur, vormgeving en digitale cultuur te versterken en aan de hand van actuele ontwikkelen de betekenis van deze disciplines te verhogen. Research en Development is hierin een verbindende factor. In 2016 waren er 90 mensen werkzaam bij de instelling.</p>
<p>Creatieve industrie is een brede sector die veel disciplines bevat, wat ook tot gevolg heeft dat er verschillende definities van de sector gehanteerd worden, zowel brede als meer beperktere definities. In de CBS Monitor Topsectoren ligt het accent op markt gefinancierde domeinen en minder op publiek gefinancierde domeinen als theaters en publieke- en commerci&euml;le omroepen. De Monitor Creatieve Industrie van iMMovator kiest voor een bredere definitie waarin het accent ook op deze publiek gefinancierde domeinen ligt. Ook het net verschenen Cultuur in Beeld 2017 verwijst naar de definitie gehanteerd in deze monitor van iMMovator. We kunnen de creatieve industrie echter het beste omschrijven als een fijnmazig netwerk van sectoren en partijen.</p>
<p>Omdat creatieve industrie ook sterk verbonden is met de sector economie, heeft specifiek het Stimuleringsfonds niet alleen te maken met subsidie vanuit het ministerie van OCW. Het fonds heeft ook een subsidierelatie met de ministeries van Infrastructuur en Milieu en Buitenlandse Zaken, waarvoor het diverse programma&rsquo;s uitvoert op het gebied van internationalisering (ministeries van OCW en BuZa) en op het gebied van architectuur en ruimtelijk ontwerp (ministeries van OCW en IenM).</p>
<h3>2.7 Letteren &amp; Bibliotheken: St. Lezen, Letterenfonds, Schrijverscentrale, FBJP en KB</h3>
<p>De letterensector is anders georganiseerd dan de meeste sectoren binnen cultuur. Dat heeft te maken met het feit dat de cultuurproducerende instellingen private partijen zijn. De financiering is dan ook anders, want anders dan in bijvoorbeeld de podiumkunsten, is niet de gehele keten (productie, distributie en exploitatie) publiek gefinancierd. Het sectorinstituut dat net was ontstaan werd ontzien bij de bezuinigingen op cultuur onder Zijlstra, maar de sector kreeg er wel mee te maken, evenals met de gevolgen van de financi&euml;le crisis. Marktpartijen hadden daardoor minder te besteden en bibliotheken kregen te maken met bezuinigingen op lokaal niveau.</p>
<p>In de ondersteuningsstructuur spelen een aantal instellingen een rol, namelijk: het Letterenfonds, de Schrijverscentrale, Stichting Lezen, Fonds Bijzondere Journalistieke Projecten (FBJP). Daarnaast speelt de Koninklijke Bibliotheek (KB) een belangrijke rol, die toelichting behoeft. De KB is een wetenschappelijke instelling met een collectie van 7 miljoen items. De KB heeft een belangrijke co&ouml;rdinerende rol in het netwerk van openbare bibliotheken en heeft sinds de fusie in 2015 de rol en taken van het Sectorinstituut Openbare Bibliotheken overgenomen. De KB bouwt aan de nationale digitale bibliotheek, bibliotheek.nl. De KB heeft de wettelijke opdracht aandacht te besteden aan de onderwerpen die het niveau van lokale bibliotheken overstijgen zoals een gemeenschappelijke infrastructuur, niet-geografisch gebonden doelgroepen en het aansturen van innovatie, kennisdeling en onderzoek in de sector. De KB heeft als stelseltaken: regie en advies, faciliterende en co&ouml;rdinerende taken en de aansturing van grootschalige programma&rsquo;s en projecten voor het hele bibliotheekstelsel. De KB is in deze analyse meegenomen als ondersteunende instelling, maar heeft een andere status omdat deze instellingen niet vanuit de BIS maar de Wsob is gefinancierd.</p>
<p>Stichting Lezen is het kennis- en expertisecentrum voor leesbevordering en literatuureducatie en maakt in die rol deel uit van de Basisinfrastructuur. De stichting zet zich in voor het verbeteren van het leesklimaat en de leescultuur, als onderdeel van het algemene lees- en literatuurbeleid van het ministerie van OCW.</p>
<p>Het Letterenfonds, de Schrijverscentrale en Stichting Lezen zijn onlangs verhuisd naar een gezamenlijk Letterenhuis in Amsterdam met als doel meer onderlinge samenwerking te stimuleren. Het Fonds Bijzondere Journalistieke Projecten heeft gezamenlijke huisvesting met instellingen uit de meer journalistieke hoek, zoals het Huis voor Democratie. De capaciteit sterk verschilt en een instelling als het FBJP met 1,5 fte heeft bijvoorbeeld weinig tot geen mogelijkheden ondersteuning te bieden aan het veld, anders dan het bieden van financiering. De instellingen streven naar intensievere samenwerking om kwetsbaarheid te beperken en meer slagkracht te realiseren.</p>
<p>Om het lezen in Nederland te bevorderen hebben enkele landelijke organisaties, zoals de Stichting Lezen, de CPNB, de Stichting Lezen en Schrijven de krachten gebundeld in de Leescoalitie. Zij voeren activiteiten uit die erop zijn gericht om zoveel mogelijk mensen aan te zetten tot lezen en voorlezen. Ook is er het programma van drie ministeries van OCW, SZW en VWS: <em>Tel mee met taal</em> om het lezen en het plezier in lezen te bevorderen. Hiervan zijn onder meer de KB, de Stichting Lezen en de Stichting Lezen en Schrijven partner.</p>
<h3>2.8 Bovensectoraal Beleid: Boekmanstichting</h3>
<p>Met het bovensectorale onderwerp Beleid doelen we op de ondersteuningsfuncties gekoppeld aan het cultuurbeleid van de overheid. Volgens de Wet en de Regeling op het Specifiek Cultuurbeleid is er subsidie geoormerkt voor &eacute;&eacute;n instelling met als kernactiviteit het verzamelen en verspreiden van kennis en informatie over kunst en cultuur in beleid en praktijk. De activiteiten van die instelling moeten gericht zijn op het bevorderen en faciliteren van onderzoek en van meningsvorming over de productie, distributie en afname van kunst en cultuur en over het nationale en internationale kunst- en cultuurbeleid. Hiervoor wordt in de regeling als aanduiding Onderzoek &amp; Statistiek gebruikt.</p>
<p>Bovensectoraal beleid is op basis van de regeling door het ministerie van OCW belegd bij de Boekmanstichting, kenniscentrum voor kunst, cultuur en beleid in Nederland. Dit kenniscentrum heeft, volgens het Activiteitenplan 2017-2020, als primaire taak trends en ontwikkelingen in de culturele sector op onafhankelijke wijze en op basis van betrouwbare cultuurcijfers te duiden ten behoeve van de zichtbaarheid van cultuur in het maatschappelijke en politieke krachtenveld. Door zich hier optimaal voor in te zetten, komt de Boekmanstichting naar eigen zeggen tegemoet aan de behoefte van beleidmakers aan evidence-based cultuurbeleid &eacute;n draagt de stichting bij aan de professionalisering van het cultuurbeleid in Nederland.</p>
<p>De Boekmanstichting is er voor iedereen die zich vakmatig bezighoudt met cultuurbeleid, met een perspectief vanuit de culturele sector, overheid, media, wetenschap. De Boekmanstichting bedient daarmee de culturele sector van Kunst, Cultuur, Erfgoed en Creatieve industrie en in mindere mate Media en zoekt daarbij de raakvlakken met andere maatschappelijke domeinen op, te weten: sport, zorg en gezondheid, ruimtelijke ordening.</p>
<p>De Boekmanstichting beschrijft in haar Activiteitenplan 2017-2020 vijf functies die nagenoeg overeenkomen met verschillende in dit onderzoek onderscheiden ondersteuningsfuncties. De functies en de relatie met de in dit onderzoek benoemde functies zijn:</p>
<ul>
<li><em>Duiding</em> (vergelijkbaar met informatievoorziening)<em>: </em>de Boekmanstichting geeft betekenis aan kwantitatieve en kwalitatieve gegevens. Het betreft dataverzameling, beleidsinformatieverzameling, analyse, verklaring en ontsluiting. Met uitvoering van deze functie zet de stichting haar kennis en kunde in voor het duiden van maatschappelijke en sociale trends in het veld van cultuurbeleid.</li>
<li><em>Debat</em> (komt terug in netwerkactivering): de Boekmanstichting jaagt op een onafhankelijke, neutrale wijze het culturele debat aan. De debatfunctie heeft tot doel meningsvorming te bevorderen; de Boekmanstichting biedt een platform voor alle standpunten die er zijn en ontfermt zich over het agenderen van onderwerpen die in ieders belang zijn, maar waarvan niemand zich eigenaar voelt.</li>
<li><em>Documentatie</em> (komt terug in beheer &amp; ontsluiting en informatievoorziening): dit betreft de (digitale) bibliotheek, catalogus, archief, kennisborging, (data)informatieontsluiting en collectiebeheer.</li>
<li><em>Deling</em> (vergelijkbaar met netwerkactivering): deze functie uit zich in het optreden als verbinder; (onverwachte) partijen die elkaars kennis (en bereik) kunnen gebruiken, elkaar kunnen versterken en inspireren, vinden elkaar via de Boekmanstichting. Op die manier draagt de stichting haar platformfunctie uit.</li>
<li><em>Diensten</em> (met lage prioriteit en deze functie komt alleen terug in de vorm van opdrachttaken onder beleidsondersteuning): hieronder verstaat de Boekmanstichting het uitvoeren van werkzaamheden, zoals het doen van onderzoek en het inhoudelijk vormgeven van evenementen, debatten en congressen, voor een opdrachtgever tegen vergoeding.</li>
</ul>
<p>De Boekmanstichting is met 8 fte klein qua omvang, niet alleen in vergelijking met het LKCA als bovensectoraal kennisinstituut voor cultuureducatie en cultuurparticipatie, maar ook in vergelijking met de rijksgefinancierde kennisinstituten in andere maatschappelijke sectoren, zoals is gebleken in het onderzoek &ldquo;De publieke kennisorganisaties&rdquo; van het Rathenau Instituut uit 2016. De Boekmanstichting is ruimschoots de kleinste van de 29 vergeleken (maar sterk verschillende) kennisorganisaties. Daarna komt Geonovum (geo-informatie, door I&amp;M gefinancierd) met 13,4 fte en het Mulier Instituut (sport, door VWS gefinancierd) met 19 fte. De Boekmanstichting kent evenwel veel activiteiten en een divers palet aan ingezette middelen en uitingen op de verschillende functies. De stichting hecht aan wendbaarheid, korte lijnen en beperkte personeelszaken, maar maakt zich gezien de beperkte capaciteit zorgen over het kunnen bieden van evenwichtige en continue ondersteuning aan de volle breedte van de sector.</p>
<h3>2.9 Bovensectoraal Digitalisering: DEN</h3>
<p>De landelijke ondersteuning op het gebied van digitalisering ligt bij Digitaal Erfgoed Nederland (DEN), het kennisinstituut van de digitale cultuur. DEN is in 1996 gestart als publieksorganisatie door een groep erfgoedinstellingen om samenwerking op het gebied van ICT te stimuleren. Toen de kwaliteitszorg op dit gebied ook belegd werd bij DEN, is DEN in 2005 overgegaan van een vereniging naar een stichting, om de onafhankelijkheidspositie te kunnen waarborgen. DEN ondersteunt erfgoedbeherende instellingen, maar sinds januari 2017 ook cultuurproducerende instellingen, zoals de podiumkunsten. DEN wil, in gezamenlijkheid met cultuurproducerende en erfgoedbeherende instellingen, een actieve bijdrage leveren aan de informatiemaatschappij. DEN bevordert en bewaakt de kwaliteit van digitale dienstverlening en digitalisering, investeert in de kennisontwikkeling, stimuleert de instellingen om te innoveren en aan de eisen van de digitale samenleving te voldoen, versterkt de toekomstvastigheid en publieksgerichtheid van de nationale infrastructuur voor digitaal erfgoed en bewaakt de aansluiting van de Digitale Collectie Nederland op andere nationale en internationale diensten en voorzieningen.</p>
<p>In 2011 is het een voornemen geweest om DEN na de beleidsperiode van 2013-2016 niet meer te financieren vanuit de overheid. Het Ministerie van OCW heeft erkend dat DEN een probleem adresseert dat zonder DEN niet voldoende geadresseerd zou worden, en dat de instellingen in het culturele veld nog steeds behoefte hebben aan ondersteuning op het gebied van digitalisering. Zodoende heeft DEN vanaf 2017 opnieuw een plek gekregen in de basisinfrastructuur. Om de afname van (Europese) projectgelden op te vangen is de formatie van DEN teruggebracht van 16 naar 11 mensen (5,7 fte).</p>
<p>Er zijn andere partijen die zich op hetzelfde terrein begeven als DEN, zoals Beeld en Geluid en EYE voor film en beeld, LIMA specifiek voor de mediakunst, de Rijksdienst voor Cultureel Erfgoed en RKD richting musea en beeldende kunst, Het Nieuwe Instituut voor de creatieve industrie, de Koninklijke Bibliotheek (KB) en het Nationaal Archief voor bibliotheken en archieven, en op erfgoedniveau ook de provincies. Echter, er zijn geen andere partijen die zoals DEN de kennis omtrent digitalisering landelijk verknopen over de sectoren heen. Alleen op Europees gebied speelt Europeana een rol in het vergroten van de bovensectorale samenwerking.</p>
<p>Een aandachtspunt voor DEN is de kwetsbaarheid van de organisatie. De organisatie is klein en de kennis en het netwerk van de directeur zijn cruciaal voor het succes. In de onderwijssector is Kennisnet een vergelijkbare organisatie, die scholen ondersteunt met ICT. Waar DEN 5,7 fte in dienst heeft, heeft Kennisnet 96 fte in dienst. De vergelijking gaat niet volledig op omdat het primair- en voortgezet onderwijs meer afhankelijk is van Kennisnet omtrent de ICT dan de cultuursector van DEN, maar dit laat wel zien dat DEN echt leunt op een paar personen. Op dit moment is DEN doende de vacante positie van directeur in te vullen.</p>
<h3>2.10 Bovensectoraal Ondernemerschap: Cultuur+Ondernemen</h3>
<p>Cultureel ondernemerschap is al in zwang in het cultuurbeleid sinds staatssecretaris Van der Ploeg in de periode 1998-2002. Hij beschreef Cultureel ondernemerschap als een &lsquo;houding die erop is gericht zoveel mogelijk kunstzinnig, artistiek-cultureel, zakelijk en maatschappelijk rendement te halen uit culturele voorzieningen&rsquo;. Sindsdien heeft cultureel ondernemerschap een belangrijke plaats gekregen in het cultuurbeleid van het rijk, en evenzeer van provincies en gemeenten. Cultureel ondernemerschap is daarmee een belangrijk strategisch en bedrijfsmatig onderwerp voor vrijwel alle culturele instellingen, of zij nu wel of niet subsidie ontvangen, en dat geldt ook voor individuele kunstenaars in hun eigen beroepspraktijk. Onder staatssecretaris Zijlstra werd het begrip verengd tot ondernemerschap en lag de focus op het vergroten van eigen inkomsten, gelijktijdig met lagere rijkssubsidies voor kunst en cultuur. Om de cultuursector te ondersteunen bij het vormgeven en versterken van ondernemerschap heeft het ministerie van OCW het Programma Ondernemerschap Cultuur gestart, dat loopt in de periode 2014-2017, en binnenkort dus eindigt.</p>
<p>Doel van het programma was om het ondernemerschap in de culturele sector te vergroten, o.a. door het verbreden van de financieringsmix, waardoor de sector meer eigen inkomsten zou gaan verwerven. Het programma startte in een periode van economische recessie en bezuinigingen op cultuur, waardoor overheid en sector de focus op ondernemerschap als zeer urgent voelden. Het programma bestond uit vier onderdelen: activiteiten voor kleine culturele instellingen en individuele kunstenaars en creatieve makers (uitgevoerd door Cultuur+Ondernemen), het opleidingsprogramma Leiderschap in Cultuur, LinC, uitgevoerd door de Universiteit Utrecht en Kennisland in samenwerking met de HKU en Coaching in de Cultuur), Wijzer Werven, training en coaching van culturele ANBI&rsquo;s op het gebied van financieringsmix en fondsenwerving (uitgevoerd door Van Dooren Advies en Charistar in samenwerking met Berenschot) en het uitvoeren van de campagne &lsquo;Cultuur, daar geef je om&rsquo; (uitgevoerd door het ministerie van OCW zelf).</p>
<p>Naast Cultuur+Ondernemen en de reeds genoemde uitvoerders van het programma Ondernemerschap Cultuur zijn er veel andere partijen die het ondernemerschap in de cultuursector ondersteunen. Voorbeelden zijn: provinciale steunfuncties, zoals bkkc in Noord-Brabant, provinciale cultuurfondsen zoals Cultuurfonds Gelderland, grote culturele instellingen die hun collega&rsquo;s helpen, brancheorganisaties, onderwijsinstellingen en commerci&euml;le onderzoeks- en adviesbureaus.</p>
<p>Cultuur+Ondernemen (C+O) wordt gesubsidieerd voor ondersteuning bij ondernemerschap. C+O is het kenniscentrum voor ondernemerschap in de cultuursector en is tot stand gekomen in 2010 door een fusie van Kunstenaars&amp;Co, dat zich richtte op individuele kunstenaars, en Kunst &amp; Zaken, dat was gericht op culturele instellingen en het bedrijfsleven. In deze inleiding wordt de bijzondere positie van C+O qua financiering en dienstverlening, in het bijzonder de cultuurleningen uitgebreid beschreven.</p>
<p><em>Financiering en waardering van Cultuur+Ondernemen</em></p>
<p>C+O en zijn voorgangers kennen een langere subsidiegeschiedenis met het Ministerie van OCW. Voor 2013 ontving de instelling jaarlijkse instellingsubsidies van het ministerie. Ook werden in het verleden programma&rsquo;s en opdrachttaken bij C+O en zijn voorgangers ondergebracht door het ministerie, waaronder de ontwikkeling van de Code Governance Cultuur en het programma Cultuurmecenaat.</p>
<p>Sinds 2013 ontvangt C+O vanuit het Programma Ondernemerschap Cultuur een projectsubsidie van het ministerie van OCW, die bestemd is voor het totale activiteitenpakket van de instelling. Het programma eindigt formeel per 2017. De dienstverlening van C+O binnen dit programma is na twee jaar, in 2015, niet formeel, extern ge&euml;valueerd, zo bleek uit onderzoek van DSP naar het programma. Evaluatie na twee jaar was &eacute;&eacute;n van de uitgangspunten van het programma. Ook in 2017 en 2018 stelt het Ministerie van OCW subsidie beschikbaar voor een ondersteunende functie voor ondernemerschap. In dit verband ontvangt C+O subsidie voor de jaren 2017-2018. Nog onbekend is of deze functie na 2018 zal blijven bestaan en, zo ja, in welke vorm. Verder realiseert C+O inkomsten uit publieke (o.a. sociale fondsen) en private bronnen (fondsen en opdrachtgevers).</p>
<p>Uit interviews met stakeholders in het kader van het evaluatieonderzoek van het Programma Ondernemerschap Cultuur rijst het beeld op dat C+O goed is ingebed in de culturele sector, gebruik maakt van een groot netwerk en dat het aanbod van C+O veel wordt afgenomen (met name de activiteiten op het vlak van cultural governance). Maar het is wel de vraag is of alle disciplines in gelijke mate aan bod komen (de beeldende kunst zou oververtegenwoordigd zijn) en of alle landsdelen in gelijke mate bediend worden. Het is echter onvoldoende duidelijk hoe het activiteitenprogramma van C+O zich verhoudt tot het Programma Ondernemerschap Cultuur. Het onderzoek concludeert dat onduidelijk is in welke mate de afzonderlijke activiteiten van C+O (deels) gesubsidieerd zijn of (deels) commercieel worden uitgevoerd. Deze onduidelijkheid kwam nadrukkelijk ook naar voren tijdens de werksessie.</p>
<p>De Raad voor Cultuur onderstreepte in zijn advies uit 2016 het belang van de functie van C+O voor de culturele sector. Het is nuttig dat culturele instellingen, kunstenaars en creatieven ondersteund worden bij de professionalisering van hun ondernemerschap en toegang krijgen tot laagdrempelige financieringsproducten. De raad miste in de subsidieaanvraag een analyse van de behoeften in het veld aan deze diensten en een stakeholdersanalyse. De raad vond het niet duidelijk hoe C+O zich verhoudt ten opzichte van andere (regionale en lokale) organisaties die ondernemerschap in de cultuursector ondersteunen.</p>
<p>Het ministerie van OCW stelt nadrukkelijk als voorwaarde dat de activiteiten van C+O niet marktverstorend mogen werken op bijvoorbeeld de dienstverlening van de Kamers van Koophandel, culturele brancheorganisaties of commerci&euml;le advies- en coachingsbureaus. Daarnaast moet er bij de uitvoering van de activiteiten gebruik worden gemaakt van de al bestaande netwerken voor individuele kunstenaars en creatieve makers.</p>
<p>C+O spreekt zich in zijn openbare communicatie (website, jaarverslagen, publicaties) niet uit over zijn positie in de markt van onderzoeks- en adviesbureaus en hoe marktverstoring voorkomen wordt. Opdrachten die C+O uitvoert voor instellingen (al dan niet in opdracht van gemeenten) kunnen in veel gevallen ook door private/commerci&euml;le bureaus worden uitgevoerd. C+O legt niet uit hoe de publieke en private diensten met elkaar samenhangen en hoe de financieringsstromen lopen. C+O legt dit wel uit in de monitorgesprekken met het ministerie. Het ministerie accepteert deze uitleg, maar benadrukt het belang van transparantie over de dienstverlening en prijsstelling. Uit de gesprekken en de sessie in het kader van het onderzoek blijkt dat het veld vindt dat C+O hier onvoldoende transparant over communiceert.</p>
<p><em>Dienstverlening door Cultuur+Ondernemen</em></p>
<p>De hoofdtaak van C+O is dienstverlening aan spelers in de cultuursector. Omdat dit in een aantal gevallen dienstverlenging betreft aan individuele spelers en niet aan de sector als geheel, is dit niet als een van de in dit onderzoek onderscheiden ondersteuningsfuncties op te vatten. Daarom wordt de dienstverlening van C+O in deze inleidende paragraaf uitgebreid toegelicht.</p>
<p>C+O legitimeert zijn dienstverlening vanuit de visie dat het belang van publiek-private financiering van cultuur verder zal toenemen en dat instellingen en makers behoefte hebben aan ondersteuning bij het realiseren van een gezond bedrijfsmodel. Daarvoor zijn kennis, vaardigheden en netwerken rondom publiek private financiering nodig. De rol die de overheid heeft ten opzichte van de culturele sector transformeert van subsidi&euml;nt naar medespeler, te midden van andere financiers. De doelgroepen van C+O zijn culturele organisaties (vooral klein en middelgroot, in principe niet de BIS-instellingen), zelfstandig werkende kunstenaars en zogenaamde creatieven. C+O ondersteunt deze spelers bij professionalisering, bij het vinden van passende financiering, bij het vinden van nieuwe businessmodellen en bij het &lsquo;up to date&rsquo; houden en/of optimaliseren van de governance. C+O verricht de volgende activiteiten die (mede) betaald worden vanuit het OCW-programma Ondernemerschap Cultuur:</p>
<ul>
<li>Startadviezen aan instellingen, creatieve ondernemingen, individuele kunstenaars en creatieven, evenwichtig verdeeld over de verschillende doelgroepen, disciplines en regio&rsquo;s. Een gratis startadvies kan aanleiding geven voor een intern of extern betaald adviestraject.</li>
<li>Advies en begeleiding bij het opzetten en vernieuwen van financi&euml;le diensten. Het doel hiervan is om de financieringsmogelijkheden en -diversiteit te vergroten (nieuwe verdienmodellen en daarop afgestemde financieringsmix) en zo meer cultuurproductie en -distributie mogelijk te maken. C+O zet instrumenten in als leningen, microkredieten en garantstellingen; zie ook de uitwerking van cultuurleningen hierna.</li>
<li>Advies en ondersteuning aan besturen en raden van toezicht bij het toepassen van de Governance Code Cultuur. In 2017 is een herziening van de Code voorzien.</li>
<li>Onderzoek naar kansen, voorwaarden en bruikbaarheid van nieuwe financieringsmodellen in de cultuursector en deling van kennis/inzichten uit onderzoek met de sector.</li>
</ul>
<p><em>Cultuurleningen via Cultuur+Ondernemen</em></p>
<p>C+O biedt cultuurleningen aan voor professionele kunstenaars en culturele organisaties. Een lening legt het accent op investeren en terugverdienen en bevordert ondernemerschap. Dat is een groot verschil met subsidies of ander geefgeld. Leningen horen thuis in een succesvolle en moderne financieringsmix van de kunst- en cultuursector.</p>
<p>Leningen uit de markt (van banken, financi&euml;le instellingen, of private investeerders) zijn nog nauwelijks toegankelijk voor kunstenaars of culturele organisaties. De rendementsverwachting is vaak te laag, de risico&rsquo;s zijn te groot, en het onderpand is meestal onvoldoende. Omdat de markt hier faalt, biedt C+O (naast onder meer het Fonds Kwadraat) cultuurleningen aan, laagdrempelig en tegen gunstige condities. C+O heeft daarvoor een infrastructuur opgezet, waarin het door C+O opgerichte Fonds Cultuur +Financiering (FCF) een centrale rol speelt. FCF (een onafhankelijke fondsmanager) beoordeelt de aanvragen financieel en is de contractpartij voor elke lening. Daarmee is de adviesfunctie van C+O feitelijk en ook functioneel gescheiden van de financieringsfunctie.</p>
<p>De cultuurleningen (maximaal &euro; 40.000 tegen 3%) beogen een spin off te realiseren naar andere financiers (103 toegekende leningen in de periode 2015-2016 met een financieringsproductie van ruim &euro; 1,2 mln.). De cultuurleningen helpen bij het opzetten en verwerven van crowdfunding, maar ook bij het aantrekken van bancaire financieringen. Daarnaast staat FCF regelmatig garant op bancaire kredietverlening. C+O werkt samen met een aantal (naast OCW) lokale partners, zoals gemeenten, provincies, lokale fondsen en lokale kenniscentra. Deze partners dragen bij aan de distributie van de leningen (via laagdrempelige lokale &lsquo;loketten&rsquo;) en aan de financiering ervan (bijdrage aan leenkapitaal en bijdrage aan uitvoerings- en communicatiekosten). Het aantal regionale partijen wordt gestaag uitgebreid (gesprekken worden gevoerd met Rotterdam en Maastricht).</p>
<p>Het palet aan leningen bestaat thans uit Regionale cultuurleningen (inmiddels voor Amsterdam, Utrecht, Noord-Brabant en Almere), Talentleningen (OCW, landelijke spreiding) en Culturele microkredieten. De Regionale cultuurleningen en de Talentleningen (alle tegen 3%) zijn de kernproducten. De Culturele microkredieten (rente 6%) zijn een terugvaloptie. De leningen, zo blijkt in de praktijk van C+O, stellen de kunstenaar of culturele organisatie wel in staat om andere inkomsten te genereren. De talent- en cultuurleningen versterken de marktpositie en het verdienpotentieel van kunstenaars, culturele organisaties en creatief ondernemers.</p>
<p>C+O stelt op basis van eigen onderzoek (met inzet van diverse instrumenten) vast dat het aanbod van leningen voorziet in een behoefte. De belangstelling voor de leningen is volgens verwachting, zowel in het aantal aanvragen en toekenningen als in de aangevraagde bedragen. De leningen blijken breed inzetbaar in de sector. Kunstenaars en organisaties maken er gebruik van (muziek, film, tv, design, mode, beeldende kunst, podiumkunsten, literatuur), en de toepassing is breed (productiekosten, marketing &amp; communicatie, apparatuur &amp; instrumenten, studio &amp; werkplaats). De afschrijvingen op leningen zijn beperkt. De gekozen structuur, met het Fonds Cultuur+Financiering als centrale speler en C+O als begeleider en adviseur, functioneert naar behoren. Leningnemers zijn in het algemeen tevreden als het gaat om direct contact met een medewerker en waarderen de mogelijkheid om hun plannen toe te lichten.</p>
<p>Ondanks de goede voorbeelden blijft de bekendheid en populariteit van de leningen vooralsnog beperkt. De sector staat terughoudend tegenover leningen in de financieringsmix. Een lening komt niet in de plaats van subsidies of andere inkomsten, want leningen op zichzelf zijn geen inkomsten. De lening moet immers altijd worden terugbetaald. Ook laat de kwaliteit van de aanvragen regelmatig te wensen over: zelden is een aanvraag in &eacute;&eacute;n keer goed. Dat is niet vreemd. Een lening is een nieuw instrument in de financieringsmix. De meeste kunstenaars en culturele organisaties zijn nog ingesteld op het aanvragen van subsidies, naast het genereren van eigen inkomsten. Lenen om te investeren en te innoveren past nog niet in het plaatje. Een deel van de potenti&euml;le leningnemers ziet de lening hooguit als een laatste redmiddel, als subsidies of andere inkomsten buiten beeld zijn.</p>
<p>In de kunst- en cultuursector is nog lang geen sprake van een volwaardig financieel ecosysteem, zo stelt C+O zelf. De sector is sterk subsidiegedreven, kenmerkt zich door hoge risico&rsquo;s en lage rendementen en heeft bovendien weinig ervaring met voorfinanciering, investeren en terugverdienen.</p>
<h3>2.11 Bovensectoraal Internationalisering: DutchCulture</h3>
<p>Het bovensectorale thema internationalisering is een taak van de sectorale fondsen, maar is ook expliciet belegd bij DutchCulture, centrum voor internationalisering. DutchCulture is er voor culturele professionals en diplomaten, overheden (nationaal, regionaal, stedelijk en de Europese Unie). Verder richt het zich op fondsen, instituten en overige partijen in het onderwijs, pers &amp; media, het internationale veld en publiek. Kortom, iedereen die zich op een bepaalde manier bezighoudt met internationalisering van cultuur. Doel van DutchCulture is internationale samenwerking in kunst, cultuur en erfgoed te steunen en stimuleren. OCW en Buitenlandse Zaken hebben in het beleidskader internationaal cultuurbeleid 2017-2020 voor DutchCulture een aantal focuslanden benoemd voor de beleidsperiode 2017-2020. Dat zijn Belgi&euml;/Vlaanderen, China, Duitsland, Frankrijk, Indonesi&euml;, Turkije, de Verenigde Staten en het Verenigd Koninkrijk.</p>
<p>DutchCulture is een fusieorganisatie van Stichting Internationale Culturele Activiteiten (SICA), Trans Artists and Media DESK Netherlands en is in deze hoedanigheid actief sinds 2013. Onderdeel van DutchCulture is Creative Europe, voor informatie en advies over financiering in Europese context.</p>
<p>DutchCulture heeft ruim 23 fte in dienst plus twee freelancers. Het veld heeft de indruk dat DutchCulture daarmee capaciteit tekort komt om hen echt goed te kunnen bedienen op de benodigde functies.. Mogelijk kunnen betere afstemming met andere partijen die een rol spelen bij internationalisering, het verzorgen van een totaaloverzicht wat er allemaal gebeurt aan internationalisering en een heldere focus daarbij helpen. DutchCulture kan andersom ook weer doorverwijzen naar meer sectorspecifieke partijen.</p>
<h3>2.12 Bovensectoraal Cultuureducatie &amp; Cultuurparticipatie: LKCA en FCP</h3>
<p>Cultuureducatie en cultuurparticipatie vormen een bovensectoraal onderwerp, maar wijken af van de andere bovensectorale onderwerpen doordat het veld er op een andere manier mee bezig is. Cultuureducatie is een primaire taak van een aantal cultuureducatieve instellingen en het is een belangrijke secundaire taak van cultuurproducerende instellingen. Verder bestaat een aanzienlijk deel van cultuurparticipatie uit de beoefening van amateurkunst, door individuen en door een zeer omvangrijk en divers geheel van verenigingen en andere instellingen. Dat maakt dat cultuureducatie en cultuurparticipatie naast een bovensectoraal thematisch onderwerp ook een soort sector op zich vormt die alle culturele disciplines omvat.</p>
<p>Op rijksniveau zijn er twee instellingen bij wie de ondersteuning voor deze bovensectorale onderwerpen is belegd, namelijk het Landelijk Kennisinstituut Cultuureducatie en Amateurkunst (in de rest van dit rapport LKCA) en het Fonds voor Cultuurparticipatie (FCP).</p>
<p>Het LKCA staat voor de waarden van cultuureducatie en actieve cultuurparticipatie en draagt deze actief uit. Het LKCA wil ervoor zorgen dat iedereen op school en in de vrije tijd goede cultuureducatie krijgt en dat cultuurparticipatie voor iedereen mogelijk is. Het kennisinstituut LKCA is in 2012 voortgekomen uit een fusie van Kunstfactor, dat zich richtte op amateurkunst, en Cultuurnetwerk, kenniscentrum voor cultuureducatie. Het LKCA richt zich op professionals die werken voor cultuur op school of in de vrije tijd. Het LKCA had eind 2016 een formatie van 52 fte. Het LKCA ontving in 2016 &euro; 5,3 mln subsidie.</p>
<p>Het FCP financiert sinds 2009 instellingen en initiatieven in de vorm van regelingen en stimuleringsprogramma&rsquo;s op het gebied van cultuureducatie en cultuurparticipatie en heeft in het verlengde daarvan enkele ondersteunende werkzaamheden. Het FCP ondersteunt en verbindt naar eigen zeggen mensen, organisaties en overheden die werk maken van cultuurparticipatie. De drie programma&rsquo;s zijn Cultuureducatie met Kwaliteit, Innovatie in Cultuur &ndash; maak het mee en Cultuur maakt iedereen zichtbaar. Het FCP heeft een jaarlijkse begroting van &euro; 25,3 mln, waarvan &euro; 22,5 mln via programma&rsquo;s wordt besteed aan financiering en subsidi&euml;ring van het veld. Het FCP had eind 2016 een formatie van 30 medewerkers, bijna 25 fte.</p>
<p>In de aanloop naar de beleidsperiode 2017-2020 hebben het FCP en het LKCA een gezamenlijke ambitie geformuleerd. Zij trekken samen op, ieder vanuit zijn eigen onafhankelijke rol, om nieuwe ontwikkelingen te signaleren, agenderen en stimuleren in de werkvelden cultuureducatie en cultuurparticipatie. Zij doen dit door het delen van praktijkervaringen, het verbinden van netwerken en het ondersteunen van innovatieve en inspirerende projecten gericht op onderwijs, samenleving, infrastructuur en waardering. Het FCP stimuleert daarbij ontwikkeling, zichtbaarheid en verbinding van cultuureducatie en cultuurparticipatie via subsidieregelingen en activiteiten, gericht op de doelgroepen die het FCP ondersteunt. Het LKCA stimuleert ontwikkeling door ontmoeting en debat en door te voorzien in kennis en kaders. Het LKCA houdt daarbij een spiegel voor door goede voorbeelden en het bieden van inzicht in relevante ontwikkelingen op (inter)nationaal gebied.</p>
<p>Voor de branche met aanbieders van cultuureducatie en cultuurparticipatie zelf, dus instellingen zoals kunstencentra en verenigingen zijn talloze koepels, brancheorganisaties, vakverenigingen, bonden en vakbonden actief in ondersteuning. De voornaamste speler in cultuureducatie is Cultuurconnectie. Ook voor de ondersteuning van het onderwijs op het gebied van cultuureducatie zijn diverse organisaties actief, zoals de Vereniging Onderwijs Kunst &amp; Cultuur (Vonkc), Algemene Vereniging Schoolleiders (AVS), Vereniging van Cultuurprofielscholen (VCPS), nationaal expertisecentrum leerontwikkeling SLO en dergelijke. Bij de beleidsvorming op het gebied van cultuureducatie en cultuurparticipatie zijn overheden betrokken en ondersteunen elkaar, deels ook via verbanden als de VNG en het IPO.</p>
<p>Op het gebied van cultuureducatie zijn veel regionale en lokale ondersteunende instellingen actief. Dit doen zij in verschillende rollen en functies, soms op meer beleidsmatige en inhoudelijke terreinen zoals kennis, informatie en deskundigheid, soms meer praktisch als intermediair tussen scholen, culturele instellingen en verenigingen en zelfstandige professionals. Het samenspel met deze instellingen is verbeterd, maar soms staan activiteiten nog op gespannen voet, zo merken spelers in het veld op. Het LKCA richt zich op landelijke activiteiten en beperkt zich in lokale activiteiten, om zo voorkomen dat overlap ontstaat met wat regionale en lokale ondersteunende partijen (kunnen) doen. Daarbij helpt het dat het LKCA het landelijke geheel overziet, waar deze organisaties een kleiner gebied bestrijken.</p>
<p>Het LKCA richt zich in principe niet op individuen die les krijgen of kunst beoefenen, maar op de professionals in cultuureducatie en cultuurparticipatie. De professionele partijen die het meest bezig zijn met cultuureducatie behoren tot de cultuursector en het onderwijs. Vanwege de verbindingen met andere domeinen zoals het sociaal domein, zorg en welzijn, sport, openbare ruimte en community arts (sociaal-maatschappelijke vraagstukken) richt het LKCA zich ook op zzp&rsquo;ers of professionals die buiten de culturele sector en het onderwijs werkzaam zijn. Dat maakt het werkveld van het LKCA zeer breed en divers.</p>'
            ],
            [
            	'title' => 'Beschrijving van functies',
            	'body' => '<h2>3. Functies in de ondersteuningsstructuur</h2>
<h3>3.1 Inleiding</h3>
<p>In dit hoofdstuk wordt de ondersteuning van de cultuursector geschetst aan de hand van zeven functies. Deze functies zijn ruim gedefinieerd en omvatten een breed palet aan taken en activiteiten. Waar relevant zijn raakvlakken met andere functies beschreven. Het onderscheid in deze functies helpt om de huidige ondersteuningsstructuur goed te schetsen en de toekomstige ondersteuningsstructuur vorm te geven, zonder dat de discussie direct gaat over de instellingen die de ondersteuning leveren.</p>
<p>Onderstaande functies betreffen in principe de besteltaken die tot de overheidsgefinancierde ondersteuningsstructuur behoren (zie ook de inleiding). In bepaalde gevallen zijn de raakvlakken benoemd met branchetaken, die door andere partijen uit de branche zelf (kunnen) worden verricht. Bij enkele functies kan er sprake zijn van opdrachttaken. Ten slotte is van belang op te merken dat het bij de hier beschreven ondersteuning niet gaat om de financiering van initiatieven of instellingen. Het gaat ook niet om het vormgeven van financi&euml;le regelingen, zoals de primaire taak is van de cultuurfondsen. Cultuurfondsen kunnen daarnaast wel ondersteunende functies vervullen, en maken in die rol deel uit van dit onderzoek.</p>
<h3>3.2 A. Informatievoorziening</h3>
<p>Informatievoorziening betreft het verzamelen en verspreiden van alle relevante informatie, ook wel kennis, die bijdraagt aan het goed functioneren van een sector. Door informatie over specifieke thema&rsquo;s beschikbaar te stellen en door te verwijzen naar gerelateerde bronnen elders kunnen externe kennisvragers, die deze kennis voor praktische doeleinden behoeven, actief, snel en effectief de betreffende informatie vinden.</p>
<p>Het betreft zowel actuele informatie over (eigen) onderzoek en nieuws, als historische informatie en documentatie. De informatie kan uit vele bronnen komen en wordt actief verzameld. De informatie wordt verspreid via diverse kanalen: op schrift, mondeling en online. Inhoudelijk gezien wordt de informatie gedeeld in de vorm van artikelen, publicaties, tijdschriften en websites. Overzichten worden gegeven via catalogi, websites, databases en dergelijke. Tot deze functie behoort de borging van kennis en informatie, oftewel het zeker stellen dat gegevens beschikbaar blijven.</p>
<p>Toegevoegde waarde van informatievoorziening komt tot uiting in de duiding, te weten het analyseren, verklaren en synthetiseren van kennis en informatie. In een wereld waarin informatie in overdadige mate beschikbaar is, neemt de behoefte aan duiding van informatie toe. Duiding waarborgt dat trends en ontwikkelingen adequaat en tijdig zijn te identificeren, te analyseren en te vertalen naar bruikbare informatie voor beleid en praktijk van culturele instellingen en overheden.</p>
<h3>3.3 B. Onderzoek &amp; Ontwikkeling</h3>
<p>Onderzoek &amp; Ontwikkeling (research &amp; development) omvat het uitvoeren en laten uitvoeren van alle mogelijke vormen van onderzoek en analyses. Het kan zowel kwalitatief, beschrijvend en toetsend onderzoek, als kwantitatief, metend en monitorend onderzoek zijn. Het gaat daarbij om evalueren (verleden), inventariseren (heden) en verkennen (toekomst). Er zijn vele verschijningsvormen van onderzoek in de cultuursector, zoals statistiek, monitoring, evaluaties, visitaties en allerlei soorten vergelijkend onderzoek zoals benchmarks. Ook wordt beleidsmatig onderzoek verricht naar doeltreffendheid en doelmatigheid van beleid.</p>
<p>Met ontwikkeling wordt hier gedoeld op onderzoek gericht op vernieuwing en versterking van de (organisatie van de) sector. Het gaat echter niet om artistiek-inhoudelijke ontwikkeling. Deze is niet belegd binnen de landelijke ondersteuningsstructuur, maar bij ontwikkelinstellingen, voor zover bestaand. In het geval van ondersteuning van de cultuursector geldt dat het onderzoek niet primair gedreven is door nieuwsgierigheid, maar door concrete vraagstukken en behoeften van het veld. Kennisvermeerdering alleen is dan ook niet het doel van het onderzoek; de resultaten van het onder&shy;zoek worden steeds vertaald naar wat relevant is voor belanghebbenden binnen overheden, bedrijfsleven en maat&shy;schappij.</p>
<h3>3.4 C. Beheer &amp; Ontsluiting</h3>
<p>Met Beheer &amp; Ontsluiting worden de collectiefunctie en de erfgoedfunctie bedoeld. Het gaat hier om de zorg voor en toegankelijkheid van erfgoed, collecties en archieven die complete deelsectoren van de cultuur betreffen. Het is een brede taak, die naast de zorg voor beheer en behoud, ook de verantwoordelijkheid voor ontsluiting en beschikbaarstelling betreft, al dan niet digitaal, maar ook via fysieke presentaties en tentoonstellingen. Bovendien behoort verzameling, maar ook ontzameling, en de verrijking met nieuwe collecties tot deze functie. De instellingen die deze functies vervullen, zouden het overzicht moeten hebben over het relevante erfgoed voor de betreffende sector en bewaken dat dit goed wordt beheerd, inclusief het delen van kennis over beheer en ontsluiting. Zij hoeven namelijk niet, of zijn niet in staat om, het daadwerkelijke beheer in alle gevallen zelf uit te voeren.</p>
<p>De verschillen tussen de collecties en het overig erfgoed van de diverse deelsectoren in cultuur zijn groot, en dat maakt dat de uitvoering van de erfgoedtaken sinds jaar en dag sterk verschilt per deelsector. Dat heeft onder meer te maken met het gegeven of het rijkscollecties betreffen en daarmee rijksverantwoordelijkheid is. Ook varieert de betekenis van de collecties, bijvoorbeeld in termen van de historische, museale en presentatiewaarde voor een groot publiek, naast de professionele betekenis en het collectieve geheugen van een sector.</p>
<h3>3.5 D. Vertegenwoordiging</h3>
<p>De functie Vertegenwoordiging valt in twee delen uiteen. In de eerste plaats wordt gedoeld op de representatie en zichtbaarheid: het vormen van een aanspreekpunt, het vervullen van de rol van boegbeeld namens de (deel)sector. In de tweede plaats gaat het om promotie van de gehele sector, vaak internationaal maar ook nationaal of regionaal in relatie tot andere culturele sectoren. In beide perspectieven gaat het om collectieve en objectieve belangenbehartiging. Hier ligt uiteraard de subjectieve en zelfs de individuele belangenbehartiging op de loer, maar dat wordt gezien als de verantwoordelijkheid van (partijen in) de branche zelf.</p>
<p>Een relevant punt ten aanzien van de vertegenwoordiging is de positie van de vertegenwoordiger. In veel gevallen ligt het mandaat niet helder vast, juist vanwege de veelheid aan belangen. Daarnaast speelt de mate van autoriteit een rol. In andere sectoren dan kunst en cultuur komt die autoriteit in bepaalde omstandigheden tot zijn recht in de rol van toezichthouder, inclusief die van handhaver. Daar lijkt in de cultuursector geen sprake van. Wel is er een bijzondere positie van de financiers, die door het stellen en toetsen van criteria, oordelen vormen over spelers binnen culturele deelsectoren. Die financiers kunnen ook de sector vertegenwoordigen in de zin van het agenderen van issues en het bieden van platform.</p>
<h3>3.6 E. Netwerkactivering</h3>
<p>In deze functie staat het activeren, vormen, ondersteunen van en toegang verlenen tot netwerken centraal. Daarmee wordt de ontmoeting gefaciliteerd waardoor partijen elkaar binnen en buiten de sector leren kennen, kennis en informatie kunnen uitwisselen en eventueel tot nadere samenwerking kunnen komen. Er is ook een inhoudelijke en politiek-bestuurlijke kant aan deze netwerken. Hier komen namelijk beleidsmatige kwesties aan de orde in debat en reflectie binnen en buiten de sector. De taken in de ondersteuning bestaan daarbij onder meer uit inhoudelijke en praktische afstemming en co&ouml;rdinatie tussen de diverse partijen in en om de sectoren. Het gaat dan ook om (de organisatie van) bijeenkomsten, conferenties, studiedagen en lezingen. Netwerken, formeel en informeel, kunnen ook bestaan uit kenniskringen, community&rsquo;s en platforms, rond diverse thema&rsquo;s.</p>
<h3>3.7 F. Beleidsondersteuning</h3>
<p>Beleidsondersteuning is een brede inhoudelijke functie. Hier wordt gedoeld op alle vormen van (overheids)beleid, van internationaal tot lokaal niveau. Het betreft het ondersteunen van beleidsvorming, onder meer door agendering en signalering van ontwikkelingen waar beleid op kan worden gevormd, evenals door onderbouwing van beleidsintenties. Het gaat vervolgens ook om het ondersteunen van de vertaling en concretisering van beleid naar praktijk. Een vorm daarvan is het ontwikkelen van handreikingen om beleidsmaatregelen in praktijk vorm te geven en uit te kunnen voeren. Het kan ten slotte ook gaan om het uitvoeren van de beleidsmaatregelen zelf in de vorm van regelingen en programma&rsquo;s.</p>
<p>Er zijn vormen van ondersteuning die niet tot het reguliere palet van functies in de ondersteuningsstructuur vallen, maar die om verschillende redenen op enig moment kunnen worden aangeboden. Dienstverlening voor derden tegen betaling wordt in principe buiten beschouwing gelaten voor de ondersteuningsstructuur. Wel vallen hieronder de opdrachttaken die de overheden willen uitbesteden. Opdrachttaken hangen samen met de verwezenlijking van specifieke beleidsthema&rsquo;s en beleidsdoelen van de overheden of de sector. Opdrachttaken zijn eindig en kennen daarom een tijdelijke ondersteuningsduur. Voorbeelden zijn het ontwikkelen en implementeren van codes rond bepaalde thema&rsquo;s als diversiteit, governance en fair practice. Dergelijke opdrachttaken kunnen worden ondergebracht bij ondersteunende instellingen maar ook bij andere partijen, onder meer brancheverenigingen en commerci&euml;le onderzoeks- en adviesbureaus. Aandachtspunt bij opdrachttaken en dienstverlening voor derden is de mate waarin de verleende opdrachten worden uitbesteed dan wel aanbesteed aan gesubsidieerde, bekostigde of juist commercieel opererende partijen. Het opdrachtgeverschap van de overheden kent dan ook diverse vormen.</p>
<p>De ondersteuning betreft, zoals eerder gesteld, niet de financiering van initiatieven of instellingen, en ook niet het vormgeven en uitvoeren van financi&euml;le regelingen. Daar waar dergelijke regelingen gepaard gaan met inhoudelijke ondersteuning kan dit wel in deze of andere functies een plek krijgen. In sommige andere sectoren zijn de beleidsondersteuning en uitvoering wel degelijk gekoppeld aan financiering. Voorbeelden hiervan zijn NOC*NSF in de sport en NWO in de wetenschap. Er zijn argumenten voor en tegen het onderbrengen van ondersteuning en financiering bij een enkele partij, anders dan de overheid zelf: enerzijds cre&euml;ert het daadkracht (beleid krijgt direct uitvoering), anderzijds ontstaat een groot, mogelijk monopolistisch machtsblok.</p>
<h3>3.8 G. Deskundigheidsbevordering</h3>
<p>Deskundigheidsbevordering betreft het in stand houden en vergroten van de kennis en competenties van professionals in en rond de sector, en in bepaalde gevallen ook vrijwilligers en anderen die actief betrokken zijn bij kunst en cultuur. Het betreft vakgerichte ontwikkeling, waarbij in het geval van de ondersteuningsstructuur echter niet wordt gemikt op de artistiek-inhoudelijke talentontwikkeling. Dergelijke talentontwikkeling is belegd in de keten van cultuureducatieve opleidingen en kunstzinnige vorming, inclusief het kunstvakonderwijs en de artistiek-inhoudelijke ondersteuning van (beginnende) kunstenaars in hun beroepspraktijk. Deze laatste rol is en/of was (bijvoorbeeld) belegd bij productiehuizen in de podiumkunsten.</p>
<p>Het gaat om opleidingen, training en coaching in beleidsmatige, bedrijfsmatige en organisatorische vakkennis, waaronder ook cultureel ondernemerschap en leiderschap. Vaak heeft dit de vorm van train-the-trainer en andere vormen die professionals helpen om de opgedane deskundigheid weer breder te delen. Ook regelingen zoals Cultuureducatie met Kwaliteit bevatten deskundigheidsbevordering voor professionals ten aanzien van specialistische en didactische competenties. Het Programma Ondernemerschap Cultuur is ook een voorbeeld van een programma gericht op deskundigheidsbevordering, onder meer in leiderschap en fondsenwerving de cultuursector.</p>'
            ],
            [
            	'title' => 'Beschouwing van functies',
            	'body' => '<h2>15. Beschouwing per functie</h2>
<h3>15.1 Inleiding over beschouwing</h3>
<p>In dit qua opzet weer wat afwijkend hoofdstuk beschouwen we, alles overziend, de verschillende functies. We presenteren de inzichten en wijzen richtingen aan waarin verbeteringen denkbaar zijn. Ook vermelden we het hier als er uit andere domeinen en sectoren dan de cultuursector goede voorbeelden zijn waar de cultuursector van kan leren. In het hoofdstuk Slotbeschouwing reflecteren we op het geheel van ondersteuningsfuncties voor de sectoren en bovensectorale onderwerpen.</p>
<h3>15.2 Beschouwing op Informatievoorziening</h3>
<p>Er blijkt geen blauwdruk te zijn voor de vormgeving van de informatievoorziening. Het aanbod aan informatie is onbegrensd. De ondersteunende instellingen worden geconfronteerd met een grote diversiteit aan doelgroepen die elk hun eigen informatiebehoeften hebben. Zij vinden het vaak erg lastig hun informatiebehoefte scherp te articuleren. Er zijn grote verschillen in behoeften en informatieaanbod tussen en binnen de diverse deelsectoren van de cultuursector. Ten aanzien van het aanbod is het grootste verschil of er ondersteunend kennisinstituut aanwezig is in een bepaalde deelsector, of dat informatie uit veel verschillende bronnen moet worden verzameld.</p>
<p>De informatie die beschikbaar is, blijkt vaak niet goed geordend en is daarmee slecht toegankelijk. Het veld vermoedt dat de ondersteunende instellingen veel informatie hebben, maar wat ze hebben is vaak onbekend en mede daardoor niet goed vindbaar.</p>
<p>In een wereld waarin informatie overvloedig beschikbaar is, neemt de behoefte aan duiding van informatie toe. Duiding moet er voor zorgen dat trends en ontwikkelingen adequaat en tijdig worden vertaald naar bruikbare informatie voor beleid en de praktijk van culturele instellingen en overheden.</p>
<p>De ondersteunende instellingen zoeken naar hun rol als duider van informatie. Over het algemeen zijn ze hier terughoudend in. Het ambitieniveau zou hoger kunnen. De ondersteunende instellingen zouden zich meer als autoriteit (&ldquo;kwaliteitskeurmerk&rdquo;) op het gebied van informatievoorziening kunnen manifesteren.</p>
<p>Er zijn ons geen opvallend goede voorbeelden bekend van ondersteunende instellingen in andere sectoren die de functie informatievoorziening zeer goed op orde hebben en als voorbeeld kunnen dienen voor de cultuursector. Onze ervaring is dat er altijd een kloof bestaat en zal bestaan tussen de informatie die beschikbaar is en de informatie die gewenst is.</p>
<p>We hebben bezien hoe informatievoorziening in het aanpalende domein onderwijs is georganiseerd. In informatievoorziening spelen in het onderwijs de brancheorganisaties zoals de po-, vo-, en mbo-raad, en voor het hoger onderwijs de Vereniging Hogescholen (VH) en de Vereniging Samenwerkende Nederlandse Universiteiten (VSNU) de voornaamste rol. Hun websites zijn een bron van informatie omtrent allerlei verschillende (actuele) thema&rsquo;s en er worden publicaties, onderzoeken, feiten en cijfers van de sector en nieuwsberichten gedeeld. Daarnaast kan het veld ook bijvoorbeeld informatie vinden over wetgeving en wat dit betekent voor de onderwijsinstellingen. Deze organisaties zijn wel specifiek belangenbehartigers, waardoor zij afwijken van de positie van de ondersteunende instellingen in de cultuursector.</p>
<p>Een partij in de onderwijssector die qua positie te vergelijken is met een ondersteunende instelling in de cultuursector, is Kennisnet. Kennisnet ondersteunt scholen specifiek met ICT en doet dit onder andere door het geven van strategisch advies en het aanbieden van expertise. Wanneer het gaat om informatievoorziening op het gebied van onderwijs en ICT is Kennisnet een grote bron van informatie voor het veld, waarbij hun website een schat aan informatie bevat over allerlei thema&rsquo;s, ontwikkelingen op het gebied van ICT-ontwikkeling in het onderwijs, nieuwe trends en inzichten, rapporten en brochures. Bij Kennisnet werken meer dan 75 fte medewerkers. Het onderwijs is een veel grotere maar relatief minder diverse sector dan de cultuursector.</p>
<h3>15.3 Onderzoek &amp; Ontwikkeling</h3>
<p>De cultuursector heeft geen onderzoeksinstituut dat voor de gehele sector onderzoek doet naar bijvoorbeeld de effectiviteit van beleid. Elke ondersteunende instelling besteedt in meer of mindere mate (afhankelijk van beschikbare formatie en kennis die nogal eens beperkt zijn) aandacht aan de functie onderzoek. Andere sectoren zoals zorg (o.a. Trimbos-instituut, Nivel), sport (o.a. NOC*NSF en Kenniscentrum Sport), mobiliteit (o.a. Kennisinstituut Mobiliteitsbeleid) en wetenschap (o.a. NWO en Rathenau) hebben onderzoeksinstituten en kenniscentra die kennis leveren voor hun sector. Ze verrichten hiervoor eigen onderzoek of laten onderzoek doen en verzamelen elders ontwikkelde kennis. Deze instituten zorgen ervoor dat overheden en organisaties beleid kunnen ontwikkelen met een stevig kennisfundament. Dat doen ze door het analyseren en verklaren van ontwikkelingen, het opstellen van verkenningen en scenario&rsquo;s en het analyseren van de effecten van beleidsinstrumenten. Voor de cultuursector als geheel doet alleen de Boekmanstichting dit, maar, mede door de beperkte capaciteit, in beperkte mate. Veel partijen in de diverse deelsectoren hebben wel behoefte aan gespecialiseerde onderzoekers.</p>
<p>De vraag is of de gehele cultuursector een eigen kennisinstituut nodig heeft. Organisaties als het Sociaal en Cultureel Planbureau en het CBS zouden wellicht meer kunnen betekenen voor de cultuursector. Dit kan alleen als de sector in staat is zijn informatiebehoeften goed te formuleren, er bovendien een opdracht inclusief financiering wordt gegeven en ten slotte de expertise daar aanwezig is of in huis kan worden gehaald. Daarin is vermoedelijk nog veel te verbeteren. De rol van het ministerie van OCW moet in dit verband nadrukkelijk worden genoemd. Het ministerie heeft de afgelopen jaren vele onderzoeken uitgevoerd of laten doen (door o.a. commerci&euml;le onderzoeksbureaus en universiteiten) waarvan de uitkomsten bruikbaar zijn voor de beleidsontwikkeling voor diverse thema&rsquo;s in de cultuursector (o.a. Cultuur in Beeld, Database subsidies). Deze onderzoeken worden door de sector gewaardeerd maar er worden vraagtekens gezet bij de continu&iuml;teit van de onderzoeken (volgen van ontwikkelingen en duiden van verschillen). Ook wordt een sector brede onderzoeksagenda/programma gemist.</p>
<p>Naast het voornamelijk kwantitatieve onderzoek is er behoefte aan meer kwalitatief en reflectief onderzoek. Wat zijn de maatschappelijke en economische waarde en betekenis van de bijvoorbeeld podiumkunsten en de beeldende kunst? Antwoorden op dit soort vragen zijn nodig om je als sector te kunnen ontwikkelen. Maar het zal altijd een zoektocht blijven hoe de via onderzoek gegenereerde kennis en inzichten het best kunnen worden omgezet naar interventies in de praktijk.</p>
<h3>15.4 Beheer &amp; Ontsluiting</h3>
<p>Voor de functie beheer &amp; ontsluiting is er geen eenduidig beeld voor de verschillende deelsectoren. Het gaat hier om de zorg voor en toegankelijkheid van erfgoed, collecties en archieven die complete deelsectoren van de cultuur betreffen. Het is een brede taak, die naast de zorg voor beheer en behoud, ook de verantwoordelijkheid voor ontsluiting en beschikbaarstelling betreft, al dan niet digitaal, maar ook via fysieke presentaties en tentoonstellingen. Het contrast tussen de podiumkunsten waarin deze erfgoedtaak is vervallen en de sectoren film en creatieve industrie die hier met Eye en Het Nieuwe Instituut volwaardige en rijksgefinancierde erfgoedfuncties hebben, wordt door het veld schrijnend genoemd.</p>
<p>De verschillen tussen de diverse culturele deelsectoren in de collecties en het overig erfgoed zijn groot, en dat maakt dat de uitvoering van de erfgoedtaken sinds jaar en dag sterk verschilt per deelsector. Dat heeft onder meer te maken met het gegeven of het rijkscollecties betreffen en daarmee rijksverantwoordelijkheid is. Ook varieert de betekenis van de collecties, bijvoorbeeld in termen van de historische, museale en presentatiewaarde voor een groot publiek, naast de professionele betekenis en het collectieve geheugen van een sector.</p>
<p>In het algemeen is er echter sprake van zorg. We leven in een tijd die vanwege tal van ontwikkelingen (snelheid, meer volume) tot de minst gedocumenteerde dreigt te worden en dat geldt ook voor de cultuursector en zeker voor de creatieve industrie, denk aan het vastleggen van nieuwe media-uitingen of gaming. Wie bepaalt wat bewaard wordt? Voor archivering van overheidsinformatie bestaan verplichtingen op basis van de Archiefwet, maar dat geldt niet voor kunstuitingen. Er is dringend behoefte aan helderheid en beleid op dit punt, ook al om een helder antwoord te krijgen op de vraag welke collecties sectorbreed zijn en dus onderdeel van de ondersteuningsstructuur en welke collecties instellingsspecifiek zijn, en dus eigendom van de instelling. Dit vraagt echt om nader onderzoek om goed in kaart te brengen waar de knelpunten zitten en waar oplossingsrichtingen zijn te vinden.</p>
<p>Bepaalde ondersteuningsfuncties vallen niet onder de Wet op het Specifiek Cultuurbeleid (Wsc) maar onder andere wetgeving, in ieder geval in bepaalde deelsectoren. Zo geldt voor de bibliotheken de Bibliotheekwet en voor de erfgoedtaken is er de Erfgoedwet. Daarmee is voor bepaalde taken, zeker ten aanzien van collecties, de ondersteuning langjarig vastgelegd, waar dat in de Wsc telkens maar voor 4 jaar is.</p>
<p>In de podiumkunsten, zowel bij muziek als bij theater, ligt de grootste zorg (maar overigens niet de hoogste prioriteit qua ondersteuning) van het veld in het beheer, behoud en ontsluiting van de collecties. De afdeling Bijzondere Collecties van de Universiteit van Amsterdam heeft een deel van deze erfgoedcollecties van muziek en theater opgenomen. Hiervoor was tijdelijke financiering beschikbaar vanuit de erfenis van de voormalige sectorinstituten, maar de bodem van dat budget is in zicht. Collecties raken in het grotere geheel ondergesneeuwd en verweesd. Juist in deze tijd van digitalisering en toenemend (digitaal) mediagebruik en mede gezien de aandacht voor cultuureducatie, liggen er veel kansen in de grootschalige ontsluiting voor het brede publiek van muziek- en theatercollecties en producties. Beperkingen liggen in financiering en rechten. De cultuurproducerende instellingen hebben hier zelf ook baat bij maar nauwelijks gelegenheid toe.</p>
<p>Mogelijk ligt er een oplossing in een gedeelde verantwoordelijkheid met DEN, het kennisinstituut Digitale Cultuur, die ondersteuning biedt voor het gehele cultuur- en erfgoedveld op het gebied van digitale collectievorming en archivering. Een kerntaak van DEN is het stroomlijnen van digitale collectievorming en archivering van digitale cultuur. Hierbij heeft DEN ten doel de relatie tussen cultuurproducenten en erfgoedinstellingen op het gebied van de digitale collectievorming en archivering te versterken Het veld geeft aan behoefte te hebben aan praktische en technische ondersteuning. De collectiebeleidsrol zou dan mogelijk bij Het Nieuwe Instituut kunnen worden belegd. Het Nieuwe Instituut heeft immers een museum- en archieftaak voor het Museum voor Architectuur, Design en Digitale cultuur.</p>
<h3>15.5 Vertegenwoordiging</h3>
<p>De functie vertegenwoordiging valt in twee delen uiteen. In de eerste plaats wordt gedoeld op de representatie en zichtbaarheid: het vormen van een aanspreekpunt, het vervullen van de rol van boegbeeld namens de (deel)sector. In de tweede plaats gaat het om promotie van de gehele sector, vaak internationaal maar ook nationaal of regionaal in relatie tot andere culturele sectoren, zonder verlengstuk te zijn van het ministerie. In beide perspectieven gaat het om collectieve en objectieve belangenbehartiging en dus niet om de belangenbehartiging zoals brancheorganisaties zouden moeten doen. Een goed voorbeeld in de sportsector is de constructie van NOC*NSF: een organisatie met positie en gezag die een zichtbaar platform vormt voor de hele sector.</p>
<p>In de Beeldende Kunst heeft het Mondriaan Fonds een vertegenwoordigende positie, in ieder geval namens een deel van de sector. In de filmsector hebben EYE en het Filmfonds beide een vertegenwoordigende rol. Op het gebied van internationalisering is in de filmsector onduidelijk wie precies de regie heeft. In de podiumkunstensector heeft het Fonds Podiumkunsten, met het verdwijnen van MCN en TIN, amper deze rol over kunnen nemen en is deze sector daarmee ondervertegenwoordigd, ook als het gaat om internationalisering. Over het algemeen vraagt men zich overigens af in hoeverre van fondsen kan worden verwacht dat ze de gehele sector vertegenwoordigen, aangezien ze slechts een deel van de sector (kunnen) ondersteunen met financi&euml;le regelingen.</p>
<p>Verder overheerst het beeld dat er vooral sprake is van vele gespecialiseerde vertegenwoordigende kleinere partijen. Dit zijn meer belangenbehartigers dan vertegenwoordigers. Is dit erg of effectief? Gezien het belang van vertegenwoordiging is het de vraag of je niet meer in de ondersteuningsstructuur moet trekken, omdat al die kleine partijtjes zoveel meer moeite moeten doen om gehoord te worden. Daar waar samengewerkt wordt en er een nieuwe titel ontstaat (zoals de leescoalitie, het platform promotie cultuureducatie, of BKNL) is er sprake van meer volume: men vertegenwoordigt een groter deel van de sector. Ook weet men de belangen van de deelsector op die manier beter te vertegenwoordigen in de richting van bijvoorbeeld de politiek of het ministerie. De overheid heeft zelf ook behoefte aan vertegenwoordigende organen, en daarmee zou de sector er behoefte aan moeten hebben. Dat is de enige manier om als sector in contact te kunnen staan met de overheid. Met wie moeten zij anders spreken? Tegelijkertijd laat men zich in de culturele sector niet graag vertegenwoordigen en echte boegbeelden of organisaties die met gezag namens (deel)sectoren kunnen spreken zijn op de vingers van een hand of minder te tellen. Iedereen, groot of klein, waant zich uniek. Des te knapper van Kunsten &rsquo;92, de Akademie van Kunsten en de Federatie Cultuur dus dat zij zich als spreekbuizen met een (over het algemeen) eenduidig geluid weten te manifesteren.</p>
<h3>15.6 Netwerkactivering</h3>
<p>In deze functie staat het vormen, ondersteunen van en toegang verlenen tot netwerken binnen de deelsectoren en vooral ook met de omgeving centraal. Daarmee wordt de ontmoeting gefaciliteerd waardoor partijen elkaar binnen en buiten de sector leren kennen, kennis en informatie kunnen uitwisselen en eventueel tot nadere samenwerking kunnen komen. Er is ook een inhoudelijke en politiek-bestuurlijke kant aan netwerkactivering. Het zorgt er namelijk ook voor dat beleidsmatige kwesties aan de orde komen in debat en reflectie binnen en buiten de sector.</p>
<p>De taken in de ondersteuning bestaan daarbij onder meer uit inhoudelijke en praktische afstemming en co&ouml;rdinatie tussen de diverse partijen in en om de sectoren. Het gaat dan ook om (de organisatie van) bijeenkomsten, conferenties, studiedagen en lezingen. Netwerken, formeel en informeel, kunnen ook bestaan uit kenniskringen, community&rsquo;s en platforms, rond diverse thema&rsquo;s.</p>
<p>Er gebeurt veel op het gebied van netwerkactivering. Met het organiseren van allerlei soorten bijeenkomsten, wordt gelegenheid gecre&euml;erd voor intensivering van samenwerking en breder draagvlak. Hoe steviger de agenda is en hoe groter het belang dat deelnemers eraan hechten, des te effectiever het is. De mate van invulling van de netwerkfunctie hangt sterk samen drie factoren: 1) omvang en diversiteit van de sector (vergelijk bijvoorbeeld Letteren versus Cultuureducatie en cultuurparticipatie) 2) omvang en positie van ondersteunende instelling (vergelijk LKCA versus Boekmanstichting) en 3) de mate waarin de sector zichzelf organiseert of kan organiseren in kleine en grote netwerken. Vooral dat laatste valt in een aantal deelsectoren op. Daar waar &eacute;&eacute;n herkenbare partij die midden in het veld staat ontbreekt, ontstaan en groeien netwerken op eigen initiatief, daar waar een grote speler in de ondersteuningsstructuur is, is de sector vaak meer volgend, omdat die grote speler een goede voortrekkersrol kan spelen.</p>
<p>Met name de jaarlijkse grotere congressen die voor de hele (sub)sector worden georganiseerd, worden gewaardeerd als ondersteunende activiteit. Daarnaast heeft het veld, zeker als het gaat om internationalisering, behoefte aan inzicht en bruikbaarheid van netwerken, formeel en informeel. Voor de vertegenwoordiging van Nederland in het buitenland (zie ook functie vertegenwoordiging) ziet men het belang van participatie van ondersteunende instellingen in Europese en mondiale netwerken.</p>
<h3>15.7 Beleidsondersteuning</h3>
<p>De beleidsondersteuning in de cultuursector is een onderbelichte functie van de ondersteunende instellingen. Natuurlijk vormen de resultaten van onderzoek input voor nieuw beleid maar de ondersteunende instellingen stellen zich maar in zeer beperkte mate actief op als het gaat om het be&iuml;nvloeden en voeden van het beleid dat met name door het ministerie, provincies, gemeenten en fondsen wordt ontwikkeld en bepaald. Nationaal inhoudelijk cultuurbeleid werd in het verleden be&iuml;nvloed door de sectorinstituten. Deze rol lijkt nu vooral te liggen bij de brancheverenigingen (soms ook bij vakbonden), maar minder bij de ondersteunende instellingen.</p>
<p>In sommige andere sectoren zijn de beleidsondersteuning en uitvoering gekoppeld aan een financieringstaak. Voorbeelden hiervan zijn NOC*NSF in de sport en NWO in de wetenschap, hoewel in het laatste geval de nadruk in de huidige praktijk vooralsnog op financiering ligt.</p>
<p>Er zijn argumenten voor en tegen het onderbrengen van ondersteuning en financiering bij een enkele partij, anders dan de overheid zelf. Het cre&euml;ert in de regel daadkracht (beleid krijgt direct uitvoering), maar er ontstaat mogelijk een monopolistisch machtsblok. In de cultuursector is nog nauwelijks nagedacht over de meerwaarde en de risico&rsquo;s van een dergelijke bundeling van taken.</p>
<p>Een groot deel van het voor de cultuursector relevante overheidsbeleid ligt overigens niet bij OCW maar bij bijvoorbeeld SZW (arbeidsvoorwaarden en -omstandigheden), EZ (economische agenda), BuZa (EU-beleid), Justitie (vergunningen, auteursrechten) en vooral Financi&euml;n (begroting, fiscaliteit). Bijvoorbeeld de Geefwet en de btw-verhoging kunnen grote invloed hebben op de ontwikkeling van de economische positie van de cultuursector maar liggen niet op het bord van de minister van OCW. Dat maakt ook de beleidsondersteuning complex.</p>
<p>Het is wenselijk om bepaalde beleidsthema&rsquo;s die een meer tijdelijk karakter hebben maar wel bovensectorale aandacht verdienen bij een uitvoerende instelling te beleggen. Hieronder vallen dan ook opdrachttaken die de overheden willen uitbesteden. Opdrachttaken hangen samen met de verwezenlijking van specifieke beleidsthema&rsquo;s en beleidsdoelen van de overheden of de sector. Opdrachttaken zijn eindig en kennen daarom een tijdelijke ondersteuningsduur. Er ontstaat hiermee een opdrachtnemer-opdrachtgeversrelatie en urgentie en de vrijblijvendheid wordt gereduceerd. Voorbeelden zijn het ontwikkelen en implementeren van codes rond bepaalde thema&rsquo;s als diversiteit, governance en fair practice. Dergelijke opdrachttaken kunnen worden ondergebracht bij ondersteunende instellingen maar ook bij andere partijen, onder meer brancheverenigingen en commerci&euml;le onderzoeks- en adviesbureaus. Aandachtspunt hierbij is de mate waarin de verleende opdrachten worden uitbesteed dan wel aanbesteed aan gesubsidieerde, bekostigde of commercieel opererende partijen. Het opdrachtgeverschap van de overheden kent dan ook diverse vormen.</p>
<p>Een voorbeeld van deze aanpak die in de praktijk goed heeft gewerkt is het thema cultural governance. Cultuur+Ondernemen is aangewezen als &lsquo;eigenaar&rsquo; van dit thema en is trekker als het gaat om het ontwikkelen en toepassen van de kennis in de praktijk, waarbij de Code Governance Cultuur het inmiddels zeer breed bekende instrument is. Voor het thema Culturele Diversiteit, dat niet alleen op rijksniveau maar ook voor regionale en lokale schaal een grote rol speelt, is ook een code ontwikkeld en belegd bij de Federatie Cultuur, die voor de uitvoering van de werkzaamheden op het gebied van de Code Culturele Diversiteit wordt ondersteund door binoq atana. De uitvoering van het werk aan dit beleidsthema wordt mogelijk gemaakt met financi&euml;le steun van OCW, in de vorm van een opdrachttaak aan een werkgeversverband, niet aan een ondersteunende instelling. Het beleidsthema Fair Practice<em>, </em><em>een praktische uitwerking van de Arbeidsmarktagenda voor de culturele en creatieve sector, </em>wordt in opdracht van het ministerie van OCW door Kunsten&rsquo;92 uitgevoerd. Opdrachttaken laten uitvoeren door belangenbehartigers is kennelijk ook een manier om aandacht binnen en buiten de sector op een beleidsthema te vestigen. Zoals ook bij vertegenwoordiging is opgemerkt, is het van belang dergelijke taken te beleggen bij een partij die met autoriteit kan zeggen namens de gehele cultuursector &lsquo;eigenaar&rsquo; te zijn van het thema en namens het veld hierover kan spreken.</p>
<h3>15.8 Deskundigheidsbevordering</h3>
<p>Deskundigheidsbevordering is een belangrijke functie van ondersteunende instellingen, maar wordt niet in alle sectoren en voor alle bovensectorale onderwerpen als ondersteuningsfunctie aangeboden. De vari&euml;teit in de uitvoering is groot. Over het algemeen worden het aanbod en de kwaliteit van de aangeboden deskundigheidsbevordering door het veld gewaardeerd. Culturele instellingen kunnen voor deskundigheidsbevordering ook terecht bij brancheorganisaties, regionale ondersteunende instellingen en intermediairs evenals onderwijsinstellingen en trainingsbureaus, die in opleiden gespecialiseerd zijn.</p>
<p>Op het gebied van deskundigheidsbevordering wordt aangekaart vanuit het veld dat de samenwerking met het onderwijs gestimuleerd moet worden. Samenwerking met universiteiten en hbo&rsquo;s biedt op het gebied van deskundigheidsbevordering veel mogelijkheden. Voor deskundigheidsbevordering zou meer geld moeten komen, maar het veld vraagt zich af waar dit ondergebracht zou moeten worden: in een specifieke opleiding of bij instituten en brancheverenigingen? Een issue bij deskundigheidsbevordering vormt immers de kosten die in rekening worden gebracht bij de instellingen en/of de individuele deelnemers. Deze kosten worden door veel culturele instellingen al snel te hoog gevonden. Hierdoor bestaan er in de praktijk drempels die bevordering van de deskundigheid in de weg staan. Dit wordt door het veld als zeer ongewenst gezien.</p>
<p>Regelingen zoals Cultuureducatie met Kwaliteit bevatten deskundigheidsbevordering voor professionals ten aanzien van specialistische en didactische competenties. In de aanvragen die voor Cultuureducatie met Kwaliteit worden gedaan bij het Fonds voor Cultuurparticipatie, moet in principe aandacht worden besteed aan deskundigheidsbevordering. Een dergelijke voorwaarde zorgt dat er aandacht en middelen voor dit belangrijke onderwerp zijn.</p>
<p>Het Programma Ondernemerschap Cultuur (LinC, Wijzer Werven, ondersteuning aan middelgrote en kleine culturele instellingen) heeft de afgelopen jaren een belangrijke rol gespeeld bij de deskundigheidsbevordering in de sector. Veel professionals hebben opleidingen gevolgd die in het kader van het programma zijn aangeboden. De vraag is hoe na het aflopen van het programma het opleidingsaanbod, wellicht in afgeslankte, andere vorm, kan worden gecontinueerd. Want dat er behoefte aan is, staat buiten kijf.</p>
<p>De sector werkt nauwelijks met keurmerken, afgezien van BHV en diploma&rsquo;s in bepaalde technische of beveiligingsrollen. De certificering van interne cultuurco&ouml;rdinatoren (icc&rsquo;ers) door het LKCA is een echte uitzondering, die bovendien aan medewerkers in het onderwijs en niet aan medewerkers in de cultuursector ten goede komt. Er zit mede daardoor geen verplichtend karakter in bijscholing, en ook weinig richting of profilering in vereiste competenties. De positie van autoriteit en mogelijk zelfs toezichthouder is vanuit het instrument keurmerken niet belegd binnen de ondersteuningsstructuur. Die rol wordt overigens in de behoorlijk autonome en vrijgevochten culturele en creatieve sectoren ook niet gemist.</p>'
            ],
            [
            	'title' => 'Prioritering van functies',
            	'body' => '<h2>16. Prioritering van functies</h2>
<h3>16.1 Prioritering en nuancering</h3>
<p>In dit hoofdstuk presenteren we onderzoeksbevindingen aan de hand van het Positioneringsmodel van Berenschot voor branche- en kennisinstituten. Dit positioneringsmodel kent 7 assen waarop de ondersteuningsfuncties worden weergegeven. De ondersteunende instellingen zijn in een aantal van deze functies en daarmee op elk van de assen in meer of mindere mate actief. Het huidige profiel van dat instituut wordt weergegeven door de mate waarin het instituut op dit moment invulling geeft aan deze functie (hoe meer, hoe hoger op de as). In het model worden naast het huidige beeld ook de door spelers in het veld toegekende prioriteiten weergegeven. Het positioneringsmodel is gebruikt in dit onderzoek voor elke deelsector en bovensectoraal onderwerp</p>
<p><em>Nuancering van de waarde van de uitkomsten</em></p>
<p>Het is van belang stil te staan bij de waarde die mag worden toegekend aan de uitkomsten die in de grafieken zijn weergegeven. De grafieken vormen expliciet een indicatieve visualisatie van enerzijds onze eigen analyse over de huidige taakopvatting en anderzijds de prioritering vanuit de sessies. Daarmee ontstaat een indruk hoe de ondersteuningsfuncties in de verschillende sectoren zich daarin tot elkaar verhouden. Bij de prioritering is geen sprake van een representatieve meting onder een significant grote groep stakeholders. Bovendien is de door het veld opgegeven prioritering ook relatief. Ondersteuning betreft immers vaak juist die taken die de sector zelf laat liggen en moet laten liggen, en kennelijk geeft de sector aan (een deel van) die functies een lagere prioriteit. Ondersteuning is daarnaast op sommige terreinen zo vanzelfsprekend dat het ook niet een hoge prioriteit voor de toekomst krijgt toegekend vanuit het veld, want het is toch al voor elkaar. De grafieken en de toelichtingen moeten met deze nuancering in het achterhoofd worden bezien.</p>
<p><em>Scoring</em></p>
<p>De scores van de huidige invulling en taakopvatting van de instelling zijn ingevuld door Berenschot. Hierbij is er gebruikt gemaakt van de beleidsplannen, jaarverslagen en de gesprekken die wij met deze ondersteunende instellingen hebben gevoerd, gecombineerd met ervaringen van het veld over de huidige situatie en klanttevredenheidsonderzoeken. Hiervoor is de volgende scoretabel gehanteerd:</p>
<table>
<tbody>
<tr class="table--highlight">
<td width="300">
<p><strong>Huidige invulling/taakopvatting</strong></p>
</td>
<td width="300">
<p><strong>Score </strong></p>
</td>
</tr>
<tr>
<td width="300">
<p>Grote taak/primaire taak</p>
</td>
<td width="300">
<p>6</p>
</td>
</tr>
<tr>
<td width="300">
<p>Gemiddelde taak</p>
</td>
<td width="300">
<p>4</p>
</td>
</tr>
<tr>
<td width="300">
<p>Kleine taak</p>
</td>
<td width="300">
<p>2</p>
</td>
</tr>
<tr>
<td width="300">
<p>Geen taak</p>
</td>
<td width="300">
<p>0</p>
</td>
</tr>
</tbody>
</table>
<p>De scores omtrent de prioritering zijn ingevuld door het veld zelf. Het veld heeft op diverse manieren de zeven functies in volgorde van prioriteit kunnen plaatsen. Hierna is bij bepaalde sessies het gemiddelde genomen van alle individuele scores die de individuele deelnemers hebben ingevuld tijdens de sessie, in andere sessies is de prioritering in gezamenlijkheid aan het einde van de sessie bepaald en soms is de prioriteit door Berenschot bepaald aan de hand van de discussies en uitkomsten van de werksessies. Voor de grafieken zijn de scores omgerekend en deze zijn weergegeven met als de hoogste prioriteit een 7 en de laagste prioriteit een 1, als volgt:</p>
<table>
<tbody>
<tr class="table--highlight">
<td width="300">
<p><strong>Door deelnemers gestelde prioriteit </strong></p>
</td>
<td width="299">
<p><strong>Score </strong></p>
</td>
</tr>
<tr>
<td width="300">
<p>Hoogst</p>
</td>
<td width="299">
<p>7</p>
</td>
</tr>
<tr>
<td width="300">
</td>
<td width="299">
<p>6</p>
</td>
</tr>
<tr>
<td width="300">
</td>
<td width="299">
<p>5</p>
</td>
</tr>
<tr>
<td width="300">
<p>Gemiddeld</p>
</td>
<td width="299">
<p>4</p>
</td>
</tr>
<tr>
<td width="300">
</td>
<td width="299">
<p>3</p>
</td>
</tr>
<tr>
<td width="300">
</td>
<td width="299">
<p>2</p>
</td>
</tr>
<tr>
<td width="300">
<p>Laagst</p>
</td>
<td width="299">
<p>1</p>
</td>
</tr>
</tbody>
</table>
<p><em>Uitkomsten over alle prioritering</em></p>
<p>Als alle uitkomsten worden vergeleken, vallen bepaalde punten op. Uit de grote verschillen tussen sectoren en bovensectorale onderwerpen, zowel in de huidige taakopvatting als de prioritering, blijkt bijvoorbeeld een enorme diversiteit van behoefte aan en invulling van ondersteuning.</p>
<p>Huidige taken die vaker hoog scoren zijn onderzoek &amp; ontwikkeling en informatievoorziening. Vertegenwoordiging (maar niet bij Film en Beeldende Kunst) en beleidsondersteuning scoren vaker laag . Sterk wisselend is beheer &amp; ontsluiting.</p>
<p>Qua prioriteiten worden onderzoek &amp; ontwikkeling en informatievoorziening vaak hoog gescoord. Dat komt dus overeen met de huidige best scorende functies. Dat suggereert een relatie tussen wat er gebeurt en wat er wordt gewenst voor deze twee functies, maar dat geldt lang niet voor alle sectoren en onderwerpen. Voor het overige wisselen de prioriteiten van alle ondersteuningsfuncties sterk in scores.</p>
<p>Verder wordt zichtbaar dat sectoren of onderwerpen met een kleine ondersteunende infrastructuur toch in veel functies enige taakinvulling hebben, en de instellingen daarmee dus eerder enige generalistische ondersteuning leveren dan sterk gespecialiseerde.</p>
<h3>16.2 Prioritering Podiumkunsten</h3>
<p>Omdat voor deze brede sector twee werksessies zijn georganiseerd, &eacute;&eacute;n over muziek en &eacute;&eacute;n over scenisch (theater, dans et cetera) zijn er twee inventarisaties gehouden, die we beide tonen. De prioriteiten zijn dan ook anders gesteld, terwijl de (geringe) ondersteuning van de sector gelijk is.</p>
<p><em>Muziek</em></p>
<img src="img/16_2_figuur_1.jpg" alt="">
<p><em>Scenisch</em></p>
<img src="img/16_2_figuur_2.jpg" alt="">
<p>In de podiumkunsten worden, zowel wat betreft muziek als scenisch, weinig ondersteuningsfuncties uitgevoerd als taak van de ondersteunende instelling, bij gebrek daaraan. Het Fonds Podiumkunsten heeft een kleine taak in onderzoek &amp; ontwikkeling en in vertegenwoordiging, en een redelijke taak in netwerkactivering. Er zijn op dit moment middelen beschikbaar voor beheer &amp; ontsluiting waardoor ondersteuning door de Universiteit van Amsterdam nog een tot enkele jaren gefinancierd is.</p>
<p>Grootste verschillen in de prioriteit en het ontbreken van ondersteuning is te zien in informatievoorziening, onderzoek &amp; ontwikkeling en vertegenwoordiging. De functie beheer &amp; ontsluiting heeft in beide werksessies een middelhoge prioriteit gekregen.</p>
<h3>16.3 Prioritering Beeldende Kunst</h3>
<img src="img/16_3_figuur_1.jpg" alt="">
<p>Bovenstaand beeld toont dat de vertegenwoordigende functie op waarde wordt geschat en naar behoefte van het veld wordt vervuld. Datzelfde geldt voor de geboden ondersteuning als het gaat om deskundigheidsbevordering. Men heeft wel behoefte aan meer onderzoek en ontwikkeling in de sector en geeft ook aan beheer en ontsluiting belangrijk te vinden. Opvallend genoeg heeft die laatste functie in de huidige praktijk weinig urgentie. Het zou kunnen dat men de informatie op orde acht en daarom minder inzet nodig vindt. De mate waarin netwerken op dit moment worden geactiveerd sluit wel weer aan bij de behoefte van het veld.</p>
<h3>16.4 Prioritering Erfgoed</h3>
<img src="img/16_4_figuur_1.jpg" alt="">
<p>De prioriteit die het veld aangeeft omtrent de zeven functies komt redelijk goed overeen met wat de rijksondersteuning binnen de erfgoedsector (RKD en Mondriaan Fonds) op dit moment aan taken heeft. De ondersteunende functie van het RKD richt zich sterk op beheer &amp; ontsluiting en op onderzoek &amp; ontwikkeling. De prioritering van het veld richt zich hier ook sterk op. Ten opzichte van de huidige ondersteuning zit de behoefte van het veld nog iets sterker op de netwerkactivering en iets minder op de deskundigheidsbevordering.</p>
<h3>16.5 Prioritering Film</h3>
<img src="img/16_5_figuur_1.jpg" alt="">
<p>De ondersteunende functies van EYE en Filmfonds samen concentreren zich op onderzoek &amp; ontwikkeling, beheer &amp; ontsluiting en vertegenwoordiging. De andere ondersteuningsfuncties worden in mindere mate opgepakt.</p>
<p>Prioriteiten die door het veld in de sessie zijn benoemd liggen in onderzoek &amp; ontwikkeling en informatievoorziening en vertegenwoordiging. Daaruit lijkt dus dat de leemte tussen uitvoering en behoefte bij Informatievoorziening het grootst is. Zeer opvallend is dat het veld geen prioriteit heeft toegekend aan beheer &amp; ontsluiting, terwijl dit een kerntaak is van EYE. Mogelijk hechten de spelers die wij gesproken hebben geen waarde hieraan, maar veel waarschijnlijker vinden ze deze functie een vanzelfsprekendheid voor deze sector.</p>
<h3>16.6 Prioritering Creatieve Industrie</h3>
<img src="img/16_6_figuur_1.jpg" alt="">
<p>De focus van de huidige ondersteuning binnen de Creatieve Industrie ligt voor een groot deel in onderzoek &amp; ontwikkeling, vertegenwoordiging en netwerkactivering. Voorts speelt de functie beheer &amp; ontsluiting een rol in de huidige ondersteuning.</p>
<p>Het veld hecht veel waarde aan de functie netwerkactivering, die op dit moment al goed belegd is bij de ondersteunende instellingen. Echter, het veld vindt dat de vertegenwoordiging van de sector nog veel sterker kan dan nu wordt gedaan. In de sessie is ook duidelijk naar voren gekomen dat door het veld de echte vertegenwoordiging van de sector wordt gemist. De functie van informatievoorziening is, anders dan in de meeste andere sectoren, voor het veld minder belangrijk.</p>
<h3>16.7 Prioritering Letteren &amp; Bibliotheken</h3>
<img src="img/16_7_figuur_1.jpg" alt="">
<p>In de huidige situatie ervaart het veld op alle functies wel enige mate van steun, maar het veld geeft een duidelijk signaal dat meer activiteit op bepaalde functies nodig is om beweging in de sector te cre&euml;ren. De belangrijkste functie daarin is beleidsondersteuning, waarbij het gaat om visievorming - in het bijzonder die op literatuur. De tweede prioriteit gaat uit naar meer innovatie en ontwikkeling. Daarna volgt vertegenwoordiging, waar nu op dat vlak sprake is van versnippering en daarmee snijverlies. Geconcludeerd kan dus worden dat de aandacht vooral moet gaan naar visie en vernieuwing en dat op een meer gezamenlijke manier. Andere functies, zoals netwerkactivering en deskundigheidsbevordering hebben voorlopig minder aandacht nodig als keuzes gemaakt moeten worden.</p>
<h3>16.8 Prioritering Bovensectoraal Beleid</h3>
<img src="img/16_8_figuur_1.jpg" alt="">
<p>De prioritering voor Bovensectoraal Beleid is gebaseerd op een inventarisatie van de Boekmanstichting ten behoeve van het Activiteitenplan 2017-2020, uitgaande van de vijf functies die de Boekmanstichting voor zichzelf onderscheiden heeft, zoals beschreven in het hoofdstuk over de bovensectorale onderwerpen, en die grotendeels overeenkomen met een deel van de ondersteuningsfuncties. Zichtbaar is dat de functies die bij een kenniscentrum passen het hoogst scoren, niet alleen in de huidige taakopvatting maar ook in de prioritering. Dat geldt dus voor informatievoorziening, netwerkactivering en onderzoek &amp; ontwikkeling. Ook valt op dat deze in prioritering hoger scoren dan in huidige uitvoering door de Boekmanstichting, wat uiteraard door de methodiek van scoren komt, maar toch ook een indicatie is van de geringe omvang van de Boekmanstichting. Er spreekt behoefte uit om taken intensiever te kunnen uitvoeren.</p>
<h3>16.9 Prioritering Bovensectoraal Digitalisering</h3>
<img src="img/16_9_figuur_1.jpg" alt="">
<p>De functies van DEN richten zich in grote mate op onderzoek &amp; ontwikkeling en ondersteuning bij beheer &amp; ontsluiting. Ook de taken informatievoorziening, deskundigheidsbevordering en netwerkactivering hebben een plek bij DEN.</p>
<p>Vanuit het veld is een sterkere behoefte aan informatievoorziening en deskundigheidsbevordering, maar aan de ondersteuning bij beheer &amp; ontsluiting en netwerkactivering wordt voldaan.</p>
<h3>16.10 Prioritering Bovensectoraal Ondernemerschap</h3>
<img src="img/16_10_figuur_1.jpg" alt="">
<p>De ondersteuning op het gebied van Ondernemerschap die wordt vervuld door Cultuur+Ondernemen (C+O) bevindt zich in de hoek van de deskundigheidsbevordering, informatievoorziening en onderzoek &amp; ontwikkeling. C+O heeft in mindere mate een taak in netwerkactivering, beleidsondersteuning, vertegenwoordiging en geen taak in beheer &amp; ontsluiting. Verder verricht C+O veel dienstverlening voor diverse opdrachtgevers, mede met financiering van het ministerie, en daarin wijkt C+O sterk af van de andere ondersteunende instellingen.</p>
<p>De prioritering van het veld in de taken komt grotendeels overeen met wat C+O op dit moment doet. Uit deze analyse blijkt dat het veld de bijzondere positie van C+O in het palet van ondersteunende instellingen op waarde schat. Deskundigheidsbevordering wordt door veel meer partijen verricht, deels ook met financiering van het ministerie van OCW. Wel is het programma Ondernemerschap Cultuur eindig, waarmee de hoge prioriteit mogelijk tot een knelpunt leidt.</p>
<h3>16.11 Prioritering Bovensectoraal Internationalisering</h3>
<img src="img/16_11_figuur_1.jpg" alt="">
<p>Bovenstaand beeld laat zien dat het veld behoefte heeft aan vergroting van de inzet op alle functies ten aanzien van internationalisering. Daar springen informatievoorziening en netwerkactivering bovenuit: deze hebben allebei betrekking op praktische ondersteuning om internationaal aan de slag te kunnen als culturele instelling. Vertegenwoordiging is ook een functie waar het veld aan hecht: het gaat dan vooral om internationale promotie en eenduidige vertegenwoordiging van de Nederlandse culturele sector. De sector wil met andere woorden meer op de kaart worden gezet en handvatten krijgen om zichzelf internationaal te kunnen manifesteren. Pas daarna volgen andere ondersteunende functies zoals (overigens gewaardeerd) onderzoek waarin de internationalisering van de sector in kaart wordt gebracht. Beheer &amp; ontsluiting en deskundigheidsbevordering ziet men als functies die niet bovensectoraal belegd hoeven te worden, maar in de sector plaats moeten vinden, zoals nu ook de huidige praktijk is.</p>
<h3>16.12 Prioritering Bovensectoraal Cultuureducatie &amp; Cultuurparticipatie</h3>
<img src="img/16_12_figuur_1.jpg" alt="">
<p>Voor de taakopvatting is gekeken naar opdrachten die het LKCA voor zichzelf heeft benoemd in het Activiteitenplan 2017-2018. Conclusies uit de vergelijking met de prioriteiten uit het veld zijn dat met name aan toekomstgericht onderzoek een grote behoefte is en dat vertegenwoordiging een hogere prioriteit krijgt dan nu uit de taakopvatting van LKCA overkomt. Deskundigheidsbevordering maakt een groot deel uit van het werk van het LKCA, en het FCP draagt financieel ook bij aan deskundigheidsbevordering, bijvoorbeeld via het programma Cultuureducatie met Kwaliteit, maar de aanwezigen in de sessie gaven hier een lage prioriteit aan. Dit kan te maken hebben met onbekendheid met de verschillende activiteiten maar ook met een relatief lagere behoefte vanuit het veld.</p>'
            ],
            [
            	'title' => 'Slotbeschouwing',
            	'body' => '<h2>17. Slotbeschouwing</h2>
<p>In deze slotbeschouwing geven wij onze bevindingen weer die dit onderzoek naar de ondersteuningsstructuur voor de cultuursector heeft opgeleverd. Aan de hand van vijf stellingen schetsen wij de observaties die wij hebben gedaan en de verwachtingen die leven in het veld en bij de ondersteunende instellingen om te komen tot een slagvaardige en effectieve ondersteuningsstructuur die nog meer toegevoegde waarde biedt voor de Nederlandse cultuursector.</p>
<p><em>A. De kennisfunctie is wankel</em></p>
<p>Er is onvoldoende informatie beschikbaar en vindbaar om de sector goed te faciliteren bij het inspelen op ontwikkelingen die zich voordoen in de eigen omgeving en in de sector. Er wordt wel veel informatie verzameld en onderzoek gedaan, maar er mist een duidelijke onderzoeksagenda voor de sector als geheel, die eenduidigheid en ook continu&iuml;teit biedt. Bovendien zijn de deskundigheid en gelegenheid tot het duiden van de relevante informatie te beperkt. Dat wordt onder andere veroorzaakt door de grote diversiteit aan onderwerpen en cijfers. Maar belangrijker voor de ondersteuningsstructuur is dat de instellingen die kennisfuncties specifiek voor de cultuursector en deelsectoren daarbinnen vervullen, klein en kwetsbaar zijn. Grotere generieke kennisorganisaties zoals planbureaus zijn daarentegen onvoldoende betrokken bij ontwikkelingen in de cultuursector, die voor hen relatief van beperkt belang is. Het bundelen van de verspreide kennisfuncties en mogelijk ook andere bovensectorale ondersteuningsfuncties in of bij een grotere kennisorganisatie is te overwegen.</p>
<p><em>B. Collectiebeheer en digitalisering zijn willekeurig</em></p>
<p>De verschillen tussen de wijze waarop met collecties in de diverse deelsectoren wordt omgegaan zijn enorm. Dat is in de eerste plaats afhankelijk van de ter beschikking gestelde middelen per sector, die weer afhangen van het feit of het om rijkscollecties gaat of niet. Een aantal collecties raakt verweesd, bij gebrek aan middelen en specifieke aandacht. Andere collecties floreren daarentegen en worden ontsloten en gebruikt voor vele culturele doeleinden. In de tweede plaats speelt wetgeving een belangrijke rol. Collecties die onder de wet op het specifiek cultuurbeleid vallen, hebben te maken met een beleidshorizon gelijk aan de rijkscultuurnotaperiode. Collecties die onder de Erfgoedwet en de Bibliotheekwet vallen, zijn langjarig zeker gesteld. Ook de digitalisering van collecties wisselt sterk. De expertise is beschikbaar, maar de middelen dwingen om keuzes te maken die niet altijd goed te verklaren zijn vanuit erfgoedperspectief. Visie, beleid en uitvoering rond collecties over de gehele cultuursector heen moeten worden versterkt, met hoge prioriteit.</p>
<p><em>C. De cultuursector worstelt met autoriteit</em></p>
<p>Autoriteit is in vrijgevochten culturele en creatieve sectoren niet vanzelfsprekend aanwezig, maar wordt wel door een aantal partijen in het veld gemist. Een aantal ondersteuningsfuncties zou daar baat bij hebben, zoals vertegenwoordiging en beleidsondersteuning, maar ook netwerkactivering en deskundigheidsbevordering. Verschillende sectoren missen instituten met statuur en charisma, die als een vanzelfsprekende vertegenwoordiger van (de belangen van) het veld kunnen optreden en hun invloed kunnen doen gelden. Dat heeft te maken met de enorme diversiteit in de sector, waarbij bijvoorbeeld de grootste instellingen veel minder afhankelijk zijn van ondersteuning dan de meeste kleinere. Grote instellingen leveren in een aantal gevallen zelf expertise aan de rest van de sector en zijn daarmee invloedrijk. Andere mechanismen zoals afdwingen via wetgeving, keurmerken of toezicht en handhaving ontbreken en zijn meestal ook niet effectief in de cultuursector. Er zijn wel behoeften op dit vlak, bijvoorbeeld ten aanzien van auteursrechten en inkomensgaranties. Goede voorbeelden om aandacht te vestigen op beleidsthema&rsquo;s zijn de codes, zoals de Code Governance Cultuur, de Code Culturele Diversiteit en Fair practice, die alle als opdrachttaken in de sector zijn belegd.</p>
<p><em>D. Ondersteuning is ondergeschikt aan financiering</em></p>
<p>Het grootste deel van de cultuursector, zeker het publiek meest zichtbare deel daarvan, is sterk afhankelijk van publieke financiering aanvullend op eigen inkomsten. Dat maakt dat de diverse fondsen voor de sector belangrijke spelers zijn, die vanuit hun financieringsrol elk ook op een eigen wijze bijdragen aan de ondersteuning van de sector. De vraag komt naar voren, maar overigens slechts in beperkte mate, of het wenselijk zou zijn de financiering en ondersteuning voor de gehele of delen van de cultuursector in &eacute;&eacute;n hand te leggen, ook om onderlinge strijd te voorkomen en samen steviger te staan. Met een schuin oog wordt dan gekeken naar de sterke positie van NOC*NSF in de sport. De argumenten om hier toch niet voor te kiezen hebben vooralsnog de overhand. Voorkomen moet worden dat een machtsblok ontstaat waarvan het veld sterk afhankelijk is, dat er grote afstand met het veld ontstaat, en dat er complexe en soms tegenstrijdige belangen op gaan spelen. Ook wordt gezegd dat de aandacht voor financi&euml;le ondersteuning ten koste kan gaan van de inhoudelijke ondersteuning, een risico dat ook vaak bij cultuurbeleid van de overheden wordt gelopen.</p>
<p><em>E. De cultuursector wint aan uitstraling</em></p>
<p>We sluiten af met een positieve constatering: de trots op de Nederlandse cultuursector neemt weer toe. Maar de grote zorgen zijn nog lang niet weggenomen. Internationaal gezien staat de Nederlandse cultuursector er goed op in veel sectoren, en daar draagt de ondersteuning zeker aan bij, bijvoorbeeld op het gebied van promotie maar ook kennisuitwisseling en beleidsondersteuning. Dit kan verder worden versterkt met een collectieve internationale strategie en aanpak, waarmee de verschillende spelers inclusief de ministeries dezelfde koers gaan varen. Nationaal gezien worden de verbindingen en de daaruit resulterende samenwerkingen sterker, ook tussen de cultuursector en de creatieve industrie, waar meer ruimte is voor ondernemerschap en innovatie. Bestaande netwerken worden geactiveerd en nieuwe netwerken, vaak meer met het karakter van platforms of community&rsquo;s, ontstaan, waarbij onderlinge belangentegenstellingen worden overbrugd. Er zijn wel onduidelijkheden, wellicht zelfs grensconflicten als gevolg van wisselende belangen. Maar de spreekbuizen die zich manifesteren in de media worden sectorbreed gewaardeerd. De ondersteunende instellingen dragen daar vanuit hun onafhankelijke positie naar vermogen aan bij.</p>
'
            ],
            [
            	'title' => 'Deelnemers werksessies',
            	'body' => '<h2>18.&nbsp;Bijlage &ndash; deelnemers werksessies</h2>
<h3>Podiumkunsten</h3>
<p><em>Deelnemers aan de werksessie Podiumkunsten Muziek &ndash; vrijdag 8 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="306">
<p><strong>Instelling</strong></p>
</td>
<td width="128">
<p><strong>Aanhef</strong></p>
</td>
<td width="149">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="306">
<p>Productiehuis Rotterdam/ Grachtenfestival</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Barendregt</p>
</td>
</tr>
<tr>
<td width="306">
<p>Concertgebouworkest</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Bazen</p>
</td>
</tr>
<tr>
<td width="306">
<p>NTB</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Gerrits</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nieuw Geneco</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Gottschalk</p>
</td>
</tr>
<tr>
<td width="306">
<p>Gaudeamus</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Heuvelmans</p>
</td>
</tr>
<tr>
<td width="306">
<p>Eurosonic Noorderslag</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Houben</p>
</td>
</tr>
<tr>
<td width="306">
<p>De Staat/ Lalala Management</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Klingens</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nederlands Jazzarchief</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Kok</p>
</td>
</tr>
<tr>
<td width="306">
<p>FNV Media en Cultuur</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Kothman</p>
</td>
</tr>
<tr>
<td width="306">
<p>Classical:Next</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Nieuwenhuizen</p>
</td>
</tr>
<tr>
<td width="306">
<p>De Doelen</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Oostvogel</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nederlandse Bachvereniging</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Postema</p>
</td>
</tr>
<tr>
<td width="306">
<p>VNPF</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Schans</p>
</td>
</tr>
<tr>
<td width="306">
<p>BUMA-Cultuur</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Smidt</p>
</td>
</tr>
<tr>
<td width="306">
<p>Doornroosje</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Tax</p>
</td>
</tr>
<tr>
<td width="306">
<p>CDR/Muziekweb</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Teunissen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Muziekgezelschap Oorkaan</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Thunissen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Kunstenbond</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van den Bunder</p>
</td>
</tr>
<tr>
<td width="306">
<p>Het Balletorkest</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van Gennip</p>
</td>
</tr>
<tr>
<td width="306">
<p>Tivoli Vredenburg</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Vreeke</p>
</td>
</tr>
<tr>
<td width="306">
<p>Ministerie van OCW</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Eichberger &ndash; Zandee</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Vinkenburg</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Broeks</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van der Laan</p>
</td>
</tr>
</tbody>
</table>
<br>
<p><em>Deelnemers aan de werksessie Podiumkunsten Scenisch &ndash; maandag 11 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="306">
<p><strong>Instelling</strong></p>
</td>
<td width="128">
<p><strong>Aanhef</strong></p>
</td>
<td width="149">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="306">
<p>Frascati</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Klarenbeek</p>
</td>
</tr>
<tr>
<td width="306">
<p>Stichting Theater In Nederland</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Langenberg</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nederlandse Associatie voor Podiumkunsten (NAPK)</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Melsert</p>
</td>
</tr>
<tr>
<td width="306">
<p>Scapino Ballet</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Pals</p>
</td>
</tr>
<tr>
<td width="306">
<p>Leidse Schouwburg/Stadsgehoorzaal</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Ris</p>
</td>
</tr>
<tr>
<td width="306">
<p>Theatermaker/Theaterkrant</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van den Berg</p>
</td>
</tr>
<tr>
<td width="306">
<p>De Toneelmakerij</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van Eeghen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Theaterfestival Boulevard</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van Hulst</p>
</td>
</tr>
<tr>
<td width="306">
<p>Universiteit van Amsterdam</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van Keulen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Ministerie van OCW</p>
</td>
<td width="128">
<p>Mevrouw</p>
</td>
<td width="149">
<p>Adema</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Vinkenburg</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Broeks</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Nijenhuis</p>
</td>
</tr>
</tbody>
</table>
<h3>18.2 Beeldende Kunst</h3>
<p><em>Deelnemers aan de werksessie Beeldende Kunst &ndash; donderdag 14 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="306">
<p><strong>Instelling</strong></p>
</td>
<td width="128">
<p><strong>Aanhef</strong></p>
</td>
<td width="149">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="306">
<p>Sandberg Instituut</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Bey</p>
</td>
</tr>
<tr>
<td width="306">
<p>curator en adviseur MF</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>De Vries</p>
</td>
</tr>
<tr>
<td width="306">
<p>BAK</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Hlavajova</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nederlandse Galerie Associatie</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Hoekema</p>
</td>
</tr>
<tr>
<td width="306">
<p>Curator/kunsthistorica</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Landr&eacute;</p>
</td>
</tr>
<tr>
<td width="306">
<p>Fonds Kwadraat</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Mendelaar</p>
</td>
</tr>
<tr>
<td width="306">
<p>Kunstcriticus</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Roorda</p>
</td>
</tr>
<tr>
<td width="306">
<p>TAAK</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Tegelaers</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nest</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Ten Cate</p>
</td>
</tr>
<tr>
<td width="306">
<p>De Appel</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van der Kroef</p>
</td>
</tr>
<tr>
<td width="306">
<p>Witte de With Center for Contemporary Art</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van Overeem</p>
</td>
</tr>
<tr>
<td width="306">
<p>De Zaak Nu</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van Rosmalen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Ministerie van OCW</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Woordes - Derksen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Centrum Beeldende Kunst Zuidoost</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Zondervan</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van Giessen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Booij</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Wessels</p>
</td>
</tr>
</tbody>
</table>
<h3>18.3 Erfgoed</h3>
<p><em>Deelnemers aan de werksessie Erfgoed &ndash; dinsdag 19 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="306">
<p><strong>Instelling</strong></p>
</td>
<td width="128">
<p><strong>Aanhef</strong></p>
</td>
<td width="149">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="306">
<p>Kenniscentrum immaterieel erfgoed</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Adriaanse</p>
</td>
</tr>
<tr>
<td width="306">
<p>Universiteit van Amsterdam</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Huberts</p>
</td>
</tr>
<tr>
<td width="306">
<p>Wim Crouwel Instituut</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Huisman</p>
</td>
</tr>
<tr>
<td width="306">
<p>Bonnefantenmuseum</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Kentgens</p>
</td>
</tr>
<tr>
<td width="306">
<p>Museum Boijmans Van Beuningen</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Kisters</p>
</td>
</tr>
<tr>
<td width="306">
<p>Museumvereniging</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Kuiper</p>
</td>
</tr>
<tr>
<td width="306">
<p>Frans Hals Museum</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Swaan</p>
</td>
</tr>
<tr>
<td width="306">
<p>Fries Museum</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van der Lingen</p>
</td>
</tr>
<tr>
<td width="306">
<p>AV-Erfgoedprojecten</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van der Sluis</p>
</td>
</tr>
<tr>
<td width="306">
<p>Oude Kerk</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van Oudheusden</p>
</td>
</tr>
<tr>
<td width="306">
<p>AV-Erfgoedprojecten</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Vugts</p>
</td>
</tr>
<tr>
<td width="306">
<p>Ministerie van OCW</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Verhoogt</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van Giessen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Broeks</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Schellekens</p>
</td>
</tr>
</tbody>
</table>
<h3>18.4 Film</h3>
<p><em>Deelnemers aan de werksessie Film &ndash; vrijdag 15 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="306">
<p><strong>Instelling</strong></p>
</td>
<td width="128">
<p><strong>Aanhef</strong></p>
</td>
<td width="149">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="306">
<p>DDG</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Bothof</p>
</td>
</tr>
<tr>
<td width="306">
<p>Filmkrant</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Doense</p>
</td>
</tr>
<tr>
<td width="306">
<p>Filmcommissioner Limburg</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Franken</p>
</td>
</tr>
<tr>
<td width="306">
<p>Willem de Kooning Academie Hogeschool Rotterdam</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Laan</p>
</td>
</tr>
<tr>
<td width="306">
<p>Regisseur</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Lammers</p>
</td>
</tr>
<tr>
<td width="306">
<p>Producent</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Maltha</p>
</td>
</tr>
<tr>
<td width="306">
<p>FPN</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Pander</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nederlands Film Festival</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Remmen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Nederlandse Filmacademie</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Romer</p>
</td>
</tr>
<tr>
<td width="306">
<p>DAFF</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van den Steenhoven</p>
</td>
</tr>
<tr>
<td width="306">
<p>Movies That Matter</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van der Straaten</p>
</td>
</tr>
<tr>
<td width="306">
<p>Topkapi Films</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Van Gestel</p>
</td>
</tr>
<tr>
<td width="306">
<p>Cinekid</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Van Spaendonck</p>
</td>
</tr>
<tr>
<td width="306">
<p>Ministerie van OCW</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Zuurmond</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Vinkenburg</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Booij</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Ruijs</p>
</td>
</tr>
</tbody>
</table>
<h3>18.5 Creatieve Industrie</h3>
<p><em>Deelnemers aan de werksessie Creatieve Industrie &ndash; maandag 11 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="306">
<p><strong>Instelling</strong></p>
</td>
<td width="128">
<p><strong>Aanhef</strong></p>
</td>
<td width="149">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="306">
<p>Archis</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Breddels</p>
</td>
</tr>
<tr>
<td width="306">
<p>St. Cultuur Eindhoven</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Mlaker</p>
</td>
</tr>
<tr>
<td width="306">
<p>OMA</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Petermann</p>
</td>
</tr>
<tr>
<td width="306">
<p>Gemeente Rotterdam</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Ravenhorst</p>
</td>
</tr>
<tr>
<td width="306">
<p>Steim</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Rijken</p>
</td>
</tr>
<tr>
<td width="306">
<p>DDB/DDA</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Roefs</p>
</td>
</tr>
<tr>
<td width="306">
<p>TU Delft</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Scheurs</p>
</td>
</tr>
<tr>
<td width="306">
<p>BNA</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Schoorl</p>
</td>
</tr>
<tr>
<td width="306">
<p>DCI - Popcoalitie</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Smidt</p>
</td>
</tr>
<tr>
<td width="306">
<p>New Citizen Design</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Wormer</p>
</td>
</tr>
<tr>
<td width="306">
<p>TU Delft</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Zeinstra</p>
</td>
</tr>
<tr>
<td width="306">
<p>Ministerie van OCW</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Slot</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Wester</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>mevrouw</p>
</td>
<td width="149">
<p>Broeks</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="128">
<p>heer</p>
</td>
<td width="149">
<p>Wessels</p>
</td>
</tr>
</tbody>
</table>
<h3>18.6 Letteren &amp; Bibliotheken</h3>
<p><em>Deelnemers aan de werksessie Letteren &amp; Bibliotheken &ndash; vrijdag 8 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="306">
<p><strong>Instelling</strong></p>
</td>
<td width="123">
<p><strong>Aanhef</strong></p>
</td>
<td width="151">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="306">
<p>Sardes</p>
</td>
<td width="123">
<p>heer</p>
</td>
<td width="151">
<p>Broekhof</p>
</td>
</tr>
<tr>
<td width="306">
<p>Auteursbond</p>
</td>
<td width="123">
<p>heer</p>
</td>
<td width="151">
<p>Dohmen</p>
</td>
</tr>
<tr>
<td width="306">
<p>Auteursbond</p>
</td>
<td width="123">
<p>mevrouw</p>
</td>
<td width="151">
<p>Rijkers</p>
</td>
</tr>
<tr>
<td width="306">
<p>Auteursbond</p>
</td>
<td width="123">
<p>heer</p>
</td>
<td width="151">
<p>Thijssen</p>
</td>
</tr>
<tr>
<td width="306">
<p>SPN</p>
</td>
<td width="123">
<p>mevrouw</p>
</td>
<td width="151">
<p>Van Ham</p>
</td>
</tr>
<tr>
<td width="306">
<p>CPNB</p>
</td>
<td width="123">
<p>heer</p>
</td>
<td width="151">
<p>Van Nispen tot Sevenaer</p>
</td>
</tr>
<tr>
<td width="306">
<p>Ministerie van OCW</p>
</td>
<td width="123">
<p>heer</p>
</td>
<td width="151">
<p>Van Tongeren</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="123">
<p>heer</p>
</td>
<td width="151">
<p>Wester</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="123">
<p>mevrouw</p>
</td>
<td width="151">
<p>Booij</p>
</td>
</tr>
<tr>
<td width="306">
<p>Berenschot</p>
</td>
<td width="123">
<p>heer</p>
</td>
<td width="151">
<p>Wessels</p>
</td>
</tr>
</tbody>
</table>
<h3>18.7 Bovensectoraal Beleid</h3>
<p><em>Deelnemers aan de werksessie Bovensectoraal Beleid &ndash; vrijdag 15 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="363">
<p><strong>Instelling</strong></p>
</td>
<td width="77">
<p><strong>Aanhef</strong></p>
</td>
<td width="131">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="363">
<p>European Cultural Foundation</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Cremer</p>
</td>
</tr>
<tr>
<td width="363">
<p>SirM</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Goudriaan</p>
</td>
</tr>
<tr>
<td width="363">
<p>CBS (cultuur en toerisme)</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Heerschap</p>
</td>
</tr>
<tr>
<td width="363">
<p>Cultuur Eindhoven</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Mlaker</p>
</td>
</tr>
<tr>
<td width="363">
<p>Rabo Vastgoedgroep</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Oldenkotte Vrolijk</p>
</td>
</tr>
<tr>
<td width="363">
<p>Universiteit Antwerpen</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Schramme</p>
</td>
</tr>
<tr>
<td width="363">
<p>Prins Bernhard Cultuurfonds</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Tromp</p>
</td>
</tr>
<tr>
<td width="363">
<p>Kunsten &lsquo;92</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Versteegh</p>
</td>
</tr>
<tr>
<td width="363">
<p>Ministerie van OCW</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Van Os</p>
</td>
</tr>
<tr>
<td width="363">
<p>Berenschot</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Vinkenburg</p>
</td>
</tr>
<tr>
<td width="363">
<p>Berenschot</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Booij</p>
</td>
</tr>
<tr>
<td width="363">
<p>Berenschot</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Ruijs</p>
</td>
</tr>
</tbody>
</table>
<h3>18.8 Bovensectoraal Digitalisering</h3>
<p><em>Deelnemers aan de werksessie Bovensectoraal Digitalisering &ndash; maandag 18 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="363">
<p><strong>Instelling</strong></p>
</td>
<td width="77">
<p><strong>Aanhef</strong></p>
</td>
<td width="131">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="363">
<p>Universiteit Utrecht (hoogleraar theaterwetenschappen)</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Bleeker</p>
</td>
</tr>
<tr>
<td width="363">
<p>Holland Festival</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Bode</p>
</td>
</tr>
<tr>
<td width="363">
<p>Tresoar, Leeuwarden</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>De Vries</p>
</td>
</tr>
<tr>
<td width="363">
<p>JazzArchief</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Gompes</p>
</td>
</tr>
<tr>
<td width="363">
<p>NIOD/Netwerk Oorlogsbronnen</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Huitsing</p>
</td>
</tr>
<tr>
<td width="363">
<p>Het Filiaal</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Nieuwburg</p>
</td>
</tr>
<tr>
<td width="363">
<p>Zeeuws Museum</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Urru</p>
</td>
</tr>
<tr>
<td width="363">
<p>Gemeentearchief Ede, Barneveld en Scherpenzeel</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Van Beek</p>
</td>
</tr>
<tr>
<td width="363">
<p>Erfgoed Gelderland</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Wingens</p>
</td>
</tr>
<tr>
<td width="363">
<p>Ministerie van OCW</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Koetsveld</p>
</td>
</tr>
<tr>
<td width="363">
<p>Berenschot</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Van Giessen</p>
</td>
</tr>
<tr>
<td width="363">
<p>Berenschot</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Broeks</p>
</td>
</tr>
<tr>
<td width="363">
<p>Berenschot</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Schellekens</p>
</td>
</tr>
</tbody>
</table>
<h3>18.9 Bovensectoraal Ondernemerschap</h3>
<p><em>Deelnemers aan de werksessie Bovensectoraal Ondernemerschap &ndash; maandag 18 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="391">
<p><strong>Instelling</strong></p>
</td>
<td width="77">
<p><strong>Aanhef</strong></p>
</td>
<td width="131">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="391">
<p>Eigen bedrijf (ontwerper/leningnemer)</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Balster</p>
</td>
</tr>
<tr>
<td width="391">
<p>Kunstenbond</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>De Kiefte</p>
</td>
</tr>
<tr>
<td width="391">
<p>Amperpodia</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Menso</p>
</td>
</tr>
<tr>
<td width="391">
<p>Imagine Film Festival en Fantastisch Kinderfilm Festival</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Van der Burgt</p>
</td>
</tr>
<tr>
<td width="391">
<p>NVTC (Nederlandse Vereniging Toezicht Cultuur)</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Van der Horst</p>
</td>
</tr>
<tr>
<td width="391">
<p>BKKC</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Van Heeswijk</p>
</td>
</tr>
<tr>
<td width="391">
<p>NVTC (Nederlandse Vereniging Toezicht Cultuur)</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Van Westendorp</p>
</td>
</tr>
<tr>
<td width="391">
<p>Ministerie van OCW</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Schreiber</p>
</td>
</tr>
<tr>
<td width="391">
<p>Berenschot</p>
</td>
<td width="77">
<p>heer</p>
</td>
<td width="131">
<p>Van Giessen</p>
</td>
</tr>
<tr>
<td width="391">
<p>Berenschot</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Broeks</p>
</td>
</tr>
<tr>
<td width="391">
<p>Berenschot</p>
</td>
<td width="77">
<p>mevrouw</p>
</td>
<td width="131">
<p>Schellekens</p>
</td>
</tr>
</tbody>
</table>
<h3>18.10 Bovensectoraal Internationalisering</h3>
<p><em>Deelnemers aan de werksessie Bovensectoraal Internationalisering &ndash; dinsdag 3 oktober 2017</em></p>
<table>
<tbody>
<tr>
<td width="344">
<p><strong>Instelling</strong></p>
</td>
<td width="104">
<p><strong>Aanhef</strong></p>
</td>
<td width="143">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="344">
<p>Nationaal archief</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="143">
<p>Agema</p>
</td>
</tr>
<tr>
<td width="344">
<p>Gemeente Amsterdam</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="143">
<p>Ahmadali</p>
</td>
</tr>
<tr>
<td width="344">
<p>Amsterdams Fonds</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Birnie </p>
</td>
</tr>
<tr>
<td width="344">
<p>European Cultural Foundation</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Cremer</p>
</td>
</tr>
<tr>
<td width="344">
<p>Anne Frank Stichting</p>
</td>
<td width="104">
<p>de heer</p>
</td>
<td width="143">
<p>Dubbelman&nbsp;</p>
</td>
</tr>
<tr>
<td width="344">
<p>Rijksmuseum </p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Hijmans</p>
</td>
</tr>
<tr>
<td width="344">
<p>Eurosonic Noorderslag</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="143">
<p>Houben</p>
</td>
</tr>
<tr>
<td width="344">
<p>Arthouse LUX</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Houthoff</p>
</td>
</tr>
<tr>
<td width="344">
<p>Rijksmuseum </p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Le Coultre</p>
</td>
</tr>
<tr>
<td width="344">
<p>Hogeschool voor de Kunsten Utrecht</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Paardekooper</p>
</td>
</tr>
<tr>
<td width="344">
<p>Pieter van Huystee Film</p>
</td>
<td width="104">
<p>de heer</p>
</td>
<td width="143">
<p>Van Huystee </p>
</td>
</tr>
<tr>
<td width="344">
<p>Toneelgroep Amsterdam</p>
</td>
<td width="104">
<p>de heer</p>
</td>
<td width="143">
<p>Van Ransbeek</p>
</td>
</tr>
<tr>
<td width="344">
<p>Ministerie van OCW</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="143">
<p>Mulder</p>
</td>
</tr>
<tr>
<td width="344">
<p>Berenschot</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="143">
<p>Wester</p>
</td>
</tr>
<tr>
<td width="344">
<p>Berenschot</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Booij</p>
</td>
</tr>
<tr>
<td width="344">
<p>Berenschot</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="143">
<p>Schellekens</p>
</td>
</tr>
</tbody>
</table>
<h3>18.11 Bovensectoraal Cultuureducatie &amp; Cultuurparticipatie</h3>
<p><em>Deelnemers aan de werksessie Bovensectoraal Cultuureducatie &amp; Cultuurparticipatie &ndash; maandag 25 september 2017</em></p>
<table>
<tbody>
<tr>
<td width="344">
<p><strong>Instelling</strong></p>
</td>
<td width="104">
<p><strong>Aanhef</strong></p>
</td>
<td width="131">
<p><strong>Naam</strong></p>
</td>
</tr>
<tr>
<td width="344">
<p>ZIMIHC</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Alferink</p>
</td>
</tr>
<tr>
<td width="344">
<p>VONKC</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Bakens</p>
</td>
</tr>
<tr>
<td width="344">
<p>Mocca</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Brandon</p>
</td>
</tr>
<tr>
<td width="344">
<p>Nederlandse Toonkunstenaarsbond</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Gerrits</p>
</td>
</tr>
<tr>
<td width="344">
<p>Kunstgebouw</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Gersie</p>
</td>
</tr>
<tr>
<td width="344">
<p>Jeugdtheaterhuis Zuid</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Ham</p>
</td>
</tr>
<tr>
<td width="344">
<p>Fanfarecoach</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Hazeleger</p>
</td>
</tr>
<tr>
<td width="344">
<p>Provincie Flevoland</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Joosten</p>
</td>
</tr>
<tr>
<td width="344">
<p>Cool Heerhugowaard/Urban Coalition</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Le Bouille</p>
</td>
</tr>
<tr>
<td width="344">
<p>Symphonic Cinema</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Lehnhausen</p>
</td>
</tr>
<tr>
<td width="344">
<p>Akoesticum</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Lenselink</p>
</td>
</tr>
<tr>
<td width="344">
<p>Kunstenbond</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Peltenburg</p>
</td>
</tr>
<tr>
<td width="344">
<p>Kunstbende</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Rietveld</p>
</td>
</tr>
<tr>
<td width="344">
<p>Night of the Nerds Eindhoven en Popsport</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Schmitz</p>
</td>
</tr>
<tr>
<td width="344">
<p>ZIMIHC</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Spanjers</p>
</td>
</tr>
<tr>
<td width="344">
<p>Stichting PopSport</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Stravens</p>
</td>
</tr>
<tr>
<td width="344">
<p>All Art professionals</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Van Bentvelsen</p>
</td>
</tr>
<tr>
<td width="344">
<p>Kunst Centraal</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Van der Hulst</p>
</td>
</tr>
<tr>
<td width="344">
<p>Kunst en Cultuur Drenthe</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Van der Kaaij</p>
</td>
</tr>
<tr>
<td width="344">
<p>Cultuurmij Oost Arnhem</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Verberne</p>
</td>
</tr>
<tr>
<td width="344">
<p>Ministerie van OCW</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Vingerhoets</p>
</td>
</tr>
<tr>
<td width="344">
<p>Berenschot</p>
</td>
<td width="104">
<p>heer</p>
</td>
<td width="131">
<p>Vinkenburg</p>
</td>
</tr>
<tr>
<td width="344">
<p>Berenschot</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Booij</p>
</td>
</tr>
<tr>
<td width="344">
<p>Berenschot</p>
</td>
<td width="104">
<p>mevrouw</p>
</td>
<td width="131">
<p>Schellekens</p>
</td>
</tr>
</tbody>
</table>
'
            ],

        ];

        DB::table('specials')->insert($specials);
    }
}
