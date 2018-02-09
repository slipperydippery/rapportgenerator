<?php

use Illuminate\Database\Seeder;

class BronsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brons')->delete();

        $brons = [
            [
                'title' => 'Podiumkunsten',
                'body' => '
                <p><em>FPK </em></p>
                <ul>
	                <li>Beleidsplan FPK 2017- 2020 </li>
	                <li>Eindrapport Kwink Groep Evaluatie Productie- en compositiesubsidie FPK, 2014 </li>
	                <li>Jaarverslag FPK 2016 </li>
	                <li>Website met regelingen, evaluaties en overige publicaties van FPK</li>
                </ul>

                <p><em>Overige </em></p>
                <ul>
                	<li>Rapport Commissie ter Horst ‘Over het Voetlicht’, 2015 </li>
                	<li>Rapport Commissie d’Ancona ‘Uit, naar gesubsidieerde podiumkunsten met nieuw elan, 2006</li>
                	<li>Sectoradvies Muziek, Raad voor Cultuur, 2017</li>
                	<li>Brief van Universiteit van Amsterdam aan minister van OCW inzake verweesde collecties, 2017</li>
                	<li>Continuïteit en vernieuwing, strategie UvA Erfgoed 2017 – 2020</li>
                	<li>Opslaan en vernietigen, muziekarchieven bedreigd, J. Oskamp, 2017</li>
                	<li>Beleidsplan NMI 2013 – 2016 </li>
                	<li>Jaarverslag NMI 2012</li>
                	<li>Jaarverslag NMI 2014 </li>
                	<li>Beleidsplan TIN 2014 – 2017 </li>
                	<li>Bestuursverslag TIN 2016 </li>
                	<li>Jaarrekening en bestuursverslag TIN 2013 </li>
                	<li>Website TIN </li>
                	<li>Jaarverslag MCN 2012</li>

                </ul>
                ',
                'sector_id' => '1'
            ],
            [
                'title' => 'Beeldende Kunst',
                'body' => '
                <p><em>Mondriaan Fonds </em></p>
                <ul>
                	<li>Beleidsplan Mondriaan Fonds 2013 – 2016 </li>
                	<li>Beleidsplan Mondriaan Fonds 2017 – 2020 </li>
                	<li>Jaarverslag Mondriaan Fonds 2016 </li>
                	<li>Website met regelingen, evaluaties en overige publicaties van Mondriaan Fonds </li>
                </ul>

                <p><em>RKD </em></p>
                <ul>
                	<li>Beleidsplan RKD 2013 – 2016 </li>
                	<li>Beleidsplan RKD 2017 – 2020 </li>
                	<li>Jaarverslag RKD 2015 </li>
                	<li>Jaarverslag RKD 2016 </li>
                	<li>Klanttevredenheidsonderzoek en Stakeholderonderzoek RKD, 2015</li>
                	<li>Website RKD </li>
                </ul>

                <p><em>Overige</em></p>
                <ul>
                	<li>Collectieve Selfie, BKNL, Mondriaan Fonds e.a., 2016 en aanvulling 2017</li>
                	<li>Brief van BKNL aan ministerie van OCW, 2018</li>
                	<li>Museumvereniging, Beleidsplan 2017-2020</li>
                	<li>Websites en nieuwsberichten van BKNL, Platform BK, De Zaak Nu e.a.</li>
                </ul>
                ',
                'sector_id' => '2'
            ],
            [
                'title' => 'Erfgoed ',
                'body' => '
                <p><em>Mondriaan Fonds </em></p>
                <ul>
                	<li>Beleidsplan Mondriaan Fonds 2013 – 2016 </li>
                	<li>Beleidsplan Mondriaan Fonds 2017 – 2020 </li>
                	<li>Jaarverslag Mondriaan Fonds 2016 </li>
                	<li>Website met regelingen, evaluaties en overige publicaties van Mondriaan Fonds </li>
                </ul>

                <p><em>RKD </em></p>
                <ul>
                	<li>Beleidsplan RKD 2013 – 2016 </li>
                	<li>Beleidsplan RKD 2017 – 2020 </li>
                	<li>Jaarverslag RKD 2015 </li>
                	<li>Jaarverslag RKD 2016 </li>
                	<li>Klanttevredenheidsonderzoek en Stakeholderonderzoek RKD, 2015</li>
                	<li>Website RKD </li>
                </ul>

                <p><em>Overige</em></p>
                <ul>
                	<li>Collectieve Selfie, BKNL, Mondriaan Fonds e.a., 2016 en aanvulling 2017</li>
                	<li>Brief van BKNL aan ministerie van OCW, 2018</li>
                	<li>Museumvereniging, Beleidsplan 2017-2020</li>
                	<li>Websites en nieuwsberichten van BKNL, Platform BK, De Zaak Nu e.a.</li>
                </ul>
                ',
                'sector_id' => '3'
            ],
            [
                'title' => 'Film',
                'body' => '
                <p><em>Filmfonds</em></p>
                <ul>
                	<li>Beleidsplan Filmfonds 2013 – 2016 </li>
                	<li>Beleidsplan Filmfonds 2017 – 2020 </li>
                	<li>Jaarverslag Filmfonds 2016 </li>
                	<li>Verslag sectorbijeenkomst 3 juli 2017</li>
                	<li>Film: Facts & Figures of the Netherlands, diverse jaren</li>
                	<li>Website met regelingen, evaluaties en overige publicaties van Filmfonds </li>
                </ul>

                <p><em>EYE </em></p>
                <ul>
                	<li>Beleidsplan EYE 2017 – 2020 </li>
                	<li>Eindrapportage financieel onderzoek EYE, BCG, 2016 </li>
                	<li>Jaarverslag EYE 2015 </li>
                	<li>Jaarverslag EYE 2016 </li>
                	<li>Klanttevredenheidsonderzoek EYE 2016 </li>
                	<li>Reactie EYE advies Raad voor Cultuur culturele BIS 2017 – 2020, 2016 </li>
                	<li>Stakeholdersonderzoek EYE, uitgevoerd door Stichting Filmonderzoek in opdracht van EYE </li>
                	<li>Verkenning Beroepsprofiel Audiovisueel, EYE 2017</li>
                	<li>Website EYE</li>
                </ul>

                <p><em>Overige</em></p>
                <ul>
                	<li>Onderzoeksrapport SPI: Film and the Creative Economy, 2017 </li>
                	<li>Talentontwikkeling in de audiovisuele sector, Raad voor Cultuur, 2015</li>
                	<li>Besluit AFK in het kader van de Regeling Vierjarige subsidies AFK 2017 – 2020, 2016</li>
                </ul>
                ',
                'sector_id' => '4'
            ],
            [
                'title' => 'Creative Industrie',
                'body' => '
                <ul>
                	<li>CBS Onderzoeksrapportage Creatieve Industrie, 2011</li>
                	<li>CBS Monitor Topsectoren, diverse jaren</li>
                	<li>Monitor Creatieve Industrie, iMMovator, 2016</li>
                </ul>

                <p><em>Het Nieuwe Instituut </em></p>
                <ul>
                	<li>Beleidsplan Het Nieuwe Instituut 2017 – 2020 </li>
                	<li>Jaarverslag Het Nieuwe Instituut 2016 </li>
                	<li>Voorbeelden publicaties Social Design </li>
                	<li>Website Het Nieuwe Instituut </li>
                </ul>

                <p><em>SCI</em></p>
                <ul>
                	<li>Beleidsplan SCI 2017 – 2020, 2016</li>
                	<li>Beleidsplan Internationalisering 2017-2020, 2016</li>
                	<li>Jaarverslag SCI 2016 </li>
                	<li>Rapportage aanvragersonderzoek SCI 2015 </li>
                	<li>Klanttevredenheidsonderzoek SCI, 2014 </li>
                	<li>Startsein programma Creatieve Industrie Eindhoven </li>
                	<li>Advies Raad voor Cultuur actieagenda voor Architectuur en Ruimtelijk Ontwerp 2017 -2020 </li>
                	<li>Website met regelingen, evaluaties en overige publicaties van SCI</li>
                </ul>
                ',
                'sector_id' => '5'
            ],
            [
	            'title' => 'Letteren & Bibliotheken ',
                'body' => '
                <p><em>FBJP</em></p>
                <ul>
                	<li>Activiteitenplan FBJP 2017 – 2020 </li>
                	<li>Jaarverslag FBJP 2016 </li>
                	<li>Website FBJP </li>
                </ul>

                <p><em>Koninklijke Bibliotheek</em></p>
                <ul>
                	<li>Beleidsplan KB 2015 – 2018 </li>
                	<li>Jaarverslag KB 2016</li>
                	<li>Website KB </li>
                </ul>

                <p><em>Nederlands Letterenfonds </em></p>
                <ul>
                	<li>Beleidsplan Nederlands Letterenfonds 2013 – 2016 </li>
                	<li>Beleidsplan Nederlands Letterenfonds 2017 – 2020 </li>
                	<li>Jaarverslag Nederlands Letterenfonds 2016 </li>
                	<li>Nederlands Letterenfonds Stakeholderonderzoek 2014 </li>
                	<li>Website met regelingen, evaluaties en overige publicaties van Nederlands Letterenfonds </li>
                </ul>

                <p><em>SSS</em></p>
                <ul>
                	<li>Activiteitenplan SSS BIS 2017 – 2020 </li>
                	<li>Jaarstukken SSS 2016 </li>
                	<li>Rapportage Klantonderzoek, 2014 </li>
                	<li>Website SSS</li>
                </ul>

                <p><em>Stichting Lezen en Schrijven </em></p>
                <ul>
                	<li>Beleidsplan Stichting Lezen en Schrijven 2017 – 2020 </li>
                	<li>Jaarverslag Stichting Lezen en Schrijven 2015 </li>
                	<li>Jaarverslag Stichting Lezen en Schrijven 2016 </li>
                	<li>Klanttevredenheidsonderzoek Stichting Lezen en Schrijven 2014</li>
                	<li>Website Stichting Lezen en Schrijven </li>
                </ul>

                <p><em>Overige </em></p>
                <ul>
                	<li>KVB Boekwerk Monitor, 2016</li>
                	<li>Websites zoals bibliotheek.nl en innovatiebieb.nl</li>
                </ul>
                ',
                'sector_id' => '6'
            ],
            [
                'title' => 'Bovensectoraal Beleid ',
                'body' => '
                <p><em>Boekmanstichting </em></p>
                <ul>
                	<li>Activiteitenplan Boekmanstichting 2017 – 2020</li>
                	<li>Beleidsplan Boekmanstichting 2009 – 2012 </li>
                	<li>Beleidsplan Boekmanstichting 2013 – 2016 </li>
                	<li>Jaarverslag Boekmanstichting 2015 </li>
                	<li>Jaarverslag Boekmanstichting 2016</li>
                	<li>Cultuurindex, website en publicatie Staat van Cultuur 3, 2017</li>
                	<li>Website Boekmanstichting </li>
                </ul>

                <p><em>Overige</em></p>
                <ul>
                	<li>De publieke kennisorganisaties, Rathenau, 2016</li>
                	<li>Kenniscentra in Nederland, SCP, 2002</li>
                	<li>Websites overige kenniscentra: NWO, Mulier, Kennisnet e.a.</li>
                </ul>
                ',
                'sector_id' => '7'
            ],
            [
                'title' => 'Bovensectoraal Digitalisering ',
                'body' => '
                <p><em>DEN</em></p>
                <ul>
                	<li>Beleidsplan DEN 2006 – 2008 </li>
                	<li>Beleidsplan DEN 2009 – 2012 </li>
                	<li>Beleidsplan DEN 2013 – 2016</li>
                	<li>Beleidsplan DEN 2017 – 2020</li>
                	<li>Jaarverslag DEN 2016 </li>
                	<li>Website DEN </li>
                </ul>
                ',
                'sector_id' => '8'
            ],
            [
                'title' => 'Bovensectoraal Ondernemerschap ',
                'body' => '
                <p><em>C+O</em></p>
                <ul>
					<li>Advies Raad voor Cultuur over C+O, 2016 </li>
					<li>Concept Evaluatie Sectorplan Cultuur 2015 – 2016</li>
					<li>De kunst van het lenen – Talentlening cultuur, 2016 </li>
					<li>Evaluatie belangrijkste diensten C+O 2015 – 2016 </li>
					<li>Governance in Cultuur: stand van zaken 2016, 2016 </li>
					<li>Jaarverslag C+O 2015 </li>
					<li>Jaarverslag C+O 2016 </li>
					<li>Klantevaluatie van de Diensten C+O, 2015 </li>
					<li>Klantevaluatie van de Diensten C+O, 2016 </li>
					<li>Memo rol C+O en relatie met OCW en het programma ‘Ondernemerschap in Cultuur’, 2017 </li>
					<li>Document C+O: Ruimte maken voor ondernemerschap in cultuur</li>
					<li>Sociale en economische effecten van microkredieten in de cultuur- en creatieve sector in Nederland – onderzoek uitgevoerd door de Hogeschool Utrecht in opdracht van C+O, 2015</li>
					<li>Werkprogramma C+O 2015 – 2016 </li>
					<li>Website C+O </li>
                </ul>
                
	            <p><em>Overige</em></p>
                <ul>
                	<li>Kamerbrieven en stukken Programma Ondernemerschap in Cultuur, 2013 e.v.</li>
                	<li>Ondernemerschap in Cultuur, evaluatie, DSP, 2017</li>
                	<li>Websites Wijzer Werven, Cultuur daar geef je om e.a.</li>
                </ul>

                ',
                'sector_id' => '9'
            ],
            [
                'title' => 'Bovensectoraal Internationalisering ',
                'body' => '
                <p><em>DutchCulture</em></p>
                <ul>
                	<li>Activiteitenplan DutchCulture 2017 – 2020 </li>
                	<li>Bijlage 2 Klanttevredenheidsonderzoek DutchCulture 2016 </li>
                	<li>DutchCulture Buitengaats 2016 </li>
                	<li>DutchCulture Country Themes </li>
                	<li>Jaarverslag DutchCulture 2016 </li>
                	<li>Overzicht activiteiten en doelgroepen DutchCulture algemeen </li>
                	<li>Overzicht activiteiten en doelgroepen DutchCulture specifiek </li>
                	<li>Presentatie DutchCulture over internationaal cultuurbeleid, beleidskaders, doelgroepen, sectoren en partners</li>
                	<li>Strategisch meerjarenplan Cultuur België en Vlaanderen 2017 – 2020, 2017 </li>
                	<li>Strategisch meerjarenplan Cultuur Frankrijk 2017 – 2020, 2017 </li>
                	<li>Website DutchCulture </li>
                </ul>
                
                <p><em>Overige</em></p>
                <ul>
                	<li>Beleidskader internationaal cultuurbeleid 2017 – 2020 plus kamerbrief, OCW, 2016</li>
                	<li>Beleidsevaluatie van de Inspectie Ontwikkelingssamenwerking en Beleidsevaluatie, 2016</li>
                </ul>

                ',
                'sector_id' => '10'
            ],
            [
                'title' => 'Bovensectoraal Cultuureducatie & Cultuurparticipatie ',
                'body' => '
                <p><em>FCP</em></p>
                <ul>
                	<li>Beleidsplan FCP 2013 – 2016 </li>
                	<li>Beleidsplan FCP 2017 – 2020</li>
                	<li>Jaarverslag FCP 2016</li>
                	<li>Website met regelingen, evaluaties en overige publicaties van FCP </li>
                </ul>
                <p><em>LKCA </em></p>
                <ul>
                	<li>Activiteitenplan LKCA 2017 – 2020</li>
                	<li>Beleidsplan LKCA 2013 – 2016 </li>
                	<li>Jaarverslag LCKA 2016 </li>
                	<li>Basis voor cultuureducatie, LKCA 2016</li>
                	<li>Samenvatting kennismakingsgesprekken directie LKCA, 2016 </li>
                	<li>Cultuur in de kanteling, LKCA, 2015</li>
                	<li>Monitor Amateurkunst, LKCA, 2017</li>
                	<li>Website LKCA</li>
                </ul>
                
                ',
                'sector_id' => '11'
            ],

        ];

        DB::table('brons')->insert($brons);
    }
}
