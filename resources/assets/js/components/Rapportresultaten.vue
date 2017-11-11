<template>
    <div class="base">
        <div class="generator--shortresults" v-if="isAModeSelected">
            <h2>Inhoud</h2>
            <ul>
                <a href="#inleiding" v-if=" activealgemeen.includes('Inleiding op onderzoek') " ><li>Inleiding op onderzoek</li></a>
                <a href="#toelichtingsectoren" v-if=" activealgemeen.includes('Toelichting op sectoren') " ><li>Toelichting op sectoren</li></a>
                <a href="#beschrijvingfuncties" v-if=" activealgemeen.includes('Beschrijving van functies') " ><li>Beschrijving van functies</li></a>
            </ul>
            <ul v-if="modusalgemeen == 'Uitwerking van functies per sector' ">
                <li v-for="sector in activesectors">
                    <a :href="'#' + sector.id "> {{ sector.title }} </a>
                    <ul>
                        <a :href="'#' + sector.id + functie.id " v-for="functie in activefuncties">
                            <li> {{ sector.title }} - {{ functie.title }} </li>
                        </a>
                    </ul>
                </li>
            </ul>
            <ul v-if="modusalgemeen == 'Uitwerking van sectoren per functie'">
                <li v-for="functie in activefuncties">
                    <a :href="'#' + functie.id "> {{ functie.title }} </a>
                    <ul>
                        <a :href="'#' + functie.id + sector.id " v-for="sector in activesectors">
                            <li> {{ functie.title }} - {{ sector.title }} </li>
                        </a>
                    </ul>
                </li>
            </ul>
            <ul>
                <a href="#beschouwingfuncties" v-if=" activealgemeen.includes('Beschouwing van functies') "> <li> Beschouwing van functies </li> </a>
                <a href="#prioritiseringsector" v-if=" activealgemeen.includes('Prioritering van functies') "> <li> Prioritering van functies </li> </a>
                <a href="#slotbeschouwing" v-if=" activealgemeen.includes('Slotbeschouwing') "> <li> Slotbeschouwing </li> </a>
                <a href="#deelnemerswerksessies" v-if=" activealgemeen.includes('Deelnemers werksessies') "> <li> Deelnemers werksessies </li> </a>
            </ul>
        </div>
        <div class="generator--results">
            <div class="" v-if=" activealgemeen.includes('Inleiding op onderzoek') " >
                <div class="result" id="inleiding" v-html="specials[0].body">
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Toelichting op sectoren') " >
                <div class="result" id="toelichtingsectoren" v-html="specials[1].body">
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Beschrijving van functies') " >
                <div class="result" id="beschrijvingfuncties" v-html="specials[2].body">
                </div>
            </div>
            <div class="" v-if="modusalgemeen == 'Uitwerking van functies per sector' ">
                <div 
                    class="result" 
                    :id="sector.id"
                    v-for="sector in activesectors"
                >
                    <h2> {{ sector.title }} </h2>
                        <div 
                            class="" 
                            :id="'' + sector.id + functie.id"
                            v-for="functie in activefuncties"
                        >
                            <h3> {{ sector.title }}: {{ functie.title }} </h3>
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
                    <h2> {{ functie.title }} </h2>
                        <div 
                            class="" 
                            :id="'' + functie.id + sector.id"
                            v-for="sector in activesectors"
                        >
                            <h3> {{ functie.title }}: {{ sector.title }} </h3>
                            <rapportelement
                                :sector="sector"
                                :functie="functie"
                            >
                            </rapportelement>
                        </div>
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Beschouwing van functies') ">
                <div class="result" id="beschouwingfuncties" v-html="specials[3].body">
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Prioritering van functies') ">
                <div class="result" id="prioritiseringsector" v-html="specials[4].body">
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Slotbeschouwing') ">
                <div class="result" id="slotbeschouwing" v-html="specials[5].body">
                </div>
            </div>
            <div class="" v-if=" activealgemeen.includes('Deelnemers werksessies') ">
                <div class="result" id="deelnemerswerksessies" v-html="specials[6].body">
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
            'isAModeSelected'

        ],

        data() {
            return {
            }
        },

        mounted() {
            this.getSpecials();
        },


        computed: {
        },

        methods: {
            getSpecials: function () {
                var home = this;
                axios.get('/api/specials')
                    .then(function(response){
                        home.specials = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },

        }
    }
</script>
