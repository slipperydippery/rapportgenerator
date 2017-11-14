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
<table class="tabletoreplace">
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
<table width="104%" class="tabletoreplace">
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
<table width="0" class="tabletoreplace">
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
            	'title' => 'Toelichting op sectoren en bovensectorale onderwerpen',
            	'body' => '<p>Het onderzoek heeft in eerste plaats betrekking op de ondersteunende instellingen met structurele dan wel incidentele rijksfinanciering zoals beschreven de Wet op het specifiek cultuurbeleid (Wsc). Hierbij heeft het ministerie van OCW ons meegegeven dat het onderzoek betrekking moet hebben op de volgende sectoren:</p>
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
<p>Hierna lichten wij de sectoren, bovensectorale onderwerpen en de bijbehorende ondersteunende instellingen kort, en in sommige gevallen uitgebreider toe. In aparte hoofdstukken volgt een uitgebreidere beschrijving in functies per sector of bovensectoraal onderwerp.</p>'
            ],
            [
            	'title' => 'Functies in de ondersteuningsstructuur',
            	'body' => '<p>In dit hoofdstuk wordt de ondersteuning van de cultuursector geschetst aan de hand van zeven functies. Deze functies zijn ruim gedefinieerd en omvatten een breed palet aan taken en activiteiten. Waar relevant zijn raakvlakken met andere functies beschreven. Het onderscheid in deze functies helpt om de huidige ondersteuningsstructuur goed te schetsen en de toekomstige ondersteuningsstructuur vorm te geven, zonder dat de discussie direct gaat over de instellingen die de ondersteuning leveren.</p>
<p>Onderstaande functies betreffen in principe de besteltaken die tot de overheidsgefinancierde ondersteuningsstructuur behoren (zie ook de inleiding). In bepaalde gevallen zijn de raakvlakken benoemd met branchetaken, die door andere partijen uit de branche zelf (kunnen) worden verricht. Bij enkele functies kan er sprake zijn van opdrachttaken. Ten slotte is van belang op te merken dat het bij de hier beschreven ondersteuning niet gaat om de financiering van initiatieven of instellingen. Het gaat ook niet om het vormgeven van financi&euml;le regelingen, zoals de primaire taak is van de cultuurfondsen. Cultuurfondsen kunnen daarnaast wel ondersteunende functies vervullen, en maken in die rol deel uit van dit onderzoek.</p>'
            ],
            [
            	'title' => 'Beschouwing per functie',
            	'body' => '<p>In dit qua opzet weer wat afwijkend hoofdstuk beschouwen we, alles overziend, de verschillende functies. We presenteren de inzichten en wijzen richtingen aan waarin verbeteringen denkbaar zijn. Ook vermelden we het hier als er uit andere domeinen en sectoren dan de cultuursector goede voorbeelden zijn waar de cultuursector van kan leren. In het hoofdstuk Slotbeschouwing reflecteren we op het geheel van ondersteuningsfuncties voor de sectoren en bovensectorale onderwerpen.</p> '
            ],
            [
            	'title' => 'Prioritering van functies',
            	'body' => '<p>In dit hoofdstuk presenteren we onderzoeksbevindingen aan de hand van het Positioneringsmodel van Berenschot voor branche- en kennisinstituten. Dit positioneringsmodel kent 7 assen waarop de ondersteuningsfuncties worden weergegeven. De ondersteunende instellingen zijn in een aantal van deze functies en daarmee op elk van de assen in meer of mindere mate actief. Het huidige profiel van dat instituut wordt weergegeven door de mate waarin het instituut op dit moment invulling geeft aan deze functie (hoe meer, hoe hoger op de as). In het model worden naast het huidige beeld ook de door spelers in het veld toegekende prioriteiten weergegeven. Het positioneringsmodel is gebruikt in dit onderzoek voor elke deelsector en bovensectoraal onderwerp</p>
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
<p>Verder wordt zichtbaar dat sectoren of onderwerpen met een kleine ondersteunende infrastructuur toch in veel functies enige taakinvulling hebben, en de instellingen daarmee dus eerder enige generalistische ondersteuning leveren dan sterk gespecialiseerde.</p> '
            ],
            [
            	'title' => 'Slotbeschouwing',
            	'body' => '<p>In deze slotbeschouwing geven wij onze bevindingen weer die dit onderzoek naar de ondersteuningsstructuur voor de cultuursector heeft opgeleverd. Aan de hand van vijf stellingen schetsen wij de observaties die wij hebben gedaan en de verwachtingen die leven in het veld en bij de ondersteunende instellingen om te komen tot een slagvaardige en effectieve ondersteuningsstructuur die nog meer toegevoegde waarde biedt voor de Nederlandse cultuursector.</p>
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
            	'title' => 'Bijlage &ndash; deelnemers werksessies',
            	'body' => ''
            ],

        ];

        DB::table('specials')->insert($specials);
    }
}
