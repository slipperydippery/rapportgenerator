<template>
    <div class="base">
        <div class="generator--shortresults" >
            <h2>Resultaten</h2>
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
        </div>
        <div class="generator--results">
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
        </div>
    </div>
</template>

<script>

    export default {
        props: [
            'activesectors',
            'activefuncties',
            'modusalgemeen'
        ],

        data() {
            return {

            }
        },

        mounted() {
        },


        computed: {
        },

        methods: {

        }
    }
</script>
