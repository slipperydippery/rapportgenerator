<template>
    <div class="generator--selector--wrap">
        <div class="generator--selector">
            <div class="selectlist selectlist--algemeen">
                <h3>Algemeen</h3>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen.includes('Inleiding op onderzoek') && compleet == false } "
                    @click=" toggleAlgemeen('Inleiding op onderzoek') "
                    :disabled=" compleet "
                >
                    Inleiding op onderzoek <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen.includes('Toelichting op sectoren') && compleet == false } "
                    @click=" toggleAlgemeen('Toelichting op sectoren') "
                    :disabled=" compleet "
                >
                    Toelichting op sectoren <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen.includes('Beschrijving van functies') && compleet == false } "
                    @click=" toggleAlgemeen('Beschrijving van functies') "
                    :disabled=" compleet "
                >
                    Beschrijving van functies <br>
                </button><br>
                <button class="fauxlabel algemeenitem algemeenitem--modus" 
                    :class=" { 'active--dark': modusalgemeen == 'Uitwerking van functies per sector' } "
                    @click=" toggleModusAlgemeen('Uitwerking van functies per sector') "
                >
                    Uitwerking van functies per sector <br>
                    <span class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                </button><br>
                <button class="fauxlabel algemeenitem algemeenitem--modus" 
                    :class=" { 'active--dark': modusalgemeen == 'Uitwerking van sectoren per functie' } "
                    @click=" toggleModusAlgemeen('Uitwerking van sectoren per functie') "
                >
                    Uitwerking van sectoren per functie <br>
                    <span class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen.includes('Beschouwing van functies') && compleet == false } "
                    @click=" toggleAlgemeen('Beschouwing van functies'); "
                    :disabled=" compleet "
                >
                    Beschouwing van functies <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen.includes('Prioritisering per sector') && compleet == false } "
                    @click=" toggleAlgemeen('Prioritisering per sector'); "
                    :disabled=" compleet "
                >
                    Prioritisering per sector <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen.includes('Slotbeschouwing') && compleet == false } "
                    @click=" toggleAlgemeen('Slotbeschouwing'); "
                    :disabled=" compleet "
                >
                    Slotbeschouwing <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen.includes('Deelnemers werksessies') && compleet == false } "
                    @click=" toggleAlgemeen('Deelnemers werksessies'); "
                    :disabled=" compleet "
                >
                    Deelnemers werksessies <br>
                </button><br>
                Speciale selecties <br>
                <button class="fauxlabel algemeenitem algemeenitem--modus" 
                    :class=" { 'active--dark': modusalgemeen == 'Compleet rapport naar sectoren' } "
                    @click=" toggleModusAlgemeen('Compleet rapport naar sectoren'); toggleRapportNaarSectoren() "
                >
                    Compleet rapport naar sectoren <br>
                </button><br>
                <button class="fauxlabel algemeenitem algemeenitem--modus" 
                    :class=" { 'active--dark': modusalgemeen == 'Compleet rapport naar functies' } "
                    @click=" toggleModusAlgemeen('Compleet rapport naar functies'); toggleRapportNaarFuncties() "
                >
                    Compleet rapport naar functies <br>
                </button><br>
            </div>
            <div class="selectlist">
                <h3>Sector</h3>
                <button class="fauxlabel"
                    @click="toggleReadAllSectors"
                    :class="{ 'active--dark' : isReadAllSectorsActive && compleet == false }"
                    :disabled="isSectorsDisabled"
                >
                    READ ALL
                </button> 
                <button class="fauxlabel" 
                    v-for="sector in sectors"
                    @click="toggleActiveSector(sector)"
                    :class="{ active : isActiveSector(sector) && compleet == false }" 
                    :disabled="isSectorsDisabled"
                >
                    {{ sector.title }}
                </button><br>
            </div>
            <div class="selectlist">
                <h3>Functie</h3>
                <button class="fauxlabel"
                    @click="toggleReadAllFuncties"
                    :class="{ 'active--dark' : isReadAllFunctiesActive && compleet == false }"
                    :disabled="isFunctiesDisabled"
                >
                    READ ALL
                </button>
                <button class="fauxlabel" 
                    v-for="functie in functies"
                    @click="toggleActiveFunctie(functie)"
                    :class="{ active : isActiveFunctie(functie) && compleet == false }"
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
                modusalgemeen: {},
                isReadAllSectorsActive: false,
                isReadAllFunctiesActive: false,
                compleet: true,
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.getSectors();
            this.getFuncties();
        },


        computed: {
            isSectorsDisabled: function() {
                if ( this.modusalgemeen == 'Uitwerking van functies per sector' ) {
                    console.log('uitwerking sectoren');
                    return false;
                } else if ( this.modusalgemeen == 'Uitwerking van sectoren per functie' && this.activefuncties.length > 0 ) {
                    console.log('uitwerking functies met 1 geselecteerd');
                    return false;
                }
                return true;
            },
            isFunctiesDisabled: function() {
                if ( this.modusalgemeen == 'Uitwerking van sectoren per functie' ) {
                    return false;
                } else if ( this.modusalgemeen == 'Uitwerking van functies per sector' && this.activesectors.length > 0 ) {
                    return false;
                } 
                return true;
            }
        },

        methods: {
            isActiveSector: function(sector) {
                return this.activesectors.includes(sector);
            },
            isActiveFunctie: function(functie) {
                return this.activefuncties.includes(functie);
            },
            toggleModusAlgemeen: function(algemeen) {
                this.compleet = false;
                if(this.modusalgemeen == algemeen){
                    this.modusalgemeen = {};
                    this.compleet = true;
                } else {
                    this.modusalgemeen = algemeen;
                }
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
            toggleRapportNaarFuncties: function () {
                if ( this.modusalgemeen == 'Compleet rapport naar functies' ) {
                    this.compleet = true;
                }
            },
            toggleRapportNaarSectoren: function () {
                if ( this.modusalgemeen == 'Compleet rapport naar sectoren' ) {
                    this.compleet = true;
                }
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
