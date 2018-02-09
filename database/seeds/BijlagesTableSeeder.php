<?php

use Illuminate\Database\Seeder;

class BijlagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bijlages')->delete();

        $bijlages = [
            [
                'body' => '<p><em>Deelnemers aan de werksessie Podiumkunsten Muziek &ndash; vrijdag 8 september 2017</em></p>
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
<p>Grachtenfestival</p>
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
</table>',
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Beeldende Kunst &ndash; donderdag 14 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Erfgoed &ndash; dinsdag 19 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Film &ndash; vrijdag 15 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Creatieve Industrie &ndash; maandag 11 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Letteren &amp; Bibliotheken &ndash; vrijdag 8 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Bovensectoraal Beleid &ndash; vrijdag 15 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Bovensectoraal Digitalisering &ndash; maandag 18 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Bovensectoraal Ondernemerschap &ndash; maandag 18 september 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Bovensectoraal Internationalisering &ndash; dinsdag 3 oktober 2017</em></p>
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
</table>'
            ],
            [
            	'body' => '<p><em>Deelnemers aan de werksessie Bovensectoraal Cultuureducatie &amp; Cultuurparticipatie &ndash; maandag 25 september 2017</em></p>
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
</table>'
            ],

        ];

        DB::table('bijlages')->insert($bijlages);
    }
}
