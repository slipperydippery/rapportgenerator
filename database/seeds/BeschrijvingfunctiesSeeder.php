<?php

use Illuminate\Database\Seeder;

class BeschrijvingfunctiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beschrijvingfuncties')->delete();

        $beschrijvingfuncties = [
            [
                'title' => 'Informatievoorziening',
                'body' => '<p>Informatievoorziening betreft het verzamelen en verspreiden van alle relevante informatie, ook wel kennis, die bijdraagt aan het goed functioneren van een sector. Door informatie over specifieke thema&rsquo;s beschikbaar te stellen en door te verwijzen naar gerelateerde bronnen elders kunnen externe kennisvragers, die deze kennis voor praktische doeleinden behoeven, actief, snel en effectief de betreffende informatie vinden. </p>

<p>Het betreft zowel actuele informatie over (eigen) onderzoek en nieuws, als historische informatie en documentatie. De informatie kan uit vele bronnen komen en wordt actief verzameld. De informatie wordt verspreid via diverse kanalen: op schrift, mondeling en online. Inhoudelijk gezien wordt de informatie gedeeld in de vorm van artikelen, publicaties, tijdschriften en websites. Overzichten worden gegeven via catalogi, websites, databases en dergelijke. Tot deze functie behoort de borging van kennis en informatie, oftewel het zeker stellen dat gegevens beschikbaar blijven.</p>

<p>Toegevoegde waarde van informatievoorziening komt tot uiting in de duiding, te weten het analyseren, verklaren en synthetiseren van kennis en informatie. In een wereld waarin informatie in overdadige mate beschikbaar is, neemt de behoefte aan duiding van informatie toe. Duiding waarborgt dat trends en ontwikkelingen adequaat en tijdig zijn te identificeren, te analyseren en te vertalen naar bruikbare informatie voor beleid en praktijk van culturele instellingen en overheden. </p>',
                'functie_id' => '1'
            ],
            [
                'title' => 'Onderzoek &amp; Ontwikkeling',
                'body' => '<p>Onderzoek &amp; Ontwikkeling (research &amp; development) omvat het uitvoeren en laten uitvoeren van alle mogelijke vormen van onderzoek en analyses. Het kan zowel kwalitatief, beschrijvend en toetsend onderzoek, als kwantitatief, metend en monitorend onderzoek zijn. Het gaat daarbij om evalueren (verleden), inventariseren (heden) en verkennen (toekomst). Er zijn vele verschijningsvormen van onderzoek in de cultuursector, zoals statistiek, monitoring, evaluaties, visitaties en allerlei soorten vergelijkend onderzoek zoals benchmarks. Ook wordt beleidsmatig onderzoek verricht naar doeltreffendheid en doelmatigheid van beleid. </p>

<p>Met ontwikkeling wordt hier gedoeld op onderzoek gericht op vernieuwing en versterking van de (organisatie van de) sector. Het gaat echter niet om artistiek-inhoudelijke ontwikkeling. Deze is niet belegd binnen de landelijke ondersteuningsstructuur, maar bij ontwikkelinstellingen, voor zover bestaand. In het geval van ondersteuning van de cultuursector geldt dat het onderzoek gericht op ontwikkeling niet primair gedreven is door nieuwsgierigheid, maar door concrete vraagstukken en behoeften van het veld. Kennisvermeerdering alleen is dan ook niet het doel van het onderzoek; de resultaten van het onder&not;zoek worden steeds vertaald naar wat relevant is voor belanghebbenden binnen overheden, bedrijfsleven en maat&not;schappij.  </p>',
                'functie_id' => '2'
            ],
            [
                'title' => 'Beheer &amp; Ontsluiting',
                'body' => '<p>Met Beheer &amp; Ontsluiting worden de collectiefunctie en de erfgoedfunctie bedoeld. Het gaat hier om de zorg voor en toegankelijkheid van erfgoed, collecties en archieven die complete deelsectoren van de cultuur betreffen. Het is een brede taak, die naast de zorg voor beheer en behoud, ook de verantwoordelijkheid voor ontsluiting en beschikbaarstelling betreft, al dan niet digitaal. Bovendien behoort verzameling, maar ook ontzameling, en de verrijking met nieuwe collecties tot deze functie. De instellingen die deze functies vervullen, zouden het overzicht moeten hebben over het relevante erfgoed voor de betreffende sector en bewaken dat dit goed wordt beheerd, inclusief het delen van kennis over beheer en ontsluiting. Zij hoeven namelijk niet, of zijn niet in staat om, het daadwerkelijke beheer in alle gevallen zelf uit te voeren. </p>

<p>De verschillen tussen de collecties en het overig erfgoed van de diverse deelsectoren in cultuur zijn groot, en dat maakt dat de uitvoering van de erfgoedtaken sinds jaar en dag sterk verschilt per deelsector. Dat heeft onder meer te maken met het gegeven of het rijkscollecties betreffen en daarmee rijksverantwoordelijkheid is. Ook varieert de betekenis van de collecties, bijvoorbeeld in termen van de historische, museale en presentatiewaarde voor een groot publiek, naast de professionele betekenis en het collectieve geheugen van een sector. </p>
',
                'functie_id' => '3'
            ],
            [
                'title' => 'Vertegenwoordiging',
                'body' => '<p>De functie Vertegenwoordiging valt in twee delen uiteen. In de eerste plaats wordt gedoeld op de representatie en zichtbaarheid: het vormen van een aanspreekpunt en wellicht het vervullen van de rol van boegbeeld namens de (deel)sector. In de tweede plaats gaat het om promotie van de gehele sector, vaak internationaal maar ook nationaal of regionaal in relatie tot andere culturele sectoren. In beide perspectieven gaat het om collectieve en objectieve belangenbehartiging. Hier ligt uiteraard de subjectieve en zelfs de individuele belangenbehartiging op de loer, maar die wordt beschouwd als de verantwoordelijkheid van (partijen in) de branche zelf.</p>

<p>Een relevant punt ten aanzien van de vertegenwoordiging is de positie van de vertegenwoordiger. In veel gevallen ligt het mandaat niet helder vast, juist vanwege de veelheid aan belangen. Daarnaast speelt de mate van autoriteit een rol. In andere sectoren dan kunst en cultuur komt die autoriteit in bepaalde omstandigheden tot zijn recht in de rol van toezichthouder, inclusief die van handhaver. Daar lijkt in de cultuursector geen sprake van. Wel is er een bijzondere positie van de fondsen als financiers, die door het stellen en toetsen van criteria, oordelen vormen over spelers binnen culturele deelsectoren. De fondsen kunnen ook de sector vertegenwoordigen in de zin van het agenderen van issues en het bieden van platform. </p>',
                'functie_id' => '4'
            ],
            [
                'title' => 'Netwerkactivering',
                'body' => '<p>In deze functie staat het activeren, vormen, ondersteunen van en toegang verlenen tot netwerken centraal. Daarmee wordt de ontmoeting gefaciliteerd waardoor partijen elkaar binnen en buiten de sector leren kennen, kennis en informatie kunnen uitwisselen en eventueel tot nadere samenwerking kunnen komen. Netwerken, formeel en informeel, kunnen ook bestaan uit kenniskringen, community&rsquo;s en platforms, rond diverse thema&rsquo;s. Er is ook een inhoudelijke en politiek-bestuurlijke kant aan deze netwerken. Hier komen namelijk beleidsmatige kwesties aan de orde in debat en reflectie binnen en buiten de sector. </p>

<p>De taken in de ondersteuning bestaan bij netwerkactivering onder meer uit inhoudelijke en praktische afstemming en co&ouml;rdinatie tussen de diverse partijen in en om de sectoren. Het gaat dan ook om de agendering, organisatie en verslaglegging van bijeenkomsten, conferenties, studiedagen en lezingen. Informatievoorziening en kennisdeling namens deze netwerken vloeien daaruit voort.  </p>',
                'functie_id' => '5'
            ],
            [
                'title' => 'Beleidsondersteuning',
                'body' => '<p>Beleidsondersteuning is een brede inhoudelijke functie. Hier wordt gedoeld op alle vormen van (overheids)beleid, van internationaal tot lokaal niveau. Het betreft het aanjagen en ondersteunen van beleidsvorming, onder meer door agendering en signalering van ontwikkelingen waar beleid op kan worden gevormd, evenals door onderbouwing van beleidsintenties. Het gaat vervolgens ook om het ondersteunen van de vertaling en concretisering van beleid naar praktijk. Een vorm daarvan is het ontwikkelen van handreikingen om beleidsmaatregelen in praktijk vorm te geven en uit te kunnen voeren. Het kan ten slotte ook gaan om het uitvoeren van de beleidsmaatregelen zelf in de vorm van regelingen en programma&rsquo;s. </p>

<p>Er zijn vormen van ondersteuning die niet tot het reguliere palet van functies in de ondersteuningsstructuur vallen, maar die om verschillende redenen op enig moment kunnen worden aangeboden. Dienstverlening voor derden tegen betaling is buiten beschouwing gelaten voor de ondersteuningsstructuur. Wel vallen hieronder de opdrachttaken die de overheden willen uitbesteden. Opdrachttaken hangen samen met de verwezenlijking van specifieke beleidsthema&rsquo;s en beleidsdoelen van de overheden of de sector. Opdrachttaken zijn eindig en kennen daarom een tijdelijke ondersteuningsduur. Voorbeelden zijn het ontwikkelen en implementeren van codes rond bepaalde thema&rsquo;s als diversiteit, governance en fair practice. Dergelijke taken kunnen worden als opdrachttaken of onder andere condities worden ondergebracht bij ondersteunende instellingen maar ook bij andere partijen, onder meer brancheverenigingen en commerci&euml;le onderzoeks- en adviesbureaus. Aandachtspunt bij opdrachttaken en dienstverlening voor derden is dat opdrachten worden uitbesteed dan wel aanbesteed aan gesubsidieerde, bekostigde of commercieel opererende partijen. Het opdrachtgeverschap van de overheden kent dan ook diverse vormen.</p>

<p>De ondersteuning betreft, zoals eerder gesteld, niet de financiering van initiatieven of instellingen, en ook niet het vormgeven en uitvoeren van financi&euml;le regelingen. Daar waar dergelijke regelingen gepaard gaan met inhoudelijke ondersteuning kan dit wel in deze of andere functies een plek krijgen. In sommige andere sectoren zijn de beleidsondersteuning en uitvoering wel degelijk gekoppeld aan financiering. Voorbeelden hiervan zijn NOC*NSF in de sport en NWO in de wetenschap. Er zijn argumenten voor en tegen het onderbrengen van ondersteuning en financiering bij een enkele partij, anders dan de overheid zelf: enerzijds cre&euml;ert het daadkracht (beleid krijgt direct uitvoering), anderzijds ontstaat een groot, mogelijk monopolistisch machtsblok.  </p>',
                'functie_id' => '6'
            ],
            [
                'title' => 'G. Deskundigheidsbevordering',
                'body' => '<p>Deskundigheidsbevordering betreft het in stand houden en vergroten van de kennis en competenties van professionals in en rond de sector, en in bepaalde gevallen ook vrijwilligers en anderen die actief betrokken zijn bij kunst en cultuur. Het betreft vakgerichte ontwikkeling, waarbij in het geval van de ondersteuningsstructuur echter niet wordt gemikt op de artistiek-inhoudelijke talentontwikkeling. Dergelijke talentontwikkeling is belegd bij instellingen in de sector zelf en in de keten van cultuureducatieve opleidingen en kunstzinnige vorming tot en met het kunstvakonderwijs. De artistiek-inhoudelijke ondersteuning van (beginnende) kunstenaars in hun beroepspraktijk was en is deels nog belegd bij ontwikkelinstellingen in de beeldende kunst en de creatieve industrie en bij productiehuizen in de podiumkunsten, maar niet in de hier bedoelde ondersteuningsstructuur. </p>

<p>Het gaat om opleidingen, training en coaching in beleidsmatige, bedrijfsmatige en organisatorische vakkennis, waaronder ook cultureel ondernemerschap en leiderschap. Vaak heeft dit de vorm van <em>train de trainer</em> en andere vormen die professionals helpen om de opgedane deskundigheid weer breder te delen. Regelingen zoals Cultuureducatie met Kwaliteit bevatten deskundigheidsbevordering voor professionals ten aanzien van specialistische en didactische competenties. Het programma Ondernemerschap Cultuur is ook een voorbeeld van een programma gericht op deskundigheidsbevordering, onder meer in leiderschap en fondsenwerving de cultuursector.  </p>',
                'functie_id' => '7'
            ],

        ];

        DB::table('beschrijvingfuncties')->insert($beschrijvingfuncties);
    }
}
