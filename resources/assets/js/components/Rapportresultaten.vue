<template>
    <div class="base">
        <div class="generator--shortresults" v-if="isAModeSelected">
            <div class="print">
                <input type="button" 
                    onClick="window.print()" 
                    value="Print deze pagina"
                    class="button"
                /> <br>
                <span class="print--toelichting"> Om als PDF op te slaan selecteer "Print to PDF" onder de Print Bestemming </span>
            </div>
            </body>
            <h2 class="inhoud">Inhoud</h2>
            <ul>
                <a href="#inleiding" v-if=" activealgemeen.includes('Inleiding op onderzoek') " ><li> 1. Inleiding op onderzoek</li></a>
                <a href="#toelichtingsectoren" v-if=" activealgemeen.includes('Toelichting op sectoren') " ><li> {{ countToelichtingSectoren }} Toelichting op sectoren</li></a>
                <a href="#beschrijvingfuncties" v-if=" activealgemeen.includes('Beschrijving van functies') " ><li> {{ countBeschrijvingFuncties }} Beschrijving van functies</li></a>
            </ul>
            <ul v-if="modusalgemeen == 'Uitwerking van functies per sector' ">
                <li v-for="sector in activesectors">
                    <a :href="'#' + sector.id "> {{ sector.count + countPreSF }}. <span v-html="sector.title"></span> </a>
                    <ul>
                        <a :href="'#' + sector.id + functie.id " v-for="functie in activefuncties">
                            <li> {{ sector.count + countPreSF }}.{{ functie.count }} <span v-html="sector.title"></span> - <span v-html="functie.title"></span> </li>
                        </a>
                    </ul>
                </li>
            </ul>
            <ul v-if="modusalgemeen == 'Uitwerking van sectoren per functie'">
                <li v-for="functie in activefuncties">
                    <a :href="'#' + functie.id "> {{ functie.count + countPreSF }}. <span v-html="functie.title"></span> </a>
                    <ul>
                        <a :href="'#' + functie.id + sector.id " v-for="sector in activesectors">
                            <li> {{ functie.count + countPreSF }}.{{ sector.count }} <span v-html="functie.title"></span> - <span v-html="sector.title"></span> </li>
                        </a>
                    </ul>
                </li>
            </ul>
            <ul>
                <a href="#beschouwingfuncties" v-if=" activealgemeen.includes('Beschouwing van functies') "> <li> {{ countBeschouwingFuncties }} Beschouwing van functies </li> </a>
                <a href="#prioritiseringsector" v-if=" activealgemeen.includes('Prioritering van functies') "> <li> {{ countPrioriteringFuncties }} Prioritering van functies </li> </a>
                <a href="#bronnen" v-if=" activealgemeen.includes('Bronnen') "> <li> {{ countBronnen }} Bronnen </li> </a>
                <a href="#deelnemerswerksessies" v-if=" activealgemeen.includes('Deelnemers werksessies') "> <li> {{ countDeelnemersWerksessies }} Deelnemers werksessies </li> </a>
                <a href="#slotbeschouwing" v-if=" activealgemeen.includes('Slotbeschouwing') "> <li> {{ countSlotbeschouwing }} Slotbeschouwing </li> </a>
            </ul>
        </div>
        <div class="generator--results">
            <div class="" v-if=" activealgemeen.includes('Inleiding op onderzoek') " >
                <div class="result" id="inleiding" v-html="specials[0].body">
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Toelichting op sectoren') " >
                <div class="result" id="toelichtingsectoren">
                    <h2> {{ countToelichtingSectoren }}. <span v-html="specials[1].title"></span> </h2>
                    <h3> {{ countToelichtingSectoren }}.1 Afbakening </h3>
                    <div class="" v-html="specials[1].body"></div>
                </div>
                <div class="result" 
                    v-for="toelichtingsector in toelichtingsectors"
                >
                    <h3> {{ countToelichtingSectoren }}.{{ toelichtingsector.count + 1 }} <span v-html="toelichtingsector.title"></span> </h3>
                    <div class=""
                        v-html="toelichtingsector.body"
                    ></div>
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Beschrijving van functies') " >
                <div class="result" id="beschrijvingfuncties">
                    <h2> {{ countBeschrijvingFuncties }}. <span v-html="specials[2].title"></span> </h2>
                    <h3> {{ countBeschrijvingFuncties }}.1 Inleiding</h3>
                    <div v-html="specials[2].body"></div>
                </div>
                <div class="result"
                    v-for="beschrijvingfunctie in beschrijvingfuncties"
                >
                    <h3> {{ countBeschrijvingFuncties }}.{{ beschrijvingfunctie.count + 1}} <span v-html="beschrijvingfunctie.title"></span> </h3>
                    <div class=""
                        v-html="beschrijvingfunctie.body"
                    ></div>
                </div>
            </div>
            <div class="" v-if="modusalgemeen == 'Uitwerking van functies per sector' ">
                <div 
                    class="result" 
                    :id="sector.id"
                    v-for="sector in activesectors"
                >
                    <h2> {{ sector.count + countPreSF }}. <span v-html="sector.title"></span> </h2>
                        <div 
                            class="" 
                            :id="'' + sector.id + functie.id"
                            v-for="functie in activefuncties"
                        >
                            <h3> {{ sector.count + countPreSF }}.{{ functie.count }} <span v-html="sector.title"></span>: <span v-html="functie.title"></span> </h3>
                            <rapportelement
                                :sector="sector"
                                :functie="functie"
                            >
                            </rapportelement>
                        </div>
                </div>
            </div>
            <div class="" v-if="modusalgemeen == 'Uitwerking van sectoren per functie' ">
                <div 
                    class="result" 
                    :id="functie.id"
                    v-for="functie in activefuncties"
                >
                    <h2> {{ functie.count + countPreSF }}. <span v-html="functie.title"></span> </h2>
                        <div 
                            class="" 
                            :id="'' + functie.id + sector.id"
                            v-for="sector in activesectors"
                        >
                            <h3> {{ functie.count + countPreSF }}.{{ sector.count }} <span v-html="functie.title"></span>: <span v-html="sector.title"></span> </h3>
                            <rapportelement
                                :sector="sector"
                                :functie="functie"
                            >
                            </rapportelement>
                        </div>
                </div>
            </div> 
            <div class="" v-if=" activealgemeen.includes('Beschouwing van functies') ">
                <div class="result" id="beschouwingfuncties"> 
                    <h2> {{ countBeschouwingFuncties }}. <span v-html="specials[3].title"></span> </h2>
                    <h3> {{ countBeschouwingFuncties }}.1 Inleiding over beschouwing</h3>
                    <div v-html="specials[3].body"></div>
                </div>
                <div class="result"
                    v-for="beschouwingfunctie in beschouwingfuncties"
                >
                    <h3> {{ countBeschouwingFuncties }}.{{ beschouwingfunctie.count + 1 }} <span v-html="beschouwingfunctie.title"></span> </h3>
                    <div class=""
                        v-html="beschouwingfunctie.body"
                    ></div>
                </div>

            </div>          
            <div class="" v-if=" activealgemeen.includes('Prioritering van functies') ">
                <div class="result" id="prioritiseringsector">
                    <h2> {{ countPrioriteringFuncties }}. <span v-html="specials[4].title"></span> </h2>
                    <h3> {{ countPrioriteringFuncties }}.1 Prioritering en nuancering </h3>
                    <div v-html="specials[4].body"></div>
                </div>
                <div class="result"
                    v-for="prioriteringfunctie in prioriteringfuncties"
                >
                    <h3> {{ countPrioriteringFuncties }}.{{ prioriteringfunctie.count + 1 }} <span v-html="prioriteringfunctie.title"></span> </h3>
                    <div class=""
                        v-html="prioriteringfunctie.body"
                    ></div>
                </div>
            </div>    
            <div class="" v-if=" activealgemeen.includes('Bronnen') ">
                <div class="result" id="bronnen">
                    <h2> {{ countBronnen }}. <span v-html="specials[7].title"></span> </h2>
                    <h3> {{ countBronnen }}.1 Algemeen </h3>
                    <div v-html="specials[7].body"></div>
                </div>
                <div class="result"
                    v-for="bron in bronnen"
                >
                    <h3> {{ countBronnen }}.{{ bron.count + 1 }} <span v-html="bron.title"></span> </h3>
                    <div class=""
                        v-html="bron.body"
                    ></div>
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Deelnemers werksessies') ">
                <div class="result" id="deelnemerswerksessies">
                    <h2> {{ countDeelnemersWerksessies }}. <span v-html="specials[6].title"></span> </h2>
                </div>
                <div class="result"
                    v-for="deelnemerswerksessie in deelnemerswerksessies"
                >
                    <h3> {{ countDeelnemersWerksessies }}.{{ deelnemerswerksessie.id + 1 }} <span v-html="deelnemerswerksessie.title"></span> </h3>
                    <div class=""
                        v-html="deelnemerswerksessie.body"
                    ></div>
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Slotbeschouwing') ">
                <div class="result" id="slotbeschouwing">
                    <h2> {{ countSlotbeschouwing }}. <span v-html="specials[5].title"></span> </h2>
                    <div class="" v-html="specials[5].body"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: [
            'activesectors',
            'activefuncties',
            'modusalgemeen',
            'activealgemeen',
            'isAModeSelected',            
            'specials',
            'toelichtingsectors',
            'beschrijvingfuncties',
            'beschouwingfuncties',
            'prioriteringfuncties',
            'deelnemerswerksessies',
            'bronnen'
        ],

        data() {
            return {
            }
        },

        mounted() {
        },


        computed: {
            countToelichtingSectoren: function() {
                var counter = 1;
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                return counter;
            },
            countBeschrijvingFuncties: function() {
                var counter = 1;
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                if(this.activealgemeen.includes('Toelichting op sectoren')){ counter ++ };
                return counter;
            },
            countPreSF: function () {
                var counter = 0;
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                if(this.activealgemeen.includes('Toelichting op sectoren')){ counter ++ };
                if(this.activealgemeen.includes('Beschrijving van functies')){ counter ++ };
                return counter
            },
            countBeschouwingFuncties: function() {
                var counter = 1;
                if(this.modusalgemeen == 'Uitwerking van functies per sector') {
                    counter += this.activesectors.length;
                } else if (this.modusalgemeen == 'Uitwerking van sectoren per functie') {
                    counter += this.activefuncties.length;
                }
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                if(this.activealgemeen.includes('Toelichting op sectoren')){ counter ++ };
                if(this.activealgemeen.includes('Beschrijving van functies')){ counter ++ };
                return counter;
            },
            countPrioriteringFuncties: function() {
                var counter = 1;
                if(this.modusalgemeen == 'Uitwerking van functies per sector') {
                    counter += this.activesectors.length;
                } else if (this.modusalgemeen == 'Uitwerking van sectoren per functie') {
                    counter += this.activefuncties.length;
                }
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                if(this.activealgemeen.includes('Toelichting op sectoren')){ counter ++ };
                if(this.activealgemeen.includes('Beschrijving van functies')){ counter ++ };
                if(this.activealgemeen.includes('Beschouwing van functies')){ counter ++ };
                return counter;
            },
            countBronnen: function() {
                var counter = 1;
                if(this.modusalgemeen == 'Uitwerking van functies per sector') {
                    counter += this.activesectors.length;
                } else if (this.modusalgemeen == 'Uitwerking van sectoren per functie') {
                    counter += this.activefuncties.length;
                }
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                if(this.activealgemeen.includes('Toelichting op sectoren')){ counter ++ };
                if(this.activealgemeen.includes('Beschrijving van functies')){ counter ++ };
                if(this.activealgemeen.includes('Beschouwing van functies')){ counter ++ };
                if(this.activealgemeen.includes('Prioritering van functies')){ counter ++ };
                return counter;
            },
            countDeelnemersWerksessies: function() {
                var counter = 1;
                if(this.modusalgemeen == 'Uitwerking van functies per sector') {
                    counter += this.activesectors.length;
                } else if (this.modusalgemeen == 'Uitwerking van sectoren per functie') {
                    counter += this.activefuncties.length;
                }
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                if(this.activealgemeen.includes('Toelichting op sectoren')){ counter ++ };
                if(this.activealgemeen.includes('Beschrijving van functies')){ counter ++ };
                if(this.activealgemeen.includes('Beschouwing van functies')){ counter ++ };
                if(this.activealgemeen.includes('Prioritering van functies')){ counter ++ };
                if(this.activealgemeen.includes('Bronnen')){ counter ++ };
                return counter;
            },
            countSlotbeschouwing: function() {
                var counter = 1;
                if(this.modusalgemeen == 'Uitwerking van functies per sector') {
                    counter += this.activesectors.length;
                } else if (this.modusalgemeen == 'Uitwerking van sectoren per functie') {
                    counter += this.activefuncties.length;
                }
                if(this.activealgemeen.includes('Inleiding op onderzoek')){ counter ++ };
                if(this.activealgemeen.includes('Toelichting op sectoren')){ counter ++ };
                if(this.activealgemeen.includes('Beschrijving van functies')){ counter ++ };
                if(this.activealgemeen.includes('Beschouwing van functies')){ counter ++ };
                if(this.activealgemeen.includes('Prioritering van functies')){ counter ++ };
                if(this.activealgemeen.includes('Bronnen')){ counter ++ };
                if(this.activealgemeen.includes('Deelnemers werksessies')){ counter ++ };
                return counter;
            },

        },

        methods: {
            countSectorFunctie: function () {
                if(this.modusalgemeen == 'Uitwerking van functies per sector') {
                    return this.activesectors.length;
                } else if (this.modusalgemeen == 'Uitwerking van sectoren per functie') {
                    return this.activefuncties.length;
                }
                return 0;
            },
            countSpecial: function(algemeen) {
                var counter = 1;
                this.activealgemeen.forEach(function(algemeenactive){
                    if(algemeen == algemeenactive) {
                        return counter;
                    }
                    counter++;
                })
            },
        }
    }
</script>
