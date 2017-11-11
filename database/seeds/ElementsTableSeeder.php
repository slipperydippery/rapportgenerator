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
                'body' => '',
                'sector_id' => '1',
                'functie_id' => '2'
            ],
            [
                'body' => '',
                'sector_id' => '1',
                'functie_id' => '3'
            ],
            [
                'body' => '',
                'sector_id' => '1',
                'functie_id' => '4'
            ],
            [
                'body' => '',
                'sector_id' => '1',
                'functie_id' => '5'
            ],
            [
                'body' => '',
                'sector_id' => '1',
                'functie_id' => '6'
            ],
            [
                'body' => '',
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
