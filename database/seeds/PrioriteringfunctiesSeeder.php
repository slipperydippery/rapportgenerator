<?php

use Illuminate\Database\Seeder;

class PrioriteringfunctiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prioriteringfuncties')->delete();

        $prioriteringfuncties = [
            [
                'title' => 'Prioritering Podiumkunsten',
                'body' => '<p>Omdat voor deze brede sector twee werksessies zijn georganiseerd, &eacute;&eacute;n over muziek en &eacute;&eacute;n over scenisch (theater, dans et cetera) zijn er twee inventarisaties gehouden, die we beide tonen. De prioriteiten zijn dan ook anders gesteld, terwijl de (geringe) ondersteuning van de sector gelijk is.</p>
<p><em>Muziek</em></p>
<img src="img/16_2_figuur_1.jpg" alt="">
<p><em>Scenisch</em></p>
<img src="img/16_2_figuur_2.jpg" alt="">
<p>In de podiumkunsten worden, zowel wat betreft muziek als scenisch, weinig ondersteuningsfuncties uitgevoerd als taak van de ondersteunende instelling, bij gebrek daaraan. Het Fonds Podiumkunsten heeft een kleine taak in onderzoek &amp; ontwikkeling en in vertegenwoordiging, en een redelijke taak in netwerkactivering. Er zijn op dit moment middelen beschikbaar voor beheer &amp; ontsluiting waardoor ondersteuning door de Universiteit van Amsterdam nog een tot enkele jaren gefinancierd is.</p>
<p>Grootste verschillen in de prioriteit en het ontbreken van ondersteuning is te zien in informatievoorziening, onderzoek &amp; ontwikkeling en vertegenwoordiging. De functie beheer &amp; ontsluiting heeft in beide werksessies een middelhoge prioriteit gekregen.</p>',
                'sector_id' => '1'
            ],
            [
                'title' => 'Prioritering Beeldende Kunst',
                'body' => '<img src="img/16_3_figuur_1.jpg" alt="">
<p>Bovenstaand beeld toont dat de vertegenwoordigende functie op waarde wordt geschat en naar behoefte van het veld wordt vervuld. Datzelfde geldt voor de geboden ondersteuning als het gaat om deskundigheidsbevordering. Men heeft wel behoefte aan meer onderzoek en ontwikkeling in de sector en geeft ook aan beheer en ontsluiting belangrijk te vinden. Opvallend genoeg heeft die laatste functie in de huidige praktijk weinig urgentie. Het zou kunnen dat men de informatie op orde acht en daarom minder inzet nodig vindt. De mate waarin netwerken op dit moment worden geactiveerd sluit wel weer aan bij de behoefte van het veld.</p>',
                'sector_id' => '2'
            ],
            [
                'title' => 'Prioritering Erfgoed',
                'body' => '<img src="img/16_4_figuur_1.jpg" alt="">
<p>De prioriteit die het veld aangeeft omtrent de zeven functies komt redelijk goed overeen met wat de rijksondersteuning binnen de erfgoedsector (RKD en Mondriaan Fonds) op dit moment aan taken heeft. De ondersteunende functie van het RKD richt zich sterk op beheer &amp; ontsluiting en op onderzoek &amp; ontwikkeling. De prioritering van het veld richt zich hier ook sterk op. Ten opzichte van de huidige ondersteuning zit de behoefte van het veld nog iets sterker op de netwerkactivering en iets minder op de deskundigheidsbevordering.</p>',
                'sector_id' => '3'
            ],
            [
                'title' => 'Prioritering Film',
                'body' => '<img src="img/16_5_figuur_1.jpg" alt="">
<p>De ondersteunende functies van EYE en Filmfonds samen concentreren zich op onderzoek &amp; ontwikkeling, beheer &amp; ontsluiting en vertegenwoordiging. De andere ondersteuningsfuncties worden in mindere mate opgepakt.</p>
<p>Prioriteiten die door het veld in de sessie zijn benoemd liggen in onderzoek &amp; ontwikkeling en informatievoorziening en vertegenwoordiging. Daaruit lijkt dus dat de leemte tussen uitvoering en behoefte bij Informatievoorziening het grootst is. Zeer opvallend is dat het veld geen prioriteit heeft toegekend aan beheer &amp; ontsluiting, terwijl dit een kerntaak is van EYE. Mogelijk hechten de spelers die wij gesproken hebben geen waarde hieraan, maar veel waarschijnlijker vinden ze deze functie een vanzelfsprekendheid voor deze sector.</p>',
                'sector_id' => '4'
            ],
            [
                'title' => 'Prioritering Creatieve Industrie',
                'body' => '<img src="img/16_6_figuur_1.jpg" alt="">
<p>De focus van de huidige ondersteuning binnen de Creatieve Industrie ligt voor een groot deel in onderzoek &amp; ontwikkeling, vertegenwoordiging en netwerkactivering. Voorts speelt de functie beheer &amp; ontsluiting een rol in de huidige ondersteuning.</p>
<p>Het veld hecht veel waarde aan de functie netwerkactivering, die op dit moment al goed belegd is bij de ondersteunende instellingen. Echter, het veld vindt dat de vertegenwoordiging van de sector nog veel sterker kan dan nu wordt gedaan. In de sessie is ook duidelijk naar voren gekomen dat door het veld de echte vertegenwoordiging van de sector wordt gemist. De functie van informatievoorziening is, anders dan in de meeste andere sectoren, voor het veld minder belangrijk.</p>',
                'sector_id' => '5'
            ],
            [
                'title' => 'Prioritering Letteren &amp; Bibliotheken',
                'body' => '<img src="img/16_7_figuur_1.jpg" alt="">
<p>In de huidige situatie ervaart het veld op alle functies wel enige mate van steun, maar het veld geeft een duidelijk signaal dat meer activiteit op bepaalde functies nodig is om beweging in de sector te cre&euml;ren. De belangrijkste functie daarin is beleidsondersteuning, waarbij het gaat om visievorming - in het bijzonder die op literatuur. De tweede prioriteit gaat uit naar meer innovatie en ontwikkeling. Daarna volgt vertegenwoordiging, waar nu op dat vlak sprake is van versnippering en daarmee snijverlies. Geconcludeerd kan dus worden dat de aandacht vooral moet gaan naar visie en vernieuwing en dat op een meer gezamenlijke manier. Andere functies, zoals netwerkactivering en deskundigheidsbevordering hebben voorlopig minder aandacht nodig als keuzes gemaakt moeten worden.</p>',
                'sector_id' => '6'
            ],
            [
                'title' => 'Prioritering Bovensectoraal Beleid',
                'body' => '<img src="img/16_8_figuur_1.jpg" alt="">
<p>De prioritering voor Bovensectoraal Beleid is gebaseerd op een inventarisatie van de Boekmanstichting ten behoeve van het Activiteitenplan 2017-2020, uitgaande van de vijf functies die de Boekmanstichting voor zichzelf onderscheiden heeft, zoals beschreven in het hoofdstuk over de bovensectorale onderwerpen, en die grotendeels overeenkomen met een deel van de ondersteuningsfuncties. Zichtbaar is dat de functies die bij een kenniscentrum passen het hoogst scoren, niet alleen in de huidige taakopvatting maar ook in de prioritering. Dat geldt dus voor informatievoorziening, netwerkactivering en onderzoek &amp; ontwikkeling. Ook valt op dat deze in prioritering hoger scoren dan in huidige uitvoering door de Boekmanstichting, wat uiteraard door de methodiek van scoren komt, maar toch ook een indicatie is van de geringe omvang van de Boekmanstichting. Er spreekt behoefte uit om taken intensiever te kunnen uitvoeren.</p>',
                'sector_id' => '7'
            ],
            [
                'title' => 'Prioritering Bovensectoraal Digitalisering',
                'body' => '<img src="img/16_9_figuur_1.jpg" alt="">
<p>De functies van DEN richten zich in grote mate op onderzoek &amp; ontwikkeling en ondersteuning bij beheer &amp; ontsluiting. Ook de taken informatievoorziening, deskundigheidsbevordering en netwerkactivering hebben een plek bij DEN.</p>
<p>Vanuit het veld is een sterkere behoefte aan informatievoorziening en deskundigheidsbevordering, maar aan de ondersteuning bij beheer &amp; ontsluiting en netwerkactivering wordt voldaan.</p>',
                'sector_id' => '8'
            ],
            [
                'title' => 'Prioritering Bovensectoraal Ondernemerschap',
                'body' => '<img src="img/16_10_figuur_1.jpg" alt="">
<p>De ondersteuning op het gebied van Ondernemerschap die wordt vervuld door Cultuur+Ondernemen (C+O) bevindt zich in de hoek van de deskundigheidsbevordering, informatievoorziening en onderzoek &amp; ontwikkeling. C+O heeft in mindere mate een taak in netwerkactivering, beleidsondersteuning, vertegenwoordiging en geen taak in beheer &amp; ontsluiting. Verder verricht C+O veel dienstverlening voor diverse opdrachtgevers, mede met financiering van het ministerie, en daarin wijkt C+O sterk af van de andere ondersteunende instellingen.</p>
<p>De prioritering van het veld in de taken komt grotendeels overeen met wat C+O op dit moment doet. Uit deze analyse blijkt dat het veld de bijzondere positie van C+O in het palet van ondersteunende instellingen op waarde schat. Deskundigheidsbevordering wordt door veel meer partijen verricht, deels ook met financiering van het ministerie van OCW. Wel is het programma Ondernemerschap Cultuur eindig, waarmee de hoge prioriteit mogelijk tot een knelpunt leidt.</p>',
                'sector_id' => '9'
            ],
            [
                'title' => 'Prioritering Bovensectoraal Internationalisering',
                'body' => '<img src="img/16_11_figuur_1.jpg" alt="">
<p>Bovenstaand beeld laat zien dat het veld behoefte heeft aan vergroting van de inzet op alle functies ten aanzien van internationalisering. Daar springen informatievoorziening en netwerkactivering bovenuit: deze hebben allebei betrekking op praktische ondersteuning om internationaal aan de slag te kunnen als culturele instelling. Vertegenwoordiging is ook een functie waar het veld aan hecht: het gaat dan vooral om internationale promotie en eenduidige vertegenwoordiging van de Nederlandse culturele sector. De sector wil met andere woorden meer op de kaart worden gezet en handvatten krijgen om zichzelf internationaal te kunnen manifesteren. Pas daarna volgen andere ondersteunende functies zoals (overigens gewaardeerd) onderzoek waarin de internationalisering van de sector in kaart wordt gebracht. Beheer &amp; ontsluiting en deskundigheidsbevordering ziet men als functies die niet bovensectoraal belegd hoeven te worden, maar in de sector plaats moeten vinden, zoals nu ook de huidige praktijk is.</p>',
                'sector_id' => '10'
            ],
            [
                'title' => 'Prioritering Bovensectoraal Cultuureducatie &amp; Cultuurparticipatie',
                'body' => '<img src="img/16_12_figuur_1.jpg" alt="">
<p>Voor de taakopvatting is gekeken naar opdrachten die het LKCA voor zichzelf heeft benoemd in het Activiteitenplan 2017-2018. Conclusies uit de vergelijking met de prioriteiten uit het veld zijn dat met name aan toekomstgericht onderzoek een grote behoefte is en dat vertegenwoordiging een hogere prioriteit krijgt dan nu uit de taakopvatting van LKCA overkomt. Deskundigheidsbevordering maakt een groot deel uit van het werk van het LKCA, en het FCP draagt financieel ook bij aan deskundigheidsbevordering, bijvoorbeeld via het programma Cultuureducatie met Kwaliteit, maar de aanwezigen in de sessie gaven hier een lage prioriteit aan. Dit kan te maken hebben met onbekendheid met de verschillende activiteiten maar ook met een relatief lagere behoefte vanuit het veld.</p>',
                'sector_id' => '11'
            ],

        ];

        DB::table('prioriteringfuncties')->insert($prioriteringfuncties);
    }
}
