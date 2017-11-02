<template>
    <div class="generator--selector--wrap">
        <div class="generator--selector">
            <div class="selectlist selectlist--algemeen">
                <h3>Algemeen</h3>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Inleiding op onderzoek') } "
                    @click=" toggleAlgemeen('Inleiding op onderzoek') "
                >
                    Inleiding op onderzoek
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Toelichting op sectoren') } "
                    @click=" toggleAlgemeen('Toelichting op sectoren') "
                >
                    Toelichting op sectoren
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Beschrijving van functies') } "
                    @click=" toggleAlgemeen('Beschrijving van functies') "
                >
                    Beschrijving van functies
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Uitwerking van functies per sector') } "
                    @click=" toggleAlgemeen('Uitwerking van functies per sector') "
                >
                    Uitwerking van functies per sector
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Uitwerking van sectoren per functie') } "
                    @click=" toggleAlgemeen('Uitwerking van sectoren per functie') "
                >
                    Uitwerking van sectoren per functie
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Beschouwing van functies') } "
                    @click=" toggleAlgemeen('Beschouwing van functies') "
                >
                    Beschouwing van functies
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Prioritisering per sector') } "
                    @click=" toggleAlgemeen('Prioritisering per sector') "
                >
                    Prioritisering per sector
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Slotbeschouwing') } "
                    @click=" toggleAlgemeen('Slotbeschouwing') "
                >
                    Slotbeschouwing
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Deelnemers werksessies') } "
                    @click=" toggleAlgemeen('Deelnemers werksessies') "
                >
                    Deelnemers werksessies
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Compleet rapport naar sectoren') } "
                    @click=" toggleAlgemeen('Compleet rapport naar sectoren') "
                >
                    Compleet rapport naar sectoren
                </button><br>
                <button class="fauxlabel" 
                    :class=" { active: activealgemeen.includes('Compleet rapport naar functies') } "
                    @click=" toggleAlgemeen('Compleet rapport naar functies') "
                >
                    Compleet rapport naar functies
                </button><br>
                Speciale selecties <br>
            </div>
            <div class="selectlist">
                <h3>Sector</h3>
                <button class="fauxlabel"
                    @click="toggleReadAllSectors"
                    :class="{ active: isReadAllSectorsActive }"
                    :disabled="isSectorsDisabled"
                >
                    Read all
                </button> 
                <button class="fauxlabel" 
                    v-for="sector in sectors"
                    @click="toggleActiveSector(sector)"
                    :class="{ active : isActiveSector(sector) }" 
                    :disabled="isSectorsDisabled"
                >
                    {{ sector.title }}
                </button><br>
            </div>
            <div class="selectlist">
                <h3>Functie</h3>
                <button class="fauxlabel"
                    @click="toggleReadAllFuncties"
                    :class="{ active : isReadAllFunctiesActive }"
                    :disabled="isFunctiesDisabled"
                >
                    Read all
                </button>
                <button class="fauxlabel" 
                    v-for="functie in functies"
                    @click="toggleActiveFunctie(functie)"
                    :class="{ active : isActiveFunctie(functie) }"
                    :disabled="isFunctiesDisabled"
                >
                    {{ functie.title }}
                </button><br>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: [],

        data() {
            return {
                sectors: [],
                activesectors: [],
                functies: [],
                activefuncties: [],
                activealgemeen: [],
                isReadAllSectorsActive: false,
                isReadAllFunctiesActive: false,
                isSectorsDisabled: false,
                isFunctiesDisabled: false,
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.getSectors();
            this.getFuncties();
        },


        computed: {
        },

        methods: {
            isActiveSector: function(sector) {
                return this.activesectors.includes(sector);
            },
            isActiveFunctie: function(functie) {
                return this.activefuncties.includes(functie);
            },
            toggleAlgemeen: function(algemeen) {
                if(this.activealgemeen.includes(algemeen)){
                    this.activealgemeen.splice(this.activealgemeen.indexOf(algemeen), 1);
                } else {
                    this.activealgemeen.push(algemeen);
                }
            },
            toggleActiveSector: function(sector){
                if (this.activesectors.includes(sector)) {
                    if(this.isReadAllSectorsActive) {
                        this.isReadAllSectorsActive = false;
                    };
                    this.activesectors.splice(this.activesectors.indexOf(sector), 1);
                } else {
                    this.activesectors.push(sector);
                }
            },
            toggleActiveFunctie: function(functie){
                if (this.activefuncties.includes(functie)) {
                    if(this.isReadAllFunctiesActive) {
                        this.isReadAllFunctiesActive = false;
                    }
                    this.activefuncties.splice(this.activefuncties.indexOf(functie), 1);
                } else {
                    this.activefuncties.push(functie);
                }
            },
            toggleReadAllSectors: function () {
                if( ! this.isReadAllSectorsActive ) {
                    this.activesectors = this.sectors.slice();
                } else {
                    this.activesectors = [];    
                }
                this.isReadAllSectorsActive = ! this.isReadAllSectorsActive;
            },
            toggleReadAllFuncties: function () {
                if ( ! this.isReadAllFunctiesActive ) {
                    this.activefuncties = this.functies.slice();
                } else {
                    this.activefuncties = [];
                }
                this.isReadAllFunctiesActive = ! this.isReadAllFunctiesActive;
            },
            getSectors: function () {
                var home = this;
                axios.get('/api/sector')
                    .then(function(response){
                        home.sectors = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            getFuncties: function () {
                var home = this;
                axios.get('api/functie')
                    .then(function(response){
                        home.functies = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
        }
    }
</script>
